<?php
    //변수
    $a=3;
    echo $a;
    // - 변수 이름 앞에 $
    // - 대소문자 구별 O
    // - 영문 대소문자, 숫자, 밑줄만 가능
    // - $바로 뒤 숫자 불가능
    // - 예약어는 사용X
    // 변수의 자료형 및 내용 정리
    // integer 정수 
    // float, double 부동 소수점
    // string 문자열
    // boolean 논리값
    // object 객체
    // array 배열
    // null 널
    $var_int = 150;
    echo "$var_int <br>";

    $var_float = 3.141592;
    echo "$var_float <br>";

    $var_char = "웹언어";
    echo "var_char";

    $var = 123;
    echo gettype($var); //변수의 자료형을 리턴
    echo "<br>";
    $var = 38.52;
    echo gettype($var);
    echo "<br>";
    $a = "동양미래대학교";
    $b = "컴퓨터정보공학과";
    $grade = 1;
    $class = "PC";
    echo $a.$b;
    echo "<br>";
    echo $grade."학년".$class."반"; 

    // 변수 이름 뒤에 문자열을 나열하면 어디까지가 변수의 이름인지 정확히 구분해 인식하기 어려움
    $a=1;
    echo "{$a}pple";

    //구분 기호 {}를 활용한 출력

    $a = 3;

    echo "변수 a에 저장된 값은 $a<br>";
    echo "변수 a에 저장된 값은 ".$a."입니다.<br>";
    echo "변수 a에 저장된 값은 {$a}입니다.<br>";
    echo "변수 a에 저장된 값은 $a 입니다<br>";

    // 오버플로우 자동 형변환
    //  - 오버플로우 : 표현 가능 범위를 넘어감 = 엉뚱한 값
    //php에서는 표현 범위를 넘어가면 자동으로 형 변환을 해줌
    $num = 9223372036854775807;
    echo "변수 \"\$num\"의 출력 결과 : ";
    var_dump($num);  //선언된 변수의 데이터형과 값을 출력
    echo "<br><br><br>";

    $num += 1;
    echo "변수 \"\$num\"의 출력 결과 : ";
    var_dump($num);

    define("PHP", "PHP 수업에 잘 오셨습니다!<br>");
    print PHP;
    echo php;
    define("PHP", "php 수업<br>",true);

    echo php;
    echo Php;
    echo PHP;

    const Z="Hi!";
    echo Z;
    //Z = 3; //상수는 재선언이 불가능함
    echo z; // 대, 소문자를 구분함

    //가변 변수(variable variables)
    //가변 변수 : 변수의 타입 외 변수의 이름을 동적으로 변경할 수 있다
    // 변수에 저장된 값이 다른 변수의 이름으로 변신한다


    $PHP = "HTML";
    $HTML = "CSS";
    $CSS = "JavaScript";

    echo $PHP;
    echo $$PHP;
    echo $$$PHP;

    //산술 연산자
    //C, JAVA와 동일함
?>
    