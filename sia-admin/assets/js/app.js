var App=function(){var e,a,t,s,r,o,i,l,n,c,d=function(){e=jQuery("html"),a=jQuery("body"),t=jQuery("#page-container"),s=jQuery("#sidebar"),r=jQuery("#sidebar-scroll"),o=jQuery("#side-overlay"),i=jQuery("#side-overlay-scroll"),l=jQuery("#header-navbar"),n=jQuery("#main-container"),c=jQuery("#page-footer"),jQuery('[data-toggle="tooltip"], .js-tooltip').tooltip({container:"body",animation:!1}),jQuery('[data-toggle="popover"], .js-popover').popover({container:"body",animation:!0,trigger:"hover"}),jQuery('[data-toggle="tabs"] a, .js-tabs a').click(function(e){e.preventDefault(),jQuery(this).tab("show")}),jQuery(".form-control").placeholder()},u=function(){var a;n.length&&(h(),jQuery(window).on("resize orientationchange",function(){clearTimeout(a),a=setTimeout(function(){h()},150)})),g("init"),t.hasClass("header-navbar-fixed")&&t.hasClass("header-navbar-transparent")&&jQuery(window).on("scroll",function(){jQuery(this).scrollTop()>20?t.addClass("header-navbar-scroll"):t.removeClass("header-navbar-scroll")}),jQuery('[data-toggle="layout"]').on("click",function(){var a=jQuery(this);y(a.data("action")),e.hasClass("no-focus")&&a.blur()})},h=function(){var e=jQuery(window).height(),a=l.outerHeight(),s=c.outerHeight();t.hasClass("header-navbar-fixed")?n.css("min-height",e-s):n.css("min-height",e-(a+s))},g=function(e){var a=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth;if("init"===e){g();var l;jQuery(window).on("resize orientationchange",function(){clearTimeout(l),l=setTimeout(function(){g()},150)})}else a>991&&t.hasClass("side-scroll")?(jQuery(s).scrollLock("off"),jQuery(o).scrollLock("off"),r.length&&!r.parent(".slimScrollDiv").length?r.slimScroll({height:s.outerHeight(),color:"#fff",size:"5px",opacity:.35,wheelStep:15,distance:"2px",railVisible:!1,railOpacity:1}):r.add(r.parent()).css("height",s.outerHeight()),i.length&&!i.parent(".slimScrollDiv").length?i.slimScroll({height:o.outerHeight(),color:"#000",size:"5px",opacity:.35,wheelStep:15,distance:"2px",railVisible:!1,railOpacity:1}):i.add(i.parent()).css("height",o.outerHeight())):(jQuery(s).scrollLock(),jQuery(o).scrollLock(),r.length&&r.parent(".slimScrollDiv").length&&(r.slimScroll({destroy:!0}),r.attr("style","")),i.length&&i.parent(".slimScrollDiv").length&&(i.slimScroll({destroy:!0}),i.attr("style","")))},y=function(e){var a=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth;switch(e){case"sidebar_pos_toggle":t.toggleClass("sidebar-l sidebar-r");break;case"sidebar_pos_left":t.removeClass("sidebar-r").addClass("sidebar-l");break;case"sidebar_pos_right":t.removeClass("sidebar-l").addClass("sidebar-r");break;case"sidebar_toggle":a>991?t.toggleClass("sidebar-o"):t.toggleClass("sidebar-o-xs");break;case"sidebar_open":a>991?t.addClass("sidebar-o"):t.addClass("sidebar-o-xs");break;case"sidebar_close":a>991?t.removeClass("sidebar-o"):t.removeClass("sidebar-o-xs");break;case"sidebar_mini_toggle":a>991&&t.toggleClass("sidebar-mini");break;case"sidebar_mini_on":a>991&&t.addClass("sidebar-mini");break;case"sidebar_mini_off":a>991&&t.removeClass("sidebar-mini");break;case"side_overlay_toggle":t.toggleClass("side-overlay-o");break;case"side_overlay_open":t.addClass("side-overlay-o");break;case"side_overlay_close":t.removeClass("side-overlay-o");break;case"side_overlay_hoverable_toggle":t.toggleClass("side-overlay-hover");break;case"side_overlay_hoverable_on":t.addClass("side-overlay-hover");break;case"side_overlay_hoverable_off":t.removeClass("side-overlay-hover");break;case"header_fixed_toggle":t.toggleClass("header-navbar-fixed");break;case"header_fixed_on":t.addClass("header-navbar-fixed");break;case"header_fixed_off":t.removeClass("header-navbar-fixed");break;case"side_scroll_toggle":t.toggleClass("side-scroll"),g();break;case"side_scroll_on":t.addClass("side-scroll"),g();break;case"side_scroll_off":t.removeClass("side-scroll"),g();break;default:return!1}},p=function(){jQuery('[data-toggle="nav-submenu"]').on("click",function(a){a.stopPropagation();var t=jQuery(this),s=t.parent("li");s.hasClass("open")?s.removeClass("open"):(t.closest("ul").find("> li").removeClass("open"),s.addClass("open")),e.hasClass("no-focus")&&t.blur()})},f=function(){m(!1,"init"),jQuery('[data-toggle="block-option"]').on("click",function(){m(jQuery(this).parents(".block"),jQuery(this).data("action"))})},m=function(e,a){var t="si si-size-fullscreen",s="si si-size-actual",r="si si-arrow-up",o="si si-arrow-down";if("init"===a)jQuery('[data-toggle="block-option"][data-action="fullscreen_toggle"]').each(function(){var e=jQuery(this);e.html('<i class="'+(jQuery(this).closest(".block").hasClass("block-opt-fullscreen")?s:t)+'"></i>')}),jQuery('[data-toggle="block-option"][data-action="content_toggle"]').each(function(){var e=jQuery(this);e.html('<i class="'+(e.closest(".block").hasClass("block-opt-hidden")?o:r)+'"></i>')});else{var i=e instanceof jQuery?e:jQuery(e);if(i.length){var l=jQuery('[data-toggle="block-option"][data-action="fullscreen_toggle"]',i),n=jQuery('[data-toggle="block-option"][data-action="content_toggle"]',i);switch(a){case"fullscreen_toggle":i.toggleClass("block-opt-fullscreen"),i.hasClass("block-opt-fullscreen")?jQuery(i).scrollLock():jQuery(i).scrollLock("off"),l.length&&(i.hasClass("block-opt-fullscreen")?jQuery("i",l).removeClass(t).addClass(s):jQuery("i",l).removeClass(s).addClass(t));break;case"fullscreen_on":i.addClass("block-opt-fullscreen"),jQuery(i).scrollLock(),l.length&&jQuery("i",l).removeClass(t).addClass(s);break;case"fullscreen_off":i.removeClass("block-opt-fullscreen"),jQuery(i).scrollLock("off"),l.length&&jQuery("i",l).removeClass(s).addClass(t);break;case"content_toggle":i.toggleClass("block-opt-hidden"),n.length&&(i.hasClass("block-opt-hidden")?jQuery("i",n).removeClass(r).addClass(o):jQuery("i",n).removeClass(o).addClass(r));break;case"content_hide":i.addClass("block-opt-hidden"),n.length&&jQuery("i",n).removeClass(r).addClass(o);break;case"content_show":i.removeClass("block-opt-hidden"),n.length&&jQuery("i",n).removeClass(o).addClass(r);break;case"refresh_toggle":i.toggleClass("block-opt-refresh"),jQuery('[data-toggle="block-option"][data-action="refresh_toggle"][data-action-mode="demo"]',i).length&&setTimeout(function(){i.removeClass("block-opt-refresh")},2e3);break;case"state_loading":i.addClass("block-opt-refresh");break;case"state_normal":i.removeClass("block-opt-refresh");break;case"close":i.hide();break;case"open":i.show();break;default:return!1}}}},b=function(){jQuery(".form-material.floating > .form-control").each(function(){var e=jQuery(this),a=e.parent(".form-material");e.val()&&a.addClass("open"),e.on("change",function(){e.val()?a.addClass("open"):a.removeClass("open")})})},j=function(){var e=jQuery("#css-theme");jQuery('[data-toggle="theme"][data-theme="'+(e.length?e.attr("href"):"default")+'"]').parent("li").addClass("active"),jQuery('[data-toggle="theme"]').on("click",function(){var a=jQuery(this),t=a.data("theme");jQuery('[data-toggle="theme"]').parent("li").removeClass("active"),jQuery('[data-toggle="theme"][data-theme="'+t+'"]').parent("li").addClass("active"),"default"===t?e.length&&e.remove():e.length?e.attr("href",t):jQuery("#css-main").after('<link rel="stylesheet" id="css-theme" href="'+t+'">'),e=jQuery("#css-theme")})},k=function(){jQuery('[data-toggle="scroll-to"]').on("click",function(){var e=jQuery(this),a=e.data("target"),t=e.data("speed")?e.data("speed"):1e3;jQuery("html, body").animate({scrollTop:jQuery(a).offset().top},t)})},Q=function(){jQuery('[data-toggle="class-toggle"]').on("click",function(){var a=jQuery(this);jQuery(a.data("target").toString()).toggleClass(a.data("class").toString()),e.hasClass("no-focus")&&a.blur()})},v=function(){var e=new Date,a=jQuery(".js-year-copy");2015===e.getFullYear()?a.html("2015"):a.html("2015-"+e.getFullYear().toString().substr(2,2))},C=function(){var e=t.prop("class");t.prop("class",""),window.print(),t.prop("class",e)},_=function(){var e=jQuery(".js-table-sections"),a=jQuery(".js-table-sections-header > tr",e);a.click(function(a){var t=jQuery(this),s=t.parent("tbody");s.hasClass("open")||jQuery("tbody",e).removeClass("open"),s.toggleClass("open")})},w=function(){var e=jQuery(".js-table-checkable");jQuery("thead input:checkbox",e).click(function(){var a=jQuery(this).prop("checked");jQuery("tbody input:checkbox",e).each(function(){var e=jQuery(this);e.prop("checked",a),x(e,a)})}),jQuery("tbody input:checkbox",e).click(function(){var e=jQuery(this);x(e,e.prop("checked"))}),jQuery("tbody > tr",e).click(function(e){if("checkbox"!==e.target.type&&"button"!==e.target.type&&"a"!==e.target.tagName.toLowerCase()&&!jQuery(e.target).parent("label").length){var a=jQuery("input:checkbox",this),t=a.prop("checked");a.prop("checked",!t),x(a,!t)}})},x=function(e,a){a?e.closest("tr").addClass("active"):e.closest("tr").removeClass("active")},S=function(){jQuery('[data-toggle="appear"]').each(function(){var a=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth,t=jQuery(this),s=t.data("class")?t.data("class"):"animated fadeIn",r=t.data("offset")?t.data("offset"):0,o=e.hasClass("ie9")||992>a?0:t.data("timeout")?t.data("timeout"):0;t.appear(function(){setTimeout(function(){t.removeClass("visibility-hidden").addClass(s)},o)},{accY:r})})},T=function(){jQuery('[data-toggle="countTo"]').each(function(){var e=jQuery(this),a=e.data("after"),t=e.data("speed")?e.data("speed"):1500,s=e.data("interval")?e.data("interval"):15;e.appear(function(){e.countTo({speed:t,refreshInterval:s,onComplete:function(){a&&e.html(e.html()+a)}})})})},H=function(){jQuery(".js-gallery").each(function(){jQuery(this).magnificPopup({delegate:"a.img-link",type:"image",gallery:{enabled:!0}})}),jQuery(".js-gallery-advanced").each(function(){jQuery(this).magnificPopup({delegate:"a.img-lightbox",type:"image",gallery:{enabled:!0}})})},W=function(){CKEDITOR.disableAutoInline=!0,CKEDITOR.inline("js-ckeditor-inline"),CKEDITOR.replace("js-ckeditor")},z=function(){jQuery(".js-summernote-air").summernote({airMode:!0}),jQuery(".js-summernote").summernote({height:350,minHeight:null,maxHeight:null})},D=function(){jQuery(".js-slider").each(function(){var e=jQuery(this),a=e.data("slider-arrows")?e.data("slider-arrows"):!1,t=e.data("slider-dots")?e.data("slider-dots"):!1,s=e.data("slider-num")?e.data("slider-num"):1,r=e.data("slider-autoplay")?e.data("slider-autoplay"):!1,o=e.data("slider-autoplay-speed")?e.data("slider-autoplay-speed"):3e3;e.slick({arrows:a,dots:t,slidesToShow:s,autoplay:r,autoplaySpeed:o})})},L=function(){jQuery(".js-datepicker").add(".input-daterange").datepicker({weekStart:1,autoclose:!0,todayHighlight:!0})},I=function(){jQuery(".js-colorpicker").each(function(){var e=jQuery(this),a=e.data("colorpicker-mode")?e.data("colorpicker-mode"):"hex",t=e.data("colorpicker-inline")?!0:!1;e.colorpicker({format:a,inline:t})})},A=function(){jQuery(".js-masked-date").mask("99/99/9999"),jQuery(".js-masked-date-dash").mask("99-99-9999"),jQuery(".js-masked-phone").mask("(999) 999-9999"),jQuery(".js-masked-phone-ext").mask("(999) 999-9999? x99999"),jQuery(".js-masked-taxid").mask("99-9999999"),jQuery(".js-masked-ssn").mask("999-99-9999"),jQuery(".js-masked-pkey").mask("a*-999-a999")},O=function(){jQuery(".js-tags-input").tagsInput({height:"36px",width:"100%",defaultText:"Add tag",removeWithBackspace:!0,delimiter:[","]})},E=function(){jQuery(".js-select2").select2()},P=function(){hljs.initHighlightingOnLoad()},K=function(){jQuery(".js-notify").on("click",function(){var e=jQuery(this),a=e.data("notify-message"),t=e.data("notify-type")?e.data("notify-type"):"info",s=e.data("notify-from")?e.data("notify-from"):"top",r=e.data("notify-align")?e.data("notify-align"):"right",o=e.data("notify-icon")?e.data("notify-icon"):"",i=e.data("notify-url")?e.data("notify-url"):"";jQuery.notify({icon:o,message:a,url:i},{element:"body",type:t,allow_dismiss:!0,newest_on_top:!0,showProgressbar:!1,placement:{from:s,align:r},offset:20,spacing:10,z_index:1031,delay:5e3,timer:1e3,animate:{enter:"animated fadeIn",exit:"animated fadeOutDown"}})})},R=function(){jQuery(".js-draggable-items").sortable({connectWith:".draggable-column",items:".draggable-item",opacity:.75,handle:".draggable-handler",placeholder:"draggable-placeholder",tolerance:"pointer",start:function(e,a){a.placeholder.css({height:a.item.outerHeight(),"margin-bottom":a.item.css("margin-bottom")})}})},Y=function(){jQuery(".js-pie-chart").easyPieChart({barColor:jQuery(this).data("bar-color")?jQuery(this).data("bar-color"):"#777777",trackColor:jQuery(this).data("track-color")?jQuery(this).data("track-color"):"#eeeeee",lineWidth:jQuery(this).data("line-width")?jQuery(this).data("line-width"):3,size:jQuery(this).data("size")?jQuery(this).data("size"):"80",animate:750,scaleColor:jQuery(this).data("scale-color")?jQuery(this).data("scale-color"):!1})};return{init:function(){d(),u(),p(),f(),b(),j(),Q(),k(),v()},layout:function(e){y(e)},blocks:function(e,a){m(e,a)},initHelper:function(e){switch(e){case"print-page":C();break;case"table-tools":_(),w();break;case"appear":S();break;case"appear-countTo":T();break;case"magnific-popup":H();break;case"ckeditor":W();break;case"summernote":z();break;case"slick":D();break;case"datepicker":L();break;case"colorpicker":I();break;case"tags-inputs":O();break;case"masked-inputs":A();break;case"select2":E();break;case"highlightjs":P();break;case"notify":K();break;case"draggable-items":R();break;case"easy-pie-chart":Y();break;default:return!1}},initHelpers:function(e){if(e instanceof Array)for(var a in e)App.initHelper(e[a]);else App.initHelper(e)}}}();jQuery(function(){App.init()});