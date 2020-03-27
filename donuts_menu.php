<?php
define("TITLE", "Donuts Menu");
include('includes/header.php');
?>
<br>
<div class="menu-item">
    <h1>Our delicious donuts menu</h1>
    <br>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Nam molestiae deserunt corrupti eveniet consequatur delectus quam ratione veritatis vel hic.
        Nam molestiae deserunt corrupti eveniet consequatur delectus quam ratione veritatis vel hic.
        Nam molestiae deserunt corrupti eveniet consequatur delectus quam ratione veritatis vel hic.
        Nam molestiae deserunt corrupti eveniet consequatur delectus quam ratione veritatis vel hic.</p>
    <br>
    <ul>
        <?php foreach ($menuItems as $dish => $item) { ?>

            <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?></a> <?php echo $item['price']; ?> RON</li>

        <?php } ?>
    </ul>

</div>
<br>
<?php
include('includes/footer.php');
?>