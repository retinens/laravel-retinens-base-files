import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

import fs from 'fs';
import path from 'path'

const host = 'HOSTNAME.test';
const homedir = require('os').homedir();
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/app/sass/app.scss',
                'resources/app/js/app.js',
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
        }
    },
    server: {
        host,
        hmr: { host },
        https: {
            key: fs.readFileSync(`${homedir}/.valet/Certificates/${host}.key`),
            cert: fs.readFileSync(`${homedir}/.valet/Certificates/${host}.crt`),
        },
    },
});
