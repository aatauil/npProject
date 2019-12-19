<?php 


$i = 0;
$curl = curl_init();
$category = $_GET['category'];


curl_setopt_array($curl, array(
  CURLOPT_URL => "https://newsapi.org/v2/top-headlines?country=us&category={$category}&apiKey=3962521e87814dfa8d9cf035000bf10e",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{}",
));

$response = curl_exec($curl);
$response = json_decode(curl_exec($curl),true);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
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
        <h2 class='userName'><br>Welcome</h2>

        <ul class="menu-list">
            <li class="menu-item"><a href="./dasboard.php?category=business">Business</a></li>
            <li class="menu-item"><a href="./dasboard.php?category=Health">Health</a></li>
            <li class="menu-item"><a href="./dasboard.php?category=Science">Science</a></li>
            <li class="menu-item"><a href="./dasboard.php?category=Sports">Sports</a></li>
            <li class="menu-item"><a href="./dasboard.php?category=Entertainment">Entertainment</a></li>
            <li class="menu-item"><a href="./dasboard.php?category=Technology">Technology</a></li>
            
        </ul>
        <div class="menu-buttons">
            <a href="#" class='settings-btn'>Settings</a>
        <a href="./index.php" class='logout-btn'>Logout</a></div>

     
    </div>



</section>

<section class="right-content">
    
<?php 
    for( $i=0; $i < sizeof($response['articles']); $i++):?>
        <article  style="background-image: url('<?php print_r($response['articles'][$i]['urlToImage']) ?>')">
            <h1> <?php print_r($response['articles'][$i]['title']);?> </h1>
            <a class="read-more" href="<?php print_r($response['articles'][$i]['url']) ?>">Read more</a>
        </article>
    <?php endfor?>
</section>


</body>

<script src="../JS/dashboard.js"></script>
</html>

<!-- API-KEY = 33962521e87814dfa8d9cf035000bf10e962521e87814dfa8d9cf035000bf10e -->