<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        rel="stylesheet";
        href="./style.css";
    />
    <style>
        .page1{
            padding: 2px 2px;
            margin: 5px 5px;
            display: flex;
            flex-direction: column;
        }
        .page1 li{
            padding: 5px 2px;
            margin: 30px 5px;
            border: 2px solid black;
            height: 40px;
            width:300px ;
            list-style: none;
            background-color: rgb(255, 0, 170);
        }
        .page1 li a{
            display: flex;
            justify-content: space-evenly;
            text-decoration: none;
            color: black;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="books">
        <div class="base" id="base1">
            <img src="./image/share.png">
        </div>
        <div class="base" id="base2">
            <ul>
                <li><a href="./website1.php">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Log in</a>
                    <ul class="navbar">
                        <li><a href="./Admin_Page.php">ADMIN</a></li>
                        <li><a href="./User.php">USER</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="base" id="base3">
            <input type="text" placeholder="Search">
        </div>
    </div>
    <div class="page1">
        <ul>
            <li><a href="./Addbook_admin.php">ADD BOOK</a></li>
            <li><a href="./Requestedbook.php">REQUESTED BOOKS</a></li>
            <li><a href="./userdisplay.php">STUDENT RECORD</a></li>
            <li><a href="./displayissuebook.php">ISSUE BOOK</a></li>
            <li><a href="./website1.php">LOGOUT</a></li>
        </ul>
    </div>
</body>
</html>