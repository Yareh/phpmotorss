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

     <main class="center">
         <div class="main_content">
             <h1>Add a Car Classification</h1>
             <a href="/phpmotors/vehicles/?action=classification-page">Add Classification</a><br>
             <a href="/phpmotors/vehicles/?action=vehicle-page">Add Vehicle</a>
         </div>

         <?php
            
            if (isset($classificationList)) {
                echo '<h2>Vehicles By Classification</h2>';
                echo '<p>Choose a classification to see those vehicles</p>';
                echo $classificationList;
            }
            ?>
         
         <table id="inventoryDisplay"></table>
     </main>

     <footer>
         <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/sections/footer.php'; ?>
     </footer>

 
 </body>

 </html>

 <?php //unset($_SESSION['message']); ?>