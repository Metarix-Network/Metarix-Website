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



 var scale = 1,
        panning = false,
        pointX = 0,
        pointY = 0,
        maxZoom = false,
        start = { x: 0, y: 0 },
        zoom_data = document.getElementById("imageView");

      function setTransform() {
        zoom_data.style.transform = "translate(" + pointX + "px, " + pointY + "px) scale(" + scale + ")";
      }

      zoom_data.onmousedown = function (e) {
        e.preventDefault();
        start = { x: e.clientX - pointX, y: e.clientY - pointY };
        panning = true;
      }

      zoom_data.onmouseup = function (e) {
        panning = false;
      }

      zoom_data.onmousemove = function (e) {
        e.preventDefault();
        if (!panning) {
          return;
        }
        pointX = (e.clientX - start.x);
        pointY = (e.clientY - start.y);
        setTransform();
      }
      

$(document).ready(function (){
    var scroll_zoom = new ScrollZoom($('#slideContainer'),5,0.5)
})

function ScrollZoom(slideContainer,max_scale,factor){
    var target = slideContainer.children().first()
    var size = {w:target.width(),h:target.height()}
    var pos = {x:0,y:0}
    var scale = 1
    var zoom_target = {x:0,y:0}
    var zoom_point = {x:0,y:0}
    var curr_tranform = target.css('transition')
    var last_mouse_position = { x:0, y:0 }
    var drag_started = 0

    target.css('transform-origin','0 0')
    target.on("mousewheel DOMMouseScroll",scrolled)
    function scrolled(e){
        var offset = slideContainer.offset()
        zoom_point.x = e.pageX - offset.left
        zoom_point.y = e.pageY - offset.top

        e.preventDefault();
        var delta = e.delta || e.originalEvent.wheelDelta;
        if (delta === undefined) {
          //we are on firefox
          delta = e.originalEvent.detail;
        }
        delta = Math.max(-1,Math.min(0.5,delta)) // cap the delta to [-1,1] for cross browser consistency

        // determine the point on where the slide is zoomed in
        zoom_target.x = (zoom_point.x - pos.x)/scale
        zoom_target.y = (zoom_point.y - pos.y)/scale

        // apply zoom
        scale += delta * factor * scale
        scale = Math.max(0.2,Math.min(max_scale,scale))

        // calculate x and y based on zoom
        pos.x = -zoom_target.x * scale + zoom_point.x
        pos.y = -zoom_target.y * scale + zoom_point.y

        update()
    }

   
    


    function update(){
       
        target.css('transform','translate('+(pos.x)+'px,'+(pos.y)+'px) scale('+scale+','+scale+')')
    }
}















  
    $("#data").scroll(function() {
  var scroll = $("#data").scrollTop();
  $("#imageView").css({
     width: (100 + scroll/5) + "%"
  })
})



