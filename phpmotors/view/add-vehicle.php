<?php
// dynamic select dropdown list
$selectList = '<select name="classificationId" id="classificationId" required>';
$selectList .= '<option value="">-Choose Car Classification-</option>';
foreach ($classifications as $classification) {
    $selectList .= "<option value='$classification[classificationId]'";
    if (isset($classificationId)) {
        if ($classification['classificationId'] === $classificationId) {
            $selectList .= ' selected ';
        }
    }
    $selectList .= ">$classification[classificationName]</option>";
}
$selectList .= '</select>';
?>

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
            <div class="main_content">
                <h1>Add a Vehicle</h1>
              
                <form id="vehicleform" action="/phpmotors/vehicles/index.php" method="post">
                    <p>Note all Fields are Required.</p>
                    <?php echo $selectList; ?><br>

                    <label for="invMake">Make</label><br>
                    <input <?php if (isset($invMake)) {
                                echo "value='$invMake'";
                            } ?> type="text" id="invMake" name="invMake"><br>

                    <label for="invModel">Model</label><br>
                    <input <?php if (isset($invModel)) {
                                echo "value='$invModel'";
                            } ?> type="text" id="invModel" name="invModel"><br>

                    <label for="invDescription">Description</label><br>
                    <textarea rows="2" cols="25" id="invDescription" name="invDescription"><?php if (isset($_POST['invDescription'])) {
                    echo htmlentities($_POST['invDescription'], ENT_QUOTES); } ?></textarea><br>

                    <label for="invImage">Image Path</label><br>
                    <input <?php if (isset($invImage)) {
                                echo "value='$invImage'";
                            } ?> type="text" id="invImage" name="invImage"><br>

                    <label for="invThumbnail">Thumbnail Path</label><br>
                    <input <?php if (isset($invThumbnail)) {
                                echo "value='$invThumbnail'";
                            } ?> type="text" id="invThumbnail" name="invThumbnail"><br>

                    <label for="invPrice">Price</label><br>
                    <input <?php if (isset($invPrice)) {
                                echo "value='$invPrice'";
                            } ?> type="number" id="invPrice" name="invPrice"><br>

                    <label for="invStock">Stock</label><br>
                    <input <?php if (isset($invStock)) {
                                echo "value='$invStock'";
                            } ?> type="number" id="invStock" name="invStock"><br>

                    <label for="invColor">Color</label><br>
                    <input <?php if (isset($invColor)) {
                                echo "value='$invColor'";
                            } ?> type="text" id="invColor" name="invColor"><br>

                    <input type="submit" name="submit" value="Add Vehicle" id="btn">
                    <input type="hidden" name="action" value="adding-vehicle">
                </form>
            </div>
        </main>

        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/sections/footer.php'; ?>
        </footer>

</body>

</html>