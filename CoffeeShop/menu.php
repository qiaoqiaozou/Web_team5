
<?php 
$title = "menu";
include_once 'menu_header.php';?>

<body>
        <header class="part1">
            <div class="head"><a href="index.php"><img src="images/2-e1694169123116.png" alt="logo"></a></div>
            <nav class="nav">
                <a href="index.php" class="link">Home</a>
                <a href="menu.php" class="link">Menu</a>
                <a href="feature2_read.php" class="link">About Us</a>
                <a href="#" class="link">Contact</a>
            </nav>
            <button class="button"><a href="#" class="link">Buy Now</a></button>
        </header>
        <div class="part2">
            <img src="images/12.jpg" class="image menu-img1" />
            <div class="part-menu-text">
                <p class="menu-text">
                    <strong><em>It doesn't matter what kind of coffee we enjoy. It has to be perfect.</em></strong>
                </p>
                <p>According to our philosophy, freshly roasted coffee is the best coffee. Our master roaster roasts each of
                    our coffee qualities slowly, in small batches, at carefully selected temperatures to achieve the best
                    possible aroma. In our coffee shops, we offer freshly roasted filter coffee and various espresso blends.
                </p>
            </div>
        </div>
        <div class="part3">
            <a href="#coffee" class="m1">Coffee</a>
            <a href="#dessert" class="m2">Dessert</a>
            <a href="#bread" class="m3">Bread</a>
            <a href="#others" class="m4">Others</a>
        </div>

    <div class="c-t">Coffee</div>
    <?php include_once 'menu_coffee.php';?>
    
    <div class="c-t">Dessert</div>
    <?php include_once 'menu_dessert.php';?>
    
    <div class="c-t">Bread</div>
    <?php include_once 'menu_bread.php';?>
    
    <div class="c-t">Others</div>
    <?php include_once 'menu_others.php';?>



<?php include_once "menu_footer.php";?>