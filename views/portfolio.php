<section id="portfolio" class="eight_sec_plx_portfolio_section section">
  <div class="ed-container">
                <div class="section-title">
        <h2 class="portfolio-sec wow fadeIn" data-wow-duration="6s">OUR PROJECTS</h2>
      </div>
                    <a class="portfolio-viewall bttn" href="">System Design</a>
      <div class="portfolio-content-wrap" data-wow-duration="2s">
                      <div class="portfolio-content-img">
                        <div class="portfolio-image">
<<<<<<< HEAD
                    <img id="myImg" src="images/cta-bg.jpg" alt="Snow" style="width:100%;max-width:300px">
                    <img id="myImg1" src="images/blog-bg.jpg" alt="Snow" style="width:100%;max-width:300px">
=======
                    <img id="myImg" src="images/ZR Solar.jpg" alt="Snow" style="width:100%;max-width:300px">
                    <img id="myImg1" src="images/ZR Solar.jpg" alt="Snow" style="width:100%;max-width:300px">
>>>>>>> 3b03daa5faa0af2d6862d3e19805b2af826d1aeb
                        </div>
                      </div>
        </div>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                      <span class="close">&times;</span>
                      <img class="modal-content" id="img01">
                      <div id="caption"></div>
                    </div>

                    <script>
                    // Get the modal
                    var modal = document.getElementById('myModal');

                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById('myImg');
                    var img1 = document.getElementById('myImg1');
                    var modalImg = document.getElementById("img01");
                    var captionText = document.getElementById("caption");
                    img.onclick = function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    }
                    img1.onclick = function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    }


                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }
                    </script>
              </div>
</section>
