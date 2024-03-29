import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react'

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/js/apps/podborShin.jsx'
            ],
            refresh: true,
        }),
        react()
    ],
});
