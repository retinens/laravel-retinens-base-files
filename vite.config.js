import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

import fs from 'fs';
import path from 'path'
import {homedir} from 'os';

const host = 'gaman.test';
const homedirPath = homedir();
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/app/sass/app.scss',
                'resources/app/js/app.js',
                'resources/admin/sass/admin.scss',
                'resources/admin/js/admin.js',
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/app/tarteaucitron',
                    dest: '',
                }
            ]
        })
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~@themesberg': path.resolve(__dirname, 'node_modules/@themesberg'),
            '~datatables.net-bs5': path.resolve(__dirname, 'node_modules/datatables.net-bs5'),
            "~trix/dist/trix": path.resolve(__dirname, 'node_modules/trix/dist/trix'),
            "~choices.js": path.resolve(__dirname, 'node_modules/choices.js'),
            "~swiper": path.resolve(__dirname, 'node_modules/swiper'),
            "~aos": path.resolve(__dirname, 'node_modules/aos'),
        }
    },
    server: {
        host,
        hmr: { host },
        https: {
            key: fs.readFileSync(`${homedirPath}/.config/valet/Certificates/${host}.key`),
            cert: fs.readFileSync(`${homedirPath}/.config/valet/Certificates/${host}.crt`),
        },
    },
});
