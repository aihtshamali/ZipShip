/* 
 * @author    ThemePunch <info@themepunch.com>
 * @link      http://www.themepunch.com/
 * @Copyright 2018 ThemePunch
*/

;(function(){function w(a,c){this.slides=[];this.slider=a;this.options=c;this.timer=this.onTimer.bind(this);if(!a[0].opt.fallbacks.disableFocusListener)m(window).on("focus.rsaddonbeforeafter",this.onFocus.bind(this));a.one("revolution.slide.onloaded",this.onLoaded.bind(this)).one("rsBeforeAfterDestroyed",this.destroy.bind(this))}function t(a,c,b,e,g,h,k,d,f,p,n,q,l,r){this.id=a;this.bg=c;this.index=r;this.slide=e;this.inner=b;this.after=f;this.before=p;this.slider=n;this.videoBg=g;this.bgInner=k;this.globals=
q;this.videoSolo=h;this.carousel=l;this.animateOut=d.out;this.direction=d.direction;this.moveto=d.moveto.split("|");this.timing=.001*parseInt(d.time,10);this.delay=.001*parseInt(d.delay,10);a=d.easing.split(".");this.animation=punchgs[a[0]][a[1]];"horizontal"===this.direction?(this.normal=!0,this.axis="left",this.size="width"):(this.axis="top",this.size="height");this.globals.hasOwnProperty("onClick")&&(a=this.globals.onClick.easing.split("."),this.time=.001*parseInt(this.globals.onClick.time,10),
this.transition=punchgs[a[0]][a[1]]);this.mouseUp=this.onMouseUp.bind(this);this.mouseMove=this.onMouseMove.bind(this);this.mouseClick=this.onClick.bind(this);this.complete=this.onComplete.bind(this);d.hasOwnProperty("bounceArrows")&&(this.bounceArrows=d.bounceArrows,this.bounceDelay=parseInt(d.bounceDelay,10),this.readyArrows=this.arrowsReady.bind(this),this.bounceDelay&&(this.delayBounce=this.bounceReady.bind(this)));d.hasOwnProperty("shiftOffset")&&(this.shiftArrows=d.shiftOffset);this.videoBg&&
!this.videoSolo&&(this.videoPlay=this.playVideo.bind(this));this.createDrag();m.data(e[0],"rs-addon-beforeafter",this)}function z(a){this.style.zIndex=(a+5).toString()}var m;window.RevSliderBeforeAfter=function(a,c,b){a&&c&&"undefined"!==typeof punchgs&&(m=a,m.event.special.rsBeforeAfterDestroyed={remove:function(a){a.handler()}},new w(c,b))};w.prototype={init:function(){var a=this.slider[0].opt,c=a.responsiveLevels,a=a.gridwidth;Array.isArray(c)||(c=[c]);Array.isArray(a)||(a=[a]);this.levels=c;this.widths=
a;this.resize=this.onResize.bind(this);this.slider.addClass("rs-before-after-addon").on("revolution.slide.onbeforeswap",this.beforeSwap.bind(this)).on("revolution.slide.onafterswap",this.afterSwap.bind(this))},onLoaded:function(){var a=this,c=this.slider[0].id,b=this.slider.find(".tp-static-layers");(this.carousel=this.options.carousel)&&this.slider.addClass("before-after-carousel");b.length||(b=this.slider.find(".tp-revslider-mainul"));this.slider.data("before-after-placer",b).data("beforeafter-slides").each(function(){var b=
m(this),g=b.find('.tp-caption[data-beforeafter="before"]').toArray().map(function(a){return m(a).closest(".tp-parallax-wrap")}),h=b.find('.tp-caption[data-beforeafter="after"]').toArray().map(function(a){return m(a).closest(".tp-parallax-wrap")}),k=b.data("beforeafter-options");b.addClass("rs-addon-beforeafter rs-addon-beforeafter-"+k.direction);a.carousel||b.find("*").attr("draggable",!1);var d=m('<div class="rs-addon-beforeafter-revealer rs-addon-beforeafter-before" />').append(g);1<g.length?d.insertAfter(b.find(".tp-parallax-wrap").last()):
d.appendTo(b);var g=m('<div class="rs-addon-beforeafter-revealer rs-addon-beforeafter-after" />'),h=m('<div class="rs-addon-beforeafter-inner" />').append(h)[0],f=document.createElement("div"),p=document.createElement("div"),n=k.bgType;if("image"===n||"external"===n)f.style.backgroundImage="url("+k.bgImage+")",f.style.backgroundPosition=k.bgPos,f.style.backgroundRepeat=k.bgRepeat,f.style.backgroundSize=k.bgFit;else if("solid"===n)f.style.background=k.bgColor;else if("trans"!==n&&(n=b.data("beforeafter-video"))&&
(n.closest(".tp-parallax-wrap").addClass("rs-video-beforeafter"),!a.carousel)){var q=n;var l=0===b.find(".rs-background-video-layer").length}b.attr("data-link")&&"back"===b.attr("data-slideindex")&&(d.addClass("rs-beforeafter-pointers"),g.addClass("rs-beforeafter-pointers"));n="rs-addon-beforeafter-bg-inner";k.filter&&(n+=" "+k.filter);p.className="rs-addon-beforeafter-bg";f.className=n;p.appendChild(f);b.find(".slotholder").append(p);g.append(h).insertBefore(d);a.slides[a.slides.length]=new t(c,
p,h,b,q,l,f,k,g[0],d[0],a.slider,a.options,a.carousel,b.attr("data-index"))});this.init()},beforeSwap:function(a,c){if(!this.checkRemoved()){this.slide=!1;var b;c.currentslide.length&&(b=m.data(c.currentslide[0],"rs-addon-beforeafter"))&&(b.removeEvents(),b[b.animateOut]());(b=m.data(c.nextslide[0],"rs-addon-beforeafter"))&&b.setup&&b.reset()}},afterSwap:function(a,c){!this.checkRemoved()&&c.currentslide.hasClass("rs-addon-beforeafter")&&(this.slide=m.data(c.currentslide[0],"rs-addon-beforeafter"),
this.slide.setup||(this.onResize(!1,!0),this.slide.onSetup(),this.slider.on("revolution.slide.afterdraw",this.resize)),this.slide.reset(!0),this.slide.reveal(),this.slide.addEvents())},checkRemoved:function(){return this.slider&&document.body.contains(this.slider[0])?!1:(this.destroy(),!0)},onVideoPlay:function(a,c){this.slide&&this.slide.videoBg&&!this.slide.videoSolo&&this.slide.playVideo()},destroy:function(){m(window).off(".rsaddonbeforeafter");if(this.slides)for(;this.slides.length;)this.slides[0].destroy(),
this.slides.shift();for(var a in this)this.hasOwnProperty(a)&&delete this[a]},onFocus:function(){clearTimeout(this.timer);for(var a=this.slides.length;a--;)this.slides[a].supress=!0;this.focusTimer=setTimeout(this.timer,100)},onTimer:function(){for(var a=this.slides.length;a--;)this.slides[a].supress=!1},onResize:function(a,c){if(a&&this.carousel)clearTimeout(this.resizeTimer),this.resizeTimer=setTimeout(this.resize,250);else{var b=this.slide;if(b){var e,g=0,h=this.levels.length;if(this.carousel){var k=
b.slide.width();var d=b.slide.height()}else k=this.slider.width(),d=this.slider.height();for(e=0;e<h;e++)k<this.levels[e]&&(g=e);c||(punchgs.TweenLite.killTweensOf(b.bg),punchgs.TweenLite.killTweensOf(b.after),punchgs.TweenLite.killTweensOf(b.before),punchgs.TweenLite.killTweensOf(b.revealBtn),b.revealLine&&punchgs.TweenLite.killTweensOf(b.revealLine));for(var h=k/this.widths[g],f=this.slides.length;f--;)e=this.slides[f],e.level=g,e.scale=h,e.blurred=!1,e.sliderWidth=k,e.sliderHeight=d,e.normal?(e.bgInner.style.width=
k+"px",e.inner.style.width=k+"px"):(e.bgInner.style.height=d+"px",e.inner.style.height=d+"px");c||(b.normal?(k=b.moveto[b.level],-1===k.search("%")&&(k=(parseInt(k,10)*h).toFixed(0)+"px"),d="50%"):(k="50%",d=b.moveto[b.level],-1===d.search("%")&&(d=(parseInt(d,10)*h).toFixed(0)+"px")),b.resetDrag(k,d))}}}};t.prototype={createDrag:function(){var a=this.globals,c=a.boxShadow,b=a.arrowStyles,e=a.arrowShadow,g=a.arrowBorder,h=a.dividerStyles,k=a.dividerShadow,d=parseInt(b.spacing,10),a='<span class="rs-addon-beforeafter-btn rs-before-after-element rs-addon-beforeafter-btn-'+
this.direction+'" style="color: '+b.color+";font-size: "+parseInt(b.size,10)+"px;background-color:"+b.bgColor+";padding: "+parseInt(b.padding,10)+"px;border-radius: "+b.borderRadius+";cursor: "+a.cursor;c&&(a+="; box-shadow: 0px 0px "+parseInt(c.blur,10)+"px "+parseInt(c.strength,10)+"px "+c.color+";");g&&(a+="; border: "+parseInt(g.size,10)+"px solid "+g.color+";");e&&(a+="; text-shadow: 0px 0px "+parseInt(e.blur,10)+"px "+e.color+";");var f,p="",n=f="",q="",l=this.shiftArrows?" rs-"+this.id+"-"+
this.index+"-rs-beforeafter-shift":"";this.normal?(e="padding-right",g="padding-left",c=b.leftIcon,b=b.rightIcon,this.bounceArrows&&(f=" rs-"+this.id+"-"+this.index+"-rs-beforeafter-bounce-",p=f+"left",f+="right"),this.shiftArrows&&(n="transform: translateX(-"+this.shiftArrows+"px);",q="transform: translateX("+this.shiftArrows+"px);")):(e="margin-bottom",g="margin-top",c=b.topIcon,b=b.bottomIcon,this.bounceArrows&&(f=" rs-"+this.id+"-"+this.index+"-rs-beforeafter-bounce-",p=f+"top",f+="bottom"),this.shiftArrows&&
(n="transform: translateY(-"+this.shiftArrows+"px);",q="transform: translateY("+this.shiftArrows+"px);"));a+='" />';this.btn1=m('<i class="'+c+l+p+'" style="'+n+e+": "+d+'px">');this.btn2=m('<i class="'+b+l+f+'" style="'+q+g+": "+d+'px">');this.btn=m(a).on("mousedown touchstart",this.onMouseDown.bind(this));this.btn[0].appendChild(this.btn1[0]);this.btn[0].appendChild(this.btn2[0]);d=parseInt(h.width,10);a=[];d&&(h='<span class="rs-addon-beforeafter-line rs-before-after-element rs-beforeafter-'+this.direction+
'" style="'+this.size+": "+d+"px; "+(this.normal?"margin-left: ":"margin-top: ")+-Math.floor(.5*d)+"px; background-color: "+h.color,k&&(h+="; box-shadow: 0px 0px "+parseInt(k.blur,10)+"px "+parseInt(k.strength,10)+"px "+k.color+";"),this.revealLine=m(h+'"></span>')[0],this.pixel=0===d%2?0:1,a[0]=this.revealLine);this.revealBtn=this.btn[0];a[a.length]=this.revealBtn;this.carousel?this.slide.append(a):m(a).insertAfter(this.slider.data("before-after-placer"))},onSetup:function(){var a=this.btn.outerWidth(!0),
c=this.btn.outerHeight(!0),a=Math.max(a,c),b=c=0;this.revealLine&&(this.normal?c+=this.pixel:b+=this.pixel);var e=Math.floor(.5*a);this.buffer=e;this.setup=!0;this.btn.css({width:a,height:a,marginTop:-e+b,marginLeft:-e+c});delete this.btn},addEvents:function(){var a=this.carousel?this.slide:this.slider;a.on("mouseup.rsaddonbeforeafter mouseleave.rsaddonbeforeafter touchend.rsaddonbeforeafter",this.mouseUp).on("mousemove.rsaddonbeforeafter touchmove.rsaddonbeforeafter",this.mouseMove);if(this.transition)a.on("click.rsaddonbeforeafter",
this.mouseClick)},removeEvents:function(){this.onMouseUp();(this.carousel?this.slide:this.slider).off(".rsaddonbeforeafter");this.shiftArrows&&this.btn1.off(".rsaddonbeforeafter");this.bounceDelay&&clearTimeout(this.bounceTimer)},updateDrag:function(a,c){if(this.before){if(this.normal){var b=a;var e=this.sliderWidth-a;c=Math.min(this.sliderHeight-this.buffer,Math.max(c,this.buffer))}else b=c,e=this.sliderHeight-c,a=Math.min(this.sliderWidth-this.buffer,Math.max(a,this.buffer));this.revealBtn.style.left=
a+"px";this.revealBtn.style.top=c+"px";this.before.style[this.size]=b+"px";this.after.style[this.size]=e+"px";this.bg.style[this.size]=e+"px";this.revealLine&&(this.revealLine.style[this.axis]=b+"px")}},resetDrag:function(a,c){if(this.before){if(this.normal){var b=a;var e=parseInt(a,10);e=-1!==a.search("%")?100-e+"%":this.sliderWidth-e+"px"}else b=c,e=parseInt(c,10),e=-1!==c.search("%")?100-e+"%":this.sliderHeight-e+"px";this.revealBtn.style.left=a;this.revealBtn.style.top=c;this.before.style[this.size]=
b;this.after.style[this.size]=e;this.bg.style[this.size]=e;this.revealLine&&(this.revealLine.style[this.axis]=b)}},onMouseDown:function(a){this.canDrag=this.prevent=!0;this.slider.addClass("dragging");this.shiftArrows&&(this.btn1.off(".rsaddonbeforeafter"),this.slider.addClass("rs-beforeafter-shift-arrows"));this.bounceArrows&&(this.bounceDelay&&clearTimeout(this.bounceTimer),this.slider.removeClass("rs-beforeafter-bounce-arrows"));this.carousel&&a.stopImmediatePropagation()},onMouseMove:function(a){if(!this.supress&&
this.canDrag){var c=a.originalEvent.touches;c&&(a=c[0]);var b=(this.carousel?this.slide:this.slider).offset(),c=a.pageX-b.left;a=a.pageY-b.top;(this.normal?0<c&&c<this.sliderWidth:0<a&&a<this.sliderHeight)&&this.updateDrag(c,a)}},onMouseUp:function(a){this.canDrag=!1;this.slider.removeClass("dragging");a&&"infinite"===this.bounceArrows&&(this.bounceDelay?this.bounceTimer=setTimeout(this.delayBounce,this.bounceDelay):(this.shiftArrows&&this.slider.removeClass("rs-beforeafter-shift-arrows"),this.slider.addClass("rs-beforeafter-bounce-arrows")))},
onClick:function(a){if(!this.supress&&!this.blurred)if(this.prevent)this.prevent=!1;else{var c=a.target,b=/tparrows|tp-bullet|tp-tab|tp-thumb|tp-withaction/,e;if(!(e="A"===a.target.tagName||b.test(c.className)))a:{for(;c.parentNode;)if(c=c.parentNode,"A"===c.tagName||b.test(c.className)){e=!0;break a}e=!1}e||(c=(this.carousel?this.slide:this.slider).offset(),b=a.pageX-c.left,e=a.pageY-c.top,this.normal?(c=b,a=this.sliderWidth,e=Math.min(this.sliderHeight-this.buffer,Math.max(e,this.buffer))):(c=e,
a=this.sliderHeight,b=Math.min(this.sliderWidth-this.buffer,Math.max(b,this.buffer))),punchgs.TweenLite.to(this.revealBtn,this.time,{left:b,top:e,ease:this.transition}),b={ease:this.transition},b[this.size]=a-c,punchgs.TweenLite.to(this.bg,this.time,b),b={ease:this.transition},b[this.size]=c,punchgs.TweenLite.to(this.before,this.time,b),b={ease:this.transition},b[this.size]=a-c,punchgs.TweenLite.to(this.after,this.time,b),b={ease:this.transition},b[this.axis]=c,this.revealLine&&punchgs.TweenLite.to(this.revealLine,
this.time,b))}},bounceReady:function(){this.slider.removeClass("rs-beforeafter-shift-arrows").addClass("rs-beforeafter-bounce-arrows")},arrowsReady:function(){this.bounceDelay?this.bounceTimer=setTimeout(this.delayBounce,this.bounceDelay):this.bounceReady()},onComplete:function(){this.supress=!1;if(this.shiftArrows){if(this.bounceArrows)this.btn1.one("webkitTransitionEnd.rsaddonbeforeafter transitionend.rsaddonbeforeafter",this.readyArrows);this.slider.addClass("rs-beforeafter-shift-arrows")}else this.bounceArrows&&
this.arrowsReady()},fade:function(){punchgs.TweenLite.to(this.bg,.3,{opacity:0,ease:punchgs.Power2.easeInOut});punchgs.TweenLite.to(this.revealBtn,.3,{autoAlpha:0,ease:punchgs.Power2.easeInOut});this.revealLine&&punchgs.TweenLite.to(this.revealLine,.3,{autoAlpha:0,ease:punchgs.Power2.easeInOut})},collapse:function(){a={ease:this.animation};a[this.size]=0;punchgs.TweenLite.to(this.bg,this.timing,a);var a={ease:this.animation};a[this.size]="100%";punchgs.TweenLite.to(this.before,this.timing,a);a={ease:this.animation};
a[this.size]=0;punchgs.TweenLite.to(this.after,this.timing,a);a={autoAlpha:0,ease:this.animation};a[this.axis]="100%";this.revealLine&&punchgs.TweenLite.to(this.revealLine,this.timing,a);a={autoAlpha:0,ease:this.animation};a[this.axis]="100%";punchgs.TweenLite.to(this.revealBtn,this.timing,a)},reset:function(a){this.supress=!0;this.normal?(this.revealBtn.style.top="50%",this.revealBtn.style.left="100%"):(this.revealBtn.style.top="100%",this.revealBtn.style.left="50%");this.before.style[this.size]=
"100%";this.after.style[this.size]="0";this.bg.style[this.size]="0";this.revealLine&&(this.revealLine.style[this.axis]="100%");this.shiftArrows&&this.btn1.off(".rsaddonbeforeafter");this.bounceDelay&&clearTimeout(this.bounceTimer);a&&(this.shiftArrows&&this.slider.removeClass("rs-beforeafter-shift-arrows"),this.bounceArrows&&this.slider.removeClass("rs-beforeafter-bounce-arrows"))},playVideo:function(){m.fn.revolution.playAnimationFrame({caption:this.videoBg,opt:this.slider[0].opt,frame:"frame_0",
triggerdirection:"in",triggerframein:"frame_0",triggerframeout:"frame_999"})},checkVideo:function(){var a=this.slide.find(".rs-background-video-layer video");if(a.length)a.off(".rsaddonbeforeafter").on("play.rsaddonbeforeafter",this.videoPlay);else this.playVideo()},reveal:function(){this.videoBg&&(this.videoSolo?this.playVideo():this.checkVideo());var a=this.moveto[this.level],c=-1!==a.search("%"),b=parseInt(a,10);if(this.normal){if(c){var e=c=a;b=100-b+"%"}else a=c=e=b*this.scale,b=this.sliderWidth-
a;var g="50%"}else c?(g=c=a,b=100-b+"%"):(a=c=g=b*this.scale,b=this.sliderHeight-a),e="50%";h={ease:this.animation,delay:this.delay};h[this.size]=b;this.bg.style.opacity="1";punchgs.TweenLite.to(this.bg,this.timing,h);var h={ease:this.animation,delay:this.delay};h[this.size]=c;punchgs.TweenLite.to(this.before,this.timing,h);h={ease:this.animation,delay:this.delay};h[this.size]=b;this.after.style.opacity="1";punchgs.TweenLite.to(this.after,this.timing,h);this.revealLine&&(h={ease:this.animation,delay:this.delay},
h[this.axis]=a,punchgs.TweenLite.to(this.revealLine,.3,{autoAlpha:1,ease:punchgs.Power2.easeOut}),punchgs.TweenLite.to(this.revealLine,this.timing,h));punchgs.TweenLite.to(this.revealBtn,.3,{autoAlpha:1,ease:punchgs.Power2.easeOut});punchgs.TweenLite.to(this.revealBtn,this.timing,{delay:this.delay,left:e,top:g,ease:this.animation,onComplete:this.complete})},destroy:function(){punchgs.TweenLite.killTweensOf(this.bg);punchgs.TweenLite.killTweensOf(this.after);punchgs.TweenLite.killTweensOf(this.before);
punchgs.TweenLite.killTweensOf(this.revealBtn);this.revealLine&&punchgs.TweenLite.killTweensOf(this.revealLine);m.removeData(this.slide[0],"rs-addon-beforeafter",this);for(var a in this)this.hasOwnProperty(a)&&delete this[a]}};"undefined"!==typeof jQuery&&jQuery(".rev_slider").each(function(){var a="",c=jQuery(this),b=c[0].id,e=c.find("li[data-beforeafter]");if(e.length){e.each(function(){var c=jQuery(this);var e=c.attr("data-index"),d=JSON.parse(c.attr("data-beforeafter"));c.data("beforeafter-options",
d);if(/html5|youtube|vimeo/.test(d.bgType)){var f='<div class="tp-caption tp-resizeme fullscreenvideo disabled_lc tp-videolayer" id="slide-'+c.attr("data-index").replace("rs-","")+"-layer-0\" data-type=\"video\" data-x=\"['0','0','0','0']\" data-y=\"['0','0','0','0']\" data-beforeafter=\"after\" data-basealign=\"slide\" data-responsive_offset=\"on\" data-exitfullscreenonpause=\"off\" data-videocontrols=\"none\" data-videowidth=\"['100%','100%','100%','100%']\" data-videoheight=\"['100%','100%','100%','100%']\" data-videopreload=\"auto\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-autoplay=\"on\" data-frames='"+
('[{"delay":"'+(d.carousel?"10":"bytrigger")+'","speed":0,"frame":"0","to":"o:1;","ease":"Linear.easeNone"},{"delay":"wait","speed":0,"frame":"999","ease":"Linear.easeNone"}]')+"' data-textAlign=\"['inherit','inherit','inherit','inherit']\" data-videoloop=\""+d.loopVideo+'" data-aspectratio="'+d.aspectRatio+'" ';d.forceCover&&(f+='data-forceCover="1" ');"none"!==d.dottedOverlay&&(f+='data-dottedoverlay="'+d.dottedOverlay+'" ');d.nextSlideOnEnd&&(f+='data-nextslideatend="true" ');d.rewindOnStart&&
(f+='data-forcerewind="on" ');d.videoStartAt&&(f+='data-videostartat="'+d.videoStartAt+'" ');d.videoEndAt&&(f+='data-videoendat="'+d.videoEndAt+'" ');switch(d.bgType){case "html5":d.muteVideo&&(f+='data-volume="mute" ');var g=d.videoOgv,n=d.videoWebm,m=d.videoMpeg;if(m||g||n){f=f+('data-videoogv="'+g+'" ')+('data-videowebm="'+n+'" ')+('data-videomp4="'+m+'" ');var l=!0}break;case "youtube":if(g=d.videoId)f+='data-ytid="'+g+'" ',f+='data-videorate="'+d.videoSpeed+'" ',f+='data-videoattributes="'+d.youtubeArgs+
'" ',f=d.muteVideo?f+'data-volume="mute" ':f+('data-volume="'+d.videoVolume+'" '),l=!0;break;case "vimeo":if(g=d.videoId)f+='data-vimeoid="'+g+'" ',f+='data-videoattributes="'+d.vimeoArgs+'" ',f=d.muteVideo?f+'data-volume="mute" ':f+('data-volume="'+d.videoVolume+'" '),l=!0}l&&(c.find(".tp-caption").each(z),l=jQuery(f+'style="z-index: 5"><div class="rs-fullvideo-cover"></div></div>').insertAfter(c.find(".rev-slidebg")),c.data("beforeafter-video",l))}if(d.hasOwnProperty("bounceArrows")){c=.001*parseInt(d.bounceSpeed,
10);var g="initial"!==d.bounceArrows?"infinite":"1",n=parseInt(d.bounceAmount,10),m="repel"===d.bounceType,r=Math.round(.5*n);"horizontal"===d.direction?(l="X",f=["left","right"]):(l="Y",f=["top","bottom"]);for(var u=0;2>u;u++){var x=m?0===u?"-":"":0===u?"":"-",w=a,v=f[u],t=c.toFixed(2),y=d.bounceEasing;a=w+("@-webkit-keyframes "+b+"-"+e+"-rs-beforeafter-bounce-"+v+" {0%, 20%, 50%, 80%, 100% {-webkit-transform: translate"+l+"(0);transform: translate"+l+"(0)}40% {-webkit-transform: translate"+l+"("+
n+"px);transform: translate"+l+"("+x+n+"px)}60% {-webkit-transform: translate"+l+"("+r+"px);transform: translate"+l+"("+x+r+"px)}}@keyframes "+b+"-"+e+"-rs-beforeafter-bounce-"+v+" {0%, 20%, 50%, 80%, 100% {-webkit-transform: translate"+l+"(0);transform: translate"+l+"(0)}40% {-webkit-transform: translate"+l+"("+n+"px);transform: translate"+l+"("+x+n+"px)}60% {-webkit-transform: translate"+l+"("+r+"px);transform: translate"+l+"("+x+r+"px)}}.rs-beforeafter-bounce-arrows .rs-"+b+"-"+e+"-rs-beforeafter-bounce-"+
v+" {-webkit-animation: "+b+"-"+e+"-rs-beforeafter-bounce-"+v+" "+t+"s "+y+" "+g+";animation: "+b+"-"+e+"-rs-beforeafter-bounce-"+v+" "+t+"s "+y+" "+g+"}")}}if(d.hasOwnProperty("shiftOffset"))for(c=.001*parseInt(d.shiftTiming,10),l=.001*parseInt(d.shiftDelay,10),f=0;2>f;f++)g=d.shiftEasing,a+=".rs-beforeafter-shift-arrows .rs-"+b+"-"+e+"-rs-beforeafter-shift {-webkit-transition: all "+c+"s "+g+" "+l+"s;transition: all "+c+"s "+g+" "+l+"s}"});if(a){var g=document.createElement("style");g.type="text/css";
g.innerHTML=a;document.head.appendChild(g)}c.data("beforeafter-slides",e)}})})();

