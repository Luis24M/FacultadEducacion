import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        cors: true,
    },
    build: {
        manifest: 'manifest.json', // Esto pone el manifest en /public/build/manifest.json
        outDir: 'public/build',
        emptyOutDir: true,
    },
});
