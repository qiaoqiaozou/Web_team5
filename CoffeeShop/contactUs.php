<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactUs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3743480f3c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles_JiaweiLi.css">
</head>


<body>
<header class="part1">
    <header class="part1">
        <div class="head">
            <a href="index.php"><img src="images/2-e1694169123116.png" /></a>
        </div>
        <nav class="nav">
            <a href="index.php" class="link">Home</a>
            <a href="menu.php" class="link">Menu</a>
            <a href="aboutus.php" class="link">About Us</a>
            <a href="contactUs_JiaweiLi.html" class="link">Contact</a>
        </nav>
        <button class="button"><a href="feature1_loginPage.php" class="link">Log In</a></button>
    </header>






<div class="container" style="min-height: 655px">
    <div class="row" style="padding-top: 90px">
        <div class="col-sm-6">
            <div class="words">
                <p>Have Question? Let's Get In Touch</p><br>

            </div>
            <div class="d-flex align-items-start">

                <div class="linkMethod">
                    <i class="fa-solid fa-envelope icon2"
                       style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                </div>

                <div class="eca">
                    <p style="font-weight: 800;">Email Address</p>
                    <p>supportus@dkdk.com</p><br>
                </div>
            </div>

            <div class="d-flex align-items-start">

                <div class="linkMethod">
                    <i class="fa-solid fa-phone icon2"
                       style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                </div>

                <div class="eca">
                    <p style="font-weight: 800; ">Call Us</p>
                    <p>+358 12377658</p><br>
                </div>
            </div>

            <div class="d-flex align-items-start">

                <div class="linkMethod">
                    <i class="fa-solid fa-location-dot icon2"
                       style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                </div>

                <div class="eca">
                    <p style="font-weight: 800;">Address</p>
                    <p>mikokadu 16 A</p>
                </div>

            </div>

        </div>




        <div class="col-sm-6">
            <form name="contactUs" method="post">

                <p style="text-align: center;font-size: 28px; font-weight: bold;">Send Message</p><br>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First name here" aria-label="First name" id="first_name" name="first_name">
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last name here" aria-label="Last name" id="last_name" name="last_name"><br>
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Add email" aria-label="First name" id="email" name="email" onblur="validateEmail()">
                        <span id="emailError"></span>
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="How can we help you?"
                               aria-label="Last name" id="howtohelp" name="howtohelp"><br>
                    </div>

                    <div>
                        <textarea class="form-control" placeholder="Leave a comment here" id="comment" name="comment" style="height: 180px"></textarea><br>
                    </div>
                    <div>
                        <button class="buttonSM" type="submit" name="submit" onclick="submitForm(this)">Send Message</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>


<footer class="container-fluid d-flex align-items-start justify-content-center">
    <div class="row" style="width: 1240px;margin-top: 20px">
        <div class="col-md">
            <p style="font-weight: bolder; font-size: 25px">Information</p>
            <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there</p>



            <div class="row d-flex">
                <div class="linkMethod2">
                    <i class="fa-brands fa-facebook"
                       style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                </div>

                <div class="linkMethod2">
                    <i class="fa-brands fa-square-x-twitter"
                       style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                </div>


                <div class="linkMethod2">
                    <i class="fa-brands fa-square-instagram"
                       style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                </div>

            </div>

        </div>

        <div class="col-md">
            <p style="font-weight: bolder; font-size: 25px">Useful Links</p>
            <a class="nav-link" href="index.html">Home</a>
            <a class="nav-link" href="contactUs_JiaweiLi.html">Contact</a>
            <a class="nav-link" href="#">Shop Now</a>
        </div>

        <div class="col-md">
            <p style="font-weight: bolder; font-size: 25px">Opening Hours</p>
            <p>Mon-Fri: 8a.m to 9p.m</p>
            <p>Sat-Sun: 10a.m to 10p.m</p>
        </div>
    </div>
    <div></div>
</footer>


<script>
    function validateEmail(){
        const pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        let email = document.getElementById("email").value;


        if(pattern.test(email)){
            document.getElementById("emailError").innerHTML = "Correct address!";
            return true;
        }
        else{
            document.getElementById("emailError").innerHTML = "Wrong address, please input again.";
            return false;
        }
    }

    function submitForm(submitButton){
        if(validateEmail()){
            submitButton.form.action = "../processCon.php";
        }
        else{
            alert("Wrong address, please input again.")
        }
    }

</script>

</body>
</html>