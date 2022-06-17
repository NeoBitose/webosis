	$(function() {
  // Carousel logic
  $('#quotes-carousel').on('click', '.next', showNextQuoteClick);
  $('#quotes-carousel').on('click', '.previous', showPreviousQuoteClick);
  // Cycle automatically
  window.carouselRunning = true;
  window.restartingCarousel = null;
  var interval = setInterval(function() {
    if (window.carouselRunning) {
      showNextQuote();
    }
  }, 4000);
});

/* Carousel stuff */
function showNextQuoteClick() {
  window.carouselRunning = false;
  clearTimeout(window.restartingCarousel);
  showNextQuote();
  restartAutomatic();
}

function showPreviousQuoteClick() {
  window.carouselRunning = false;
  clearTimeout(window.restartingCarousel);
  showPreviousQuote();
  restartAutomatic();
}

function restartAutomatic() {
  clearTimeout(window.restartingCarousel);
  window.restartingCarousel = setTimeout(function() {
    window.carouselRunning = true;
  }, 10000);
}

function showNextQuote() {
  var allQuotes = $('#quotes-carousel').find('.quote'),
      current = $('#quotes-carousel').find('.current'),
      previous = $('#quotes-carousel').find('.previous'),
      next = $('#quotes-carousel').find('.next');
  $(current).removeClass('current').addClass('previous');
  $(next).removeClass('next').addClass('current');
  $(previous).removeClass('previous').addClass('remove-left');
  setTimeout(function() {
    $(previous).removeClass('remove-left');
  }, 1000);
  // Work out what should now be the "next" item
  $(allQuotes).each(function(index, item) {
    if ($(item).hasClass('current')) {
      if (allQuotes[index + 1]) {
        $(allQuotes[index + 1]).addClass('next').removeClass('remove-left');
      } else {
        $(allQuotes[0]).addClass('next').removeClass('remove-left');
      }
    }
  });
}

function showPreviousQuote() {
  var allQuotes = $('#quotes-carousel').find('.quote'),
      current = $('#quotes-carousel').find('.current'),
      previous = $('#quotes-carousel').find('.previous'),
      next = $('#quotes-carousel').find('.next');
  $(current).removeClass('current').addClass('next');
  $(previous).removeClass('previous').addClass('current');
  $(next).removeClass('next');
  // Work out what should now be the "next" item
  $(allQuotes).each(function(index, item) {
    if ($(item).hasClass('current')) {
      if (allQuotes[index - 1]) {
        $(allQuotes[index - 1]).addClass('place-left');
        setTimeout(function() {
          $(allQuotes[index - 1]).addClass('previous').removeClass('place-left');
        }, 10);
      } else {
        $(allQuotes[allQuotes.length - 1]).addClass('place-left');
        setTimeout(function() {
          $(allQuotes[allQuotes.length - 1]).addClass('previous').removeClass('place-left');
        }, 10);
      }
    }
  });
}

// window.onscroll = function() {
// 		scrollFunction()
// 	};

// 	function scrollFunction() {
// 		if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
// 			document.getElementById("header").style.transition = "0.4s ease-out";
// 			document.getElementById("header").style.boxShadow = "0px 8px 16px 0px rgba(0,0,0,0.2)";
// 			document.getElementById("header").style.backgroundColor = "#211212";

// 		} else {
// 			document.getElementById("header").style.transition = "0.4s ease-out";
// 			document.getElementById("header").style.boxShadow = "none";
// 			document.getElementById("header").style.backgroundColor = "transparent";

// 		}
// 	}
	const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

	function bars() {
		document.getElementsByClassName("mobile")[0].style.width = "100%";
	}

	function closeN() {
		document.getElementsByClassName("mobile")[0].style.width = "0";
	}