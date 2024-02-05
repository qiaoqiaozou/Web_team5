<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DewDrop Brew-Coffee shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3743480f3c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles_YangPengpeng.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #003e40;
            color: #e8ccb0;
        }

        .part1 {
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #e8ccb0;
            padding: 1em;
            height: 120px;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .head {
            width: 300px;
            padding-left: 20px;
            padding-bottom: 20px;
            line-height: 80px;
            flex: 1;
            margin: 0 40px 0 50px;
        }

        .nav {
            display: flex;
            align-items: center;
            font-weight: 700;
            flex: 2;
            margin: 0 2em;
            font-size: 17px;
        }

        .nav a {
            margin: 0 2em;
        }

        .nav a,
        .button a,
        .button2 a,
        .end1 a,
        .end2 a,
        .end3 a {
            text-decoration: none;
            color: #003e40;
        }

        .button a,
        .button2 a {
            color: #e8ccb0;
        }

        .button2 a {
            color: #003e40;
        }

        .button {
            margin: 0 60px 0 40px;
        }

        .button {
            background-color: #003e40;
            padding: 10px 15px;
            border-radius: 10px;
            line-height: 1;
            font-weight: 700;
            font-size: 18px;
            display: inline-block;
        }

        /*.button {
    background-color: #e8ccb0;
    color: #003e40;
    padding: 10px 15px;
    border-radius: 10px;
    line-height: 1;
    font-weight: 700;
    font-size: 18px;
    display: inline-block;
    margin-left: 10px;
    /* 新增：添加左边距 
}*/

        section {
            display: flex;
            height: 600px;
        }

        .word {
            text-align: center;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .coffee {
            width: 200px;
            flex: 1;
            background-image: url(images/HomePageImage1.jpg);
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .big {
            font-size: 36px;
            color: white;
            font-weight: 900;
        }

        .small {
            font-size: 24px;
        }

        .button,
        .button2 {
            background-color: #003e40;
            padding: 10px 15px;
            border-radius: 10px;
            line-height: 1;
            font-weight: 700;
            font-size: 18px;
            display: inline-block;
        }

        .button2 {
            background-color: #e8ccb0;
            color: #003e40;
        }


        .link {
            text-decoration: none;
            color: #003e40;
        }

        .link:hover {
            color: #463d35;
        }

        div a:hover,
        nav a:hover,
        .button a:hover,
        .button2 a:hover {
            color: #a35c2d;
        }

        .container-fluid {
            padding: 0;
        }

        .words {
            font-size: 36px;
            font-weight: 900;
        }

        /*button {
    background-color: #e8ccb0;
    color: #003e40;
    padding: 10px 15px;
    border-radius: 10px;
    line-height: 1;
    font-weight: 700;
    font-size: 18px;
    display: inline-block;
}*/
        .logintitle {
            color: #e8ccb0;

        }

        .loginlable {
            display: block;
            margin-bottom: 8px;
            color: #e8ccb0;
            font-weight: 700px;
            text-align: left;
        }

        .logininput {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .loginbutton {
            background-color: #e8ccb0;
            color: #003e40;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 40%;
            font-weight: 700px;
        }

        .registerbutton {
            background-color: #e8ccb0;
            color: #003e40;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-weight: 700px;
        }

        .registerinput {
            width: 50%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .registrationbutton {
            background-color: #e8ccb0;
            color: #003e40;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 50%;
            font-weight: 700px;
        }


        .linkMethod {
            background-color: #a25c2e;
            height: 47px;
            width: 47px;
            position: relative;
        }

        .linkMethod:hover {
            background-color: white;
        }

        /*.icon2 {
    color: white;
}*/

        .linkMethod:hover .icon2 {
            color: #a25c2e;
        }

        footer {
            color: #003e40;
            background-color: #e8ccb0;
            height: 200px;
            position: relative;
        }

        /*.icon::after {
    content: "3";
    position: absolute;
    top: 0;
    right: 0;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #A25C2E;
    color: white;
    font-size: 10px;
    line-height: 15px;
    text-align: center;
}*/

        /*.eca {
    margin-left: 10px;
}*/

        .linkMethod2 {
            height: 30px;
            width: 30px;
            margin-right: 5px;
            position: relative;
        }

        .linkMethod2:hover {
            background-color: white;
        }

        /*@media (max-width: 768px) {
    footer {
        height: 500px;
        padding-top: 10px;
    }
}

@media (min-height: 900px) {
    footer {
        position: absolute;
        bottom: 0;
    }
}*/

        @media (max-width: 600px) {
            footer {
                height: 500px;
                padding-top: 10px;

            }

            /*.nav {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }*/

            .part1 {
                flex-direction: column;
                height: 300px;
                padding: 6px;

            }


            .head {
                width: 100%;
                padding: 10px;
                line-height: normal;
                text-align: center;
            }

            .nav {
                flex-direction: column;
                align-items: center;
                margin: 0;
            }

            nav a {
                margin: 5px 0;
            }

            .button {
                margin-top: 0;
            }


            .linkMethod2 {

                height: auto;
                width: auto;
                margin-right: 5px;
                position: relative;
            }
        }

        @media (min-width: 601px)and (max-width: 1024px) {

            /*footer{
         height: 500px;
         padding-top: 10px;
 
     }*/
            /*.nav {
         flex-direction: column;
         align-items: center;
         text-align: center;
       }*/
            .part1 {
                height: 155px;
            }
        }
    </style>

</head>

<body>
    <header class="part1">
        <div class="head">
            <a href="index.html"><img src="images/2-e1694169123116.png" /></a>
        </div>
        <nav class="nav">
            <a href="HomePage.php" class="link">Home</a>
            <a href="menu_QiaoqiaoZou.html" class="link">Menu</a>
            <a href="about_XiongNi.html" class="link">About Us</a>
            <a href="contactUs_JiaweiLi.html" class="link">Contact</a>
        </nav>
        <button class="button"><a href="loginPage.php" class="link">Log In</a></button>
    </header>

    <section>
