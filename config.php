<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_bank";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwCgK1LIFl-gOqSi1yQ293YGdKHot2Ko5BGA&s" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/fe14a550b8.js" crossorigin="anonymous"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap');

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }

    .top-bar {
        background-color: darkslategray;

        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .donation-logo {
        height: 60px;
        width: 180px;
        margin-top: 10px;
        margin-left: 180px;
        margin-bottom: 10px;
    }

    .email-qq {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .mail-logo {
        margin: 5px;
    }

    .details {
        display: flex;
        justify-content: center;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .register-login {
        display: flex;
        justify-content: space-around;
        padding: 20px;
        margin-right: 120px;
    }

    .register_butt,
    .login_butt {
        background-color: rgb(255, 51, 0);
        border-radius: 20px;
        padding: 20px;
        border: none;
        margin: 10px;
        cursor: pointer;
    }

    .register_butt:hover,
    .login_butt:hover {
        background-color: rgb(255, 102, 0);

    }

    span:hover {
        color: orange;
    }

    .slogan {
        background-color: rgb(255, 51, 0);
        width: 100%;

        text-align: center;
        align-content: center;
        height: 50px;
    }

    .slogan-hea {
        color: white;
        font-size: 30px;
        margin-bottom: 20px;
        text-decoration: underline;
        text-decoration-color: yellow;

    }

    .groups-list1 {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .group-hea {
        text-align: center;
        text-decoration: underline;
        text-decoration-color: red;
    }

    .group {
        text-align: center;
        position: relative;
        display: block;
        width: 100px;
        height: 100px;
        margin: 0 auto 15px;
        font-style: normal;
        font-size: 42px;
        padding-top: 20px;
        line-height: 40px;
        /* border: 2px solid #e9e9e9; */
        background: #ff5722;
        color: #fff;
        align-content: center;
        border-radius: 10%;
    }

    .group-text {
        color: white;
        font-size: 40px;
    }

    .blood-lis {
        align-items: center;
        align-content: center;
        align-self: center;
    }

    .donor-img {
        height: 100px;
        width: 60px;
        margin: 20px;
    }

    .question {
        display: flex;
        flex-direction: row;
        align-items: center;
        align-content: center;
    }

    .img-text {
        flex-direction: column;
        margin: 20px;
    }

    .con-img {
        margin: 20px;
    }

    .carry {
        text-align: center;
        align-items: center;
        align-content: center;
    }

    .register_butt1 {
        align-items: center;
        align-content: center;
        text-align: center;
        margin: 40px;
    }
</style>

<body>
    <header class="top-bar">
        <a href="config.php"><img src="https://bloodbanktoday.com/Imgs/logo.PNG" alt="Donation Logo" class="donation-logo" /></a>
        <span></span>
        <span>Email: <a href="mailto:example@example.com">example@example.com</a></span>

        <section class="register-login">
            <button class="register_butt"><i class="fa-regular fa-hospital"></i><a href="registration_receiver.php">
                    Register
                    Hospital</a></button>
            <button class="register_butt"><i class="fa-regular fa-paper-plane"></i> <a href="registration_hospital.php">Register
                    Receiver </a></button>

            <button class="login_butt"><i class="fa-solid fa-lock"></i><a href="login.php">Login</a></button>
        </section>
    </header>
    <div class="slogan">
        <h1 class="slogan-hea"><i class="fa-solid fa-hand-holding-droplet"></i>The gift of blood is the gift of life<i class="fa-solid fa-hand-holding-droplet"></i></h1>
    </div>

    <div class="blood-lis">
        <div class="blood-lis">
            <h1 class="group-hea">All Blood Groups List</h1>
            <div class="groups-list1">
                <div class="group">
                    <p class="group-text">A-</p>
                </div>
                <div class="group">
                    <p class="group-text">A+</p>
                </div>
                <div class="group">
                    <p class="group-text">AB-</p>
                </div>
                <div class="group">
                    <p class="group-text">AB+</p>
                </div>
            </div>

            <div class="groups-list1">
                <div class="group">
                    <p class="group-text">B-</p>
                </div>
                <div class="group">
                    <p class="group-text">B+</p>
                </div>
                <div class="group">
                    <p class="group-text">O-</p>
                </div>
                <div class="group">
                    <p class="group-text">O+</p>
                </div>
            </div>
        </div>
    </div>
    <div class="carry">
        <i class='fas fa-people-carry carry' style='font-size:80px;color:red'></i>
    </div>
    <div class="question">
        <div class="con-img">
            <img src="https://st2.depositphotos.com/2952437/7330/v/380/depositphotos_73301133-stock-illustration-donate-blood-motivation-information-poster.jpg" alt="blood" class="donar-img" />
        </div>
        <div class="img-text">
            <h1>Why Should donate blood?</h1>
            <p>About 328 million people currently live in the U.S. Each year,
                approximately 6.8 million people in the U.S donate blood. Annually, this adds up to about 13.6
                million units of whole blood collected for donation in the U.S.
                The Red Cross provides about 40% of our nation’s blood and blood
                cell components to donors. Your blood donations are used for
                patients in need of surgery, cancer treatment and transfusions
                for blood loss from traumatic injuries</p>
        </div>
    </div>
    <a href="available_blood_samples.php">
        <div class="register_butt1">
            <button class="register_butt">Available_blood_samples</button>
        </div>
    </a>

</body>

</html>