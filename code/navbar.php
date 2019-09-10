<div class='row navbar'>
    <div class='column' style='clear:both; margin-left:20px;'>
        <a href='category.php?filter=Services'>Click here for services</a>
    </div>

    <div class='column' style='clear:both; margin-left:20px;'>
        <a href='category.php?filter=electronics'>Click here for electronics</a>
    </div>

    <div class='column' style='clear:both; margin-left:20px;'>
        <a href='category.php?filter=book'>Click here for books</a>
    </div>

    <div class='column' style='clear:both; margin-left:20px;'>
        <a href='category.php?filter=Clothes'>Click here for Clothes</a>
    </div>
	
	<div class='column' style='clear:both; margin-left:20px;'>
        <a href='itemsforsale.php'>All items</a>
    </div>
	
	<div class='column' style='clear:both; margin-left:20px;'>
        <a href='membersarea.php'>Members Area</a>
    </div>

    <?php 
    if($_SESSION['username']){
            echo '<div class="column"><a class="button button-small button-outline logout-btn" href="logout.php">Logout</a></div>';
        } 
    ?>

</div>
