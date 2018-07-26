<?php
// Connecting to database
 $db = mysqli_connect('localhost','root','','solarhomexwa')
  or die('Error connecting to MySQL server.');

//mysql create good start
$query = "SELECT * FROM solarhome";
mysqli_query($db, $query);

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);



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

		<?php include 'views/header.php';?>
    <!-- #masthead -->

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
			<!--slider -->
      <?php include 'views/slider.php' ?>

		<!-- end of slider section -->

<!-- about section -->
		<?php include 'views/about.php' ?>
		<!-- end of portfolio section -->


<!-- calculator section -->

<?php include 'views/calculator.php' ?>
		<!-- end of calculator section -->

<!-- portfolio section -->
<?php include 'views/portfolio.php' ?>
	<!-- end of portfolio section -->

<!-- blog section -->

<!-- testimonial section -->
		<!-- end of testimonial section -->

<!-- contact section -->
		<?php include 'views/contact.php' ?>

<!-- end of contact section -->

</div><!-- #content -->
<!--footer-->
<?php include 'views/footer.php'; ?>

<!-- #colophon -->
</div><!-- #page -->
<a href="#" id="go-to-top" title='Go to top'>&#8679;</a>
<div id="jiXlCTRtJCEE" class="DMSjIEUbYHwx" style="background:#dddddd;max-width:720px;z-index:9999999; "></div>
<?php include 'views/scripts.php' ?>

</body>

</html>
