<h1>게시판</h1>
<?php
    $db = mysqli_connect("localhost","root","1234","dongyang");

    $query = "select * from board";
    $result = mysqli_query($db, $query);
?>
<table border = 1>
    <tr>
        <th>NO</th>
        <th>제목</th>
        <th>작성자</th>
        <th>작성일</th>
        <th>조회수</th>
    </tr>
</table>