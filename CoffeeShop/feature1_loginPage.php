<?php
$title = "Log_In";
$md="Please use appropriate meta Description";
$css="styles_YangPengpeng.css";
include 'header1.php'; ?>

        <div class="word">
            <form method = "post" action = "feature1_process1.php" class="loginform">
                <h2 class="logintitle">Existing Customers</h2>
                <label class="loginlable" for="email">Email:</label>
                
                <input class="logininput" type="text" id="email" name="email" required>

                <label class="loginlable" for="password">Password:</label>

                <input class="logininput" type="password" id="password" name="password" required>

                <button class="registerbutton" type="submit" name="login">Login</button>
            </form>
        </div>

        <div class="word">

            <h2 class="logintitle">New Customers</h2>
            <label class="loginlable" for="password">Are You New Here</label>
            <button class="loginbutton" type="submit" name= "register"><a href="feature1_registerPage.php" class="link">Register</a></button>
        </div>
    


<?php include 'footer.php'; ?>