<?php
// Connecting to database
 include 'controller/config.php';

//mysql create good start
$query = "SELECT * FROM solarhome";
mysqli_query($db, $query);

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

//API design


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
<?php include 'view/head.php'; ?>

<body>

		<!-- headrfile -->
    <?php include 'view/header.php' ?>

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
		<!--slider file-->
    <?php include 'view/slider.php' ?>
    <!-- end of slider section -->

<!-- about section -->
<?php include 'view/about.php' ?>
	<!-- end of about section -->

<!-- portfolio section -->
			<?php include 'view/portfolio.php' ?>
		<!-- end of portfolio section -->

<!-- calculator section -->
			<?php include 'view/calculator.php' ?>

		<!-- end of team section -->

<!-- contact section -->
<?php include 'view/contact.php' ?>

<!-- end of contact section -->

</div><!-- #content -->
<?php include 'view/footer.php';?>

<!-- #colophon -->
</div><!-- #page -->
<a href="#" id="go-to-top" title='Go to top'>&#8679;</a>

<?php include 'view/scripts.php';?>

</html>
