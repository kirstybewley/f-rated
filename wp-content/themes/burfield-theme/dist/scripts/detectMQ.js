!function(e){var t,n=e.document,d=e.detect_mq||{},i=d.live||!0,o=d.threshold||300,r=d.callback||{},u=function(t,n,d){return e.getComputedStyle(t,n)[d]},a=function(){var e=u(n.body,":after","content");null!==e&&(dmq_size=e.replace(/['"]/g,""),r())};n.addEventListener&&"undefined"!=typeof window.getComputedStyle&&(e.addEventListener("load",a,!1),i===!0&&e.addEventListener("resize",function(){clearTimeout(t),t=setTimeout(a,o)},!1))}(this);
//# sourceMappingURL=detectMQ.js.map