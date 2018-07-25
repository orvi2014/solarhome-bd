<?php
// Connecting to database
 $db = mysqli_connect('localhost','root','','solarhomexwa')
  or die('Error connecting to MySQL server.');

//mysql create good start
$query = "SELECT * FROM solarhome";
mysqli_query($db, $query);

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

//API design

if (isset($_POST['submit'])) {
  //Declearing API variables
  $api_key='vyeJ0snvGu5V2DuiyhBgNLnUmOZfl09iIKPjl6N5';
  $system_capacity=$_POST["dc"];
  $azimuth=180;
  $tilt=$_POST["titlt"];;
  $array_type=1;
  $module_type=1;
  $losses=20;
  $address=$_POST["location"];
  $inv_eff=98;
  $gcr=0;
  $api_pv = "https://developer.nrel.gov/api/pvwatts/v6.json?" . http_build_query(array(
  'api_key' => $api_key,
  'system_capacity' => $system_capacity,
  'azimuth' => $azimuth,
  'tilt'=>$tilt,
  'array_type'=>$array_type,
  'module_type'=>$module_type,
  'losses'=>$losses,
  'address'=>$address,
));

  $json = file_get_contents($api_pv);

  $obj =(json_decode($json,true));
  //echo gettype($obj);

  //ccessing json array
 // check postman
//  postman  value=$obj['Parentkey']['child1 Key']
$value =$obj['inputs']['tilt'];
$keys = array_keys($obj);
$temp=$keys[0];//inputs
$temp1=$keys[6];//outputs

//creating monthly array
$ac_monthly,$poa_monthly,$solrad_monthly,$dc_monthly=array();
$newtitlte, $anual_ac, $annual_solrad;
//fetching data into variables
for($i = 0; $i < count($obj); $i++) {
  if ($temp=="inputs"){
      $newtitlte = $obj[$temp]['tilt'];
  }
  if ($temp1=="outputs"){
    $annunal_ac=$obj[$temp1]['ac_annual'];
    $annual_solrad=$obj[$temp1]['solrad_annual'];
    for($j=0; $j<12;$j++){
      $ac_monthly[] = $obj[$temp1]['ac_monthly'][$j];
      $poa_monthly[]=$obj[$temp1]['poa_monthly'][$j];
      $solrad_monthly[]=$obj[$temp1]['solrad_monthly'][$j];
      $dc_monthly[]=$obj[$temp1]['dc_monthly'][$j];

    }
    }
  }
  }

  //$api_rate="https://developer.nrel.gov/api/utility_rates/v3.json?api_key="
  //*add variables to concate string*
  //api_key=api_key&system_capacity=4&azimuth=180&tilt=40&array_type=1&module_type=1&losses=10&address=address";

//

  //Stop Right here for API

// trying to insert so far so good
// Sytax error problem=https://www.w3schools.com/php/php_mysql_insert.asp
//$insert_value="INSERT INTO solarhome (id, company, phone, email, location, dc, titlt, ratetype, tkrate, result, result_date) VALUES (NULL, '".$_POST["company"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["location"]."','".$_POST["dc"]."','".$_POST["titlt"]."','".$_POST["ratetype"]."','".$_POST["rate"]."','', '')";

//if (mysqli_query($db, $insert_value)) {

//    echo "New record created successfully";
//} else {
//    echo "Error: " . $insert_value . "<br>" . mysqli_error($db);
//}
// Hmm. now submit button click insert into database.

// closing database connection
// no need to close now mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Solar Home BD </title>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Solar Home BD &raquo; Feed" href="http://localhost/Solar%20Home%20Bd/index.php/feed/" />
<link rel='stylesheet' id='dashicons-css'  href="css/dashicons.min.css" type='text/css' media='all' />
<link rel='stylesheet' id='edn-font-awesome-css'  href='css/font-awesome.css' type='text/css' media='all' />
<link rel='stylesheet' id='edn-frontend-style-css'  href='css/frontend.css?ver=4.9.7' type='text/css' media='all' />

<link rel='stylesheet' id='edn-google-fonts-style-css'  href='//fonts.googleapis.com/css?family=Roboto&#038;ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='eight-sec-google-fonts-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600%2C600italic%2C700italic%2C700%2C800%2C800italic%7COswald%3A400%2C300%2C700%7CRaleway%3A400%2C300%2C300italic%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800italic%2C800%2C900%2C900italic&#038;ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='bxslider-css-css'  href='css/jquery.bxslider.css?ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='awesomse-font-css-css'  href='css/font-awesome.css?ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css-css'  href='css/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='isotope-css-css'  href='css/isotope-docs.css' type='text/css' media='all' />
<link rel='stylesheet' id='eight-sec-style-css'  href='css/style.css?ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='eight-sec-responsive-css-css'  href='css/responsive.css?ver=4.9.7' type='text/css' media='all' />
<link rel='stylesheet' id='calculator'  href='css/calculator.css' type='text/css' media='all' />
<link rel="stylesheet" href="css/w3.css">

<script type='text/javascript' src='js/jquery/jquery.js'></script>
<script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='plugin/8-degree-notification-bar/js/frontend/jquery.bxslider.min.js?ver=4.1.2'></script>
<script type='text/javascript' src='plugin/8-degree-notification-bar/js/frontend/jquery.marquee.min.js?ver=1.0.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ajaxsubs = {"ajaxurl":"http:\/\/localhost\/Solar%20Home%20Bd\/wp-admin\/admin-ajax.php","check_show_once":"0","control_type":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='plugin/8-degree-notification-bar/js/frontend/frontend.js?ver=1.1.7'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pf = {"spam":{"label":"I'm human!","value":"6b86e54a60"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://localhost/Solar%20Home%20Bd/wp-content/plugins/pirate-forms/public/js/custom-spam.js?ver=4.9.7'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/Solar%20Home%20Bd/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/Solar%20Home%20Bd/wp-includes/wlwmanifest.xml" />

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

		<header id="masthead" class="site-header logo-left" role="banner">
		<div class="site-branding">
							<div class="site-logo">
											<a href="/" rel="home">
							<a href="" class="custom-logo-link" rel="home" itemprop="url"><img width="149" height="45" src="images/SHNlogo.png" class="custom-logo" alt="Solar Home BD" itemprop="logo" /></a>						</a>
									</div>
						<div class="site-text">
				<a href="http://localhost/Solar%20Home%20Bd/" rel="home">
					<h1 class="site-title">Solar Home BD</h1>
					<p class="site-description">Just another WordPress site</p>
				</a>
			</div>
		</div><!-- .site-branding -->


		<nav id="site-navigation" class="main-navigation menu-right" role="navigation">
			<div class="toggle-btn">
				<span class="toggle-bar toggle-bar1"></span>
				<span class="toggle-bar toggle-bar2"></span>
				<span class="toggle-bar toggle-bar3"></span>
			</div>
							  	<ul class="nav plx_nav menu">
	                    <span class="siteurl" url="" style="display: none;"></span>
				  		<li class="eight_sec_menu menu-item" id="eight_sec_slider"><a  href="#slider">HOME</a></li>
				  				                            <li class="eight_sec_menu menu-item" id="eight_sec_menu_about"><a class='menu_about_section'  href="#portfolio" >Products</a></li>
	                            								                            <li class="eight_sec_menu menu-item" id="eight_sec_menu_portfolio"><a class='menu_portfolio_section'  href="#projects" >Projects</a></li>
	                            								                            <li class="eight_sec_menu menu-item" id="eight_sec_menu_portfolio"><a class='menu_portfolio_section'  href="#team" >PVI Calculator</a></li>
	                            								                            <li class="eight_sec_menu menu-item" id="eight_sec_menu_contact"><a class='menu_contact_section' href="#contact-us" >CONTACT US</a></li>
	                            										  	</ul>
					</nav><!-- #site-navigation -->


		        <div class="header-sticky-overlay"></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
			<script type="text/javascript">
				jQuery(function($){
					$('.main-slider').bxSlider({
								pager: true,
								controls: true,
								mode: 'fade',
								auto : true
							});
				});
			</script>
			<section id="slider" class="eight_sec_plx_slider_section section">
				<ul class="main-slider">
										<li class="slide" style="background: url('uploads/slider1-1.jpg') center no-repeat;">
						<div class="slide-caption">
							<div class="ed-container">
								<h2 class="caption-title">Solar 1</h2>
								<div class="slide-content">
									<div class="slide-desc"><p>s1</p>
</div>
																			<a href="#team" class="slide-readmore bttn">Get Started</a>
																	</div>
							</div>
						</div>

					</li>
										<li class="slide" style="background: url('uploads/slider2-1.jpg') center no-repeat;">
						<div class="slide-caption">
							<div class="ed-container">
								<h2 class="caption-title">GROW BUSINESS TO NEXT LABEL</h2>
								<div class="slide-content">
									<div class="slide-desc"><p>Get our eight-sec theme to your business.</p>
                     </div>
																			<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/07/donec-a-hendrerit/" class="slide-readmore bttn">Get Started</a>
																	</div>
							</div>
						</div>

					</li>
          <!--3rd slider -->
          <li class="slide" style="background: url('uploads/slider3-1.png') center no-repeat;">
  <div class="slide-caption">
    <div class="ed-container">
      <h2 class="caption-title">GROW BUSINESS TO NEXT LABEL</h2>
      <div class="slide-content">
        <div class="slide-desc"><p>Get our eight-sec theme to your business.</p>
                     </div>
                            <a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/07/donec-a-hendrerit/" class="slide-readmore bttn">Get Started</a>
                        </div>
    </div>
  </div>

</li>

				</ul>

			</section>


		<!-- end of slider section -->

<!-- about section -->
		<section id="about-us" class="eight_sec_plx_about_section section">
			<div class="ed-container">
									<div class="section-title">
						<h2 class="about-sec wow fadeIn" data-wow-duration="2s">ABOUT EIGHT SEC</h2>
					</div>
					<div class="about-description wow fadeInDown" data-wow-duration="2s">
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#8217;t look even slightly believable.</p>
					</div>
									<div class="about-service clear wow fadeInUp" data-wow-duration="2s">

						<div class="section-content">
														<div class="about-image">
								<img src="uploads/2016/04/about-icon-1.png" alt='WORDPRESS'/>
							</div>
														<div class="about-content-wrap">
								<h2 class="about-title"><a href="index.php/2016/04/24/programming/">WORDPRESS</a></h2>
								<div class="about-content"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#8217;t look even slightly believable.</p>
</div>
							</div>
						</div>

						<div class="section-content">
														<div class="about-image">
								<img src="uploads/2016/04/about-icon-2.png" alt='DESIGN'/>
							</div>
														<div class="about-content-wrap">
								<h2 class="about-title"><a href="index.php/2016/04/24/analytics/">DESIGN</a></h2>
								<div class="about-content"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#8217;t look even slightly believable.</p>
</div>
							</div>
						</div>

						<div class="section-content">
														<div class="about-image">
								<img src="uploads/2016/04/about-icon-3-1.png" alt='ANALYTICS'/>
							</div>
														<div class="about-content-wrap">
								<h2 class="about-title"><a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/24/design/">ANALYTICS</a></h2>
								<div class="about-content"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#8217;t look even slightly believable.</p>
</div>
							</div>
						</div>

						<div class="section-content">
														<div class="about-image">
								<img src="uploads/2016/04/about-icon-4.png" alt='PROGRAMMING'/>
							</div>
														<div class="about-content-wrap">
								<h2 class="about-title"><a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/24/wordpress/">PROGRAMMING</a></h2>
								<div class="about-content"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#8217;t look even slightly believable.</p>
</div>
							</div>
						</div>
											</div>
								</div>
		</section>

	<!-- end of about section -->

<!-- portfolio section -->
			<section id="portfolio" class="eight_sec_plx_portfolio_section section">
				<div class="ed-container">
											<div class="section-title">
							<h2 class="portfolio-sec wow fadeIn" data-wow-duration="6s">OUR PORTFOLIO</h2>
						</div>
													<a class="portfolio-viewall bttn" href="http://localhost/Solar%20Home%20Bd/index.php/category/portfolio/">View all</a>
												<p class="portfolio-description wow fadeInDown" data-wow-duration="2s" >
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#8217;t look even slightly believable.</p>
</p>
												<div class="portfolio-wrap clear wow fadeInUp" data-wow-duration="2s">
																<div class="portfolio-content-img">
																			<div class="portfolio-image">
											<img src="uploads/2016/04/photographer-1150052_1920.jpg" alt = 'Donec in pulvinar' />
										</div>
										<div class="portfolio-content-wrap">
											<h4 class="portfolio-title">
												<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/11/donec-in-pulvinar/">
													Donec in pulvinar												</a>
											</h4>
											<div class="portfolio-content">
												<p>Donec in pulvinar orci. Proin id accumsan justo. Vestibulum fringilla id velit eu congue. Pellentesque at lacinia libero.</p>
											</div>
										</div>
																	</div>

																<div class="portfolio-content-img">
																			<div class="portfolio-image">
											<img src="uploads/2016/04/man-791049_1920-1.jpg" alt = 'Sed venenatis' />
										</div>
										<div class="portfolio-content-wrap">
											<h4 class="portfolio-title">
												<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/11/sed-venenatis/">
													Sed venenatis												</a>
											</h4>
											<div class="portfolio-content">
												<p>Sed venenatis, massa id eleifend ultricies, nulla leo malesuada nunc, ac vulputate nulla velit eu ex. </p>
											</div>
										</div>
																	</div>

																<div class="portfolio-content-img">
																			<div class="portfolio-image">
											<img src="uploads/2016/04/electrician-1080554_1920.jpg" alt = 'Aliquam erat' />
										</div>
										<div class="portfolio-content-wrap">
											<h4 class="portfolio-title">
												<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/11/aliquam-erat/">
													Aliquam erat												</a>
											</h4>
											<div class="portfolio-content">
												<p>Aliquam erat volutpat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut sed velit vitae lectus efficitur facilisis at sit amet nisl. </p>
											</div>
										</div>
																	</div>

																<div class="portfolio-content-img">
																			<div class="portfolio-image">
											<img src="uploads/2016/04/laptop-work-1148958_1920.jpg" alt = 'Integer egestas' />
										</div>
										<div class="portfolio-content-wrap">
											<h4 class="portfolio-title">
												<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/11/integer-egestas/">
													Integer egestas												</a>
											</h4>
											<div class="portfolio-content">
												<p>Integer egestas magna sit amet viverra pretium. Vestibulum iaculis pharetra mauris et maximus. Fusce egestas magna odio, sed pulvinar dui vestibulum tempor.</p>
											</div>
										</div>
																	</div>

																<div class="portfolio-content-img">
																			<div class="portfolio-image">
											<img src="uploads/2016/04/portfolio-402179_1920.jpg" alt = 'Suspendisse' />
										</div>
										<div class="portfolio-content-wrap">
											<h4 class="portfolio-title">
												<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/07/suspendisse/">
													Suspendisse												</a>
											</h4>
											<div class="portfolio-content">
												<p>Suspendisse tempus nunc a dui lobortis, quis accumsan odio varius. Pellentesque at mi sapien. Donec metus justo, pellentesque nec quam in, dapibus porttitor leo.</p>
											</div>
										</div>
																	</div>

																<div class="portfolio-content-img">
																			<div class="portfolio-image">
											<img src="uploads/2016/04/photography-models-623654_1920-1-1.jpg" alt = 'Maecenas' />
										</div>
										<div class="portfolio-content-wrap">
											<h4 class="portfolio-title">
												<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/07/maecenas/">
													Maecenas												</a>
											</h4>
											<div class="portfolio-content">
												<p>Maecenas egestas, enim vel volutpat suscipit, lorem ex mattis ipsum, vel consequat urna tortor sed augue. Suspendisse potenti. Morbi ac euismod arcu. </p>
											</div>
										</div>
																	</div>

															</div>
										</div>
			</section>
		<!-- end of portfolio section -->

<!-- team section -->
			<section id="team" class="eight_sec_plx_team_section section">
        <div class="container w3-container w3-center w3-animate-bottom">
          <!-- submit form -->
  <form id="contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h3>PVI Calculator</h3>
    <fieldset>
      <input placeholder="Company Name" name="company" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Email Address" name="email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Phone Number" name="phone" type="phone" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="City Name" name="location" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="DC System Size" name="dc" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Titlt" name="titlt" type="text" tabindex="23" required>
    </fieldset>
    <fieldset>

      <select type="ratetype" name="ratetype" required>
            <option value="Residential" >Residential</option>
            <option value="Commercial">Commercial</option>
        </select>
    </fieldset>
    <fieldset>
      <div class='rate'>
        <img src='css/images/tk.png'>
        <input placeholder="Rate(/KWh)" class='rate' name='rate' type="rate" tabindex="3" required>
      <div>



    </fieldset>

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>


</div>
</section>

		<!-- end of team section -->

<!-- cta section -->
		<section id="cta" class="eight_sec_plx_cta_section section">
			<div class="ed-container">
				<div class="section-title">
					<h2 class="cta-sec wow fadeIn" data-wow-duration="6s">KEEP IN TOUCH</h2>
				</div>
				<p class="cta-description wow fadeInDown" data-wow-duration="2s" >
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#8217;t look even slightly believable.</p>
</p>
									<a href="#" class="bttn cta-readmore wow fadeInUp" data-wow-duration="2s">CONTACT US</a>
							</div>
		</section>

	<!-- end of cta section -->

<!-- blog section -->

<!-- testimonial section -->
			<section id="testimonial" class="eight_sec_plx_testimonial_section section">
				<div class="ed-container">
											<div class="section-title">
							<h2 class="testimonial-sec wow fadeIn" data-wow-duration="6s">WHAT OUR CLIENTS SAY</h2>
						</div>
						<p class="testimonial-description wow fadeInDown" data-wow-duration="2s" >
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#8217;t look even slightly believable.</p>
</p>
												<ul class="testimonial-slider wow fadeInUp" data-wow-duration="2s">
																<li class="slide">
									<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/27/rayan-maclarenceo-apple-inc/">
																				<div class="testimonial-image">
											<img src="uploads/2016/04/testmonial1-1-700x700.jpg" alt = 'Rayan maclarenCEO, Apple inc' />
										</div>
																			</a>
									<div class="testimonial-content">
										<p>Nulla faucibus enim in velit accumsan malesuada eget ac neque. Suspendisse mollis sed nisl at tincidunt. Nulla dignissim purus et metus scelerisque euismod. Aliquam eu malesuada odio, eget vestibulum nisl. Nullam euismod nisl eget ante eleifend, in dictum sem sollicitudin.</p>
									</div>
									<h4 class="testimonial-title">
										<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/27/rayan-maclarenceo-apple-inc/">
											Rayan maclarenCEO, Apple inc										</a>
									</h4>
								</li>
																<li class="slide">
									<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/27/nulla-faucibusceo-apple-inc/">
																				<div class="testimonial-image">
											<img src="uploads/2016/04/testmonial2-700x700.jpg" alt = 'Nulla faucibusCEO, Apple inc' />
										</div>
																			</a>
									<div class="testimonial-content">
										<p>Proin convallis sem quis felis auctor, venenatis sollicitudin lorem iaculis. Mauris elit felis, posuere sit amet nisi non, luctus tempor magna. Proin a diam consectetur, viverra dui ac, rhoncus odio. Quisque eget ultrices lacus. In hac habitasse platea dictumst. Donec egestas dolor tincidunt, portti.</p>
									</div>
									<h4 class="testimonial-title">
										<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/27/nulla-faucibusceo-apple-inc/">
											Nulla faucibusCEO, Apple inc										</a>
									</h4>
								</li>
															</ul>

				</div>
			</section>

		<!-- end of testimonial section -->

<!-- contact section -->
		<section id="contact-us" class="eight_sec_plx_contact_section section">
			<div class="ed-container">
									<div class="section-title">
						<h2 class="contact-sec wow fadeIn" data-wow-duration="6s">CONTACT US</h2>
					</div>
					<p class="contact-description wow fadeInDown" data-wow-duration="2s" >
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#8217;t look even slightly believable.</p>
</p>
									<div class="contact-form wow fadeInUp" data-wow-duration="2s">
						[ufbl form_id="1"]					</div>
								</div>
		</section>

<!-- end of contact section -->

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="top-footer wow fadeInUp" data-wow-duration="2s">
			<div class="ed-container">
				<div class="footer-wrap clear">
											<div class="footer-block">
							<aside id="text-1" class="widget widget_text"><h2 class="widget-title">Eight Sec</h2>			<div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum mi nec commodo vehicula.
Quisque congue mi augue, eget congue eros volutpat vel. Integer ornare, felis ac laoreet porta, mi elit viverra turpis, eget iaculis turpis urna ac velit. </div>
		</aside>						</div>

											<div class="footer-block">
									<aside id="recent-posts-3" class="widget widget_recent_entries">		<h2 class="widget-title">Recent Post</h2>		<ul>
											<li>
					<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/08/01/et-harum-quidem/">Et harum quidem</a>
									</li>
											<li>
					<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/27/rayan-maclarenceo-apple-inc/">Rayan maclarenCEO, Apple inc</a>
									</li>
											<li>
					<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/27/nulla-faucibusceo-apple-inc/">Nulla faucibusCEO, Apple inc</a>
									</li>
											<li>
					<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/24/programming/">WORDPRESS</a>
									</li>
											<li>
					<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/24/analytics/">DESIGN</a>
									</li>
											<li>
					<a href="http://localhost/Solar%20Home%20Bd/index.php/2016/04/24/design/">ANALYTICS</a>
									</li>
					</ul>
		</aside>						</div>


						<div class="footer-block">
							<aside id="pages-1" class="widget widget_pages"><h2 class="widget-title">Useful Pages</h2>		<ul>
			<li class="page_item page-item-173"><a href="aboutus.html">ABOUT EIGHT SEC</a></li>
<li class="page_item page-item-184"><a href="http://localhost/Solar%20Home%20Bd/index.php/blog/">BLOG</a></li>
<li class="page_item page-item-83"><a href="http://localhost/Solar%20Home%20Bd/index.php/contact-us/">Contact us</a></li>
<li class="page_item page-item-213"><a href="http://localhost/Solar%20Home%20Bd/index.php/contact-us-2/">CONTACT US</a></li>
<li class="page_item page-item-6 current_page_item"><a href="http://localhost/Solar%20Home%20Bd/">Home</a></li>
<li class="page_item page-item-182"><a href="http://localhost/Solar%20Home%20Bd/index.php/keep-in-touch/">KEEP IN TOUCH</a></li>
<li class="page_item page-item-175"><a href="http://localhost/Solar%20Home%20Bd/index.php/portfolio/">OUR PORTFOLIO</a></li>
<li class="page_item page-item-178"><a href="http://localhost/Solar%20Home%20Bd/index.php/our-team/">OUR TEAM</a></li>
<li class="page_item page-item-221"><a href="http://localhost/Solar%20Home%20Bd/index.php/about-us/">Wanna know about us?</a></li>
		</ul>
		</aside>						</div>


						<div class="footer-block">
							<aside id="text-2" class="widget widget_text"><h2 class="widget-title">Contact us</h2>			<div class="textwidget"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut maximus gravida porttitor. Phasellus fermentum iaculis condimentum.</p>
<p>8Degreethemes - Kathmandu<br />
E-mail: info@8degreethemes.com</p>
</div>
		</aside>						</div>

				</div>
			</div>
		</div>
		<div class="site-info wow fadeInUp" data-wow-duration="2s">
		<div class="copyright">
						<span>
						</span>
					WordPress Theme : <a  title="Free WordPress Theme" href="https://8degreethemes.com/wordpress-themes/eight-sec/">Eight Sec </a>
		<span> by 8Degree Themes</span>
		</div>
				<div class="ed-social-icon">
			    <div class="social-icons ">
                <a href="#" class="facebook" data-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span></span></a>

                <a href="#" class="twitter" data-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span></span></a>

                <a href="#" class="gplus" data-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i><span></span></a>

                <a href="#" class="youtube" data-title="Youtube" target="_blank"><i class="fa fa-youtube"></i><span></span></a>











            </div>
    		</div>
			</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
<a href="#" id="go-to-top" title='Go to top'>&#8679;</a>
<div id="jiXlCTRtJCEE" class="DMSjIEUbYHwx" style="background:#dddddd;max-width:720px;z-index:9999999; "></div>
<script type='text/javascript' src='js/smooth-scroll.js?ver=v9.1.2'></script>
<script type='text/javascript' src='js/wow.js?'></script>
<script type='text/javascript' src='js/isotope.pkgd.js'></script>
<script type='text/javascript' src='js/navigation.js'></script>
<script type='text/javascript' src='js/skip-link-focus-fix.js'></script>

<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='uploads/ElziwJllgpHo/CkaHkxnfmLYM.js?ver=2.2.3'></script>

<!-- for submit button -->
<script type="text/javascript">function myFunction() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var contact = document.getElementById("contact").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password + '&contact1=' + contact;
if (name == '' || email == '' || password == '' || contact == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "ajaxjs.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}
</script>

</html>
