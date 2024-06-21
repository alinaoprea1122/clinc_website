<?php
global $db_con;
require_once '../controller/config/db_config.php';

if (isset($_GET['id'])) {
    $id_stiri = $_GET['id'];
    $delete_query = "DELETE FROM stirile_noastre WHERE id_stiri='$id_stiri'";
    if (mysqli_query($db_con, $delete_query)) {
        header('Location: news_blog.php');
    } else {
        echo "Error: " . $delete_query . "<br>" . mysqli_error($db_con);
    }
} else {
    header('Location: news_blog.php');
}
?>
