require('dotenv').config();

module.exports = {
  proxy: process.env.LOCAL_DOMAIN || 'http://localhost',
  files: ['build/css/*.css', 'build/js/*.js', '**/*.php'],
  injectChanges: true,
  open: false, // ← this opens the browser automatically
  notify: false,
  port: 3000 // optional: force it to always use port 3000
};
