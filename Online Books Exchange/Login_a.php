<!DOCTYPE html>
<head>
<link
        rel="stylesheet";
        href="./style.css";
    />
    <style>
        .f1{
            padding: 10px 30px;
            padding-left: 410px;
            padding-top: 120px;
            background-image: url("./image/background3\ \(2\).jpeg");
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .admin{
            border: 5px solid black;
            border-radius: 20px;
            display: flex;
            display: inline-block;
            padding-left: 80px;
            padding-right: 80px;
            padding-bottom: 20px;
        }
        .para p{
            padding: 3px 20px;
            margin: 1px 20px;
            text-align: center;
        }
        .admin input{
            width: 400px;
            height: 20px;
        }
        .admin a{
            border: 1px solid black;
            text-decoration: none;
            border-radius: 10px;
            padding: 2px 45px;
            margin:10px 140px;
            display: flex;
            justify-content: space-evenly;
            color: black;
        
        }
        h1{
            padding-left: 200px;
            margin: 5px 5px;
        }
        h2{
            font-size: 20px;
        }
    </style>
    <body>
    <div class="books">
        <div class="base" id="base1">
            <img src="./image/share.png">
        </div>
        <div class="base" id="base2">
            <ul >
                <li><a href="./website1.php">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Log in</a>
                    <ul class="navbar">
                        <li><a href="./admin_login.php">ADMIN</a></li>
                        <li><a href="./User.php">USER</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="base" id="base3">
            <input type="text" placeholder="Search">
        </div>
    </div>

    <div class="f1">
        <h1><strong>Admin LOGIN</strong></h1>
        <form class="admin" > 
            <p class="para"><h3>Name:</h3><input type="text" id="name" placeholder="Name"/></p>
            <p class="para"><h3>Email Id:</h3><input type="text" id="email" placeholder="Email Id"/></p>
            <p class="para"><h3>Password:</h3><input type="text" id="pass" placeholder="Password"/></p>
            <input type="button" id="submit" value="Submit"/><br><br>
            <input type="button" id="displaybtn" value="VIEW"/><br>
        </form>
    </div>
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="./Login.js"></script>
    </body>
</head>