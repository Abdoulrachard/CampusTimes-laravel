import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css' ,'resources/css/timetablejs.css', 'resources/js/app.js' ,'resources/js/timetable.js'],
            refresh: true,
        }),
    ],
});
