import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  // server: {
  //     host: '0.0.0.0', // supaya bisa diakses dari jaringan
  //     port: 5173, // default Vite port
  //     strictPort: true,
  //     hmr: {
  //         host: '192.168.101.50', // IP dari server kamu
  //     },
  // },
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
      ],
      refresh: true,
    }),
  ],  
});
