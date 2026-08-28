import { resolve } from 'path';
import { defineConfig } from 'vite';

const pages = [
    'index.html',
    'about.html',
    'education.html',
    'projects.html',
    'github.html',
];

export default defineConfig({
    build: {
        outDir: 'dist',
        emptyOutDir: true,
        rollupOptions: {
            input: pages.map((page) => resolve(__dirname, page)),
        },
    },
    publicDir: 'public',
});
