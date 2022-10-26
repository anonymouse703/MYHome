import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/js/jquery.min.js',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/fontawesome/css/all.min.css',
                'resources/fontawesome/css/brands.min.css',
                'resources/fontawesome/css/fontawesome.min.css',
                'resources/fontawesome/css/regular.min.css',
                'resources/fontawesome/css/solid.min.css',
                'resources/fontawesome/css/svg-with-js.min.css',
                'resources/fontawesome/css/v4-font-face.min.css',
                'resources/fontawesome/css/v4-shims.min.css',
                'resources/fontawesome/css/v5-font-face.min.css',
                'resources/assets/css/bootstrap.min.css',
                'resources/fontawesome/js/all.min.js',
                'resources/fontawesome/js/brands.min.js',
                'resources/fontawesome/js/conflict-detection.min.js',
                'resources/fontawesome/js/fontawesome.min.js',
                'resources/fontawesome/js/regular.min.js',
                'resources/fontawesome/js/solid.min.js',
                'resources/fontawesome/js/v4-shims.min.js',
                'resources/assets/js/bootstrap.min.js',
                'resources/assets/css/nifty.min.css',
                'resources/assets/js/nifty.min.js',
                'resources/assets/pages/dashboard-1.min.js',
            ],
            refresh: true,
        }),
    ],
});
