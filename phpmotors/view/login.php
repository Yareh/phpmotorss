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

        <form id="accountform" action="/phpmotors/accounts/" method="post">
            <fieldset>
            <legend>Enter your Information</legend>
                
            <label for="email" class="test"><span>Email:</span></label>
            <input placeholder ="Email" type="email" id="email" name="clientEmail" required>
            <label for="password" class="test"><span>Password:</span></label>
            <input placeholder ="Password" type="password" id="password" name="clientPassword">
            <input type="submit" value="SIGN IN" class="sign-in">
            <input type="hidden" name="action" value=Login>
            </fieldset>
        </form>

        <p class="signup">You don't have an account? <a href="/phpmotors/accounts/index.php/?action=registration" title="CREATE ACCOUNT" class="accountCreate">Click Here</a></p>

    </body>

</html>
        

