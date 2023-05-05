<?php
    echo "아이디: {$_POST['id']} <br>";
    echo "사용 가능 기술 : ";
    if(!empty($_POST['skill'])) {
        foreach($_POST['skill'] as $value) {
            echo $value."&nbsp;&nbsp;&nbsp;";
        }
    }
    else {
        echo "없음";
    }
?>