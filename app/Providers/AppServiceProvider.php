<?php

namespace App\Providers;

use App\Interfaces\Repository\PatientAddressRepository;
use App\Interfaces\Repository\PatientRepository;
use App\Interfaces\Service\PatientAddressService;
use App\Interfaces\Service\PatientService;

use App\Repositories\PatientAddressRepositoryImpl;
use App\Repositories\PatientRepositoryImpl;

use App\Services\PatientAddressServiceImpl;
use App\Services\PatientServiceImpl;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(PatientService::class, PatientServiceImpl::class);
        $this->app->bind(PatientRepository::class, PatientRepositoryImpl::class);
        
        $this->app->bind(PatientAddressService::class, PatientAddressServiceImpl::class);
        $this->app->bind(PatientAddressRepository::class, PatientAddressRepositoryImpl::class);
    }
}
