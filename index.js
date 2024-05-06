function works() {
    // Redirect to the works.php page
    window.location.href = 'works.php';
  }

  function showFullScreenImage(src) {
    var fullscreenImage = document.getElementById("fullscreenImage");
    var fullscreenImageSrc = document.getElementById("fullscreenImageSrc");
    fullscreenImageSrc.src = src;
    fullscreenImage.style.display = "flex";
  }

  function closeFullScreenImage() {
    var fullscreenImage = document.getElementById("fullscreenImage");
    fullscreenImage.style.display = "none";
  }

  
  
  
  var slides = document.getElementsByName("mySlides");
  var currentIndex = 0;

  function showSlide(index) {
    // Hide all slides
    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    // Show the slide at the given index
    slides[index].style.display = "block";
  }

  function animateSlide(index) {
    anime({
      targets: slides[index],
      opacity: 1,
      duration: 1000,
      easing: 'easeInOutQuad',
      complete: function() {
        // Wait for 2 seconds before hiding the slide
        setTimeout(function() {
          anime({
            targets: slides[index],
            opacity: 0,
            duration: 1000,
            easing: 'easeInOutQuad',
            complete: function() {
              // Move to the next slide after animation completes
              currentIndex = (currentIndex + 1) % slides.length;
              showSlide(currentIndex);
              animateSlide(currentIndex);
            }
          });
        }, 2000);
      }
    });
  }

  // Start the slideshow
  showSlide(currentIndex);
  animateSlide(currentIndex);