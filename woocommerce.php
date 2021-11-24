<head><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(e){this.triggerEvents=e,this.eventOptions={passive:!0},this.userEventListener=this.triggerListener.bind(this),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventListener,e.eventOptions)))}_removeUserInteractionListener(e){this.triggerEvents.forEach((t=>window.removeEventListener(t,e.userEventListener,e.eventOptions)))}triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}async _loadEverythingNow(){this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async),await this._triggerDOMContentLoaded(),await this._triggerWindowLoad(),window.dispatchEvent(new Event("rocket-allScriptsLoaded"))}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._requestAnimFrame(),new Promise((t=>{const n=document.createElement("script");let r;[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type",r=e.nodeValue),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t()),e.parentNode.replaceChild(n,e)}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){var e=document.createDocumentFragment();[...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async].forEach((t=>{const n=t.getAttribute("src");if(n){const t=document.createElement("link");t.href=n,t.rel="preload",t.as="script",e.appendChild(t)}})),document.head.appendChild(e)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(r){e["rocket"+t]=n=r}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._requestAnimFrame(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-load")),await this._requestAnimFrame(),window.rocketonload&&window.rocketonload(),await this._requestAnimFrame(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),window.dispatchEvent(new Event("rocket-pageshow")),await this._requestAnimFrame(),window.rocketonpageshow&&window.rocketonpageshow()}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,r=document.createRange(),i=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const a=document.createDocumentFragment();r.setStart(a,0),a.appendChild(r.createContextualFragment(t)),i.insertBefore(a,o)}}async _requestAnimFrame(){return new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts(["keydown","mousemove","touchmove","touchstart","touchend","wheel"]);e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" /> <title>A8 Original</title>
<meta name='robots' content='max-image-preview:large' />
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//s.w.org">
<link rel='dns-prefetch' href='//demo2.wpopal.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='dns-prefetch' href='//demo2wpopal.b-cdn.net' />
<link href='//demo2wpopal.b-cdn.net' rel='preconnect' />
<link rel="alternate" type="application/rss+xml" title="Smartic &raquo; Feed" href="https://demo2.wpopal.com/smartic/feed/" />
<link rel="alternate" type="application/rss+xml" title="Smartic &raquo; Comments Feed" href="https://demo2.wpopal.com/smartic/comments/feed/" />
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/demo2.wpopal.com\/smartic\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.2"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-includes/css/dist/block-library/style.min.css?ver=5.8.2' type='text/css' media='all' />
<style id='wp-block-library-theme-inline-css' type='text/css'>
#start-resizable-editor-section{display:none}.wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-code{font-family:Menlo,Consolas,monaco,monospace;color:#1e1e1e;padding:.8em 1em;border:1px solid #ddd;border-radius:4px}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-group.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto;opacity:.4}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{padding:.5em;border:1px solid;word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}#end-resizable-editor-section{display:none}
</style>
<link data-minify="1" rel='stylesheet' id='wc-block-vendors-style-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=1634876145' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='wc-block-style-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=1634876145' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='smartic-gutenberg-blocks-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/css/base/gutenberg-blocks.css?ver=1634876145' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/plugins/opal-demo/style.css?ver=1634876145' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='rs-plugin-settings-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=1634876145' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link data-minify="1" rel='stylesheet' id='smartic-style-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/style.css?ver=1634876147' type='text/css' media='all' />
<style id='smartic-style-inline-css' type='text/css'>
body{--primary:#289C28;--primary_hover:#248D24;--secondary:#289C28;--text:#666666;--accent:#000000;}
body.theme-smartic{--e-global-color-primary:#30aece;--primary:#30aece;--primary_hover:#2B9EBB;}body.theme-smartic button:hover,
                 body.theme-smartic button:focus,
                  body.theme-smartic input[type="button"]:hover,
                   body.theme-smartic input[type="button"]:focus,
                    body.theme-smartic input[type="submit"]:hover,
                     body.theme-smartic input[type="submit"]:focus,
                      body.theme-smartic .elementor-button:hover,
                       body.theme-smartic .elementor-button:focus{background-color:#2B9EBB;}
</style>
<link rel='stylesheet' id='elementor-frontend-legacy-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.2.3' type='text/css' media='all' />
<style id='elementor-frontend-inline-css' type='text/css'>
@font-face{font-family:eicons;src:url(https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);src:url(https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"),url(https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"),url(https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"),url(https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"),url(https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");font-weight:400;font-style:normal}
</style>
<link data-minify="1" rel='stylesheet' id='elementor-post-39-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/uploads/elementor/css/post-39.css?ver=1634876147' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-post-1417-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/uploads/elementor/css/post-1417.css?ver=1634876147' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-icons-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=1634876147' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.2.2' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='font-awesome-5-all-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=1634876147' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.2.3' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-global-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/uploads/elementor/css/global.css?ver=1634876147' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-post-8689-css' href='https://drive.google.com/uc?id=17YetspK4SfSauSThOyF8ab8OVma0C1Mg' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-post-11960-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/uploads/elementor/css/post-11960.css?ver=1634887810' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-post-10414-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/uploads/elementor/css/post-10414.css?ver=1634892314' type='text/css' media='all' />
<link rel='stylesheet' id='woo-variation-swatches-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/woo-variation-swatches/assets/css/frontend.min.css?ver=1.1.17' type='text/css' media='all' />
<style id='woo-variation-swatches-inline-css' type='text/css'>
.variable-item:not(.radio-variable-item) { width : 30px; height : 30px; } .wvs-style-squared .button-variable-item { min-width : 30px; } .button-variable-item span { font-size : 16px; }
</style>
<link rel='stylesheet' id='woo-variation-swatches-theme-override-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/woo-variation-swatches/assets/css/wvs-theme-override.min.css?ver=1.1.17' type='text/css' media='all' />
<link rel='stylesheet' id='woo-variation-swatches-tooltip-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/woo-variation-swatches/assets/css/frontend-tooltip.min.css?ver=1.1.17' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='smartic-elementor-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/css/base/elementor.css?ver=1634876147' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='smartic-woocommerce-style-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/css/woocommerce/woocommerce.css?ver=1634876147' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='smartic-child-style-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/demo-child/style.css?ver=1634876147' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Barlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.1' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=1634876570' type='text/css' media='all' />
<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.4.4' id='tp-tools-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.4.6' id='revmin-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.2.3' id='font-awesome-4-shim-js'></script>
<link rel="https://api.w.org/" href="https://demo2.wpopal.com/smartic/wp-json/" /><link rel="alternate" type="application/json" href="https://demo2.wpopal.com/smartic/wp-json/wp/v2/pages/8689" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo2.wpopal.com/smartic/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo2wpopal.b-cdn.net/smartic/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.8.2" />
<meta name="generator" content="WooCommerce 5.3.0" />
<link rel="canonical" href="https://demo2.wpopal.com/smartic/home-22/" />
<link rel='shortlink' href='https://demo2.wpopal.com/smartic/?p=8689' />
<link rel="alternate" type="application/json+oembed" href="https://demo2.wpopal.com/smartic/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo2.wpopal.com%2Fsmartic%2Fhome-22%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://demo2.wpopal.com/smartic/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo2.wpopal.com%2Fsmartic%2Fhome-22%2F&#038;format=xml" />
<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<meta name="generator" content="Powered by Slider Revolution 6.4.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,						
							sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}				
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		  };</script>
<noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript></head>

<body class="page-template page-template-template-homepage page-template-template-homepage-php page page-id-8689 wp-custom-logo wp-embed-responsive theme-smartic woocommerce-no-js woo-variation-swatches wvs-theme-demo-child wvs-theme-child-smartic wvs-style-squared wvs-attr-behavior-blur wvs-tooltip wvs-css wvs-show-label home chrome woocommerce-active product-style-1 single-product-1 elementor-default elementor-kit-39 elementor-page elementor-page-8689">
<div id="page" class="hfeed site">
<div data-elementor-type="header" data-elementor-id="11960" class="elementor elementor-11960 elementor-location-header" data-elementor-settings="[]">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-24ab6e2a elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="24ab6e2a" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-455edf62 elementor-hidden-phone" data-id="455edf62" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-c813ad6 elementor-widget elementor-widget-text-editor" data-id="c813ad6" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<div>Enviado direto do fabricante fora do Brasil | Garantia de 30 dias.</div> </div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-64f65fdb" data-id="64f65fdb" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-e4ffeb2 elementor-widget elementor-widget-text-editor" data-id="e4ffeb2" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<div><a style:"var(--primary)" href="#">Frete Grátis Para Todo Brasil</a></div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-3218b49 elementor-section-stretched elementor-section-height-min-height header-absolute elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="3218b49" data-element_type="section" id="top" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a8b052b" data-id="a8b052b" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-de41708 elementor-widget__width-auto elementor-hidden-desktop elementor-widget elementor-widget-smartic-vertical-menu" data-id="de41708" data-element_type="widget" data-widget_type="smartic-vertical-menu.default">
<div class="elementor-widget-container">
<div class="elementor-canvas-menu-wrapper">
<a href="#" class="menu-mobile-nav-button">
<span class="toggle-text screen-reader-text">Menu</span>
<i class="smartic-icon-bars"></i>
</a>
</div>
</div>
</div>
<div class="elementor-element elementor-element-23e22ea elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="23e22ea" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<a href="https://demo2.wpopal.com/smartic/">
<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-src="http://asiahub.link/wp-content/uploads/2021/11/first_image.png" /><noscript><img src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/10/logo_white.svg" class="attachment-full size-full" alt="Smartic" /></noscript> </a>
</div>
</div>
</div>
<div class="elementor-element elementor-element-3f16f78 elementor-widget__width-auto elementor-hidden-desktop elementor-widget elementor-widget-smartic-header-group" data-id="3f16f78" data-element_type="widget" data-widget_type="smartic-header-group.default">
<div class="elementor-widget-container">
<div class="elementor-header-group-wrapper">
<div class="header-group-action">
<div class="site-header-cart menu">
<a class="cart-contents" href="https://demo2.wpopal.com/smartic/cart/" title="View your shopping cart">
<span class="count">0</span>
<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>0,00</bdi></span> </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c5257fb elementor-hidden-tablet elementor-hidden-phone" data-id="c5257fb" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-8a0aa2e elementor-widget elementor-widget-smartic-nav-menu" data-id="8a0aa2e" data-element_type="widget" data-widget_type="smartic-nav-menu.default">
<div class="elementor-widget-container">
<div class="elementor-nav-menu-wrapper">
<nav class="main-navigation" role="navigation" aria-label="Primary Navigation">
<div class="primary-navigation"><ul id="menu-1-8a0aa2e" class="menu"><li id="menu-item-479" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-479 has-mega-menu has-containerwidth"><a href="https://demo2.wpopal.com/smartic/"><span class="menu-title">Home</span></a><ul class="sub-menu mega-menu mega-fullwidth mega-containerwidth"><li class="mega-menu-item"> <div data-elementor-type="page" data-elementor-id="1417" class="elementor elementor-1417" data-elementor-settings="[]">
<div class="elementor-inner">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-4a3d4d6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4a3d4d6" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2a85419" data-id="2a85419" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-9d4e11f effect-hover_image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9d4e11f" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-b7304c2" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/" data-column-clickable-blank="_self" data-id="b7304c2" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-6cf25bc elementor-widget elementor-widget-image" data-id="6cf25bc" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-a7a7301 elementor-widget elementor-widget-text-editor" data-id="a7a7301" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 01 &#8211; Skin Care Product </div>
</div>
</div>
</div>
</div>
</div>
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-33112ed" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-2/" data-column-clickable-blank="_self" data-id="33112ed" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-f8c4657 elementor-widget elementor-widget-image" data-id="f8c4657" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-b94acce elementor-widget elementor-widget-text-editor" data-id="b94acce" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 02 &#8211; Kid Smartwatch </div>
</div>
</div>
</div>
</div>
</div>
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-ae55d9b" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-3" data-column-clickable-blank="_self" data-id="ae55d9b" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-4e79726 elementor-widget elementor-widget-image" data-id="4e79726" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-291e5b9 elementor-widget elementor-widget-text-editor" data-id="291e5b9" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 03 &#8211; Smart Bag </div>
</div>
</div>
</div>
</div>
</div>
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-e51f7b0" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-4" data-column-clickable-blank="_self" data-id="e51f7b0" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-cb11422 elementor-widget elementor-widget-image" data-id="cb11422" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-a07fad1 elementor-widget elementor-widget-text-editor" data-id="a07fad1" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 04 &#8211; Gym Supplements </div>
</div>
</div>
</div>
</div>
</div>
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-28b5150" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-5" data-column-clickable-blank="_self" data-id="28b5150" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-e6bc5af elementor-widget elementor-widget-image" data-id="e6bc5af" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-5a85f32 elementor-widget elementor-widget-text-editor" data-id="5a85f32" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 05 &#8211; Smart Scale </div>
</div>
</div>
</div>
</div>
</div>
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-32717fe" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-6" data-column-clickable-blank="_self" data-id="32717fe" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-3b3230d elementor-widget elementor-widget-image" data-id="3b3230d" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-1d4e222 elementor-widget elementor-widget-text-editor" data-id="1d4e222" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 06 &#8211; Premium Coffee </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-8639c26 effect-hover_image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8639c26" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-ab01d64" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-7" data-column-clickable-blank="_self" data-id="ab01d64" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-d70319f elementor-widget elementor-widget-image" data-id="d70319f" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-07bb02f elementor-widget elementor-widget-text-editor" data-id="07bb02f" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 07 &#8211; Weight Loss Product </div>
</div>
</div>
</div>
</div>
</div>
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-80f26ca" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-8" data-column-clickable-blank="_self" data-id="80f26ca" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-8b63b81 elementor-widget elementor-widget-image" data-id="8b63b81" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-67e978d elementor-widget elementor-widget-text-editor" data-id="67e978d" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 08 &#8211; Smart Thermometer </div>
</div>
</div>
</div>
</div>
</div>
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-8f2642c" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-9" data-column-clickable-blank="_self" data-id="8f2642c" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-79374d2 elementor-widget elementor-widget-image" data-id="79374d2" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-877c96e elementor-widget elementor-widget-text-editor" data-id="877c96e" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 09 &#8211; Premium Beer </div>
</div>
</div>
</div>
</div>
</div>
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-e27c263" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-10" data-column-clickable-blank="_self" data-id="e27c263" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-0c0a3ed elementor-widget elementor-widget-image" data-id="0c0a3ed" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-8508e2d elementor-widget elementor-widget-text-editor" data-id="8508e2d" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
 <div class="elementor-text-editor elementor-clearfix">
Home 10 &#8211; Mesh Wifi Router </div>
</div>
</div>
</div>
</div>
</div>
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-b0b99c7" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-11" data-column-clickable-blank="_self" data-id="b0b99c7" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-11770a4 elementor-widget elementor-widget-image" data-id="11770a4" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-36bebb2 elementor-widget elementor-widget-text-editor" data-id="36bebb2" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 11 &#8211; Healthy Juice </div>
</div>
</div>
</div>
</div>
</div>
<div class="make-column-clickable-elementor elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-e7a8858" style="cursor: pointer;" data-column-clickable="https://demo2.wpopal.com/smartic/home-12" data-column-clickable-blank="_self" data-id="e7a8858" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-67e2db6 elementor-widget elementor-widget-image" data-id="67e2db6" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript> </div>
</div>
</div>
<div class="elementor-element elementor-element-5a069bb elementor-widget elementor-widget-text-editor" data-id="5a069bb" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Home 12 &#8211; Healthy Pet Food </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="elementor-element elementor-element-29b00a2 elementor-align-center elementor-widget elementor-widget-button" data-id="29b00a2" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a href="https://demo2.wpopal.com/smartic/landingpage/#demos" class="elementor-button-link elementor-button elementor-size-sm" role="button">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-text">View all demos</span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</li></ul></li>
<li id="menu-item-483" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-483"><a href="https://demo2.wpopal.com/smartic/shop/"><span class="menu-title">Shop</span></a>
<ul class="sub-menu">
<li id="menu-item-620" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-620"><a href="https://demo2.wpopal.com/smartic/shop/?woocommerce_archive_layout=canvas&#038;woocommerce_catalog_columns=4"><span class="menu-title">Shop &#8211; Fullwidth</span></a></li>
<li id="menu-item-621" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-621"><a href="https://demo2.wpopal.com/smartic/shop/"><span class="menu-title">Shop &#8211; Sidebar</span></a></li>
<li id="menu-item-622" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-622"><a href="https://demo2.wpopal.com/smartic/shop/?layout=list"><span class="menu-title">Shop &#8211; Listview</span></a></li>
<li id="menu-item-623" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-623"><a href="#"><span class="menu-title">Product</span></a>
<ul class="sub-menu">
<li id="menu-item-624" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-624"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/?single_product_gallery_layout=vertical"><span class="menu-title">Vertical Thumbnail</span></a></li>
<li id="menu-item-625" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-625"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/"><span class="menu-title">Horizontal Thumbnail</span></a></li>
<li id="menu-item-626" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-626"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/?single_product_gallery_layout=sticky"><span class="menu-title">Sticky Detail</span></a></li>
<li id="menu-item-627" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-627"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/?single_product_gallery_layout=gallery"><span class="menu-title">Gallery Thumbnail</span></a></li>
<li id="menu-item-628" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-628"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/"><span class="menu-title">Video Upload</span></a></li>
<li id="menu-item-629" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-629"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/"><span class="menu-title">360 Viewer</span></a></li>
</ul>
</li>
</ul>
</li>
<li id="menu-item-484" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-484"><a href="#"><span class="menu-title">Pages</span></a>
<ul class="sub-menu">
<li id="menu-item-1870" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1870"><a href="https://demo2.wpopal.com/smartic/about-1/"><span class="menu-title">About 1</span></a></li>
<li id="menu-item-1871" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1871"><a href="https://demo2.wpopal.com/smartic/about-2/"><span class="menu-title">About 2</span></a></li>
<li id="menu-item-1873" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1873"><a href="https://demo2.wpopal.com/smartic/about-3/"><span class="menu-title">About 3</span></a></li>
<li id="menu-item-1872" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1872"><a href="https://demo2.wpopal.com/smartic/about-4/"><span class="menu-title">About 4</span></a></li>
<li id="menu-item-1874" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1874"><a href="https://demo2.wpopal.com/smartic/about-5/"><span class="menu-title">About 5</span></a></li>
<li id="menu-item-635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-635"><a href="https://demo2.wpopal.com/smartic/faq/"><span class="menu-title">FAQ</span></a></li>
<li id="menu-item-2762" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2762"><a href="https://demo2.wpopal.com/smartic/404"><span class="menu-title">404</span></a></li>
<li id="menu-item-1875" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1875"><a href="https://demo2.wpopal.com/smartic/icons/"><span class="menu-title">Icons</span></a></li>
</ul>
</li>
<li id="menu-item-485" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-485"><a href="https://demo2.wpopal.com/smartic/blog/"><span class="menu-title">Blog</span></a>
<ul class="sub-menu">
<li id="menu-item-1165" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1165"><a href="https://demo2.wpopal.com/smartic/blog/"><span class="menu-title">Blog &#8211; Standard</span></a></li>
<li id="menu-item-632" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-632"><a href="https://demo2.wpopal.com/smartic/blog/?blog_style=grid&#038;sidebar-blog=0"><span class="menu-title">Blog &#8211; Gridview</span></a></li>
<li id="menu-item-633" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-633"><a href="https://demo2.wpopal.com/smartic/blog/?blog_style=listview"><span class="menu-title">Blog &#8211; Listview</span></a></li>
<li id="menu-item-1166" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1166"><a href="https://demo2.wpopal.com/smartic/why-every-startup-should-adopt-amazons-hot-air-baloon-race/"><span class="menu-title">Single Post</span></a></li>
</ul>
</li>
<li id="menu-item-1859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1859"><a href="https://demo2.wpopal.com/smartic/contact-1/"><span class="menu-title">Contact</span></a>
<ul class="sub-menu">
<li id="menu-item-1867" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1867"><a href="https://demo2.wpopal.com/smartic/contact-1/"><span class="menu-title">Contact 1</span></a></li>
<li id="menu-item-1861" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1861"><a href="https://demo2.wpopal.com/smartic/contact-2/"><span class="menu-title">Contact 2</span></a></li>
<li id="menu-item-1860" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1860"><a href="https://demo2.wpopal.com/smartic/contact-3/"><span class="menu-title">Contact 3</span></a></li>
<li id="menu-item-1862" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1862"><a href="https://demo2.wpopal.com/smartic/contact-4/"><span class="menu-title">Contact 4</span></a></li>
<li id="menu-item-1863" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1863"><a href="https://demo2.wpopal.com/smartic/contact-5/"><span class="menu-title">Contact 5</span></a></li>
</ul>
</li>
</ul></div> </nav>
</div>
</div>
</div>
</div>
</div>
</div> -->
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4c1fe80 elementor-hidden-tablet elementor-hidden-phone" data-id="4c1fe80" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-633579d account-style-content-yes elementor-widget__width-auto elementor-widget elementor-widget-smartic-header-group" data-id="633579d" data-element_type="widget" data-widget_type="smartic-header-group.default">
<div class="elementor-widget-container">
<div class="elementor-header-group-wrapper">
<div class="header-group-action">
<div class="site-header-account">
<a href="https://demo2.wpopal.com/smartic/my-account/">
<i class="smartic-icon-user"></i>
<span class="account-content">
Login / Register </span>
</a>
<div class="account-dropdown">
</div>
</div>
<div class="site-search-popup">
<div class="site-search-popup-wrap">
<a href="#" class="site-search-popup-close"><i class="smartic-icon-times-circle"></i></a>
<div class="site-search">
<div class="widget woocommerce widget_product_search"> <div class="ajax-search-result" style="display:none;">
</div>
<form role="search" method="get" class="woocommerce-product-search" action="https://demo2.wpopal.com/smartic/">
<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" autocomplete="off" value="" name="s" />
<button type="submit" value="Search">Search</button>
<input type="hidden" name="post_type" value="product" />
</form>
</div> </div>
</div>
</div>
<div class="site-header-search">
<a href="#" class="button-search-popup"><i class="smartic-icon-search-header"></i></a>
</div>
<div class="site-header-cart menu">
<a class="cart-contents" href="https://demo2.wpopal.com/smartic/cart/" title="View your shopping cart">
<span class="count">0</span>
<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#36;</span>0,00</bdi></span> </a>
</div>
<div class="site-header-button">
<a class="button-content" href="#">
<span class="icon-1"></span>
<span class="icon-2"></span>
<span class="icon-3"></span>
</a>
<div class="header-button-canvas">
<div class="button-side-heading">
 <a class="close-button-side" href="#"><i class="smartic-icon-times"></i></a>
</div>
<div class="header-template-canvas">
<div data-elementor-type="section" data-elementor-id="800" class="elementor elementor-800 elementor-location-header" data-elementor-settings="[]">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-c3500c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c3500c4" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aae3651" data-id="aae3651" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-aafbaaf elementor-widget elementor-widget-image" data-id="aafbaaf" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<a href="https://demo2.wpopal.com/smartic/">
<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/10/logo_white.svg" /><noscript><img src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/10/logo_white.svg" class="attachment-full size-full" alt="Smartic" /></noscript> </a>
</div>
</div>
</div>
<div class="elementor-element elementor-element-da5cee5 elementor-widget elementor-widget-text-editor" data-id="da5cee5" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> </div>
</div>
</div>
<div class="elementor-element elementor-element-74b5ade elementor-widget elementor-widget-heading" data-id="74b5ade" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Where to find us</h2> </div>
</div>
<div class="elementor-element elementor-element-0e2e4fa elementor-widget elementor-widget-text-editor" data-id="0e2e4fa" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<span style="color: #ffffff;"><strong>A</strong></span>:123 John St, NY 10000, USA<br>
New York 10010 </div>
</div>
</div>
<div class="elementor-element elementor-element-ca7c0c1 elementor-widget elementor-widget-text-editor" data-id="ca7c0c1" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<span style="color: #ffffff;"><strong>T</strong></span>: 123 456 789 0 / 000 123 456 78 </div>
</div>
</div>
<div class="elementor-element elementor-element-bfcc96f elementor-widget elementor-widget-text-editor" data-id="bfcc96f" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<span style="color: #ffffff;"><strong>E</strong></span>: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8feae2eee6e3cfeaf7eee2ffe3eaebeae2e0a1ece0e2">[email&#160;protected]</a> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
 </div>
</div>
<div class="button-side-overlay"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-3b6110e0 elementor-section-height-min-height elementor-section-stretched smartic-breadcrumb elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="3b6110e0" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f3683f" data-id="3f3683f" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-51bb9780 hidden-smartic-title-single-yes elementor-widget elementor-widget-smartic-woocommerce-breadcrumb" data-id="51bb9780" data-element_type="widget" data-widget_type="smartic-woocommerce-breadcrumb.default">
<div class="elementor-widget-container">
<div class="smartic-woocommerce-title">Home 22</div><nav class="woocommerce-breadcrumb"><span><a href="https://demo2.wpopal.com/smartic">Home Page</a></span><i class="smartic-icon-long-arrow-right"></i><span>Home 22</span></nav> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<div id="content" class="site-content" tabindex="-1">
<div class="col-full">
<div class="woocommerce"></div> <div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
<div data-elementor-type="wp-page" data-elementor-id="8689" class="elementor elementor-8689" data-elementor-settings="[]">
<div class="elementor-inner">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-e7f3da8 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="e7f3da8" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-66a31eb" data-id="66a31eb" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-917a482 elementor-widget elementor-widget-smartic-revslider" data-id="917a482" data-element_type="widget" data-widget_type="smartic-revslider.default">
<div class="elementor-widget-container">
<p class="rs-p-wp-fix"></p>
<rs-module-wrap id="rev_slider_18_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:;">
<rs-module id="rev_slider_18_1" style="" data-version="6.4.6">
<rs-slides>
<rs-slide data-key="rs-19" data-title="Slide" data-in="o:0;" data-out="a:false;">
<img width="1760" height="940" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201760%20940'%3E%3C/svg%3E" title="Home 22" class="rev-slidebg tp-rs-img" data-no-retina data-lazy-src="//demo2wpopal.b-cdn.net/smartic/wp-content/uploads/revslider/Layer-2.jpg"><noscript><img width="1760" height="940" src="//demo2wpopal.b-cdn.net/smartic/wp-content/uploads/revslider/Layer-2.jpg" title="Home 22" class="rev-slidebg tp-rs-img" data-no-retina></noscript>
<rs-group id="slider-18-slide-19-layer-3" data-type="group" data-xy="x:l,l,c,c;xo:535px,96px,0,0;y:m,m,t,t;yo:50px,0,90px,95px;" data-text="s:20,10,20,20;l:22,11,22,22;a:inherit,inherit,center,center;" data-dim="w:464px,434px,714px,467px;h:382px,352px,250px,350px;" data-frame_0="x:-100%;o:1;" data-frame_0_mask="u:t;" data-frame_1="sp:1500;sR:10;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7490;sA:9000;" style="z-index:12;"><rs-layer id="slider-18-slide-19-layer-2" data-type="text" data-xy="x:l,l,c,c;" data-text="s:12;l:22;ls:0px,0px,1px,1px;fw:600,600,500,500;a:inherit,inherit,center,center;" data-rsp_bd="off" data-frame_1="st:170;sp:880;sR:160;" data-frame_999="o:0;st:w;sR:7950;" style="z-index:9;font-family:" BROmny";text-transform:uppercase;">DIGA ADEUS AOS CABOS
</rs-layer><rs-layer id="slider-18-slide-19-layer-4" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:0,0,0,-1px;yo:48px,48px,35px,46px;" data-text="w:normal;s:60,60,50,50;l:60,60,60,50;fw:300;a:inherit,inherit,center,center;" data-dim="w:440px,440px,546px,443px;h:213px,213px,auto,182px;" data-frame_1="st:670;sp:850;sR:660;" data-frame_999="o:0;st:w;sR:7480;" style="z-index:10;font-family:Barlow;">Mais liberdade e diversão com esse sistema wireless
</rs-layer><rs-layer id="slider-18-slide-19-layer-5" class="rev-btn" data-type="button" data-color="#000000" data-xy="x:l,l,c,c;y:t,t,b,b;yo:300px,280px,0,0;" data-text="s:14;l:55;fw:700,700,500,500;a:inherit;" data-rsp_bd="off" data-padding="r:40;l:40;" data-border="bor:4px,4px,4px,4px;" data-frame_1="st:1040;sp:870;sR:1030;" data-frame_999="o:0;st:w;sR:7090;" data-frame_hover="c:#fff;bgc:#000;boc:#000;bor:4px,4px,4px,4px;bos:solid;oX:50;oY:50;sp:0;e:none;" style="z-index:11;background-color:#ffffff;font-family:" BROmny";cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><a href="http://asiahub.com.br/cart/?add-to-cart=3258">Comprar Agora</a>
</rs-layer></rs-group><rs-layer id="slider-18-slide-19-layer-1" data-type="image" data-rsp_ch="on" data-xy="x:c;xo:0,0,-275px,-240px;y:t,b,t,t;yo:275px,0,365px,475px;" data-text="l:22;a:inherit;" data-dim="w:1920px,1920px,1572px,1461px;h:666px,666px,595px,553px;" data-frame_0="y:100%;" data-frame_0_mask="u:t;y:100%;" data-frame_1="e:power2.inOut;st:520;sp:1280;sR:520;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:7200;" style="z-index:8;"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201920%20666'%3E%3C/svg%3E" class="tp-rs-img" width="1920" height="666" data-no-retina data-lazy-src="http://asiahub.link/wp-content/uploads/2021/11/first_image-1.png"><noscript><img src="//demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/Layer-1.png" class="tp-rs-img" width="1920" height="666" data-no-retina></noscript>
</rs-layer> </rs-slide>
</rs-slides>
</rs-module>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="rocketlazyloadscript" data-rocket-type="text/javascript">
					setREVStartSize({c: 'rev_slider_18_1',rl:[1240,1025,778,481],el:[890,890,890,890],gw:[1920,1024,778,480],gh:[890,890,890,890],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
					var	revapi18,
						tpj;
					function revinit_revslider181() {
					jQuery(function() {
						tpj = jQuery;
						revapi18 = tpj("#rev_slider_18_1");
						if(revapi18==undefined || revapi18.revolution == undefined){
							revslider_showDoubleJqueryError("rev_slider_18_1");
						}else{
							revapi18.revolution({
								DPR:"dpr",
								visibilityLevels:"1240,1025,778,481",
								gridwidth:"1920,1024,778,480",
								gridheight:"890,890,890,890",
								spinner:"spinner0",
								perspective:600,
								perspectiveType:"local",
								editorheight:"890,890,890,890",
								responsiveLevels:"1240,1025,778,481",
								progressBar:{disableProgressBar:true},
								navigation: {
									onHoverStop:false
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}
						
					});
					} // End of RevInitScript
				var once_revslider181 = false;
				if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider181 ) { once_revslider181 = true; revinit_revslider181();}});} else {once_revslider181 = true; revinit_revslider181();}
				</script>
<script type="rocketlazyloadscript">
					var htmlDivCss = unescape(".before-btn%3Abefore%20%7B%0A%20%20%20%20content%3A%20%22%22%3B%0A%20%20%20%20width%3A%2030px%3B%0A%20%20%20%20height%3A%201px%3B%0A%20%20%20%20background%3A%20%23fff%3B%0A%20%20%20%20display%3A%20inline-block%3B%0A%20%20%20%20margin-right%3A%2015px%3B%0A%20%20%20%20vertical-align%3A%20middle%3B%0A%7D%0A%0A.before-btn%3Ahover%3Abefore%20%7B%0A%20%20%20%20content%3A%20%22%22%3B%0A%20%20%20%20width%3A%2030px%3B%0A%20%20%20%20height%3A%201px%3B%0A%20%20%20%20background%3A%20%23000%3B%0A%20%20%20%20display%3A%20inline-block%3B%0A%20%20%20%20margin-right%3A%2015px%3B%0A%20%20%20%20vertical-align%3A%20middle%3B%0A%7D");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
</rs-module-wrap>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-bf97e4b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bf97e4b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7bdc638" data-id="7bdc638" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-83292a8 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="83292a8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Overview</h3> </div>
</div>
<div class="elementor-element elementor-element-ca31d06 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="ca31d06" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Meus ensaios ficaram ainda melhores</h2> </div>
</div>
<div class="elementor-element elementor-element-8cc5db8 animated-fast elementor-invisible elementor-widget elementor-widget-text-editor" data-id="8cc5db8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Com o A8 Original eu toco guitarra, baixo, violão, violino, saxofone e muitos outros como um profissional. Eu conecto meus instrumnetos com a mesa de som ou amplificador sem usar cabos. Chega de cabos quebrados e ruídos indesejáveis! Agora eu tenho muito mais liberdade e diversão.</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-37959ee" data-id="37959ee" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-64d8abb animated-fast elementor-view-default elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="64d8abb" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-grow">
<i aria-hidden="true" class="smartic-icon- smartic-icon-audio"></i> </span>
</div>
<div class="elementor-icon-box-content">
<h3 class="elementor-icon-box-title">
<span>Plug and<br>Paly</span>
</h3>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-47e9742" data-id="47e9742" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-5aca7cf animated-fast elementor-view-default elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="5aca7cf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-grow">
<i aria-hidden="true" class="smartic-icon- smartic-icon-view"></i> </span>
</div>
<div class="elementor-icon-box-content">
<h3 class="elementor-icon-box-title">
<span>Bateria de 4h<br>Integrada</span>
</h3>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5ed3448" data-id="5ed3448" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-8756790 animated-fast elementor-view-default elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-id="8756790" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-grow">
<i aria-hidden="true" class="smartic-icon- smartic-icon-wifi-3"></i> </span>
</div>
<div class="elementor-icon-box-content">
<h3 class="elementor-icon-box-title">
<span>Alcance<br> 50m</span>
</h3>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-e254bc4 elementor-section-stretched elementor-section-full_width elementor-reverse-mobile elementor-section-height-default elementor-section-height-default" data-id="e254bc4" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8f5e2d8" data-id="8f5e2d8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-fe9e232 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="fe9e232" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Som cristalino</h2> </div>
</div>
<div class="elementor-element elementor-element-7ebb341 animated-fast elementor-invisible elementor-widget elementor-widget-text-editor" data-id="7ebb341" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Liberdade e diversão com qualidade. Fabricado com componentes de última geração e da maior qualidade. O A8 Original é uma maneira acessível e confiável de aproveitar ao máximo seus ensaios e shows. </div>
</div>
</div>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-d5113aa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d5113aa" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c8ecc6c animated-fast elementor-invisible" data-id="c8ecc6c" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;opal-move-up&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-2312b27 elementor-view-default elementor-widget elementor-widget-icon" data-id="2312b27" data-element_type="widget" data-widget_type="icon.default">
<div class="elementor-widget-container">
<div class="elementor-icon-wrapper">
<div class="elementor-icon elementor-animation-grow">
<i aria-hidden="true" class="smartic-icon- smartic-icon-chip"></i> </div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-5f5f996 elementor-widget elementor-widget-heading" data-id="5f5f996" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h4 class="elementor-heading-title elementor-size-default">Frequência:<br>
UHF 730 MHz</h4> </div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bc37378 animated-fast elementor-invisible" data-id="bc37378" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;opal-move-up&quot;,&quot;animation_delay&quot;:200}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-38dd1fb elementor-view-default elementor-widget elementor-widget-icon" data-id="38dd1fb" data-element_type="widget" data-widget_type="icon.default">
<div class="elementor-widget-container">
<div class="elementor-icon-wrapper">
<div class="elementor-icon elementor-animation-grow">
<i aria-hidden="true" class="smartic-icon- smartic-icon-distortion"></i> </div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-fa23b8f elementor-widget elementor-widget-heading" data-id="fa23b8f" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h4 class="elementor-heading-title elementor-size-default">Latência:<br>
menos de 4 ms</h4> </div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-108fa1a animated-fast elementor-invisible" data-id="108fa1a" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;opal-move-up&quot;,&quot;animation_delay&quot;:300}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-16bf6ff elementor-view-default elementor-widget elementor-widget-icon" data-id="16bf6ff" data-element_type="widget" data-widget_type="icon.default">
<div class="elementor-widget-container">
<div class="elementor-icon-wrapper">
<div class="elementor-icon elementor-animation-grow">
<i aria-hidden="true" class="smartic-icon- smartic-icon-lens"></i> </div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-56dbd4a elementor-widget elementor-widget-heading" data-id="56dbd4a" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h4 class="elementor-heading-title elementor-size-default">Peso: 35g</h4> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7ddf247" data-id="7ddf247" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-3d4f899 elementor-widget elementor-widget-smartic-image-comparison" data-id="3d4f899" data-element_type="widget" data-widget_type="smartic-image-comparison.default">
<div class="elementor-widget-container">
<div class="smartic-image-comparison-contents-wrapper smartic-twentytwenty-wrapper">
<div id="smartic-image-comparison-contents-wrapper-3d4f899" class="smartic-images-compare-container smartic-twentytwenty-container" data-settings="{&quot;orientation&quot;:&quot;horizontal&quot;,&quot;visibleRatio&quot;:0.5,&quot;switchBefore&quot;:true,&quot;beforeLabel&quot;:&quot;&quot;,&quot;switchAfter&quot;:true,&quot;afterLabel&quot;:&quot;&quot;,&quot;mouseMove&quot;:false,&quot;clickMove&quot;:true,&quot;showDrag&quot;:true,&quot;showSep&quot;:true,&quot;overlay&quot;:true,&quot;beforePos&quot;:&quot;middle&quot;,&quot;afterPos&quot;:&quot;middle&quot;,&quot;verbeforePos&quot;:null,&quot;verafterPos&quot;:null}">
<img width="970" height="640" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20970%20640'%3E%3C/svg%3E" alt="" data-lazy-src="http://asiahub.link/wp-content/uploads/2021/11/musico.jpg"><noscript><img width="970" height="640" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_before.png" alt=""></noscript>
<img width="970" height="640" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20970%20640'%3E%3C/svg%3E" alt="" data-lazy-src="http://asiahub.link/wp-content/uploads/2021/11/musico.jpg"><noscript><img width="970" height="640" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_after.png" alt=""></noscript>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-d1c705e elementor-section-stretched elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d1c705e" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c0f1ca overflow-hidden" data-id="6c0f1ca" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-a9fd262 animated-fast elementor-invisible elementor-widget elementor-widget-image" data-id="a9fd262" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;,&quot;_animation_delay&quot;:100}" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="478" height="735" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20478%20735'%3E%3C/svg%3E" class="elementor-animation-sink attachment-full size-full" alt="" data-lazy-srcset="https://asiahub.com.br/wp-content/uploads/2021/11/phone_guitar.png" data-lazy-sizes="(max-width: 478px) 100vw, 478px" data-lazy-src="https://asiahub.com.br/wp-content/uploads/2021/11/phone_guitar.png" /><noscript><img width="478" height="735" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_niche_14_img-3.png" class="elementor-animation-sink attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_niche_14_img-3.png 478w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_niche_14_img-3-195x300.png 195w" sizes="(max-width: 478px) 100vw, 478px" /></noscript> </div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f915547" data-id="f915547" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-bb905bd animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="bb905bd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">5 argumentos para convencer você</h2> </div>
</div>
<div class="elementor-element elementor-element-0163188 animated-fast elementor-invisible elementor-widget elementor-widget-text-editor" data-id="0163188" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Nós garantimos nosso produto, e acreditamos que nossos clientes não deveriam ter que pagar por algo de que não gostam. Se você não estiver satisfeito com o A8 Original por qualquer motivo, basta nos devolver o aparelho dentro de 30 dias do recebimento que devolvemos o seu dinheiro.</div>
</div>
</div>
<div class="elementor-element elementor-element-be12b85 animated-fast elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-id="be12b85" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
<li class="elementor-icon-list-item">
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-check-square"></i> </span>
<span class="elementor-icon-list-text">O som é tão bom que você nunca mais usará um cabo padrão.</span>
</li>
<li class="elementor-icon-list-item">
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-check-square"></i> </span>
<span class="elementor-icon-list-text">Uma maneira extremamente acessível e confiável de aproveitar ao máximo sua sessão.</span>
</li>
<li class="elementor-icon-list-item">
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-check-square"></i> </span>
<span class="elementor-icon-list-text">Apenas alguns segundos para conectá-lo ao seu instrumento.</span>
</li>
<li class="elementor-icon-list-item">
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-check-square"></i> </span>
<span class="elementor-icon-list-text">Desfrute de estabilidade sólida e alcance de até 50 metros.</span>
</li>
<li class="elementor-icon-list-item">
<span class="elementor-icon-list-icon">
<i aria-hidden="true" class="fas fa-check-square"></i> </span>
<span class="elementor-icon-list-text">Mais de 4 horas de uso contínuo e recarregável em 1 hora graças ao cabo de carregamento fornecido com o pedido.</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-79c66d0 elementor-section-stretched elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="79c66d0" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-708383e" data-id="708383e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-37ed6a7 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="37ed6a7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Para todos instrumentos</h2> </div>
</div>
<div class="elementor-element elementor-element-0719408 animated-fast elementor-invisible elementor-widget elementor-widget-text-editor" data-id="0719408" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Compatível com todos instrumentos, todos amplificadores, mesas e até pedalboards.
</div>
</div>
</div>
<div class="elementor-element elementor-element-814f67d animated-fast elementor-invisible elementor-widget elementor-widget-text-editor" data-id="814f67d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>Conjunto de transmissor & receptor sem fio para instrumentos musicais eletroacústicos como guitarra, baixo, etc. Plug and play, simples de usar; tamanho compacto e leve, fácil de transportar.</p> </div>
</div>
</div>
<div class="elementor-element elementor-element-b5d9885 animated-fast elementor-invisible elementor-widget elementor-widget-button" data-id="b5d9885" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a href="http://asiahub.com.br/cart/?add-to-cart=3258" class="elementor-button-link elementor-button elementor-size-sm" role="button">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-text">Comprar Agora</span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f24eb18" data-id="f24eb18" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-a9e4f0b elementor-widget elementor-widget-spacer" data-id="a9e4f0b" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-ce462e7 elementor-section-stretched elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ce462e7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7ddbd86" data-id="7ddbd86" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-dfb9f2d elementor-widget elementor-widget-spacer" data-id="dfb9f2d" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fb8258b" data-id="fb8258b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-97729f6 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="97729f6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Para todos guitarristas</h2> </div>
</div>
<div class="elementor-element elementor-element-505f047 animated-fast elementor-invisible elementor-widget elementor-widget-text-editor" data-id="505f047" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Seja você um amador, um profissional ou mesmo o próximo Jimi Hendrix, nós temos a solução para torná-lo livre. </div>
</div>
</div>
<div class="elementor-element elementor-element-0529ad8 animated-fast elementor-invisible elementor-widget elementor-widget-text-editor" data-id="0529ad8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Transmissão de som original UHF de 730mhz, anti-interferência e atraso ultracurto, proporcionando o melhor som musical. Suporta 4 conjuntos de dispositivos que funcionam ao mesmo tempo, um para um. Ideal para ensaios e até shows.</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-578e254 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="578e254" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-40d31d1" data-id="40d31d1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-7efc4cd animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="7efc4cd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Rápido e fácil de usar
</h2> </div>
</div>
<div class="elementor-element elementor-element-9f8a854 animated-fast elementor-invisible elementor-widget elementor-widget-text-editor" data-id="9f8a854" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>O A8 Original é confiável e muito acessível. Basta ligar, plugar no seu instrumento e sair tocando. Com uma liberdade ainda não vista antes. Com o alcance de 50m e a bateira de lítio recarrregável integrada de 4 horas de duração, você será livre para aproveitar seus movimentos enquanto toca.</p> </div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fae3de3" data-id="fae3de3" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-43f311d elementor-widget elementor-widget-image" data-id="43f311d" data-element_type="widget" data-settings="{&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]}}" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="434" height="554" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20434%20554'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://asiahub.com.br/wp-content/uploads/2021/11/A8-Original-caixa.png" data-lazy-sizes="(max-width: 434px) 100vw, 434px" data-lazy-src="https://asiahub.com.br/wp-content/uploads/2021/11/A8-Original-caixa.png" /><noscript><img width="434" height="554" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_img-6.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_img-6.jpg 434w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_img-6-235x300.jpg 235w" sizes="(max-width: 434px) 100vw, 434px" /></noscript> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-2c9161b elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2c9161b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-652a1c6" data-id="652a1c6" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-f17f3d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f17f3d7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8180122" data-id="8180122" data-element_type="column">
<div class="elementor-column-wrap">
<div class="elementor-widget-wrap">
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-cc3a497" data-id="cc3a497" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-2a29bcc animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="2a29bcc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">A tecnologia que faltava para minha banda</h2> </div>
</div>
<div class="elementor-element elementor-element-fa4b038 animated-fast elementor-invisible elementor-widget elementor-widget-smartic-video-popup" data-id="fa4b038" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="smartic-video-popup.default">
<div class="elementor-widget-container">
<div class="elementor-video-wrapper smartic-video-popup">
<a class="elementor-video-popup" role="button" href="https://www.youtube.com/watch?v=_EwrluAdvIA" data-effect="mfp-zoom-in">
<span class="elementor-video-icon"><i class="smartic-icon-play-2"></i></span>
<span class="elementor-video-title">ver video</span> </a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4b28c35" data-id="4b28c35" data-element_type="column">
<div class="elementor-column-wrap">
<div class="elementor-widget-wrap">
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-9f998b0 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9f998b0" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0bb8381" data-id="0bb8381" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-89d0943 animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="89d0943" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Especificações</h3> </div>
</div>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-b0fa2c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b0fa2c6" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4ef8b4e animated-fast elementor-invisible" data-id="4ef8b4e" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;opal-move-up&quot;,&quot;animation_delay&quot;:100}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-d8bc064 elementor-widget elementor-widget-heading" data-id="d8bc064" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Geral</h3> </div>
</div>
<div class="elementor-element elementor-element-160e250 elementor-widget elementor-widget-text-editor" data-id="160e250" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>Modelo: A8 Originalsound;<br />Faixa de resposta de áudio: 20hz-20khz;<br />Frequência: UHF 730mhz;<br />Faixa de transmissão: máx. 50m (sem obstáculo); 30m (através da parede);<br />Atraso de transmissão: menos de 4ms. <br /></p> </div>
</div>
</div>
<div class="elementor-element elementor-element-0eb7b98 elementor-widget elementor-widget-heading" data-id="0eb7b98" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Conteúdo da Embalagem</h3> </div>
</div>
<div class="elementor-element elementor-element-8392713 elementor-widget elementor-widget-text-editor" data-id="8392713" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Conteúdo da Embalagem: <br>
1 x Transmissor; <br>
1 x Receptor; <br>
1 x USB Cabo Carregador; <br> 
1 x Manual. <br> </div>
</div>
</div>
<div class="elementor-element elementor-element-2ffcdd4 elementor-widget elementor-widget-heading" data-id="2ffcdd4" data-element_type="widget" data-widget_type="heading.default">
<!-- <div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">System and Hardware Info</h3> </div> -->
</div>
<div class="elementor-element elementor-element-e758409 elementor-widget elementor-widget-text-editor" data-id="e758409" data-element_type="widget" data-widget_type="text-editor.default">
<!-- <div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Mobile Access: Android,IOS<br>
Local-storage: Micro SD card up to 32GB<br>
FOV: 100.2 degree </div>
</div> -->
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-df38f62 animated-fast elementor-invisible" data-id="df38f62" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;opal-move-up&quot;,&quot;animation_delay&quot;:200}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-7b16ae8 elementor-widget elementor-widget-heading" data-id="7b16ae8" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Transporte e Entrega</h3> </div>
</div>
<div class="elementor-element elementor-element-c960bcd elementor-widget elementor-widget-text-editor" data-id="c960bcd" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Origem: China;<br>
Prazo de recebimento: de 3 a 7 semanas;<br>
Estimativa de prazo de entrega por região:<br>
– Sul e Sudeste: 15-22 dias úteis;<br>
– Centro-Oeste, Norte e Nordeste: 22-32 dias úteis;<br>
Entregue pelos Correios. </div>
</div>
</div>
<div class="elementor-element elementor-element-55903bc elementor-widget elementor-widget-heading" data-id="55903bc" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Luzes Indicativas</h3> </div>
</div>
<div class="elementor-element elementor-element-e62796f elementor-widget elementor-widget-text-editor" data-id="e62796f" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
LED: Verde, amarelo, vermelho e azul.</div>
</div>
</div>
<div class="elementor-element elementor-element-3940df1 elementor-widget elementor-widget-heading" data-id="3940df1" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Características Físicas</h3> </div>
</div>
<div class="elementor-element elementor-element-90861e9 elementor-widget elementor-widget-text-editor" data-id="90861e9" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Material: ABS Plástico;<br>
Ambiente: Interno;<br>
A prova d'água: Não;<br>
Temperatura de operação (℃): -10 &#8211; 50 Graus Celsius.</div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c9a6d6c animated-fast elementor-invisible" data-id="c9a6d6c" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;opal-move-up&quot;,&quot;animation_delay&quot;:300}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-4f64fa2 elementor-widget elementor-widget-heading" data-id="4f64fa2" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Bateria</h3> </div>
</div>
<div class="elementor-element elementor-element-919bca2 elementor-widget elementor-widget-text-editor" data-id="919bca2" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Bateria de lítio recarregável de 3.7v 600mah integrada;<br>
Porta de carga: micro USB.
</div>
</div>
</div>
<div class="elementor-element elementor-element-5e6a4b0 elementor-widget elementor-widget-heading" data-id="5e6a4b0" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Dimensões e Peso</h3> </div>
</div>
<div class="elementor-element elementor-element-f5efae7 elementor-widget elementor-widget-text-editor" data-id="f5efae7" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Peso produto: 0.035 kg;<br>
Peso embalagem: 0.150 kg;<br>
Dimensões produto (L x P x A): 11.00 x 4,50 x 1,50 cm;<br>
Dimensões embalagem (L x P x A): 17.50 x 10.50 x 5.00 cm.
</div>
</div>
<div class="elementor-element elementor-element-29343b0 elementor-widget elementor-widget-heading" data-id="29343b0" data-element_type="widget" data-widget_type="heading.default">
<!-- <div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Conteúdo da Embalagem</h3> </div> -->
</div>
<div class="elementor-element elementor-element-a7973af elementor-widget elementor-widget-text-editor" data-id="a7973af" data-element_type="widget" data-widget_type="text-editor.default">
<!-- <div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
Conteúdo da Embalagem: <br>
1 x Transmissor; <br>
1 x Receptor; <br>
1 x USB Cabo Carregador; <br> 
1 x Manual. <br></div>
</div> -->
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-bc0c3ff elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bc0c3ff" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b439ec1 animated-fast elementor-invisible" data-id="b439ec1" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;opal-move-right&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-dc4f357 elementor-widget elementor-widget-image" data-id="dc4f357" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<div class="elementor-image">
<img width="342" height="521" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20342%20521'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://asiahub.com.br/wp-content/uploads/2021/11/A8-Original-dupla.png" data-lazy-sizes="(max-width: 342px) 100vw, 342px" data-lazy-src="https://asiahub.com.br/wp-content/uploads/2021/11/A8-Original-dupla.png" /><noscript><img width="342" height="521" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_img-2.png" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_img-2.png 342w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/home-14_img-2-197x300.png 197w" sizes="(max-width: 342px) 100vw, 342px" /></noscript> </div>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d5e653e" data-id="d5e653e" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-90e652c animated-fast elementor-invisible elementor-widget elementor-widget-heading" data-id="90e652c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Ganhe 50% de desconto no seu primeiro pedido</h2> </div>
</div>
<div class="elementor-element elementor-element-d8ad028 animated-fast elementor-invisible elementor-widget elementor-widget-text-editor" data-id="d8ad028" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>O preço do A8 Original é R$394,00, sendo o preço promocional com desconto de 50% por TEMPO LIMITADO de R$197,00.</p> </div>
</div>
</div>
<div class="elementor-element elementor-element-b62408c elementor-widget__width-auto animated-fast elementor-invisible elementor-widget elementor-widget-button" data-id="b62408c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-right&quot;}" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a href="http://asiahub.com.br/cart/?add-to-cart=3258" class="elementor-button-link elementor-button elementor-size-sm" role="button">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-text">Comprar Agora</span>
</span>
</a>
</div>
</div>
</div>
<div class="elementor-element elementor-element-41ae07f elementor-widget__width-auto animated-fast elementor-invisible elementor-widget elementor-widget-text-editor" data-id="41ae07f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-left&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<span style="font-size: 14px; text-decoration:line-through;">De R$394,00</span><br>
Por R$197,00</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</main>
</div>
</div>
</div>
<div data-elementor-type="footer" data-elementor-id="10414" class="elementor elementor-10414 elementor-location-footer" data-elementor-settings="[]">
<div class="elementor-section-wrap">
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-1c3c5a9 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1c3c5a9" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-da40d63" data-id="da40d63" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-021bd64 elementor-widget elementor-widget-heading" data-id="021bd64" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Stay up-to-date on the latest news and events</h2> </div>
</div>
<div class="elementor-element elementor-element-6056327 elementor-widget-mobile__width-initial elementor-button-align-end elementor-widget elementor-widget-form" data-id="6056327" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;20&quot;,&quot;button_width_mobile&quot;:&quot;20&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
<div class="elementor-widget-container">
<form class="elementor-form" method="post" name="New Form">
<input type="hidden" name="post_id" value="10414" />
<input type="hidden" name="form_id" value="6056327" />
<input type="hidden" name="referer_title" value="Home 22" />
<input type="hidden" name="queried_id" value="8689" />
<div class="elementor-form-fields-wrapper elementor-labels-above">
<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-80 elementor-md-75 elementor-sm-70 elementor-field-required">
<input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email address..." required="required" aria-required="true"> </div>
<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-20 e-form__buttons elementor-sm-20">
<button type="submit" class="elementor-button elementor-size-xs">
<span>
<span class="elementor-align-icon-left elementor-button-icon">
<i aria-hidden="true" class="smartic-icon- smartic-icon-long-arrow-right"></i> <span class="elementor-screen-only">Submit</span>
</span>
</span>
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2b5d416" data-id="2b5d416" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-0fad168 elementor-widget elementor-widget-heading" data-id="0fad168" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">quick links</h3> </div>
</div>
<div class="elementor-element elementor-element-4578b09 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4578b09" data-element_type="widget" data-widget_type="icon-list.default">
<div class="elementor-widget-container">
<ul class="elementor-icon-list-items">
<li class="elementor-icon-list-item">
<a href="https://demo2.wpopal.com/smartic/product-category/smart-watch/"> <span class="elementor-icon-list-text">My Order</span>
</a>
</li>
<li class="elementor-icon-list-item">
<a href="https://demo2.wpopal.com/smartic/product-category/smart-watch/"> <span class="elementor-icon-list-text">About Us</span>
</a>
</li>
<li class="elementor-icon-list-item">
<a href="https://demo2.wpopal.com/smartic/product-category/thermometer/"> <span class="elementor-icon-list-text">Contact Us</span>
</a>
</li>
<li class="elementor-icon-list-item">
<a href="https://demo2.wpopal.com/smartic/product-category/weight-loss/"> <span class="elementor-icon-list-text">Shipping Policy</span>
</a>
</li>
<li class="elementor-icon-list-item">
<a href="https://demo2.wpopal.com/smartic/product-category/wifi-router/"> <span class="elementor-icon-list-text">Refunds & Cancellations</span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6a12d48" data-id="6a12d48" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-02509b8 elementor-widget elementor-widget-heading" data-id="02509b8" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">contact us</h3> </div>
</div>
<div class="elementor-element elementor-element-3c10d8b elementor-widget elementor-widget-text-editor" data-id="3c10d8b" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
<p>Decorwise Ltd, 286 Upper Richmond Road Putney, London<br />Email: <a style="color: var(--primary);" href="/cdn-cgi/l/email-protection#5c3f3332283d3f281c39243d312c3039723f3331"><span class="__cf_email__" data-cfemail="e4878b8a90858790a4819c8589948881ca878b89">[email&#160;protected]</span></a></p> </div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-6075ec5 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6075ec5" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="make-column-clickable-elementor elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e4a913a" style="cursor: pointer;" data-column-clickable="#top" data-column-clickable-blank="_self" data-id="e4a913a" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-a706dc4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="a706dc4" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
<div class="elementor-divider">
<span class="elementor-divider-separator">
</span>
</div>
</div>
</div>
<div class="elementor-element elementor-element-092a645 elementor-view-framed elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="092a645" data-element_type="widget" data-widget_type="icon-box.default">
<div class="elementor-widget-container">
<div class="elementor-icon-box-wrapper">
<div class="elementor-icon-box-icon">
<span class="elementor-icon elementor-animation-">
<i aria-hidden="true" class="fas fa-caret-up"></i> </span>
</div>
<div class="elementor-icon-box-content">
<h3 class="elementor-icon-box-title">
<span></span>
</h3>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-f3d9f2e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f3d9f2e" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a9d6f97" data-id="a9d6f97" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-0540e12 elementor-widget elementor-widget-text-editor" data-id="0540e12" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<div class="elementor-text-editor elementor-clearfix">
© Asiahub 2021 - <a href="https://demo2.wpopal.com/smartic/"> CHINA MART LOGISTICA EIRELI CNPJ: 18.484.529/0001-93</a> - Av. Independência 1580 - Santa Cruz do Sul - RS - Brasil. CEP: 96.815-326 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<!-- <form role="search" method="get" class="woocommerce-product-search" action="https://demo2.wpopal.com/smartic/">
<label class="screen-reader-text" for="woocommerce-product-search-field-1">Search for:</label>
<input type="search" id="woocommerce-product-search-field-1" class="search-field" placeholder="Search products&hellip;" autocomplete="off" value="" name="s" />
<button type="submit" value="Search">Search</button>
<input type="hidden" name="post_type" value="product" />
</form> -->
</div> </div>
</li>
</ul>
</div>
</div>
<div class="account-wrap" style="display: none;">
<div class="account-inner ">
<div class="login-form-head">
<span class="login-form-title">Sign in</span>
<span class="pull-right">
<a class="register-link" href="https://demo2.wpopal.com/smartic/wp-login.php?action=register" title="Register">Create an Account</a>
</span>
</div>
<form class="smartic-login-form-ajax" data-toggle="validator">
<p>
<label>Username or email <span class="required">*</span></label>
<input name="username" type="text" required placeholder="Username">
</p>
<p>
<label>Password <span class="required">*</span></label>
<input name="password" type="password" required placeholder="Password">
</p>
<button type="submit" data-button-action class="btn btn-primary btn-block w-100 mt-1">Login</button>
<input type="hidden" name="action" value="smartic_login">
<input type="hidden" id="security-login" name="security-login" value="dac86c6f05" /><input type="hidden" name="_wp_http_referer" value="/smartic/home-22/" /> </form>
<div class="login-form-bottom">
<a href="https://demo2.wpopal.com/smartic/my-account/lost-password/" class="lostpass-link" title="Lost your password?">Lost your password?</a>
</div>
</div>
</div>
<!-- <div class="smartic-mobile-nav">
<a href="#" class="mobile-nav-close"><i class="smartic-icon-times"></i></a>
<nav class="mobile-navigation" aria-label="Mobile Navigation">
<div class="handheld-navigation"><ul id="menu-main-menu-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-479"><a href="https://demo2.wpopal.com/smartic/">Home</a>
<ul class="sub-menu">
<li id="menu-item-480" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-480"><a href="https://demo2.wpopal.com/smartic/">Home 1</a></li>
<li id="menu-item-500" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-500"><a href="https://demo2.wpopal.com/smartic/home-2/">Home 2</a></li>
<li id="menu-item-481" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-481"><a href="https://demo2.wpopal.com/smartic/home-3/">Home 3</a></li>
<li id="menu-item-482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-482"><a href="https://demo2.wpopal.com/smartic/home-4/">Home 4</a></li>
<li id="menu-item-1098" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1098"><a href="https://demo2.wpopal.com/smartic/home-5/">Home 5</a></li>
<li id="menu-item-1097" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1097"><a href="https://demo2.wpopal.com/smartic/home-6/">Home 6</a></li>
<li id="menu-item-1096" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1096"><a href="https://demo2.wpopal.com/smartic/home-7/">Home 7</a></li>
<li id="menu-item-1095" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1095"><a href="https://demo2.wpopal.com/smartic/home-8/">Home 8</a></li>
<li id="menu-item-1094" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1094"><a href="https://demo2.wpopal.com/smartic/home-9/">Home 9</a></li>
<li id="menu-item-1093" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1093"><a href="https://demo2.wpopal.com/smartic/home-10/">Home 10</a></li>
<li id="menu-item-1092" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1092"><a href="https://demo2.wpopal.com/smartic/home-11/">Home 11</a></li>
<li id="menu-item-1091" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1091"><a href="https://demo2.wpopal.com/smartic/home-12/">Home 12</a></li>
<li id="menu-item-1090" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1090"><a href="https://demo2.wpopal.com/smartic/home-13/">Home 13</a></li>
<li id="menu-item-1089" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1089"><a href="https://demo2.wpopal.com/smartic/home-14/">Home 14</a></li>
<li id="menu-item-7396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7396"><a href="https://demo2.wpopal.com/smartic/home-15/">Home 15</a></li>
<li id="menu-item-7393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7393"><a href="https://demo2.wpopal.com/smartic/home-16/">Home 16</a></li>
<li id="menu-item-7395" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7395"><a href="https://demo2.wpopal.com/smartic/home-17/">Home 17</a></li>
<li id="menu-item-7394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7394"><a href="https://demo2.wpopal.com/smartic/home-18/">Home 18</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-483"><a href="https://demo2.wpopal.com/smartic/shop/">Shop</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-620"><a href="https://demo2.wpopal.com/smartic/shop/?woocommerce_archive_layout=canvas&#038;woocommerce_catalog_columns=4">Shop &#8211; Fullwidth</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-621"><a href="https://demo2.wpopal.com/smartic/shop/">Shop &#8211; Sidebar</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-622"><a href="https://demo2.wpopal.com/smartic/shop/?layout=list">Shop &#8211; Listview</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-623"><a href="#">Product</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-624"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/?single_product_gallery_layout=vertical">Vertical Thumbnail</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-625"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/">Horizontal Thumbnail</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-626"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/?single_product_gallery_layout=sticky">Sticky Detail</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-627"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/?single_product_gallery_layout=gallery">Gallery Thumbnail</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-628"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/">Video Upload</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-629"><a href="https://demo2.wpopal.com/smartic/product/stainless-steel-portable-fast/">360 Viewer</a></li>
</ul>
</li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-484"><a href="#">Pages</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1870"><a href="https://demo2.wpopal.com/smartic/about-1/">About 1</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1871"><a href="https://demo2.wpopal.com/smartic/about-2/">About 2</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1873"><a href="https://demo2.wpopal.com/smartic/about-3/">About 3</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1872"><a href="https://demo2.wpopal.com/smartic/about-4/">About 4</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1874"><a href="https://demo2.wpopal.com/smartic/about-5/">About 5</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-635"><a href="https://demo2.wpopal.com/smartic/faq/">FAQ</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2762"><a href="https://demo2.wpopal.com/smartic/404">404</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1875"><a href="https://demo2.wpopal.com/smartic/icons/">Icons</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-485"><a href="https://demo2.wpopal.com/smartic/blog/">Blog</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1165"><a href="https://demo2.wpopal.com/smartic/blog/">Blog &#8211; Standard</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-632"><a href="https://demo2.wpopal.com/smartic/blog/?blog_style=grid&#038;sidebar-blog=0">Blog &#8211; Gridview</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-633"><a href="https://demo2.wpopal.com/smartic/blog/?blog_style=listview">Blog &#8211; Listview</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1166"><a href="https://demo2.wpopal.com/smartic/why-every-startup-should-adopt-amazons-hot-air-baloon-race/">Single Post</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1859"><a href="https://demo2.wpopal.com/smartic/contact-1/">Contact</a>
<ul class="sub-menu">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1867"><a href="https://demo2.wpopal.com/smartic/contact-1/">Contact 1</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1861"><a href="https://demo2.wpopal.com/smartic/contact-2/">Contact 2</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1860"><a href="https://demo2.wpopal.com/smartic/contact-3/">Contact 3</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1862"><a href="https://demo2.wpopal.com/smartic/contact-4/">Contact 4</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1863"><a href="https://demo2.wpopal.com/smartic/contact-5/">Contact 5</a></li>
</ul>
</li>
</ul></div> </nav>
</div> -->
<div class="smartic-overlay"></div>
<div data-elementor-type="section" data-elementor-id="16077" class="elementor elementor-16077" data-elementor-settings="[]">
<div class="elementor-section-wrap">
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-c4db72e smartic-landing-page-click elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c4db72e" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6af2aa1" data-id="6af2aa1" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-406f6fd elementor-widget__width-auto elementor-widget elementor-widget-button" data-id="406f6fd" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjE1NzExIiwidG9nZ2xlIjpmYWxzZX0%3D" class="elementor-button-link elementor-button elementor-size-sm" role="button">
<span class="elementor-button-content-wrapper">
<span class="elementor-button-icon elementor-align-icon-right">
<i aria-hidden="true" class="smartic-icon- smartic-icon-plus"></i> </span>
<span style="     font-size: 12px;     color: #000; ">Comprar<br><span style="     font-size: 12px;     color: #000; ">Agora</span></span>
</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->
<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-a900fca smartic-landing-page-content elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a900fca" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-98190bb" data-id="98190bb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-e9a07fb smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="e9a07fb" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-1-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/">Skin Care</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-8dd7bdf smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="8dd7bdf" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-3/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-3-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-3/">Smart Bag</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-38e172b smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="38e172b" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-5/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-5-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-5/">Smart Scale</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-1cf37d5 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="1cf37d5" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-7/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-7-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-7/">Weught Loss Product</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-a67c210 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="a67c210" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-9/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-9-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-9/">Premium Beer</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-2cc1df2 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="2cc1df2" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-11/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-11-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-11/">Healthy Juice</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-09ed7d0 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="09ed7d0" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-13/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-13.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-13-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-13-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-13.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-13.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-13.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-13-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-13-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-13/">Premium Wines</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-5ec328f smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="5ec328f" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-15/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-15.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-15-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-15-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-15.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-15.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-15.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-15-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-15-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-15/">Smart Helmet</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-c7e4192 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="c7e4192" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-17/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-17.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-17-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-17-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-17.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-17.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-17.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-17-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-17-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-17/">Beauty Product</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-bc629c4 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="bc629c4" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-19/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-19.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-19-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-19-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-19.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-19.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-19.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-19-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-19-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-19/">Electric Shaver</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-208fccb smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="208fccb" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-21/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-21.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-21-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-21-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-21.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-21.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-21.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-21-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-21-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-21/">Skin Care</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-d7c2929 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="d7c2929" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-23/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-23.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-23-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-23-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-23.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-23.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-23.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-23-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-23-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-23/">Stroller Product</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-70df630 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="70df630" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-25/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-25.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-25-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-25-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-25.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-25.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-25.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-25-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-25-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-25/">Weight Loss</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-b5b8862 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="b5b8862" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-27/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-27.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-27-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-27-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-27.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-27.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-27.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-27-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-27-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-27/">Drone</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-ac5b58d smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="ac5b58d" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-29/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-29.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-29-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-29-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-29.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-29.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-29.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-29-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-29-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-29/">Vacuum Cleaner</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-9f92490 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="9f92490" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-31/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-31.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-31-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-31-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-31.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-31.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-31.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-31-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-31-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-31/">Headfone</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-3172420 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="3172420" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-33/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-33.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-33-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-33-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-33.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-33.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-33.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-33-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-33-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-33/">Smartband</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-9474587 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="9474587" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-35/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-35.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-35-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-35-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-35.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-35.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-35.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-35-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-35-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-35/">Coffee Maker</a></h3></div></div> </div>
</div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-89baf85" data-id="89baf85" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-8611ff3 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="8611ff3" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-2/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-2-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-2/">Kid Smartwatch</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-412b789 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="412b789" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-4/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-4-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-4/">Gym Supplements</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-4170eb0 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="4170eb0" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-6/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-6-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-6/">Premium Coffee</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-70dad2e smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="70dad2e" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-8/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-8-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-8/">Smart Thermometer</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-28fdbc3 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="28fdbc3" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-10/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-10-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-10/">Mesh Wifi Router</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-95ec1b9 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="95ec1b9" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-12/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-12-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-12/">Healthy Pet Food</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-32eb7f1 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="32eb7f1" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-14/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="Smartic" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-14.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-14-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-14-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-14.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-14.jpg" class="attachment-full size-full" alt="Smartic" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-14.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-14-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2020/11/ldp_home-14-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-14/">Premium Tea</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-d15a5b6 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="d15a5b6" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-16/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-16.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-16-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-16-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-16.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-16.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-16.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-16-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-16-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-16/">Water Bottle</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-4b2a9e4 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="4b2a9e4" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-18/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-18.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-18-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-18-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-18.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-18.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-18.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-18-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/03/ldp_home-18-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-18/">Portable Speaker</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-b9963c4 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="b9963c4" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-20/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-20.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-20-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-20-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-20.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-20.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-20.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-20-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-20-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-20/">Smart Neck Massager</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-d781e44 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="d781e44" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-22/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-22.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-22-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-22-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-22.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-22.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-22.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-22-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-22-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-22/">Smart Camera</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-7dd9942 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="7dd9942" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-24/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-24.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-24-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-24-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-24.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-24.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-24.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-24-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-24-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-24/">Air Purifier</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-8064045 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="8064045" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-26/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-26.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-26-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-26-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-26.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-26.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-26.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-26-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-26-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-26/">Bluetooth Micophone</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-5042575 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="5042575" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-28/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-28.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-28-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-28-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-28.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-28.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-28.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-28-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-28-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-28/">Electric Skateboard</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-5e9f2b1 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="5e9f2b1" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-30/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-30.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-30-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-30-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-30.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-30.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-30.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-30-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-30-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-30/">Smart Helmet 2</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-33a7f87 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="33a7f87" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-32/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-32.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-32-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-32-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-32.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-32.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-32.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-32-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-32-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-32/">Smart Glasses</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-5ad0f46 smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="5ad0f46" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-34/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-34.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-34-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-34-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-34.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-34.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-34.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-34-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-34-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-34/">Charger Dock</a></h3></div></div> </div>
</div>
<div class="elementor-element elementor-element-1cf31ae smartic-image-box-style-2 elementor-widget elementor-widget-smartic-image-box" data-id="1cf31ae" data-element_type="widget" data-widget_type="smartic-image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><a href="https://demo2.wpopal.com/smartic/home-36/"><img width="560" height="400" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20560%20400'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-36.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-36-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-36-500x357.jpg 500w" data-lazy-sizes="(max-width: 560px) 100vw, 560px" data-lazy-src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-36.jpg" /><noscript><img width="560" height="400" src="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-36.jpg" class="attachment-full size-full" alt="" srcset="https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-36.jpg 560w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-36-300x214.jpg 300w, https://demo2wpopal.b-cdn.net/smartic/wp-content/uploads/2021/04/ldp_home-36-500x357.jpg 500w" sizes="(max-width: 560px) 100vw, 560px" /></noscript></a><span class="number">1</span></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title"><a href="https://demo2.wpopal.com/smartic/home-36/">Bike</a></h3></div></div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->
<section class="elementor-section elementor-top-section elementor-element elementor-element-30eca3c smartic-landing-page-overlay elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="30eca3c" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-row">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e0ae545" data-id="e0ae545" data-element_type="column">
<div class="elementor-column-wrap elementor-element-populated">
<div class="elementor-widget-wrap">
<div class="elementor-element elementor-element-90ff88e elementor-widget elementor-widget-spacer" data-id="90ff88e" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/html" id="tmpl-ajax-live-search-template">
        <div class="product-item-search">
            <# if(data.url){ #>
            <a class="product-link" href="{{{data.url}}}" title="{{{data.title}}}">
            <# } #>
                <# if(data.img){#>
                <img src="{{{data.img}}}" alt="{{{data.title}}}">
                 <# } #>
                <div class="product-content">
                <h3 class="product-title">{{{data.title}}}</h3>
                <# if(data.price){ #>
                {{{data.price}}}
                 <# } #>
                </div>
                <# if(data.url){ #>
            </a>
            <# } #>
        </div>
        </script><script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"name":"Home Page","@id":"https:\/\/demo2.wpopal.com\/smartic"}},{"@type":"ListItem","position":2,"item":{"name":"Home 22","@id":"https:\/\/demo2.wpopal.com\/smartic\/home-22\/"}}]}</script><link href="https://fonts.googleapis.com/css?family=Roboto:400%2C700%2C500%7CPoppins:600%2C500%7CBarlow:300" rel="stylesheet" property="stylesheet" media="all" type="text/css">
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
<div class="site-header-cart-side">
<div class="cart-side-heading">
<span class="cart-side-title">Shopping cart</span>
<a href="#" class="close-cart-side">close</a></div>
<div class="widget woocommerce widget_shopping_cart"><div class="widget_shopping_cart_content"></div></div> </div>
<div class="cart-side-overlay"></div>
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
			err += "</div>";
				var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
			}
		}
		</script>
<link data-minify="1" rel='stylesheet' id='elementor-post-800-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/uploads/elementor/css/post-800.css?ver=1634876147' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='magnific-popup-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/css/libs/magnific-popup.css?ver=1634876147' type='text/css' media='all' />
<link data-minify="1" rel='stylesheet' id='elementor-post-16077-css' href='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/uploads/elementor/css/post-16077.css?ver=1634876147' type='text/css' media='all' />
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/smartic\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/smartic\/?wc-ajax=%%endpoint%%","i18n_view_cart":"","cart_url":"https:\/\/demo2.wpopal.com\/smartic\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=5.3.0' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/smartic\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/smartic\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=5.3.0' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/smartic\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/smartic\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_b01fe6367a9a2acf9419a3cde41e97eb","fragment_name":"wc_fragments_b01fe6367a9a2acf9419a3cde41e97eb","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=5.3.0' id='wc-cart-fragments-js'></script>
<script type='text/javascript' id='rocket-browser-checker-js-after'>
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
<script type='text/javascript' id='rocket-preload-links-js-extra'>
/* <![CDATA[ */
var RocketPreloadLinksConfig = {"excludeUris":"\/smartic(\/(.+\/)?feed\/?.+\/?|\/(?:.+\/)?embed\/|\/checkout\/|\/cart\/|\/my-account\/|\/wc-api\/v(.*)|\/(index\\.php\/)?wp\\-json(\/.*|$))|\/wp-admin\/|\/logout\/|\/wp-login.php","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|php|pdf|html|htm","siteUrl":"https:\/\/demo2.wpopal.com\/smartic","onHoverDelay":"100","rateThrottle":"3"};
/* ]]> */
</script>
<script type='text/javascript' id='rocket-preload-links-js-after'>
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
</script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/demo-child/landingpage.js?ver=1634876147' id='landingmenu-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-includes/js/underscore.min.js?ver=1.13.1' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/smartic\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-includes/js/wp-util.min.js?ver=5.8.2' id='wp-util-js'></script>
<script type='text/javascript' id='smartic-theme-js-extra'>
/* <![CDATA[ */
var smarticAjax = {"ajaxurl":"https:\/\/demo2.wpopal.com\/smartic\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/frontend/main.js?ver=1634876147' id='smartic-theme-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/themes/smartic/assets/js/skip-link-focus-fix.min.js?ver=20130115' id='smartic-skip-link-focus-fix-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/frontend/text-editor.js?ver=1634876147' id='smartic-text-editor-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/frontend/search-popup.js?ver=1634876147' id='smartic-search-popup-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/frontend/nav-mobile.js?ver=1634876147' id='smartic-nav-mobile-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/inc/megamenu/assets/js/frontend.js?ver=1634876147' id='smartic-megamenu-frontend-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/frontend/login.js?ver=1634876147' id='smartic-ajax-login-js'></script>
<script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/smartic\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
/* ]]> */
</script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=5.3.0' id='wc-add-to-cart-variation-js'></script>
<script type='text/javascript' id='woo-variation-swatches-js-extra'>
/* <![CDATA[ */
var woo_variation_swatches_options = {"is_product_page":"","show_variation_label":"1","variation_label_separator":":","wvs_nonce":"7a9c125bd6"};
/* ]]> */
</script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min.js?ver=1.1.17' id='woo-variation-swatches-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/themes/smartic/assets/js/woocommerce/header-cart.min.js?ver=1.8.3' id='smartic-header-cart-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/themes/smartic/assets/js/footer.min.js?ver=1.8.3' id='smartic-handheld-footer-bar-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/tooltipster.bundle.js?ver=1634876148' id='tooltipster-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/themes/smartic/assets/js/woocommerce/main.min.js?ver=1.8.3' id='smartic-products-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/themes/smartic/assets/js/woocommerce/quantity.min.js?ver=1.8.3' id='smartic-input-quantity-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/themes/smartic/assets/js/woocommerce/cart-canvas.min.js?ver=1.8.3' id='smartic-cart-canvas-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-includes/js/wp-embed.min.js?ver=5.8.2' id='wp-embed-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.2.3' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.2.3' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.2.3' id='share-link-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1365,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1620,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"direction":"min","is_enabled":false}}},"version":"3.2.3","is_static":false,"experimentalFeatures":{"form-submissions":true},"urls":{"assets":"https:\/\/demo2.wpopal.com\/smartic\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":8689,"title":"Home%2022%20%E2%80%93%20Smartic","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.2.3' id='elementor-frontend-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/elementor/header-group.js?ver=1634876148' id='smartic-elementor-header-group-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/themes/smartic/assets/js/vendor/slick.min.js?ver=1.8.3' id='slick-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/plugins/make-column-clickable-elementor/assets/js/make-column-clickable.js?ver=1634876148' id='make-column-clickable-elementor-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/elementor/image-comparison.js?ver=1634883149' id='smartic-elementor-image-comparison-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/vendor/jquery.event.move.js?ver=1634883149' id='event-move-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/themes/smartic/assets/js/vendor/imgcompare.min.js?ver=1.8.3' id='imgcompare-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/elementor/video.js?ver=1634876148' id='smartic-elementor-video-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/themes/smartic/assets/js/vendor/jquery.magnific-popup.min.js?ver=1.8.3' id='magnific-popup-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.2.2' id='elementor-pro-webpack-runtime-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.2.2' id='elementor-sticky-js'></script>
<script type='text/javascript' id='elementor-pro-frontend-js-before'>
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/demo2.wpopal.com\/smartic\/wp-admin\/admin-ajax.php","nonce":"d11ead867d","urls":{"assets":"https:\/\/demo2.wpopal.com\/smartic\/wp-content\/plugins\/elementor-pro\/assets\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"menu_cart":{"cart_page_url":"https:\/\/demo2.wpopal.com\/smartic\/cart\/","checkout_page_url":"https:\/\/demo2.wpopal.com\/smartic\/checkout\/"},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/demo2.wpopal.com\/smartic\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.2.2' id='elementor-pro-frontend-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.2.2' id='pro-preloaded-elements-handlers-js'></script>
<script type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.2.3' id='preloaded-modules-js'></script>
<script data-minify="1" type='text/javascript' src='https://demo2wpopal.b-cdn.net/smartic/wp-content/cache/min/1/smartic/wp-content/themes/smartic/assets/js/elementor-frontend.js?ver=1634876148' id='smartic-elementor-frontend-js'></script>
<script>window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://demo2wpopal.b-cdn.net/smartic/wp-content/plugins/wp-rocket/assets/js/lazyload/16.1/lazyload.min.js"></script>
</body>
