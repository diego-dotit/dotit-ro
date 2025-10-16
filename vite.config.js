import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/front.css',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        tailwindcss({
            // Configure dark mode
            darkMode: 'class',
        }),
    ],
    server: {
        cors: true,
    },
});
