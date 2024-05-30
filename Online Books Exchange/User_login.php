<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in</title>
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
</head>
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

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
      $servername = "localhost:3307";
      $username = "root";
      $password = "";
      $database = "pbl";

      $conn = mysqli_connect($servername, $username, $password, $database);
  
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        
        $sql = "INSERT INTO `user` (`Name`, `Email`, `Password`) VALUES ('$name', '$email', '$pass')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your entry has been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>';
            
          }
          else{
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>';
          }
      }

    }

    
?>
    <div class="f1">
        <h1><strong>USER LOGIN</strong></h1>
        <form class="admin" action="/PBL/user_login.php" method="post">
            <p class="para"><h3>Name:</h3><input type="text" placeholder="Enter your name" name="name"></p>
            <p class="para"><h3>Email Id:</h3><input type="text" placeholder="Email Id" name="email"></p>
            <p class="para"><h3>Password:</h3><input type="text" placeholder="Password" name="pass"></p>
            <h2><button type="submit">Submit</button></h2>
        </form>
    </div>

    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>