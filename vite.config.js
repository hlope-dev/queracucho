import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0',
        port: 5175,
        strictPort: true,
        // Agrega aquí la sección "watch"
        watch: {
            usePolling: true // Obligatorio en WSL/Docker para hot-reload
        },
        hmr: {
            host: 'devjobs.test',
            port: 5175
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
