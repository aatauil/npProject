<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="../CSS/subscribe.css">
    <title>Subscribe</title>
</head>

<body>
    <header>
        <nav class='nav-back'>
            <a href="./index.php" class="back-btn">
                <span back-btn_text>Back to home</span><i class="fas fa-caret-right"></i>
            </a></nav>
    </header>
    <main>
        <div class='Logo'><img src="../Images/side-logo.svg" alt="logo on its side"></div>
        <div class='decor-line-top'><img src="../Images/decor-line-top.svg" alt="decoration line top left"></div>
        <div class='decor-line-bottom'><img src="../Images/decor-line-bottom.svg" alt="decoration line bottom right"></div>
        <h1 class='title-subscribe'>Subscribe</h1>
    </main>
    <section class='subscribe-section'>
        <form action="includes/subscribe.inc.php" method="post" class='form-grid'>
            <button class='facebook-login'></button>
            <button class='google-login'></button>
            <div class='grid split-line'> <div class="line"></div> <span class='line-or'>or</span>  <div class='line'></div></div>
            <input type="text" required placeholder="name" name="name" class='pt input-name'>
            <input type="text" required placeholder="lastname" name="lastname" class='pt input-lastname'>
            <input type="email" required placeholder="email" name="email" class='pt input-email'>
            <input type="password" required placeholder="Password" name="password" class="pt input-password">
            <div class="checkbox-privacy" required>
            <input type="checkbox" name="privacy" required class='checkbox-box' ><span class='privacy-text'> I agree that this information will be stored for reasons listed in the general terms.</span></div>
            <button  type="submit" name="submit" class="submit-form">Register</button> 
        </form>
    </section>
    <?php include ('errors.inc.php'); ?>
    <section class="quote">
        <p class="quote-text">“Reading furnishes the mind only with materials of knowledge; it is thinking that makes what we read ours.” <br>
― John Locke</p>
    </section>

</body>

</html>