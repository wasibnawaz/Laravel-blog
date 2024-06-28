/*---------------------------------------------------------------------
    File Name: custom.js
---------------------------------------------------------------------*/

$(function () {

  "use strict";

  /* Preloader
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  setTimeout(function () {
    $('.loader_bg').fadeToggle();
  }, 1500);

  /* Tooltip
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });


  /* Mouseover
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  $(document).ready(function () {
    $(".main-menu ul li.megamenu").mouseover(function () {
      if (!$(this).parent().hasClass("#wrapper")) {
        $("#wrapper").addClass('overlay');
      }
    });
    $(".main-menu ul li.megamenu").mouseleave(function () {
      $("#wrapper").removeClass('overlay');
    });
  });


  /* Toggle sidebar
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

  $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
      $(this).toggleClass('active');
    });
  });

  /* Product slider 
  -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  // optional
  $('#blogCarousel').carousel({
    interval: 5000
  });


});


/* Toggle sidebar
     -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}


/* Animate js*/

(function ($) {
  //Function to animate slider captions
  function doAnimations(elems) {
    //Cache the animationend event in a variable
    var animEndEv = "webkitAnimationEnd animationend";

    elems.each(function () {
      var $this = $(this),
        $animationType = $this.data("animation");
      $this.addClass($animationType).one(animEndEv, function () {
        $this.removeClass($animationType);
      });
    });
  }

  //Variables on page load
  var $myCarousel = $("#carouselExampleIndicators"),
    $firstAnimatingElems = $myCarousel
    .find(".carousel-item:first")
    .find("[data-animation ^= 'animated']");

  //Initialize carousel
  $myCarousel.carousel();

  //Animate captions in first slide on page load
  doAnimations($firstAnimatingElems);

  //Other slides to be animated on carousel slide event
  $myCarousel.on("slide.bs.carousel", function (e) {
    var $animatingElems = $(e.relatedTarget).find(
      "[data-animation ^= 'animated']"
    );
    doAnimations($animatingElems);
  });
})(jQuery);


/* collapse js*/

$(document).ready(function () {
  // Add minus icon for collapse element which is open by default
  $(".collapse.show").each(function () {
    $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
  });

  // Toggle plus minus icon on show hide of collapse element
  $(".collapse").on('show.bs.collapse', function () {
    $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
  }).on('hide.bs.collapse', function () {
    $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
  });
});

/* select flag js */

function onChangeCallback(ctr) {
  console.log("The country was changed: " + ctr);
  //$("#selectionSpan").text(ctr);
}

$(document).ready(function () {
  $(".niceCountryInputSelector").each(function (i, e) {
    new NiceCountryInput(e).init();
  });
});


var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function () {
  var ga = document.createElement('script');
  ga.type = 'text/javascript';
  ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(ga, s);
})();


// owl-carousel
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 15,
  nav: true,

  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 3
    }
  }
})


// define all UI variable
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}




/* date_picker js */

$(function () {
  $("#my_date_picker").datepicker({
    defaultDate: "09/22/2019"
  });
});

// search popup

document.addEventListener('DOMContentLoaded', function () {
  var searchIcon = document.getElementById('searchIcon');
  var searchPopup = document.getElementById('searchPopup');
  var closePopup = document.getElementById('closePopup');
  var searchInput = document.getElementById('searchInput');
  var searchBtn = document.getElementById('searchBtn');
  var searchResults = document.getElementById('searchResults');

  searchIcon.addEventListener('click', function () {
      openPopup();
  });

  closePopup.addEventListener('click', function () {
      closePopupWindow();
  });

  window.addEventListener('click', function (event) {
      if (event.target == searchPopup) {
          closePopupWindow();
      }
  });

  // Function to open the search popup
  function openPopup() {
      searchPopup.style.display = 'block';
      setTimeout(function () {
          searchPopup.style.opacity = '1';
          document.querySelector('.popup-content').style.transform = 'translateY(0)';
      }, 10);
  }

  // Function to close the search popup
  function closePopupWindow() {
      searchPopup.style.opacity = '0';
      document.querySelector('.popup-content').style.transform = 'translateY(-50px)';
      setTimeout(function () {
          searchPopup.style.display = 'none';
      }, 500);
  }

  // Function to filter and display results
  function filterAndDisplayResults() {
      var query = searchInput.value.trim().toLowerCase();
      var blogItems = document.querySelectorAll('.blog-item');
      var filteredBlogs = [];

      blogItems.forEach(function(item) {
          var titleElement = item.querySelector('.blog-title');
          var title = titleElement.textContent.trim();
          
          if (title.toLowerCase().includes(query)) {
              filteredBlogs.push({ title: title });
          }
      });

      displayResults(filteredBlogs);
  }

  // Function to display results
  function displayResults(blogs) {
      searchResults.innerHTML = '';
      if (blogs.length === 0) {
          searchResults.innerHTML = '<p>No results found</p>';
      } else {
          blogs.forEach(function(blog) {
              var div = document.createElement('div');
              div.classList.add('result-item');
              div.textContent = blog.title;
              searchResults.appendChild(div);
          });
      }
  }

  // Event listener for live search as you type
  searchInput.addEventListener('input', filterAndDisplayResults);

  // Event listener for search button click
  searchBtn.addEventListener('click', function () {
      filterAndDisplayResults();
      closePopupWindow();
  });

  // Event listener for Enter key press in search input
  searchInput.addEventListener('keydown', function (e) {
      if (e.key === 'Enter') {
          e.preventDefault(); // Prevent form submission
          filterAndDisplayResults();
          closePopupWindow();
      }
  });
});
