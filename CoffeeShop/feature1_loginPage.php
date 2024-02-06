<?php
$title = "Log_In";
$md="Please use appropriate meta Description";
include 'header.php'; ?>

        <div class="word">
            <form class="loginform">
                <h2 class="logintitle">Existing Customers</h2>
                <label class="loginlable" for="email">Email:</label>
                <input class="logininput" type="email" id="email" name="email" required>
                <label class="loginlable" for="password">Password:</label>
                <input class="logininput" type="password" id="password" name="password" required>
                <button class="registerbutton" type="submit">Login</button>
            </form>
        </div>

        <div class="word">

            <h2 class="logintitle">New Customers</h2>
            <label class="loginlable" for="password">Are You New Here</label>
            <button class="loginbutton" type="submit"><a href="feature1_registerPage.php" class="link">Register</a></button>
        </div>
    


<?php include 'footer.php'; ?>