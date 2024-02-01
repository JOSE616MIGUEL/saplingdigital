import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/resources/css/app.css',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/style.css',
            ],
            refresh: true,
        }),
    ],
});
