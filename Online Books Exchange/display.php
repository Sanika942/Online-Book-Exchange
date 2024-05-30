<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./style.css" />
    <style>
        table, tr, th, td {
            border: 1px solid black;
        }
        .page1 {
            padding: 2px 2px;
            margin: 5px 5px;
            display: flex;
            flex-direction: column;
        }
        .page1 li {
            padding: 5px 2px;
            margin: 30px 5px;
            border: 2px solid black;
            height: 40px;
            width: 300px;
            list-style: none;
            background-color: rgb(255, 0, 170);
        }
        .page1 li a {
            display: flex;
            justify-content: space-evenly;
            text-decoration: none;
            color: black;
            font-size: 25px;
        }
        .abook {
            background-color: pink;
            margin-top: -20px;
            margin-bottom: 1px;
        }
        .side {
            border: 2px solid black;
            margin-top: -380px;
            margin-left: 407px;
        }
        .abook p {
            font-size: x-large;
            padding: 5px 5px;
            margin: 20px 20px;
            padding-left: 300px;
        }
        .heading h2 {
            font-size: xx-large;
            text-align: center;
            border: 1px solid black;
        }
        .heading {
            text-align: center;
            border: 1px solid black;
            background-color: rgb(255, 0, 165);
        }
        table {
            padding-left: 250px;
            font-size: large;
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
    <div class="page1">
        <ul>
            <li><a href="./display.php">AVAILABLE BOOKS</a></li>
            <li><a href="./Add_books.php">ADD BOOKS</a></li>
            <li><a href="./Request.php">REQUEST FOR BOOKS</a></li>
            <li><a href="./website1.php">LOGOUT</a></li>
        </ul>
    </div>
    <div class="side">
        <div class="heading"><h1>AVAILABLE BOOKS</h1></div>
        <div class="abook">
            <table>
                <tr>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Publication</th>
                    <th>Branch</th>
                    <th>Buy Now</th>
                </tr>
                <?php
                include_once './config.php';
                $sql = "SELECT * FROM `php2add`";
                $db = mysqli_query($conn, $sql);
                if (mysqli_num_rows($db) > 0) {
                    while ($row = mysqli_fetch_assoc($db)) {
                        echo "
                        <tr>
                            <td>".$row['Book Name']."</td>
                            <td>".$row['Author']."</td>
                            <td>".$row['Publication']."</td>
                            <td>".$row['Branch']."</td>
                            <td><a href='./buy.php?book_name=".$row['Book Name']."&author=".$row['Author']."&publication=".$row['Publication']."' class='buy-now-button'>Buy Now</a></td>
                        </tr>
                        ";
                    }
                }
                ?>
            </table>
        </div>
    </div>

    <script src="./js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="./index.js"></script>
</body>
</html>