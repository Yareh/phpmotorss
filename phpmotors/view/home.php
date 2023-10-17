<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="/phpmotors/css/index.css" media="screen">
            <title>PHP Motors</title>
    </head>

    <body>   

        <header>
            <img src="/phpmotors/images/site/logo.png" alt="PHP Motors logo">
            <a href="/phpmotors/accounts/index.php?action=login" title="LOGIN FOR YOUR ACCOUNT">My Account</a>
        </header>
        <nav>
            <?php echo $navList; ?>
        </nav>

        <section class="logo">
            <h1 class="headings">Welcome to PHP Motors!</h1>
            <ul class="features">
                <li class="subtitle">DMC Delorean</li>
                <li class="subtitle">3 Cup holders</li>
                <li class="subtitle">Superman doors</li>
                <li class="subtitle">Fuzzy dice!</li>
            </ul>
            <button class="ownbutton">Own Today</button>
            <img class="mainImage" src="/phpmotors/images/delorean.jpg" alt="Delorean car.">
        </section>

        <div class="description">

            <section class="descriptionSection">
                <h2 class="headings">DMC Delorean Reviews</h2>
                <ul>
                    <li>"So fast its almost like traveling in time. (4/5)"</li>
                    <li>"Coolest ride on the road." (4/5)</li>
                    <li>"I'm feeling McFly! (5/5)"</li>
                    <li>"The most futuristic ride of our day." (4.5/5)</li>
                    <li>"80's livin and I love it!" (5/5)</li>
                </ul>
            </section>

            <section class="upgradeSection">
                <h2 class="headings">Delorean Upgrades</h2>
                <div class="upgradeGrid">
                    <div id="flux">
                        <img class="upgradeImages" src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux capacitor">
                        <a href="#" title="Link to view the flux capacitor upgrade">Flux Capacitors</a>
                    </div>

                    <div id="flames">
                        <img class="upgradeImages" src="/phpmotors/images/upgrades/flame.jpg" alt="Flame decal">
                        <a href="#" title="Link to view the flame decal upgrade">Flame Decals</a>
                    </div>

                    <div id="stickers">
                        <img class="upgradeImages" src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumber sticker">
                        <a href="#" title="Link to view the bumber sticker upgrade">Bumper Stickers</a>
                    </div>

                    <div id="hubcaps">
                        <img class="upgradeImages" src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub caps">
                        <a href="#" title="Link to view the hub caps upgrade">Hub Caps</a>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/sections/footer.php'; ?>
        </footer>
    </body>
</html>