import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...

  const open = document.getElementById("open");
  const close = document.getElementById("close");
  const container = document.querySelector(".circle-container");
  
  open.addEventListener("click", function(){
      container.classList.add("show-nav")});
  
  close.addEventListener("click", function(){
      container.classList.remove("show-nav");
  });

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
