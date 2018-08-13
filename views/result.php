<?php
// .. used for path back
//".$_SESSION['ac_monthly'][0]."
//";
//post method session reciving
include 'databaseinsert.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<?php include 'head_result.php'; ?>

<body>
  <?php include 'header_result.php'; ?>
  <section>
  <!--for demo wrap-->
  <div class="tbl-header" style="margin-top:100px;">
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Month</th>
          <th>Solar Radiation</th>
          <th>AC Monthly</th>
          <th>Value</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td>January</td

          <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][0]);  ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][0]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][0]); ?></td>

        </tr>
        <tr>
          <td>February</td>
          <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][1]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][1]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][1]); ?></td>
        </tr>
        <tr>
          <td>March</td>
            <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][2]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][2]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][2]); ?></td>
        </tr>
        <tr>
          <td>April</td>
          <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][3]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][3]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][3]); ?></td>
        </tr>
        <tr>
          <td>May</td>
            <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][4]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][4]); ?> </td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][4]); ?></td>
        </tr>
        <tr>
          <td>June</td>
          <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][5]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][5]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][5]); ?></td>
        </tr>
        <tr>
          <td>July</td>
          <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][6]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][6]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][6]); ?></td>
        </tr>
        <tr>
          <td>August</td>
          <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][7]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][7]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][7]); ?></td>
        </tr>
        <tr>
          <td>September</td>
          <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][8]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][8]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][8]); ?></td>
        </tr>
        <tr>
          <td>Octobor</td>
          <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][9]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][9]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][9]); ?></td>
        </tr>
        <tr>
          <td>November</td>
          <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][10]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][10]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][10]); ?></td>
        </tr>
        <tr>
          <td>December</td>
          <td><?php echo sprintf("%.02f",$_SESSION['solrad_monthly'][11]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['ac_monthly'][11]); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][11]); ?></td>
        </tr>
        <tr class="annunal">
          <td>Annual</td>
          <td><?php echo sprintf("%.02f",$_SESSION['annunal_solrad']); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['annunal_ac']); ?></td>
          <td><?php echo sprintf("%.02f",$_SESSION['value'][12]); ?></td>
        </tr>
      </tbody>

    </table>
  </div>
</section>


<!-- follow me template -->
<?php include 'footer.php';?>

<!-- #colophon -->
</div><!-- #page -->
<a href="#" id="go-to-top" title='Go to top'>&#8679;</a>
<div id="jiXlCTRtJCEE" class="DMSjIEUbYHwx" style="background:#dddddd;max-width:720px;z-index:9999999; "></div>
<?php include 'scripts.php'; ?>
</body>

</html>
