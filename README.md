# Nice Hair theme

Starter custom theme for the Nice Hair project.

## What is included

- Classic custom WordPress theme
- Vite-based asset pipeline for JS + SCSS
- Separate home header/footer
- Gutenberg pattern scaffold
- Editor restrictions scaffold
- BEM + SCSS folder structure

## Local start

```bash
cd wp-content/themes/nice-hair
npm install
npm run dev
```

For production build:

```bash
npm run build
```

## Notes

- `style.css` contains a very small fallback stylesheet so the theme is still usable before the first Vite build.
- Main frontend assets are built from `assets/js/app.js`.
- Gutenberg editor assets are built from `assets/js/editor.js`.
- Complex custom blocks should live in the `nice-hair-core` plugin and use `@wordpress/scripts` later.
