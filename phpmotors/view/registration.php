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

        <form class="accountform" method="post" action="/phpmotors/accounts/index.php">
                <fieldset>
                    <legend>Enter your information</legend>
                    <label for="firstName"><span>First Name:</span></label>
                    <input placeholder="First Name" type="text" id="firstName" name="clientFirstname" required>
                    <br>
                    <label for="lastName"><span>Last name:</span></label>
                    <input placeholder="Last Name" type="text" id="lastName" name="clientLastname" required>
                    <br>
                    <label for="email"><span>Email:</span></label>
                    <input placeholder="Email" type="email" id="email" name="clientEmail" required>
                    <br>
                    <label for="password"><span>Password: </span></label>
                    <input type="password" id="password" name="clientPassword" placeholder="password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                    <br>
                    <br>
                    <input type="submit" name="submit" id="regBtn" class="sign-in" value="Register">
                    <input type="hidden" name="action" value="register">
                </fieldset>
        </form>
        

    </body>

</html>
        

