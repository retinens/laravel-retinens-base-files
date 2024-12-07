import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

import fs from 'fs';
import path from 'path'
import {homedir} from 'os';

const host = 'HOSTNAME.test';
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
            '~select2': path.resolve(__dirname, 'node_modules/select2'),
            "~select2-bootstrap-5-theme/src/include-all": path.resolve(__dirname, 'node_modules/select2-bootstrap-5-theme/src/include-all'),
            "~trix/dist/trix": path.resolve(__dirname, 'node_modules/trix/dist/trix'),
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
