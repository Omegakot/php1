<?php
// 1 задание
$a = rand( -1, 5 );
$b = rand( -3, 10 );
echo "{$a}, {$b}<br>";
if( $a >= 0 && $b >= 0 ) {
    echo "разность <br>";
}elseif ( $a < 0 && $b < 0 ){
    echo "произведение <br>";
}else{
    echo "сумма <br>"; 
}
// 2 задание
$c = rand( 0,14 );
echo "<br>";
echo " начальное {$c}<br>";
echo "<br>";
echo "вывод чисел: <br>";
switch($c){
    case 0:
        echo "0<br>";
    case 1:
        echo "1<br>"; 
    case 2:
        echo "2<br>";    
    case 3:
        echo "3<br>";     
    case 4:
        echo "4<br>";    
    case 5:
        echo "5<br>";     
    case 6:
        echo "6<br>";
    case 7:
        echo "7<br>";
    case 8:
        echo "8<br>";
    case 9:
        echo "9<br>";
    case 10:
        echo "10<br>";
    case 11:
        echo "11<br>";
    case 12:
        echo "12<br>";
    case 13:
        echo "13<br>"; 
    case 14:
        echo "14<br>";
    case 15:
        echo "15<br>";           
}
//3 задание
function plus( $a , $b ){
    return $a + $b;
}
function minus( $a , $b ){
    return $a - $b;
}
function divide( $a , $b ){
    if ( $b == 0 ){
        echo " ошибка деления на ноль ";
        exit;
    }
    return $a / $b;
}
function multi( $a , $b ){
    return $a * $b;
}
echo "<br>";
echo plus(1,5);
echo "<br>";

// 4 задание 
function mathOperation( $arg1, $arg2, $operation ){
    switch( $operation ){
        case plus:
            echo plus( $arg1 ,$arg2 );
            break;
        case minus:
            echo minus( $arg1, $arg2 );
            break;
        case divide:
            echo divide( $arg1, $arg2 );
            break;
        case multi:
            echo multi( $arg1, $arg2 );
            break;
        default:
            echo " нет такой функции ";
            break;
          
    }

}

echo "<br>";
mathOperation( 6, 0, divide );

