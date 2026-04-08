import { defineConfig } from 'vite';
import path from 'node:path';

const themeRoot = __dirname;

export default defineConfig({
  root: themeRoot,
  base: '',
  publicDir: false,
  server: {
    host: '127.0.0.1',
    port: 5173,
    strictPort: true,
    origin: 'http://127.0.0.1:5173'
  },
  resolve: {
    alias: {
      '@js': path.resolve(themeRoot, 'assets/js'),
      '@scss': path.resolve(themeRoot, 'assets/scss'),
      '@images': path.resolve(themeRoot, 'assets/images')
    }
  },
  build: {
    outDir: path.resolve(themeRoot, 'assets/dist'),
    emptyOutDir: true,
    manifest: 'manifest.json',
    sourcemap: true,
    rollupOptions: {
      input: {
        app: path.resolve(themeRoot, 'assets/js/app.js'),
        editor: path.resolve(themeRoot, 'assets/js/editor.js')
      },
      output: {
        entryFileNames: 'js/[name]-[hash].js',
        chunkFileNames: 'js/[name]-[hash].js',
        assetFileNames: (assetInfo) => {
          const extension = path.extname(assetInfo.name ?? '');

          if (extension === '.css') {
            return 'css/[name]-[hash][extname]';
          }

          return 'assets/[name]-[hash][extname]';
        }
      }
    }
  }
});
