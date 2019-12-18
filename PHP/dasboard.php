<?php 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://newsapi.org/v2/top-headlines?country=be&apiKey=3962521e87814dfa8d9cf035000bf10e",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{}",
));

$response = curl_exec($curl);
$response = $response.json_decode();
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response[0];
  $articles = $newsContent['articles'];

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <title>Dashboard</title>
</head>
<body class="dashboard-body">
<section class="left-menu-visible">
    <button class="menu-button"></button>
    <div class="left-menu-name-container">
        <span class="name-decoration"></span>
        <h2 class='userName'><br>Achraf Atauil</h2>

        <ul class="menu-list">
            <li class="menu-item"><a href="">Politics</a></li>
            <li class="menu-item"><a href="">Economics</a></li>
            <li class="menu-item"><a href="">Finance</a></li>
            <li class="menu-item"><a href="">Global</a></li>
            
        </ul>
        <div class="menu-buttons">
            <a href="#" class='settings-btn'>Settings</a>
        <a href="./index.php" class='logout-btn'>Logout</a></div>

     
    </div>



</section>

<section class="right-content">
    
<?php foreach( $response as $element):?>
    <article style="background-image: url('https://static01.nyt.com/images/2019/12/12/world/12uk-briefing11a/12uk-briefing11a-facebookJumbo.jpg')">
    <h1>{{$element[]</h1>
    </article>
<?php endforeach?>
</section>


</body>

<script src="../JS/dashboard.js"></script>
</html>
<!-- API-KEY = 33962521e87814dfa8d9cf035000bf10e962521e87814dfa8d9cf035000bf10e -->