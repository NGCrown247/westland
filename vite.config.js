import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        outDir: 'public/build',   // ✅ Added: ensures Vite outputs compiled CSS/JS into public/build
    },
    base: '/',                    // ✅ Added: makes asset URLs relative to your domain root in production
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
