import Header from './components/Header';
//import Maps from './components/Maps';
import AOS from "aos";
import 'aos/dist/aos.css';
import 'slick-carousel';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';


export default new (class App {
  constructor() {
    this.setDomMap();
    this.previousScroll = 0;

    // dom ready shorthand
    $(() => {
      this.domReady();
      AOS.init();
      setTimeout(function(){
        $('body').addClass('loaded');
      },500);

      $(window).on("scroll", function() {
        if($(window).scrollTop() > 100) {
            $(".float-logo").addClass("active");
            $(".header").addClass("h-out");
        } else {
          $(".float-logo").removeClass("active");
          $(".header").removeClass("h-out");
        }
    });
    $('.menu-on').on('mouseenter', function() {
      $(".float-logo").removeClass("active");
      $(".header").removeClass("h-out");
    });

    // init ScrollMagic Controller
    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({
      triggerElement: ".stickey-section ",
      duration: 2500,
      triggerHook: 0
    }).setPin(".stickey-nav", {pushFollowers: false});

    var scene2 = new ScrollMagic.Scene({
      triggerElement: ".pricing-section",
      duration: 1400,
      triggerHook: 0
    }).setPin(".ps-nav", {pushFollowers: false});

    var video = new ScrollMagic.Scene({
      triggerElement: ".d3dpin-container",
      duration: 1000,
      triggerHook: .03
    }).setPin(".d3dpin", {pushFollowers: false})
    .setClassToggle(".s-nav li.d3dpin-nav", "active")
    //  .setTween(tween)
    var video2 = new ScrollMagic.Scene({
      triggerElement: ".xlms-container",
      duration: 700,
      triggerHook: .03
    }).setPin(".xmls", {pushFollowers: false})
  .setClassToggle(".s-nav li.xmls-nav", "active")

  var students = new ScrollMagic.Scene({
    triggerElement: ".students-container",
    duration: 1500,
    triggerHook: .03
  })
  .setClassToggle(".s-nav li.students-nav", "active")

  // var institutions = new ScrollMagic.Scene({
  //   triggerElement: ".institutions-container",
  //  // duration: 1500,
  //   triggerHook: .03
  // }).setClassToggle(".s-nav li.institutions-nav", "active")


//  .setTween(tween)
    controller.addScene([scene, scene2, video, video2, students]);
      
  
    
    });
  }

  domReady = () => {
    this.initComponents();
    this.handleUserAgent();
    this.windowResize();
    this.bindEvents();
    this.handleSplashScreen();
    this.featureSlider();
    this.scrollEvent();
    this.testimonial();
    this.floatingElements();
    this.mobileMenu();
    this.coursesCarousal();
    this.accordian();
    this.scrollToElem();
    this.pricing();
  };

  initComponents = () => {
    new Header({
      header: this.header,
      htmlBody: this.htmlBody,
    });

    //if (this.mapContainer.length) {
     // new Maps({
      //  mapContainer: this.mapContainer,
     // });
   //}
  };

  setDomMap = () => {
    this.window = $(window);
    this.htmlNbody = $('body, html');
    this.html = $('html');
    this.htmlBody = $('body');
    this.siteLoader = $('.site-loader');
    this.header = $('header');
    this.siteBody = $('.site-body');
    this.footer = $('footer');
    this.gotoTop = $('#gotoTop');
    this.gRecaptcha = $('.g-recaptcha');
    this.wrapper = $('.wrapper');
    //this.pushDiv = this.wrapper.find('.push');
    this.mapContainer = $('#map_canvas');
    this.inputs = $('input, textarea').not('[type="checkbox"], [type="radio"]');
  };
  // mobile menu
  mobileMenu = () => {
    const menuButton = document.querySelector(".menu-button");
    const menu = document.querySelector(".nav");

    let showMenu = false;

    //initiAL SETUP

    //ADD CLASS
    menuButton.addEventListener("click", toggolmenu);

    function toggolmenu() {
      if (!showMenu) {
        menuButton.classList.add("close");
        menu.classList.add("show");
        showMenu = true;
      } else {
        menuButton.classList.remove("close");
        menu.classList.remove("show");

        showMenu = false;
      }
    }
  }
  floatingElements = () => {
    jQuery(window).on('scroll', function(){
        var ws = jQuery(window).scrollTop();
        jQuery('#layer9').css({
          'transform': `translate(0px, -${ws / 6}px)`
       });
        jQuery('#layer8').css({
          'transform': `translate(0px, -${ws / 6}px)`
       });
        jQuery('#layer7').css({
          'transform': `translate(0px, -${ws / 2}px)`
       });
        jQuery('#layer6').css({
          'transform': `translate(0px, -${ws / 4}px)`
        });
        jQuery('#layer5').css({
            'transform': `translate(0px, -${ws / 2}px)`
        });
        jQuery('#layer4').css({
            'transform': `translate(0px, -${ws / 5}px)`
        });

        jQuery('#layer3, #layer5').css({
            'transform': `translate(0px, -${ws / 4}px)`
        });
        jQuery('#layer2').css({
            'transform': `translate(0px, -${ws / 3}px)`
        });

        jQuery('#layer1').css({
            'transform': `translate(0px, -${ws / 3}px)`
        });

        jQuery('#layer0').css({
            'transform': `translate(0px, -${ws / 2}px)`
        });


    });
  }
  featureSlider = () => {
  var x = 1;

  function updateClass() {
    let a = $(".feature-item.active");
    a.removeClass("active");
    a = a.next(".feature-item");
    if (a.length == 0)
      a = $(".feature-item").first();
      a.addClass("active");
  }
    // setInterval(function() {
    //   updateClass();
    // }, x * 3000);

    var initList = setInterval(updateClass, 3000);

    $('.feature-item').mouseenter(function(){
       clearInterval(initList);
       $('.feature-item').removeClass('active');
       $(this).addClass('active');
    })
    // $('.feature-item').mouseout(function(){
    //   $('.feature-item').removeClass('.active');
    //   $(this).removeClass('active');
    //   var myVar = setInterval(updateClass, x * 3000);
    // })
  }
  coursesCarousal = () => {
    // Swiper Config
    var swiper = new Swiper(".swiper-container", {
      slidesPerView: 2.5,
      spaceBetween: 25,
      centeredSlides: false,
      freeMode: true,
      grabCursor: true,
      loop: false,
      pagination: false,
      // pagination: {
      //   el: ".swiper-pagination",
      //   clickable: true
      // },
      // autoplay: {
      //   delay: 4000,
      //   disableOnInteraction: false
      // },
      // navigation: {
      //   nextEl: ".swiper-button-next",
      //   prevEl: ".swiper-button-prev"
      // },
      breakpoints: {
        800: {
          slidesPerView: 2.5,
          spaceBetween: 15,
        },
        600: {
          slidesPerView: 1.5,
          spaceBetween: 15,
        }
      }
    });
  }
  testimonial = () => {
    $('.testimonial-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      auto: true,
      fade: true,
      asNavFor: '.testimonial-nav'
    });
    $('.testimonial-nav').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: '.testimonial-slider',
      dots: false,
      focusOnSelect: true,
      centerMode: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        }
      ]

    });
  }

  pricing = () => {
    function numScroll() {
      $('.num').each(function() {
        var $this = $(this),
            countTo = $this.attr('data-count');
        $({ countNum: $this.text()}).animate({
          countNum: countTo
        },
      
        {
          duration: 2000,
          easing:'swing',
          step: function(now) {
            $this.text(Math.floor(this.countNum));
            //$(this).text(Math.ceil(now));
          },
          // complete: function() {
          //   $this.text(this.countNum);
          //   //alert('finished');
          // }
        });  
      });
    }
    console.log('pricing')
    $('.switch').on('click', function(){
      console.log('chenged')
    if(!$(this).find('input').is(':checked')) {
      $('.yearly-subs').show();
      $('.monthly-subs').hide();
      numScroll()
    } else {
      $('.yearly-subs').hide();
      $('.monthly-subs').show();
      numScroll()
    }
  });
  // $('.pricing-table .flex-col').each(function () {
  //   $(this).find('.monthly-subs .price .num').prop('Counter',0).animate({
  //       Counter: $(this).find('.monthly-subs .price .num').text()
  //   }, {
  //       duration: 2000,
  //       easing: 'swing',
  //       step: function (now) {
  //           $(this).text(Math.ceil(now));
  //       }
  //   });
  // });
  }

  bindEvents = () => {
    // Window Events
    this.window.resize(this.windowResize).scroll(this.windowScroll);

    // General Events
    const $container = this.wrapper;

    $container.on('click', '.disabled', () => false);

    // Specific Events
    this.gotoTop.on('click', () => {
      this.htmlNbody.animate({
        scrollTop: 0,
      });
    });

    this.inputs
      .on({
        focus: e => {
          const self = $(e.currentTarget);
          self.closest('.element').addClass('active');
        },
        blur: e => {
          const self = $(e.currentTarget);
          if (self.val() !== '') {
            self.closest('.element').addClass('active');
          } else {
            self.closest('.element').removeClass('active');
          }
        },
      })
      .trigger('blur');

    // Reload the current path when changing language instead of redirecting to landing page
    // Uncomment below and modify languages
    // $container.on('click', '.language-toggle', function(e) {
    //   e.preventDefault();
    //   const $this = $(this);
    //   const href = $this.attr('href');
    //   const isEnglish = href.indexOf('/ar') >= 0;
    //   const locArray = location.pathname.split('/');
    //   const indexOfIndex = locArray.indexOf('index.php');
    //   const isDev = indexOfIndex >= 0;
    //   const index = isDev ? indexOfIndex + 1 : 1;
    //   if(!isEnglish) {
    //     locArray = locArray.filter(item => item !== 'ar')
    //   }
    //   locArray.splice(index, 0, isEnglish ? 'ar' : '');
    //   const newHref = locArray.join('/').replace('//', '/');
    //   location.href = newHref;
    // });

    // Uncomment below if you need to add google captcha (also in includes/script.php)
    // => Make sure the SITEKEY is changed below
    // this.gRecaptcha.each((index, el) => {
    //   grecaptcha.render(el, {'sitekey' : '6LeB3QwUAAAAADQMo87RIMbq0ZnUbPShlwCPZDTv'});
    // });
  };

  accordian = () => {
      $('.faqs-title').on('click',function(j) {
        var dropDown = $(this).closest('.faqs-card').find('.faqs-panel');
        $(this).closest('.faqs').find('.faqs-panel').not(dropDown).slideUp();
        
        if ($(this).hasClass('active')) {
          $(this).removeClass('active');
        } else {
          $(this).closest('.faqs').find('.faqs-title.active').removeClass('active');
          $(this).addClass('active');
        }
        
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
      });
  }

  scrollToElem = () => {
    $(".scrollToEle").on('click',function() {
      $([document.documentElement, document.body]).animate({
          scrollTop: $(".scrollEle").offset().top
      }, 2000);
  });
  }

  scrollEvent = () => {
    $('a.enq').click(function() {
      let anchor = $(this).attr('href');
      console.log(anchor);
      $('html, body').animate({
          scrollTop: $(anchor).offset().top
      }, 200);
  });
  }

  windowResize = () => {
    this.screenWidth = this.window.width();
    this.screenHeight = this.window.height();

    // calculate footer height and assign it to wrapper and push/footer div
    // if (this.pushDiv.length){
    //   this.footerHeight = this.footer.outerHeight();
    //   this.wrapper.css('margin-bottom', -this.footerHeight);
    //   this.pushDiv.height(this.footerHeight);
    // }
  };

  windowScroll = () => {
    const topOffset = this.window.scrollTop();

    this.header.toggleClass('top', topOffset > 300);
    this.header.toggleClass('sticky', topOffset > 600);
    if (topOffset > this.previousScroll || topOffset < 500) {
      this.header.removeClass('sticky');
    } else if (topOffset < this.previousScroll) {
      this.header.addClass('sticky');
      // Additional checking so the header will not flicker
      if (topOffset > 250) {
        this.header.addClass('sticky');
      } else {
        this.header.removeClass('sticky');
      }
    }

    this.previousScroll = topOffset;
    this.gotoTop.toggleClass(
      'active',
      this.window.scrollTop() > this.screenHeight / 2,
    );
  };

  handleSplashScreen() {
    this.htmlBody.find('.logo-middle').fadeIn(500);
    this.siteLoader.delay(1500).fadeOut(500);
  }

  handleUserAgent = () => {
    // detect mobile platform
    if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
      this.htmlBody.addClass('ios-device');
    }
    if (navigator.userAgent.match(/Android/i)) {
      this.htmlBody.addClass('android-device');
    }

    // detect desktop platform
    if (navigator.appVersion.indexOf('Win') !== -1) {
      this.htmlBody.addClass('win-os');
    }
    if (navigator.appVersion.indexOf('Mac') !== -1) {
      this.htmlBody.addClass('mac-os');
    }

    // detect IE 10 and 11P
    if (
      navigator.userAgent.indexOf('MSIE') !== -1 ||
      navigator.appVersion.indexOf('Trident/') > 0
    ) {
      this.html.addClass('ie10');
    }

    // detect IE Edge
    if (/Edge\/\d./i.test(navigator.userAgent)) {
      this.html.addClass('ieEdge');
    }

    // Specifically for IE8 (for replacing svg with png images)
    if (this.html.hasClass('ie8')) {
      const imgPath = '/themes/theedge/images/';
      $('header .logo a img,.loading-screen img').attr(
        'src',
        `${imgPath}logo.png`,
      );
    }

    // show ie overlay popup for incompatible browser
    if (this.html.hasClass('ie9')) {
      const message = $(
        '<div class="no-support"> You are using outdated browser. Please <a href="https://browsehappy.com/" target="_blank">update</a> your browser or <a href="https://browsehappy.com/" target="_blank">install</a> modern browser like Google Chrome or Firefox.<div>',
      );
      this.htmlBody.prepend(message);
    }
  };
})();
