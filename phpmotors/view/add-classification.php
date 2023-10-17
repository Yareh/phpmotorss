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

    <main>
        <div>
            <h1 class="center">Add a Car Classification</h1>
           
            <form id="classform" action="/phpmotors/vehicles/index.php" method="post">
                <label for="classificationName">Provide a Classification Name</label><br>
                <input <?php if (isset($classificationName)) {
                            echo "value='$classificationName'";
                        } ?> name="classificationName" id="classificationName" type="text" maxlength="30">
                <p class="center">Please keep the classification under 30 characters.</p>
                <br>

                <input type="submit" value="Add Classification" id="btn">
                <input type="hidden" name="action" value="adding-classification">
            </form>
        </div>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/sections/footer.php'; ?>
    </footer>

    
</body>

</html>