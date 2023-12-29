export const server = (done) => {
   app.plugins.browsersync.init({
      proxy: 'http://shablon',
      host: 'shablon',
      open: 'external'
   });
}