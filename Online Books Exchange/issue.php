<?php
include_once './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $book_name = $_POST['book_name'];
    $author = $_POST['author'];
    $publication = $_POST['publication'];

    // Insert the issue record
    $insert_sql = "INSERT INTO `issue` (Name, Email, `Book Name`, Author, Publication) VALUES ('$name', '$email', '$book_name', '$author', '$publication')";

    if (mysqli_query($conn, $insert_sql)) {
        // Delete the corresponding requested book record
        $delete_sql = "DELETE FROM `requestedbook` WHERE `Book Name` = '$book_name' AND `Author` = '$author' AND `Publication` = '$publication'";
        $delete_sql_php2add = "DELETE FROM `php2add` WHERE `Book Name` = '$book_name' AND `Author` = '$author' AND `Publication` = '$publication'";
        
        if (mysqli_query($conn, $delete_sql) && mysqli_query($conn, $delete_sql_php2add)) {
            echo "Book issued and request deleted successfully!";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $insert_sql . "<br>" . mysqli_error($conn);
    }
}
?>
