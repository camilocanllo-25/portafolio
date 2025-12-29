import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    vendor: ['bootstrap', 'aos', 'typed.js'],
                    animations: ['gsap', 'particles.js']
                }
            }
        }
    },
    optimizeDeps: {
        include: ['bootstrap', 'aos', 'typed.js', 'gsap', 'particles.js']
    }
});
