<?php
define("TITLE", "About Us | Donuts CC");
include('includes/header.php');
?>
<br>

<div class="our_mission">
    <h1>Our mission</h1>
    <br>

    <?php
    foreach ($our_mission as $mission) {
    ?>

        <img src="img/<?php echo $mission['img']; ?>.png" alt="<?php echo $mission['name']; ?>">
        <br>
        <p><?php echo $mission['description']; ?></p>

    <?php
    }
    ?>
</div>
<br><br>
<div class="parallax">
    <img src="/php-donuts/img/alex-holyoake-8fMxK30cvrQ-unsplash.jpg" alt="our mission donuts cc">
</div>
<br><br>
<div class="about_us">
    <h1>About Us</h1>
    <br>
    <div class="team">
        <?php

        foreach ($teamMembers as $member) {

        ?>

            <div class="employ">

                <img src="img/<?php echo $member['img']; ?>.jpg" alt="<?php echo $member['name']; ?>">
                <br>
                <h2><?php echo $member['name']; ?></h2>
                <h3><?php echo $member['position'] ?></h3>
                <br>
                <p><?php echo $member['bio'] ?></p>
            </div>

        <?php
        }
        ?>
    </div>
</div>

<br>
<br>

<?php include('includes/footer.php'); ?>