<?php
$title = "Register";
$md="Please use appropriate meta Description";
include 'header.php'; ?>

<div style="height: auto;" class="word">

            <h2 class="logintitle">Registration Form</h2>

            <label style="text-align:left;" class="loginlable" for="fullname">ID</label>
            <input class="registerinput" type="text" id="fullname" name="fullname" required>

            <label class="loginlable" for="email">Email Address</label>
            <input class="registerinput" type="email" id="email" name="email" required>

            <label class="loginlable" for="password">Password</label>
            <input class="registerinput" type="password" id="password" name="password" required>

            <label class="loginlable" for="confirm-password">Confirm Password</label>
            <input class="registerinput" type="password" id="confirm-password" name="confirm-password" required>

            <label class="loginlable" for="phone">Phone Number</label>
            <input class="registerinput" type="tel" id="phone" name="phone">

            <button class="registrationbutton" type="submit">Submit</button>
            <p></p>
            <p class="terms">By proceeding, you are confirming that you agree to our Terms and Conditions and Privacy
                Policy</p>
            
        </div>

        
    


<?php include 'footer.php'; ?>