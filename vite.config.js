// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//         tailwindcss(),
//     ],
// });


// ...existing code...
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';
import path from 'path';

import tailwindcss from '@tailwindcss/vite';

// Helper to get all files with a given extension in a directory
function getFiles(dir, ext) {
    return fs.readdirSync(dir)
        .filter(file => file.endsWith(ext))
        .map(file => path.join(dir, file).replace(/\\/g, '/'));
}

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Automatically include all CSS and JS files
                ...getFiles('resources/css', '.css'),
                ...getFiles('resources/js', '.js'),
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
// ...existing code...