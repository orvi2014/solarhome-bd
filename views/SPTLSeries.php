<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>SOLAR HOME</title>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='dashicons-css'  href="css/dashicons.min.css" type='text/css' media='all' />
<link rel='stylesheet' id='edn-font-awesome-css'  href='css/font-awesome.css' type='text/css' media='all' />
<link rel='stylesheet' id='edn-frontend-style-css'  href='css/frontend.css?ver=4.9.7' type='text/css' media='all' />

<link rel='stylesheet' id='edn-google-fonts-style-css'  href='//fonts.googleapis.com/css?family=Roboto&#038;ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='eight-sec-google-fonts-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700italic%2C700%2C800%2C800italic%7COswald%3A400%2C300%2C700%7CRaleway%3A400%2C300%2C300italic%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800italic%2C800%2C900%2C900italic&#038;ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='bxslider-css-css'  href='css/jquery.bxslider.css?ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='awesomse-font-css-css'  href='css/font-awesome.css?ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css-css'  href='css/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='isotope-css-css'  href='css/isotope-docs.css' type='text/css' media='all' />
<link rel='stylesheet' id='eight-sec-style-css'  href='css/product.css?ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='eight-sec-responsive-css-css'  href='css/responsive.css?ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='calculator'  href='css/calculator.css' type='text/css' media='all' />
<link rel="stylesheet" href="css/w3.css">

<script type='text/javascript' src='js/jquery/jquery.js'></script>
<script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='plugin/8-degree-notification-bar/js/frontend/jquery.bxslider.min.js?ver=4.1.2'></script>
<script type='text/javascript' src='plugin/8-degree-notification-bar/js/frontend/jquery.marquee.min.js?ver=1.0.0'></script>
<script type='text/javascript'>

<style>.post-thumbnail img[src$='.svg'] { width: 100%; height: auto; }</style><style type='text/css' media='all'>.site-header.fixed { background: url("images/SHNlogo.png") no-repeat scroll left top; background-size: cover; }
.site-header.fixed .header-sticky-overlay:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
        }</style>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                smoothScroll.init();
            });
        </script>
                    <script>

                    jQuery(document).ready(function($){

                        //menu active
                        $('.menu .menu-item').each(function(){
                            $(this).find('li:first').addClass('active');
                        });
                        // smooth scroll with active menu class in header
                        $(window).scroll(function() {
                            var windscroll = $(window).scrollTop();
                            if (windscroll >= 100) {
                                //$('nav').addClass('fixed');
                                $('#content .section').each(function(i) {
                                    if ($(this).position().top <= windscroll + 50 ) {
                                        $('.menu > li.menu-item').removeClass('active');
                                        $('.menu > li.menu-item').eq(i).addClass('active');
                                    }
                                });

                            }
                            else {
                                $('.menu > li.menu-item').removeClass('active');
                                $('.menu > li.menu-item:first').addClass('active');
                            }
                        }).scroll();

                    });
                </script>

                		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
			<style type="text/css">
				.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}

			/*
You can add your own CSS here.

Click the help icon above to learn more.
*/
		</style>



	</head>

<body>
  <?php include 'header_result.php'; ?>
  <section id="portfolio">
    <div class="ed-container">
        <div class="section-title">
            <h2 class="portfolio-sec wow fadeIn" data-wow-duration="6s">Single Phase TL Series</h2>
        </div>
    <div class="portfolio-wrap clear wow fadeInUp product" data-wow-duration="2s">
      <img src="images\Inverter1.JPG" alt = 'SP TL_Series' />
    </div>
    <h1>Product Specifications</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Description</th>
            <th> 1100TL</th>
            <th> 1600TL</th>
            <th> 2200TL</th>
            <th> 2700TL</th>
            <th> 3000TL</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <tr>
            <td>Maximum Input Power (DC)</td>
            <td>1200W</td>
            <td>1800W</td>
            <td>2400W</td>
            <td>2900W</td>
            <td>3300W</td>
          </tr>
          <tr>
            <td>Rated Output Power (AC)</td>
            <td>1000W</td>
            <td>1550W</td>
            <td>2100W</td>
            <td>2600W</td>
            <td>3100W</td>
          </tr>
          <tr>
            <td>MPPT Voltage Range (DC)</td>
            <td>110-450V</td>
            <td>165-450V</td>
            <td>170-500V</td>
            <td>200-500V</td>
            <td>200-500V</td>
          </tr>
          <tr>
            <td>Grid Voltage Range (AC)</td>
            <td>180~270V(According to local standard)</td>
            <td>180~270V(According to local standard)</td>
            <td>180~270V(According to local standard)</td>
            <td>180~270V(According to local standard)</td>
            <td>180~270V(According to local standard)</td>

          </tr>
          <tr>
            <td>Grid Connection Type</td>
            <td>Single Phase</td>
            <td>Single Phase</td>
            <td>Single Phase</td>
            <td>Single Phase</td>
            <td>Single Phase</td>

          </tr>
          <tr>
            <td>Maximum Efficiency</td>
            <td>97%</td>
            <td>97%</td>
            <td>97%</td>
            <td>97.1%</td>
            <td>97.2%</td>
          </tr>
          <tr>
            <td>Dimensions (mm)</td>
            <td>405*314*135 mm</td>
            <td>405*314*135 mm</td>
            <td>405*314*135 mm</td>
            <td>405*314*135 mm</td>
            <td>405*314*135 mm</td>
          </tr>
        </tbody>

      </table>
      <h2>To download details click <a href="pdf/Inverter/1___SP_TL_Series_1100TL, 1600TL, 2200TL, 2700TL, 3000TL.pdf" target="_blank">here</a></h2>
    </div>

  </section>


  <?php include 'footer.php'; ?>
</body>
</html>
