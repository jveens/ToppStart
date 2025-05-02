# ToppStart

**ToppStart** is a custom WordPress starter theme designed for modern development with SCSS, JavaScript bundling, live reload, and code linting — built to pair seamlessly with local environments like DevKinsta.

---

## 🧱 Features

- ⚡ Live reload with [BrowserSync](https://browsersync.io/)
- 🧩 Modular file structure using `src/` and `build/` directories
- 🎨 SCSS compilation with PostCSS + Autoprefixer
- 📦 JS bundling with [esbuild](https://esbuild.dev/)
- 🧹 Linting with ESLint and Stylelint
- ✏️ Prettier for code formatting
- 🧪 Editor/admin styles and scripts supported

---

## 🚀 Getting Started

1. Clone or download the theme into your `wp-content/themes` folder.

2. Install dependencies:

```bash
pnpm install
```

3. Start development (with live reload):

```bash
pnpm run dev
```

4. To build for production:

```bash
pnpm run build
```

### 🔐 Environment Variables

Create a `.env` file in the theme root with your local domain:
`LOCAL_DOMAIN=<your-local-url-here>`

This is used by BrowserSync to proxy your local WordPress site.

---

## 📁 Folder Structure

```
src/
  ├── scss/       → Source SCSS
  └── js/         → Source JavaScript

build/
  ├── css/        → Compiled CSS
  └── js/         → Bundled JS
```

Other key files:

- `.stylelintrc.json` / `.eslintrc` — Linting config
- `.prettierrc` — Prettier formatting rules
- `bs-config.cjs` — BrowserSync setup
- `postcss.config.cjs` — PostCSS setup

---

## 📝 Notes

- Live reload is available at `http://localhost:3000`
- Proxy should match your DevKinsta domain (e.g. `thecanadianedit.local`)
- The `build/` folder is ignored by linters but committed to the theme
- Only source files in `src/` are linted and formatted

---

## 🔧 To Do / Optional Enhancements

- [ ] Image optimization (`imagemin`)
- [ ] Asset management (fonts, SVGs, etc.)
- [ ] Modernizr or feature detection
- [ ] GitHub Actions deploy script

---

## 📄 License

MIT
