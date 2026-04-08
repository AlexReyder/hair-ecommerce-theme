import { defineConfig } from "vite";
import path from "node:path";

const themeRoot = __dirname;
const devHost = process.env.VITE_DEV_HOST || "localhost";
const devPort = Number(process.env.VITE_DEV_PORT || 5173);
const devOrigin = process.env.VITE_DEV_ORIGIN || `http://${devHost}:${devPort}`;

export default defineConfig({
  root: themeRoot,
  base: "",
  publicDir: false,

  server: {
    host: true,
    port: devPort,
    strictPort: true,
    origin: devOrigin,
    hmr: {
      host: devHost,
      port: devPort,
      protocol: devOrigin.startsWith("https") ? "wss" : "ws",
    },
  },

  resolve: {
    alias: {
      "@js": path.resolve(themeRoot, "assets/js"),
      "@scss": path.resolve(themeRoot, "assets/scss"),
      "@images": path.resolve(themeRoot, "assets/images"),
    },
  },

  build: {
    outDir: path.resolve(themeRoot, "assets/dist"),
    emptyOutDir: true,
    manifest: "manifest.json",
    sourcemap: true,
    rollupOptions: {
      input: {
        app: path.resolve(themeRoot, "assets/js/app.js"),
        editor: path.resolve(themeRoot, "assets/js/editor.js"),
      },
      output: {
        entryFileNames: "js/[name]-[hash].js",
        chunkFileNames: "js/[name]-[hash].js",
        assetFileNames: (assetInfo) => {
          const extension = path.extname(assetInfo.name ?? "");

          if (extension === ".css") {
            return "css/[name]-[hash][extname]";
          }

          return "assets/[name]-[hash][extname]";
        },
      },
    },
  },
});
