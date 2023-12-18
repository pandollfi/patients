<?php

namespace App\Helpers;

use App\Models\Patient;

class Utils
{
    /**
     *
     * @param string $value
     * @return string
     */
    public static function sanitizeValue(string $value): string
    {
        return preg_replace('/[^0-9]/', '', $value);
    }

    /**
     *
     * @param string $number
     * @return string
     */
    public static function phoneMask(string $number): string
    {
        return "(" . substr($number, 0, 2) . ") " . substr($number, 2, -4) . "-" . substr($number, -4);
    }

    /**
     *
     * @param string $value
     * @return string
     */
    public static function moneyMask(string $value): string
    {
        return number_format($value, 2, ',', '.');
    }

    /**
     *
     * @param string $cpf
     * @return string
     */
    public static function formatCPF(string $cpf): string
    {
        $cpf = self::sanitizeValue($cpf);
        return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
    }

    /**
     *
     * @param string $cns
     * @return string
     */
    public static function formatCNS(string $cns): string
    {
        $cns = self::sanitizeValue($cns);
        if (strlen($cns) != 15) 
            return $cns; 

        return substr($cns, 0, 3) . ' ' . substr($cns, 3, 4) . ' ' . substr($cns, 7, 4) . ' ' . substr($cns, 11, 4);
    }

    /**
     *
     * @param string $cns
     * @return boolean
     */
    public static function validateCNSDef(string $cns): bool
    {
        $cns = self::sanitizeValue($cns);
        if (strlen(trim($cns)) !== 15) {
            return false;
        }

        $pis = substr($cns, 0, 11);
        $dv = self::calculateDV($pis);
        $expectedDV = self::calculateExpectedDV($pis, $dv);

        return $cns === $expectedDV;
    }

    /**
     *
     * @param string $pis
     * @return integer
     */
    private static function calculateDV(string $pis): int
    {
        $sum = 0;
        for ($i = 0; $i < 11; $i++) {
            $sum += (int)$pis[$i] * (15 - $i);
        }

        $remainder = $sum % 11;
        $dv = 11 - $remainder;

        return $dv === 11 ? 0 : $dv;
    }

    /**
     *
     * @param string $pis
     * @param integer $dv
     * @return string
     */
    private static function calculateExpectedDV(string $pis, int $dv): string
    {
        if ($dv === 10) {
            $sum = 0;
            for ($i = 0; $i < 11; $i++) {
                $sum += (int)$pis[$i] * (15 - $i);
            }

            $remainder = $sum % 11;
            $dv = 11 - $remainder;
        }

        return $pis . "000" . $dv;
    }

    /**
     *
     * @param string $cns
     * @return boolean
     */
    public static function validateCNSProv(string $cns): bool
    {
        $cns = self::sanitizeValue($cns);
        if (strlen(trim($cns)) !== 15) {
            return false;
        }

        $sum = 0;
        for ($i = 0; $i < 15; $i++) {
            $sum += (int)$cns[$i] * (15 - $i);
        }

        $remainder = $sum % 11;
        if ($remainder !== 0) {
            return false;
        }

        return true;
    }

    /**
     *
     * @param string $cns
     * @return string
     */
    public static function validateTypeCNSProvDef(string $cns): string
    {
        $cns = self::sanitizeValue($cns);
        $firstDigit = substr($cns, 0, 1);
        if ($firstDigit != '7' && $firstDigit != '8' && $firstDigit != '9')
            return Patient::CNS_DEFINITIVE;

        return Patient::CNS_PROVISIONAL;
    }

    /**
     *
     * @param string $cpf
     * @return boolean
     */
    public static function validateCPF(string $cpf): bool
    {
        $cpf = preg_replace('/[^0-9]/is', '', self::sanitizeValue($cpf));
        if (strlen($cpf) != 11)
            return false;

        if (preg_match('/(\d)\1{10}/', $cpf))
            return false;

        for ($i = 9; $i < 11; $i++) {
            $dv = 0;
            for ($j = 0; $j < $i; $j++) {
                $dv += $cpf[$j] * (($i + 1) - $j);
            }
            $dv = ((10 * $dv) % 11) % 10;

            if ($cpf[$j] != $dv)
                return false;
        }
        return true;
    }
}
