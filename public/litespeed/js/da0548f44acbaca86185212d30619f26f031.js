(function($){var iframe,player,videoHeight,videoInit=!1,noAnimTimeout,fancyBoxMargin,dropdownTimeout,win=$(window),doc=$(document),wrap=$('#wrap'),body=$('body');doc.ready(function(){touchDevices();navigationMenus();anchorLinks();sliders();forms();removeTelLinks();closeNotification();contactFormsAjax();deadLinks();scrollToContent();initVideoHeader();initVideoBlocks();campaignMonitor();projectsPageAjax();toggleFilters();hoverButtonZoomImage();svgIcons();newsletterDrawer();pageLoader();initScrollSpeed();stickyNav();gdprCookies();win.trigger('resize')});win.resize(function(){resizeNoAnim();fancybox();resizeStopScrolling();videoHeaderResize();videoBlocksResize();banner()});win.load(function(){setTimeout(function(){modalPopup()},850)});function pageLoader(){setTimeout(function(){$('.page-loader').removeClass('show');$('.home-banner').addClass('animate')},300);setTimeout(function(){$('.page-loader').remove()},750)}
function stickyNav(){win.scroll(function(){if(win.scrollTop()>$('.header').outerHeight()*2){$('.header').addClass('sticky-fixed')}else{$('.header').removeClass('sticky-fixed')}
if(win.scrollTop()>$('.header').outerHeight()*3){$('.header').addClass('sticky-ready')}else{$('.header').removeClass('sticky-ready')}
if(win.scrollTop()>$('.main-body').offset().top){$('.header').addClass('sticky-active')}else{$('.header').removeClass('sticky-active')}})}
function svgIcons(){$('.fa-icon').each(function(){if($(this).hasClass('svg-only')){}else{var mySVGsToInject=$(this);SVGInjector(mySVGsToInject)}})}
function touchDevices(){if(is_touch_device()){$('body').addClass('isTouchDevice')}else{$('body').addClass('nonTouchDevice')}}
function is_touch_device(){return(typeof window.orientation!=="undefined")||(navigator.userAgent.indexOf('IEMobile')!==-1)}
win.load(function(){setTimeout(function(){onScroll();scrollSpeed();$(window).on('scroll',function(){onScroll();scrollSpeed()})},300)})
function onScroll(){$('[data-show]').each(function(){var offset,whentoShow=$(this).data("show-percentage");whentoShowMob=$(this).data("show-percentage-mob");if(whentoShowMob){if(win.width()>767){var offset=($(window).height()/100)*whentoShow}else{var offset=($(window).height()/100)*whentoShowMob}}else if(whentoShow){var offset=($(window).height()/100)*whentoShow}else{offset=($(window).height()/100)*20}
if($(this).offset().top<$(window).scrollTop()+$(window).height()-offset){$(this).addClass('scroll-show')}})}
function initScrollSpeed(){$('[data-scrollspeed]').each(function(){if(!$(this).hasClass('activated')){$(this).wrapInner('<div class="animate-layer"></div>');$(this).addClass('activated')}})}
function scrollSpeed(){windowHeight=win.height();scrollPosition=win.scrollTop();offset=50;$('[data-scrollspeed]').each(function(){element=$(this);animateLayer=element.find('.animate-layer');elementHeight=element.outerHeight();elementTop=element.offset().top;elementBottom=elementTop+elementHeight;if(elementTop<windowHeight+scrollPosition+offset&&elementBottom>scrollPosition-offset){$(this).addClass('in-view');startPoint=elementTop-offset;endPoint=elementBottom+offset;middleOfElement=elementBottom-elementHeight/2;middleOfViewport=scrollPosition+(windowHeight/2);newPosition=Math.floor((middleOfViewport-middleOfElement)*element.attr('data-scrollspeed'));animateLayer.css('transform','translate3d(0,'+newPosition+'px,0)')}})}
function banner(){winHeight=win.height();if($('.multi-banner--fullscreen')[0]||$('.home-banner')[0]){$('.multi-banner .slide, .home-banner .slide').css('height',winHeight)}}
function navigationMenus(){$('.mob-menu-btn').on('click',function(){$('.drawer').addClass('active');$('.drawer').scrollTop(0);body.addClass('show-mob-menu raise-mob-overlay');stopScrolling();return!1});$('.close-mob-menu-btn').on('click',function(){$('.drawer').removeClass('active');body.removeClass('show-mob-menu');setTimeout(function(){body.removeClass('raise-mob-overlay');resumeScrolling()},500);return!1});$('.main-nav li.menu-item-has-children .arrow-icon').on('click',function(e){e.preventDefault();$(this).parent().toggleClass('active');$(this).next().slideToggle(250)});var i=1;$('.drawer > .drawer-outer > .drawer-inner > .nav-wrap > .main-nav > ul > li').each(function(){$(this).addClass('nav-link nav-link-'+i);i++});var colsize=Math.round($('.main-nav > ul > li').size()/2);$('.main-nav > ul > li').each(function(i){if(i>=colsize){$(this).addClass('main-nav-right')}})
$('.main-nav').find('.main-nav-right').insertAfter($('.main-nav + .logo')).wrapAll("<div class='main-nav'><ul></ul></div>")}
function anchorLinks(){$('a[data-anchor]').on('click',function(e){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=jQuery(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');var headerOffset=0;if(target.length){$('html,body').animate({scrollTop:target.offset().top-headerOffset},1000);return!1}}})}
function hoverButtonZoomImage(){$('.link-zoom-img .text-button').hover(function(){$(this).closest('.link-zoom-img').addClass('hover')},function(){$(this).closest('.link-zoom-img').removeClass('hover')})}
function scrollToContent(){$('.scroll-down-link').on('click',function(){$('html, body').animate({scrollTop:$('.hero + div, .multi-banner + .main-body').offset().top},600)})}
function newsletterDrawer(){$('a[data-signup]').on('click',function(){body.addClass('show-newsletter raise-newsletter-overlay');$('.mob-menu-btn .hamburger').toggleClass('open');$('.mob-menu-btn .hamburger').toggleClass('close-newsletter-btn');stopScrolling();return!1});$('.close-newsletter-btn').on('click',function(){$('.newsletter-overlay').trigger('click');return!1});wrap.on('click','.newsletter-overlay',function(){body.removeClass('show-newsletter');$('.mob-menu-btn .hamburger').toggleClass('open');$('.mob-menu-btn .hamburger').toggleClass('close-newsletter-btn');setTimeout(function(){body.removeClass('raise-newsletter-overlay');resumeScrolling()},750)})}
function sliders(){createSlider('.widget-slider',!0,!1)}
function createSlider(selector,fadeValue,centerMode){slider=$(selector);slider.slick({prevArrow:'<a class="slick-btn slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M203.9 405.3c5.877 6.594 5.361 16.69-1.188 22.62c-6.562 5.906-16.69 5.375-22.59-1.188L36.1 266.7c-5.469-6.125-5.469-15.31 0-21.44l144-159.1c5.906-6.562 16.03-7.094 22.59-1.188c6.918 6.271 6.783 16.39 1.188 22.62L69.53 256L203.9 405.3z"/></svg></a>',nextArrow:'<a class="slick-btn slick-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M219.9 266.7L75.89 426.7c-5.906 6.562-16.03 7.094-22.59 1.188c-6.918-6.271-6.783-16.39-1.188-22.62L186.5 256L52.11 106.7C46.23 100.1 46.75 90.04 53.29 84.1C59.86 78.2 69.98 78.73 75.89 85.29l144 159.1C225.4 251.4 225.4 260.6 219.9 266.7z"/></svg></a>',accessibility:!1,autoplay:slider.data('autoplay'),autoplaySpeed:slider.data('autoplay-speed'),dots:slider.data('dots'),arrows:slider.data('arrows'),fade:fadeValue,speed:1000,pauseOnHover:!1,centerMode:centerMode})}
function resizeNoAnim(){if(!body.hasClass('show-mob-menu')){body.addClass('no-anim');clearTimeout(noAnimTimeout);noAnimTimeout=setTimeout(function(){body.removeClass('no-anim')},150)}}
function forms(){if($('.date-picker')[0]){$(".date-picker").datepicker({dateFormat:"dd/mm/yy",changeYear:!0,yearRange:"-100:+100"})}
$('.contact-widget, .newsletter-widget').on('change focus blur keyup keydown','input[type="text"], input[type="email"], input[type="number"], input[type="tel"], input[type="password"], textarea',function(){thisInput=$(this);if(thisInput.val()&&thisInput.val()!==thisInput.attr('placeholder')){thisInput.closest('.border-input').addClass('filled')}else{thisInput.closest('.border-input').removeClass('filled')}});$('.contact-widget').on('change','select',function(){thisSelect=$(this);if(thisSelect.find('option:selected').val()===''){thisSelect.closest('.border-input').removeClass('filled')}else{thisSelect.closest('.border-input').addClass('filled')}});$('.file-upload').on('change','input',function(){rawVal=$(this).val();if(rawVal.indexOf('\\')>-1){newVal=rawVal.split('\\');finalVal=newVal[newVal.length-1]}else{finalVal=rawVal}
$(this).parent().addClass('filled').find('.fake-input span').text(finalVal)});$('.file-upload .remove').on('click',function(){var fileUploadPlaceholder=$(this).prev().data('text');$(this).parent().removeClass('filled').find('input').val('').parent().find('.fake-input span').text(fileUploadPlaceholder)})}
function removeTelLinks(){if(!Modernizr.inputtypes.tel){$('a[href^=tel]').each(function(){$(this).removeAttr('href').addClass('no-cursor')})}}
function fancybox(){$('[data-fancybox]').fancybox({loop:!0,idleTime:!1,animationEffect:"fade",buttons:["close"],baseTpl:'<div class="fancybox-container" role="dialog" tabindex="-1">'+'<div class="fancybox-bg"></div>'+'<div class="fancybox-inner">'+'<div class="fancybox-infobar">Image <span data-fancybox-index></span> of <span data-fancybox-count></span></div>'+'<div class="fancybox-toolbar">{{buttons}}</div>'+'<div class="fancybox-navigation">{{arrows}}</div>'+'<div class="fancybox-stage"></div>'+'<div class="fancybox-caption"><div class=""fancybox-caption__body"></div></div>'+'</div>'+'</div>',btnTpl:{close:'<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}">'+'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M315.3 411.3c-6.253 6.253-16.37 6.253-22.63 0L160 278.6l-132.7 132.7c-6.253 6.253-16.37 6.253-22.63 0c-6.253-6.253-6.253-16.37 0-22.63L137.4 256L4.69 123.3c-6.253-6.253-6.253-16.37 0-22.63c6.253-6.253 16.37-6.253 22.63 0L160 233.4l132.7-132.7c6.253-6.253 16.37-6.253 22.63 0c6.253 6.253 6.253 16.37 0 22.63L182.6 256l132.7 132.7C321.6 394.9 321.6 405.1 315.3 411.3z"/></svg>'+"</button>",arrowLeft:'<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}">'+'<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M203.9 405.3c5.877 6.594 5.361 16.69-1.188 22.62c-6.562 5.906-16.69 5.375-22.59-1.188L36.1 266.7c-5.469-6.125-5.469-15.31 0-21.44l144-159.1c5.906-6.562 16.03-7.094 22.59-1.188c6.918 6.271 6.783 16.39 1.188 22.62L69.53 256L203.9 405.3z"/></svg></div>'+"</button>",arrowRight:'<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}">'+'<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M219.9 266.7L75.89 426.7c-5.906 6.562-16.03 7.094-22.59 1.188c-6.918-6.271-6.783-16.39-1.188-22.62L186.5 256L52.11 106.7C46.23 100.1 46.75 90.04 53.29 84.1C59.86 78.2 69.98 78.73 75.89 85.29l144 159.1C225.4 251.4 225.4 260.6 219.9 266.7z"/></svg></div>'+"</button>"},afterClose:function(){win.trigger('resize')},})}
var hasScrollbar=window.innerWidth>document.documentElement.clientWidth,normalw=window.innerWidth,scrollw=normalw-body.width();function stopScrolling(){$('body').addClass('stop-scrolling');if(hasScrollbar){$('body').css('padding-right',scrollw);$('.banner-logo').css('margin-right',scrollw);$('.mobile-logo').css('padding-right',scrollw);if(window.innerWidth>1199){$('.header').css('margin-right',scrollw)}}}
function resumeScrolling(){if(body.hasClass('stop-scrolling')){$('body').removeClass('stop-scrolling');if(hasScrollbar){$('body').css('padding-right','0');$('.banner-logo').css('margin-right','0');$('.mobile-logo').css('padding-right','0');if(window.innerWidth>1199){$('.header').css('margin-right','0')}}}}
function resizeStopScrolling(){if(body.hasClass('stop-scrolling')){if(window.innerWidth>1199){resumeScrolling()}}}
function validateEmail(email){var re=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;return re.test(email)}
function validatePhone(phone){var re=/^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?$/;return re.test(phone)}
function validateUploadExt(file){var ext=file.match(/\.([^\.]+)$/);if(ext!==null){switch(ext[1].toLowerCase()){case 'jpg':case 'png':case 'pdf':case 'xls':case 'xlsx':case 'doc':case 'docx':return!0;break}}
return!1}
function validateUploadSize(input){if(input[0].files[0].size>2097152){return!1}
return!0}
function validationElement(thisFieldContainer){thisFieldType=thisFieldContainer.attr('data-fieldtype');if(thisFieldContainer.data("required")===""){thisFieldValid='';if(thisFieldType==='tf'){if(thisFieldContainer.find('input').val()===''||thisFieldContainer.find('input').val()===thisFieldContainer.find('input').attr('placeholder')){thisFieldValid='false'}else{if(thisFieldContainer.find('input').attr('type')=="email"&&!validateEmail(thisFieldContainer.find('input').val())){thisFieldValid='email-false'}}}
if(thisFieldType==='fu'){if(thisFieldContainer.find('input').val()===''||thisFieldContainer.find('input').val()===thisFieldContainer.find('input').attr('placeholder')){thisFieldValid='false'}else if(!validateUploadExt(thisFieldContainer.find('input').val())){thisFieldValid='file-ext'}else if(!validateUploadSize(thisFieldContainer.find('input'))){thisFieldValid='file-size'}}
if(thisFieldType==='ta'&&(thisFieldContainer.find('textarea').val()===''||thisFieldContainer.find('textarea').val()===thisFieldContainer.find('textarea').attr('placeholder'))){thisFieldValid='false'}
if(thisFieldType==='dp'&&(thisFieldContainer.find('input').val()===''||thisFieldContainer.find('input').val()===thisFieldContainer.find('input').attr('placeholder'))){thisFieldValid='false'}
if(thisFieldType==='cb'&&thisFieldContainer.find('input:checked').size()<1){thisFieldValid='false'}
if(thisFieldType==='rb'&&thisFieldContainer.find('input:checked').size()<1){thisFieldValid='false'}
if(thisFieldType==='dd'&&thisFieldContainer.find('select option:selected').attr('value')==='0'){thisFieldValid='false'}
if(thisFieldValid===''){sendForm=!0;thisFieldContainer.find('.error-tooltip').removeClass('show');thisFieldContainer.children(".warning").removeClass('show')}else{sendForm=!1;thisFieldContainer.find('.error-tooltip').addClass('show');if(thisFieldValid==='email-false'){thisFieldContainer.children(".warning").addClass('show').html("You have entered an invalid email address")}else if(thisFieldValid==='file-ext'){thisFieldContainer.children(".warning").addClass('show').html("This file format is not supported")}else if(thisFieldValid==='file-size'){thisFieldContainer.children(".warning").addClass('show').html("The maximum file size is 2mb")}else{thisFieldContainer.children(".warning").addClass('show').html("This is a required field")}}}else if(thisFieldContainer.data("required")!==""&&thisFieldContainer.find('input').attr('type')=="email"){if(thisFieldContainer.find('input').val()==""||thisFieldContainer.find('input').val()===thisFieldContainer.find('input').attr('placeholder')){thisFieldContainer.children(".warning").removeClass('show');thisFieldContainer.find('.error-tooltip').removeClass('show');sendForm=!0}else{if(!validateEmail(thisFieldContainer.find('input').val())){thisFieldContainer.children(".warning").addClass('show').html("You have entered an invalid email address");thisFieldContainer.find('.error-tooltip').addClass('show');sendForm=!1}else{thisFieldContainer.children(".warning").removeClass('show');thisFieldContainer.find('.error-tooltip').removeClass('show');sendForm=!0}}}else if(thisFieldContainer.data("required")!==""&&thisFieldContainer.find('input').attr('type')=="file"){if(thisFieldContainer.find('input').val()&&!validateUploadExt(thisFieldContainer.find('input').val())){thisFieldContainer.children(".warning").addClass('show').html("This file format is not supported");thisFieldContainer.find('.error-tooltip').addClass('show');sendForm=!1}else if(thisFieldContainer.find('input').val()&&!validateUploadSize(thisFieldContainer.find('input'))){thisFieldContainer.children(".warning").addClass('show').html("The maximum file size is 2mb");thisFieldContainer.find('.error-tooltip').addClass('show');sendForm=!1}else{thisFieldContainer.children(".warning").removeClass('show');thisFieldContainer.find('.error-tooltip').removeClass('show');sendForm=!0}}else{sendForm=!0}
return sendForm}
function contactFormsAjax(){$('[data-required]').each(function(){$(this).find('.field-wrap').append('<span class="error-tooltip"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M312.1 375c9.369 9.369 9.369 24.57 0 33.94s-24.57 9.369-33.94 0L160 289.9l-119 119c-9.369 9.369-24.57 9.369-33.94 0s-9.369-24.57 0-33.94L126.1 256L7.027 136.1c-9.369-9.369-9.369-24.57 0-33.94s24.57-9.369 33.94 0L160 222.1l119-119c9.369-9.369 24.57-9.369 33.94 0s9.369 24.57 0 33.94L193.9 256L312.1 375z"/></svg></span>')});$('.contact-widget input, .contact-widget textarea, .contact-widget select').change(function(){thisFieldContainer=$(this).parents(".form-group");validationElement(thisFieldContainer)});$('.contact-widget').on('submit','form',function(e){e.preventDefault();var successMessage=$(this).children('span[data-success]').data('success'),sendFormArray=new Array(),thisForm=$(this),counter=0;thisForm.find('.form-group').each(function(){thisFieldContainer=$(this);validationElement(thisFieldContainer);sendFormArray.push(validationElement(thisFieldContainer))});if(sendFormArray.indexOf(!1)===-1){thisForm.find(".warning").remove();thisForm.addClass('contact-widget-sending');formData=thisForm.serializeArray();console.log(formData);var curName,prevName;for(i=0;i<formData.length;i++){curName=formData[i].name;if(curName===prevName){formData[i].value=formData[i-1].value+', '+formData[i].value}
prevName=formData[i].name}
for(i=0;i<formData.length;i++){curName=formData[i].name;if(curName===prevName){formData.splice(i-1,1);i=-1;continue}
prevName=formData[i].name}
var data=new FormData(this);data.append("action","submitformsfunction");for(i=0;i<formData.length;i++){data.append(formData[i].name,formData[i].value)}
$.ajax({type:"POST",url:$('body').attr('data-siteurl')+"/wp-admin/admin-ajax.php",data:data,cache:!0,dataType:'json',processData:!1,contentType:!1,success:function(results){thisForm.closest('.contact-widget .contact-wrap').wrap('<div class="form-complete form-complete-new" disabled="disabled"></div>');thisForm.removeClass('contact-widget-sending');setTimeout(function(){$('.contact-widget .contact-wrap').css('opacity','0.05')},50);setTimeout(function(){$('.contact-widget .form-complete-new').parent().append('<div class="success-message">'+successMessage+'</div>');$('.contact-widget .success-message').fadeIn()},300);setTimeout(function(){successMsg=$('.contact-widget .success-message');scrollToPos=successMsg.offset().top-($(window).height()/2)+(successMsg.outerHeight()/2);$("html, body").animate({scrollTop:scrollToPos});$('.form-complete-new').removeClass('form-complete-new')},450)}})}else{doNotification("Please fix the errors indicated")}})}
function slugify(text){return text.toString().toLowerCase().replace(/\s+/g,'_').replace(/\./g,'')}
var notificationActive=!1,notificationTimeout,closeNotificationTimeout,removeNotificationTimeout,notification=$('.notification');function doNotification(text){if(!notificationActive){notificationActive=!0;$('body').append('<div class="notification"><p>'+text+'</p></div>');setTimeout(function(){$('.notification').addClass('show')},50);closeNotificationTimeout=setTimeout(function(){$('.notification').removeClass('show')},4000);removeNotificationTimeout=setTimeout(function(){$('.notification').remove();notificationActive=!1},4400)}}
function closeNotification(){doc.on('click','.notification',function(){var thisNotification=$('.notification');thisNotification.removeClass('show');clearTimeout(notificationTimeout);clearTimeout(closeNotificationTimeout);clearTimeout(removeNotificationTimeout);notificationTimeout=setTimeout(function(){thisNotification.remove();notificationActive=!1},200)})}
function campaignMonitor(){$('#signupForm input').change(function(){validationElement($(this).parents(".form-group"))});$('#signupForm').submit(function(e){e.preventDefault();var successMessage=$(this).children('span[data-success]').data('success'),sendFormArray=new Array(),thisForm=$(this);thisForm.find('.form-group').each(function(){var thisFieldContainer=$(this);validationElement(thisFieldContainer);sendFormArray.push(validationElement(thisFieldContainer))});if(sendFormArray.indexOf(!1)===-1){thisForm.find(".warning").removeClass('show');thisForm.find(".error-tooltip").removeClass('show');thisForm.addClass('newsletter-widget-sending');var data=new FormData(this);data.append("action","signupformfunction");$.ajax({type:"POST",url:$('body').attr('data-siteurl')+"/wp-admin/admin-ajax.php",data:data,cache:!0,dataType:'json',processData:!1,contentType:!1,success:function(results){if(results.error){var message=results.message;doNotification("Please fix the errors indicated")}else{thisForm.find(".warning").removeClass('show');$('#signupForm').parent().addClass("form-complete form-complete-new");setTimeout(function(){$('#signupForm').css('opacity','0.05')},50);setTimeout(function(){$('.newsletter-widget .form-complete-new').append('<div class="success-message">'+successMessage+'</div>');$('.newsletter-widget .success-message').fadeIn()},300);setTimeout(function(){successMsg=$('.newsletter-widget .success-message');scrollToPos=successMsg.offset().top-($(window).height()/2)+(successMsg.outerHeight()/2);$("html, body").animate({scrollTop:scrollToPos});thisForm.find('.form-complete-new').removeClass('form-complete-new');thisForm.removeClass('newsletter-widget-sending')},450)}}})}else{doNotification("Please fix the errors indicated")}})}
function mailchimp(){$('#mc-embedded-subscribe-form input').change(function(){thisFieldContainer=$(this).parents(".form-group");validationElement(thisFieldContainer)});$('#mc-embedded-subscribe-form').submit(function(e){e.preventDefault();var errorNotification='Please fix the errors indicated',sendFormArray=new Array(),thisForm=$(this),formData={};thisForm.find('.form-group').each(function(){thisFieldContainer=$(this);sendFormArray.push(validationElement(thisFieldContainer))});thisForm.find('.form-group[mailchimp-notice]').children(".warning").removeClass('show');if(sendFormArray.indexOf(!1)===-1){thisForm.find('button[type="submit"]').attr('disabled','disabled');thisForm.addClass('newsletter-widget-sending');var formSerializeArray=thisForm.serializeArray(),successMessage=$(this).children('span[data-success]').data('success');$.map(formSerializeArray,function(n){formData[n.name]=n.value});formData.action='mailchimp';$.ajax({type:"POST",url:$('body').attr('data-siteurl')+"/wp-admin/admin-ajax.php",cache:!0,dataType:'json',data:formData,success:function(data){if(data.result==='success'){thisForm.find(".warning").removeClass('show');$('#mc-embedded-subscribe-form').parent().addClass("form-complete form-complete-new");setTimeout(function(){$('#mc-embedded-subscribe-form').css('opacity','0.05')},50);setTimeout(function(){$('.newsletter-widget .form-complete-new').append('<div class="success-message">'+successMessage+'</div>');$('.newsletter-widget .success-message').fadeIn()},300);setTimeout(function(){successMsg=$('.newsletter-widget .success-message');scrollToPos=successMsg.offset().top-($(window).height()/2)+(successMsg.outerHeight()/2);$("html, body").animate({scrollTop:scrollToPos});thisForm.find('.form-complete-new').removeClass('form-complete-new');thisForm.removeClass('newsletter-widget-sending')},450)}else{thisForm.find('.form-group[mailchimp-notice]').children(".warning").addClass('show').html(data.msg);doNotification(errorNotification)}
thisForm.find('button[type="submit"]').removeAttr('disabled')},error:function(data){thisForm.find('.form-group[mailchimp-notice]').children(".warning").addClass('show').html('An error occurred while submitting the form. Please contact the site administrator.');thisForm.find('button[type="submit"]').removeAttr('disabled');doNotification(errorNotification)}})}else{doNotification(errorNotification)}})}
function deadLinks(){$("a[href=''],a[href='#']").click(function(e){e.preventDefault()})}
function initVideoHeader(){if($('.video-mask--header')[0]){iframe=$('.video-mask--header iframe');player=new Vimeo.Player(iframe);player.ready().then(function(){setTimeout(function(){iframe.parents().find('.img').addClass('video-ready')},1500)});win.resize(function(){if(window.innerWidth>767){player.play()}else{if($('.video-mask--header').hasClass('mobile-hide')){player.pause()}}})}}
function videoHeaderResize(){if($('.video-mask--header')[0]){var videoID=$(".video-mask--header").attr("data-video-id");var videoURL="https://vimeo.com/api/oembed.json?url=https%3A//vimeo.com/"+videoID;$.get(videoURL,function(data){var iframeData=data;startingWidth=iframeData.width;startingHeight=iframeData.height;startingRatio=startingWidth/startingHeight;boxWidth=$('.video-mask--header').outerWidth(!0);boxHeight=$('.video-mask--header').outerHeight(!0);formula=boxWidth/boxHeight;videoHeight=win.height();if(formula>startingRatio){iframe.css('width','auto').css('height','10000px')}else{iframe.css('height','auto').css('width','10000px')}})}}
function initVideoBlocks(){if($('.video-mask--block')[0]){$('.video-mask--block').each(function(){var thisVideo=$(this);var iframe=thisVideo.children('iframe');var player=new Vimeo.Player(iframe);win.resize(function(){if(window.innerWidth>767){player.play()}else{if(thisVideo.hasClass('mobile-hide')){player.pause()}}})})}}
function videoBlocksResize(){if($('.video-mask--block')[0]){$('.video-mask--block').each(function(){var thisVideo=$(this);var thisIframe=thisVideo.children('iframe');var videoID=thisVideo.attr("data-video-id");var videoURL="https://vimeo.com/api/oembed.json?url=https%3A//vimeo.com/"+videoID;$.get(videoURL,function(data){var iframeData=data;startingWidth=iframeData.width;startingHeight=iframeData.height;startingRatio=startingWidth/startingHeight;boxWidth=thisVideo.outerWidth(!0);boxHeight=thisVideo.outerHeight(!0);formula=boxWidth/boxHeight;videoHeight=win.height();if(formula>startingRatio){thisIframe.css('width','auto').css('height','9999px')}else{thisIframe.css('height','auto').css('width','9999px')}})})}}
function projectsPageAjax(){if(body.hasClass("page-template-page-projects")){function getProjectsList(args,append){let $projects_widget=$('#projects-widget'),nonce=$projects_widget.data('nonce'),url_queries=projectsPageUrl(args);$.ajax({type:"POST",url:$('body').attr('data-siteurl')+"/wp-admin/admin-ajax.php",data:url_queries+'action=projects&nonce='+nonce,cache:!0,beforeSend:function(xhr){if(!append){$('.ajax-loader').removeClass('disabled')}},success:function(results){if(results){results=$(results);if(append){$projects_widget.find('.projects-list').append(results.find('.projects-list > *'));$load_more_results=results.find('.load-more-results');if($load_more_results.length>0){$projects_widget.find('.load-more-results a').data('pagelink',$load_more_results.find('a').data('pagelink'));reloadSvgIcons()}else{$projects_widget.find('.load-more-results').hide();reloadSvgIcons()}}else{$projects_widget.html(results);reloadSvgIcons()
toggleFilters()}
win.trigger('scroll')}}})}
function reloadSvgIcons(){SVGInjector($('.filters-widget .fa-icon'))}
function projectsPageUrl(data){let new_url_queries='';if(data.tag.length){new_url_queries+='projects-category='+data.tag+'&'}
setUrl(new_url_queries,!1);if(data.page.length){new_url_queries+='page='+data.page+'&'}
return new_url_queries}
$(document).on('change','#projects-filter select',function(){var $this=$(this),val=$this.val(),tag=(val=='0'?[]:[val]);getProjectsList({page:[],tag:tag});scrollOffset=window.innerWidth>=768?80:60;$('html, body').animate({scrollTop:$(".filters-widget").offset().top},600)});$(document).on('click','.category-links .link-list a',function(e){var link=$(this),tag=link.data('tag');link.closest('.category-links').find('a').not(link).removeClass('active');link.addClass('active');console.log("WO");getProjectsList({page:[],tag:tag},!1);return!1});$(document).on('click','.load-more-results a',function(e){e.preventDefault();var selectVal=$('#projects-filter select').val(),selectTag=(selectVal=='0'?[]:[selectVal])
link=$('.category-links .link-list a.selected'),linkTag=link.data('tag'),tag=$('#projects-filter select')[0]?selectTag:linkTag;page=$(this).data("pagelink"),paged=page=='1'?[]:[page];getProjectsList({page:paged,tag:tag},!0);var scrollOffset=$(".load-more-results").offset().top;$('html, body').animate({scrollTop:scrollOffset},600)});$(window).on('popstate',function(){location.reload(!0)})}}
function toggleFilters(){$('.toggle-filters').click(function(e){e.preventDefault();$(this).next().slideToggle('fast');if(!$(this).hasClass('active')){$(this).addClass('active')}else{$(this).removeClass('active')}})}
function setUrl(set_url_queries,onlyReturn){if(set_url_queries.substr(set_url_queries.length-1)==="&"){set_url_queries=set_url_queries.substr(0,set_url_queries.length-1)}
var url_queries=set_url_queries;if(set_url_queries!==""){set_url_queries="?"+set_url_queries}
if(!onlyReturn&&history.pushState){let newurl=window.location.protocol+"//"+window.location.host+window.location.pathname+set_url_queries;window.history.pushState({path:newurl},'',newurl)}
return(url_queries?url_queries+'&':url_queries)}
function getCookie(name){var cookie=document.cookie;var prefix=name+"=";var begin=cookie.indexOf("; "+prefix);if(begin==-1){begin=cookie.indexOf(prefix);if(begin!=0)return null}else{begin+=2;var end=document.cookie.indexOf(";",begin);if(end==-1){end=cookie.length}}
return unescape(cookie.substring(begin+prefix.length,end))}
function gdprCookies(){var myCookie=getCookie("moove_gdpr_popup");if(myCookie==null){$('#moove_gdpr_cookie_info_bar').show()}else{$('#moove_gdpr_cookie_info_bar').hide()}
$('.change-settings-button').on('click',function(){setTimeout(function(){body.addClass('show-cookie-modal');$(".moove-gdpr-modal-content").prepend('<a href="#" class="cookie-custom-close" onClick="javascript:return false;"><span class="custom-arrow-close"></span></a>')},200);stopScrolling()});doc.on('click','.cookie-custom-close, .gdpr_lightbox .mgbutton',function(){setTimeout(function(){body.removeClass('show-cookie-modal')},50);setTimeout(function(){$('.moove-gdpr-modal-close').trigger('click');resumeScrolling()},600)});$('.manage-cookies-link a').on('click',function(){$('.change-settings-button').trigger('click')});$('.moove-gdpr-modal-close, .moove-gdpr-branding, .moove-gdpr-tab-nav, .gdpr_lightbox-close').attr('tabindex','-1')}
function modalPopup(){if($('#modalGlobal').length>0){$('.modal-link').trigger('click');Cookies.set('globalpopup','',{expires:1})}
var modalID=$('.modal-pop--page').attr('data-modal-id');var pageCookie='pagepopup'+modalID;if($('.modal-pop--page').length>0){$('.modal-link').trigger('click');Cookies.set(pageCookie,'',{expires:1})}
$('.modal-close-btn').click(function(e){$.fancybox.close();return!1})}
$.fn.isInViewport=function(){var elementTop=$(this).offset().top;var elementBottom=elementTop+$(this).outerHeight();var viewportTop=$(window).scrollTop();var viewportBottom=viewportTop+$(window).height();return elementTop<viewportBottom};$(window).on('resize scroll',function(e){$('.svg-png-uploader-widget, .main-body .listing, .main-body h1, .main-body h2, .main-body h3, .main-body h4, .main-body h5, .main-body h6, .main-body .subtitle, .main-body p, .main-body .button, .main-body .text-button, .widget-container ul:not(.slick-dots), .widget-container ol, .text-widget--animation-widget .container-fluid').each(function(){if($(this).isInViewport()){$(this).addClass('in-view')}});var bannerHeight=$('.home-banner').height();if($(window).scrollTop()>bannerHeight){$('.banner-logo').fadeOut()}else{$('.banner-logo').fadeIn()}})})(this.jQuery)
;