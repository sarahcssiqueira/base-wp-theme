import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  root: 'src',
  build: {
    outDir: '../dist', 
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'src/js/main.js')
      },
      output: {
        entryFileNames: 'js/[name].min.js',
        chunkFileNames: 'js/[name].min.js',
        assetFileNames: assetInfo => {
          if (assetInfo.name.endsWith('.css')) return 'css/[name].min.css';
          return '[name][extname]';
        }
      }
    }
  }
});
