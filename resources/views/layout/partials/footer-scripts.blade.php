 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset('import/assets/lib/wow/wow.min.js ')}}"></script>
    <script src="{{ URL::asset('import/assets/lib/easing/easing.min.js ')}}"></script>
    <script src="{{ URL::asset('import/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('import/assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ URL::asset('import/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- site Javascript -->
    <script src="{{ URL::asset('import/assets/js/main.js')}}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Auto slide function
      var myCarousel = new bootstrap.Carousel(document.getElementById('myCarousel'), {
        interval: 3000 // Change slide every 3 seconds
      });

      // Update text on slide
      myCarousel.addEventListener('slide.bs.carousel', function() {
        var activeText = document.querySelector('.carousel-item.active .text').innerHTML;
        document.querySelector('.carousel-caption .text').innerHTML = activeText;
      });
    });
  </script>