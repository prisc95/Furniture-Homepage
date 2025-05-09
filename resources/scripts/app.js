import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...

  const open = document.getElementById("open");
  const close = document.getElementById("close");
  const body = document.body;
  
  open.addEventListener("click", function(){
      body.classList.add("show-nav")});
  
  close.addEventListener("click", function(){
      body.classList.remove("show-nav");
  });

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
