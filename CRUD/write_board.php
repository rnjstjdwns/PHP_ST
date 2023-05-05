<?php
    $db = mysqli_connect("localhost","root","1234","dongyang");

    $title = $_POST["title"];
    $writer = $_POST["writer"];
    $contents = $_POST["contents"];

    $query = "INSERT INTO board(title, writer, contents, write_date, view_count) values('".$title."','".$writer."','".$contents."',now(), 0);";

    mysqli_query($db, $query);

    mysqli_close($db);
    header("location:./board.php");
?>