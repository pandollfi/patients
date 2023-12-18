import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        // Configurações do servidor
        hmr: {
          // Ativa o Hot Module Replacement
          overlay: true, // Exibe uma mensagem de erro se uma atualização falhar
        },
      },
});
