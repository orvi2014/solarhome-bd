<?php
include 'config.php';
try{
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
    //API error handling handling for location
    if(empty($json)){
      throw new Exception("error location");

      //header( "refresh:5; url=error.php" );
      //exit();
    }

    $obj =(json_decode($json,true));




    //ccessing json array
   // check postman
  //  postman  value=$obj['Parentkey']['child1 Key']
  $value =$obj['inputs']['tilt'];
  $keys = array_keys($obj);
  $temp=$keys[0];//inputs
  $temp1=$keys[6];//outputs

  //creating monthly array
  $ac_monthly=array();
  $poa_monthly=array();
  $solrad_monthly=array();
  $dc_monthly=array();

  //variables intialization
  $annunal_ac=0;
  $annual_solrad=0;
  $newtitlte=0;

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

    // Rate Calculation
    $rate=$_POST['rate'];
    $value=array();
    for($i=0;$i<12;$i++){
      $value[]=$ac_monthly[$i]*$rate;
    }
  $value[]=$annunal_ac*$rate;
  // post method after submission button
    $_SESSION['company'] = $_POST['company'];
    $_SESSION['email']=$_POST['email'];
    $_SESSION['location'] = $_POST['location'];
    $_SESSION['phone']=$_POST['phone'];
    $_SESSION['dc']=$system_capacity;
    $_SESSION['ratetype']=$_POST['ratetype'];
    $_SESSION['result']=$json;
  // get method through api
    $_SESSION['annunal_ac'] =$annunal_ac;
    $_SESSION['annunal_solrad'] =$annual_solrad;
    $_SESSION['ac_monthly'] =$ac_monthly;
    $_SESSION['solrad_monthly']=$solrad_monthly;
    $_SESSION['dc_monthly']=$dc_monthly;
    $_SESSION['titlt'] = $newtitlte;
    $_SESSION['value']=$value;
  }


  header('Location: /solarhome/solarhome-bd/views/result.php');
}
catch(Exception $e){
  $error_msg= $e->getmessage();
  $_SESSION['error']=$error_msg;
  //refreshing time for error msg
  header('Location: error.php' );
  exit();
}

 ?>
