<html>
<body>
<form method="GET" action=""><?php
session_start();
    function curl($url) {
        
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            $data = curl_exec($ch);
            curl_close($ch);

            return $data;
        } 
//$_SESSION['city']=$_GET['city'];
$city=$_GET['city'];
    if ($_GET['city']) {
        
        $urlContents=curl("https://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=b847046a859cc3f7bf664b25c62f9852");
        $weatherArray = json_decode($urlContents, true);
        
        $weather = "The weather in ".$_GET['city']." is currently ".$weatherArray['weather'][0]['description'].".";
        
        $tempInFahrenheit = intval($weatherArray['main']['temp']* 9/5 - 459.67);
        
        $speedInMPH = intval($weatherArray['wind']['speed']*2.24);
        
        $weather .=" The temperature is ".$tempInFahrenheit."&deg; F with a wind speed of ".$speedInMPH." MPH.";
        
       
    }
if($weather){
echo'<div class="alert alert-success" role="alert">'.$weather.'</div>';

}
else{
if($city!="")
{
echo '<div class="alert alert-danger" role="alert">sorry,city could not be fund</div>';
}
}