  <style type="text/css">
  	
  </style>
<!-- Footer -->

<footer class="page-footer font-small blue pt-4" id="footer" style="background-color: #0091ea!important">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 style="font-weight: bold;font-size: 22px;" class="animated zoomIn" >Address </h5>
        <p id="footer_font">Akash Medical main road ,Dufare Complex main road.sausar<br>
        (near harshal computer classes)</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 style="font-weight: bold;font-size: 22px;" class="animated zoomIn">Important Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="<?php echo site_url('users/Carrear') ?>" id="footer_font"><label id="font"> Careear</label> </a>
          </li>
          
          <li>
            <a href="<?php echo site_url('users/contact_us') ?>" id="footer_font"><label id="font"> contact us</label></a>
          </li>
          <li>
            <a href="#!" id="footer_font"><label id="font"> process</label></a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 style="font-weight: bold;font-size: 22px;" class="animated zoomIn">Get in touch</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" id="footer_font"><label id="font">facebook</label></a>
          </li>
          <li>
            <a href="#!" id="footer_font"><label id="font">instagram</label></a>
          </li>
          <li>
            <a href="#!" id="footer_font"><label id="font">linkedin</label></a>
          </li>
          <li>
            <a href="#!" id="footer_font"><label id="font">Twitter</label></a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:Develop by :
    <a href="https://mdbootstrap.com/education/bootstrap/" id="Rahul" >
    	<label   id="rahulfont" class="animated zoomIn"> Rahul Pawar</label> </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<!-- gallery script -->

   <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- gallery script end -->
  <!-- SCRIPTS -->
  <!-- JQuery -->
<script type="text/javascript">
  // vars
'use strict'
var testim = document.getElementById("testim"),
    testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
    touchStartPos,
    touchEndPos,
    touchPosDiff,
    ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
    
    testim.addEventListener("touchstart", function(e) {
        touchStartPos = e.changedTouches[0].clientX;
    })
  
    testim.addEventListener("touchend", function(e) {
        touchEndPos = e.changedTouches[0].clientX;
      
        touchPosDiff = touchStartPos - touchEndPos;
      
        console.log(touchPosDiff);
        console.log(touchStartPos); 
        console.log(touchEndPos); 

      
        if (touchPosDiff > 0 + ignoreTouch) {
            testimLeftArrow.click();
        } else if (touchPosDiff < 0 - ignoreTouch) {
            testimRightArrow.click();
        } else {
          return;
        }
      
    })
}
</script>  
<!-- <script type="text/javascript" src="<?= base_url("assets/mdb/js/jquery-3.3.1.min.js") ?>"></script> --> 
<script type="text/javascript" src="<?= base_url("assets/mdb/js/mdb.min.js") ?> "></script>
<script type="text/javascript" src="<?= base_url("assets/mdb/js/popper.min.js") ?> "></script>
<script type="text/javascript" src="<?= base_url("assets/mdb/js/bootstrap.min.js") ?> "></script>




  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>