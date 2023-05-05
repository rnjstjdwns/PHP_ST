<?php
    const DB_HOST = "localhost";
    const DB_USERID = "root";
    const DB_PASSWORD = "1234";

    $db = mysqli_connect(DB_HOST, DB_USERID, DB_PASSWORD);
    if($db) {
        echo "접속에 성공했습니다";
    } else {
        echo "접속이 안 됩니다<br>";
        echo "계정 또는 비밀번호를 확인 하세요.";
    }
    if($db) {
        mysqli_close($db);
        echo "<br>DB 연결을 끊었습니다.";
    }
?>