<div class="slideshow-container">


  <div class="mySlides">
   <a href="http://www.galatasaray.com" target="_blank"> <img src="{{asset('storage\posts\post2-small.jpg')}}" height="300" width="600" /></a>
    
  </div>

  <div class="mySlides">
    <a href="http://www.fenerbahce.com" target="_blank"> <img src="{{asset('storage\posts\post1-small.jpg')}}" height="300" width="600" /></a>
    
  </div>

  <div class="mySlides">
    <a href="http://www.bjk.com.tr" target="_blank"> <img src="{{asset('storage\posts\post3-small.jpg')}}" height="300" width="600" /></a>
   
  </div>


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
            var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
            }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        }
    </script>