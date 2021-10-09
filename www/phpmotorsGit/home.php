<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link media="screen" rel="stylesheet" href="css/style.css">
  <title>Home | Web Backend Development I</title>
</head>
<body>
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
  <h1>Welcome to PHP Motors!</h1>
  <div id="details">
    <p><b>DMC Delorean</b><br>3 Cup holders<br>Superman doors<br>Fuzzy dice!<br></p>
    <img title="Own Today" id="own_today" src="images/site/own_today.png" alt="Own Today">
  </div>
  <img src="images/delorean.jpg" alt="Delorean">
  <div class="flex-container">
    <div class="upgrades">
      <p>Delorean Upgrades</p>
      <figure title="Flux Capacitor">
        <div>
          <img src="images/upgrades/flux-cap.png" alt="Flux Capacitor">
        </div>  
        <figcaption>Flux Capacitor</figcaption>
      </figure>
      <figure title="Flame Decals">
        <div>
          <img src="images/upgrades/flame.jpg" alt="Flame Decals">
        </div>
        <figcaption>Flame Decals</figcaption>
      </figure>
      <br>
      <figure title="Bumper Stickers">
        <div>
          <img src="images/upgrades/bumper_sticker.jpg" alt="Bumper Stickers">
        </div>
        <figcaption>Bumper Stickers</figcaption>
      </figure>
      <figure title="Hub Caps">
        <div>
          <img src="images/upgrades/hub-cap.jpg" alt="Hub Caps">
        </div>
        <figcaption>Hub Caps</figcaption>
      </figure>
    </div>
    <div class="reviews">
      <p>DMC Delorean Reviews</p>
      <ul>
        <li>"So fast it's almost like traveling through time." (4/5)</li>
        <li>"Coolest ride on the road." (4/5)</li>
        <li>"I'm feeling Marty Mcfly!" (5/5)</li>
        <li>"The most futuristic ride of our day." (4.5/5)</li>
        <li>"80's livin and I'm lovin it!" (5/5)</li>
      </ul>
    </div>
  </div>
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
</body>
</html>