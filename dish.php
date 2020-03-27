<?php
define("TITLE", "Menu items | Donuts CC");
include('includes/header.php');

function strip_bad_chars($input)
{
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
}


if (isset($_GET['item'])) {
    $menuItem = strip_bad_chars($_GET['item']);
    $dish = $menuItems[$menuItem];
}
?>
<br>
<div id="dish">
    <h1><?php echo $dish['title']; ?> <?php echo $dish['price']; ?> RON</h1>
    <br>
    <img src="img/<?php echo $dish['img']; ?>.jpg" alt="<?php echo $dish['title']; ?>">
    <br><br>
    <p><?php echo $dish['description']; ?></p>

    <br>
    <p><strong>Suggested beverage: <?php echo $dish['drink']; ?></strong></p>
    <br>
    <a href="donuts_menu.php" class="button previous">&laquo; Back to menu</a>
</div>
<br>
<?php include('includes/footer.php'); ?>