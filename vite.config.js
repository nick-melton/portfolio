import { defineConfig, loadEnv } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue2'

export default defineConfig(({ command, mode }) => {
    const env = loadEnv(mode, process.cwd(), '')

    return {
        define: {
            'process.env': env
        },
        server: {
            hmr: {
                host: env.VITE_APP_URL,
            },
            port: 3000,
            host: true,
            https: {
                cert: env.VITE_CERT_PATH,
                key: env.VITE_KEY_PATH,
            },
        },
        plugins: [
            laravel({
                input: [
                    'resources/css/app.css',
                    'resources/js/app.js'
                ],
            }),
            vue({}),
        ],
        resolve: {
            alias: {
                vue: 'vue/dist/vue.esm.js',
            },
        }
    }
});