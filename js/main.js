/**
* Template Name: Arsha - v4.7.0
* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
    "use strict";
  
    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
      el = el.trim()
      if (all) {
        return [...document.querySelectorAll(el)]
      } else {
        return document.querySelector(el)
      }
    }
  
    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
      let selectEl = select(el, all)
      if (selectEl) {
        if (all) {
          selectEl.forEach(e => e.addEventListener(type, listener))
        } else {
          selectEl.addEventListener(type, listener)
        }
      }
    }
  
    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
      el.addEventListener('scroll', listener)
    }
  
    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
      let position = window.scrollY + 200
      navbarlinks.forEach(navbarlink => {
        if (!navbarlink.hash) return
        let section = select(navbarlink.hash)
        if (!section) return
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
          navbarlink.classList.add('active')
        } else {
          navbarlink.classList.remove('active')
        }
      })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)
  
    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
      let header = select('#header')
      let offset = header.offsetHeight
  
      let elementPos = select(el).offsetTop
      window.scrollTo({
        top: elementPos - offset,
        behavior: 'smooth'
      })
    }
  
    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    if (selectHeader) {
      const headerScrolled = () => {
        if (window.scrollY > 100) {
          selectHeader.classList.add('header-scrolled')
        } else {
          selectHeader.classList.remove('header-scrolled')
        }
      }
      window.addEventListener('load', headerScrolled)
      onscroll(document, headerScrolled)
    }
  
    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
      const toggleBacktotop = () => {
        if (window.scrollY > 100) {
          backtotop.classList.add('active')
        } else {
          backtotop.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }
  
    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function(e) {
      select('#navbar').classList.toggle('navbar-mobile')
      this.classList.toggle('bi-list')
      this.classList.toggle('bi-x')
    })
  
    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.navbar .dropdown > a', function(e) {
      if (select('#navbar').classList.contains('navbar-mobile')) {
        e.preventDefault()
        this.nextElementSibling.classList.toggle('dropdown-active')
      }
    }, true)
  
    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    // on('click', '.scrollto', function(e) {
    //   if (select(this.hash)) {
    //     e.preventDefault()
  
    //     let navbar = select('#navbar')
    //     if (navbar.classList.contains('navbar-mobile')) {
    //       navbar.classList.remove('navbar-mobile')
    //       let navbarToggle = select('.mobile-nav-toggle')
    //       navbarToggle.classList.toggle('bi-list')
    //       navbarToggle.classList.toggle('bi-x')
    //     }
    //     scrollto(this.hash)
    //   }
    // }, true)
  
    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
      if (window.location.hash) {
        if (select(window.location.hash)) {
          scrollto(window.location.hash)
        }
      }
    });
  
    /**
     * Preloader
     */
    
    
    let preloader = select('#loader');
    if (preloader) {
      window.addEventListener('load', () => {
        preloader.remove()
      });
    }
  
    /**
     * Initiate  glightbox 
     */
    // const glightbox = GLightbox({
    //   selector: '.glightbox'
    // });
  
    /**
     * Skills animation
     */
    let skilsContent = select('.skills-content');
    if (skilsContent) {
      new Waypoint({
        element: skilsContent,
        offset: '80%',
        handler: function(direction) {
          let progress = select('.progress .progress-bar', true);
          progress.forEach((el) => {
            el.style.width = el.getAttribute('aria-valuenow') + '%'
          });
        }
      })
    }
  
    /**
     * Porfolio isotope and filter
     */
    window.addEventListener('load', () => {
      let portfolioContainer = select('.portfolio-container');
      if (portfolioContainer) {
        let portfolioIsotope = new Isotope(portfolioContainer, {
          itemSelector: '.portfolio-item'
        });
  
        let portfolioFilters = select('#portfolio-flters li', true);
  
        on('click', '#portfolio-flters li', function(e) {
          e.preventDefault();
          portfolioFilters.forEach(function(el) {
            el.classList.remove('filter-active');
          });
          this.classList.add('filter-active');
  
          portfolioIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          portfolioIsotope.on('arrangeComplete', function() {
            AOS.refresh()
          });
        }, true);
      }
  
    });
  
    /**
     * Initiate portfolio lightbox 
     */
    // const portfolioLightbox = GLightbox({
    //   selector: '.portfolio-lightbox'
    // });
  
    /**
     * Portfolio details slider
     */
    // new Swiper('.portfolio-details-slider', {
    //   speed: 400,
    //   loop: true,
    //   autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false
    //   },
    //   pagination: {
    //     el: '.swiper-pagination',
    //     type: 'bullets',
    //     clickable: true
    //   }
    // });
  
    /**
     * Animation on scroll
     */
    window.addEventListener('load', () => {
      AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false
      });
    });
  
  })()


  


  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})



// virtual store page 
  
  var zoom = 1;
    
  $('.zoom').on('click', function(){
    zoom += 0.1;
    $('.target').css('transform', 'scale(' + zoom + ')');
  });
  $('.zoom-init').on('click', function(){
    zoom = 1;
    $('.target').css('transform', 'scale(' + zoom + ')');
  });
  $('.zoom-out').on('click', function(){
    zoom -= 0.1;
    $('.target').css('transform', 'scale(' + zoom + ')');
  });



 // var scale = 1,
 //        panning = false,
 //        pointX = 0,
 //        pointY = 0,
 //        maxZoom = false,
 //        start = { x: 0, y: 0 },
 //        zoom_data = document.getElementById("imageView");

 //      function setTransform() {
 //        zoom_data.style.transform = "translate(" + pointX + "px, " + pointY + "px) scale(" + scale + ")";
 //      }

 //      zoom_data.onmousedown = function (e) {
 //        e.preventDefault();
 //        start = { x: e.clientX - pointX, y: e.clientY - pointY };
 //        panning = true;
 //      }

 //      zoom_data.onmouseup = function (e) {
 //        panning = false;
 //      }

 //      zoom_data.onmousemove = function (e) {
 //        e.preventDefault();
 //        if (!panning) {
 //          return;
 //        }
 //        pointX = (e.clientX - start.x);
 //        pointY = (e.clientY - start.y);
 //        setTransform();
 //      }

 //      zoom_data.onwheel = function (e) {
 //        e.preventDefault();
 //        var xs = (e.clientX - pointX) / scale,
 //          ys = (e.clientY - pointY) / scale,
 //          delta = (e.wheelDelta ? e.wheelDelta : -e.deltaY);
 //        (delta > 0) ? (scale *= 1.2) : (scale /= 1.2);
 //        pointX = e.clientX - xs * scale;
 //        pointY = e.clientY - ys * scale;

 //        setTransform();
 //      }




  
    $("#data").scroll(function() {
  var scroll = $("#data").scrollTop();
  $("#imageView").css({
     width: (100 + scroll/5) + "%"
  })
})



 $("#imageView")wheelzoom(function(){
    var defaults = {
        zoom: 0.10,
        maxZoom: false,
        initialZoom: 1,
    };

    var main = function(img, options){
        if (!img || !img.nodeName || img.nodeName !== 'IMG') { return; }

        var settings = {};
        var width;
        var height;
        var bgWidth;
        var bgHeight;
        var bgPosX;
        var bgPosY;
        var previousEvent;
        var cachedDataUrl;

      
        function updateBgStyle() {
            if (bgPosX > 0) {
                bgPosX = 0;
            } else if (bgPosX < width - bgWidth) {
                bgPosX = width - bgWidth;
            }

            if (bgPosY > 0) {
                bgPosY = 0;
            } else if (bgPosY < height - bgHeight) {
                bgPosY = height - bgHeight;
            }

            
        }

        function reset() {
            bgWidth = width;
            bgHeight = height;
            bgPosX = bgPosY = 0;
            updateBgStyle();
        }

        function onwheel(e) {
            var deltaY = 0;

            e.preventDefault();

            if (e.deltaY) { // FireFox 17+ (IE9+, Chrome 31+?)
                deltaY = e.deltaY;
            } else if (e.wheelDelta) {
                deltaY = -e.wheelDelta;
            }

            // As far as I know, there is no good cross-browser way to get the cursor position relative to the event target.
            // We have to calculate the target element's position relative to the document, and subtrack that from the
            // cursor's position relative to the document.
            var rect = img.getBoundingClientRect();
            var offsetX = e.pageX - rect.left - window.pageXOffset;
            var offsetY = e.pageY - rect.top - window.pageYOffset;

            // Record the offset between the bg edge and cursor:
            var bgCursorX = offsetX - bgPosX;
            var bgCursorY = offsetY - bgPosY;

            // Use the previous offset to get the percent offset between the bg edge and cursor:
            var bgRatioX = bgCursorX/bgWidth;
            var bgRatioY = bgCursorY/bgHeight;

            // Update the bg size:
            if (deltaY < 0) {
                bgWidth += bgWidth*settings.zoom;
                bgHeight += bgHeight*settings.zoom;
            } else {
                bgWidth -= bgWidth*settings.zoom;
                bgHeight -= bgHeight*settings.zoom;
            }

            if (settings.maxZoom) {
                bgWidth = Math.min(width*settings.maxZoom, bgWidth);
                bgHeight = Math.min(height*settings.maxZoom, bgHeight);
            }

            // Take the percent offset and apply it to the new size:
            bgPosX = offsetX - (bgWidth * bgRatioX);
            bgPosY = offsetY - (bgHeight * bgRatioY);

            // Prevent zooming out beyond the starting size
            if (bgWidth <= width || bgHeight <= height) {
                reset();
            } else {
                updateBgStyle();
            }
        }

        function drag(e) {
            e.preventDefault();
            bgPosX += (e.pageX - previousEvent.pageX);
            bgPosY += (e.pageY - previousEvent.pageY);
            previousEvent = e;
            updateBgStyle();
        }

        function removeDrag() {
            document.removeEventListener('mouseup', removeDrag);
            document.removeEventListener('mousemove', drag);
        }

        // Make the background draggable
        function draggable(e) {
            e.preventDefault();
            previousEvent = e;
            document.addEventListener('mousemove', drag);
            document.addEventListener('mouseup', removeDrag);
        }

        function load() {
            var initial = Math.max(settings.initialZoom, 1);

            if (img.src === cachedDataUrl) return;

            var computedStyle = window.getComputedStyle(img, null);

            width = parseInt(computedStyle.width, 10);
            height = parseInt(computedStyle.height, 10);
            bgWidth = width * initial;
            bgHeight = height * initial;
            bgPosX = -(bgWidth - width)/2;
            bgPosY = -(bgHeight - height)/2;;

            setSrcToBackground(img);

            img.style.backgroundSize = bgWidth+'px '+bgHeight+'px';
            img.style.backgroundPosition = bgPosX+'px '+bgPosY+'px';
            img.addEventListener('wheelzoom.reset', reset);

            img.addEventListener('wheel', onwheel);
            img.addEventListener('mousedown', draggable);
        }

        var destroy = function (originalProperties) {
            img.removeEventListener('wheelzoom.destroy', destroy);
            img.removeEventListener('wheelzoom.reset', reset);
            img.removeEventListener('load', load);
            img.removeEventListener('mouseup', removeDrag);
            img.removeEventListener('mousemove', drag);
            img.removeEventListener('mousedown', draggable);
            img.removeEventListener('wheel', onwheel);

            img.style.backgroundImage = originalProperties.backgroundImage;
            img.style.backgroundRepeat = originalProperties.backgroundRepeat;
            img.src = originalProperties.src;
        }.bind(null, {
            backgroundImage: img.style.backgroundImage,
            backgroundRepeat: img.style.backgroundRepeat,
            src: img.src
        });

        img.addEventListener('wheelzoom.destroy', destroy);

        options = options || {};

        Object.keys(defaults).forEach(function(key){
            settings[key] = options[key] !== undefined ? options[key] : defaults[key];
        });

        if (img.complete) {
            load();
        }

        img.addEventListener('load', load);
    };

    // Do nothing in IE9 or below
    if (typeof window.btoa !== 'function') {
        return function(elements) {
            return elements;
        };
    } else {
        return function(elements, options) {
            if (elements && elements.length) {
                Array.prototype.forEach.call(elements, main, options);
            } else if (elements && elements.nodeName) {
                main(elements, options);
            }
            return elements;
        };
    }
});
