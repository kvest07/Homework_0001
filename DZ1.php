<?php
echo "<br/><br/>Задача №1<br/><br/>";
$name = 'Павел';
$age = 21;
    echo "Меня зовут $name <br/>";
    echo "Мне $age год <br/>";
    echo "“!|\/’”\ <br/>";
    echo "<br/>===================================================";

echo "<br/><br/>Задача №2<br/><br/>";
    const VSEGO = 80;
    const FLOMASTER = 23;
    const KARANDASH = 40;
    const KRASK = VSEGO-FLOMASTER-KARANDASH;
echo "Дано:<br/>
    Всего рисунков - 80<br/>
    Рисунков фломастерами - 23<br/>
    Рисунков карандашами - 40<br/>
    Рисунков красками - ?<br/>";
echo "<br/>Решение<br/><br/>";
echo VSEGO;
echo "-";
echo FLOMASTER;
echo "-";
echo KARANDASH;
echo '=';
echo KRASK;

echo "<br/>===================================================";
echo "<br/><br/>Задача №3<br/><br/>";
echo " Мне $age год <br/>";

if ($age>=18 and $age<=65) {
    echo "Вам еще работать и работать";
} elseif ($age>65) {
    echo "Вам уже пора на пенсию";
} elseif ($age<=17 and $age>=1) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}

echo "<br/>===================================================";
echo "<br/><br/>Задача №4<br/><br/>";
$day = 6;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}

echo "<br/>===================================================";
echo "<br/><br/>Задача №5<br/><br/>";

echo"<style>
   div {
    width: 200px;
    border: 2px solid black;
    padding: 10px;
   }
  </style>";


$bmw = ['name'=>"BMW", 'model'=>"X5", 'speed'=>120, 'doors'=>5,'year'=>2015];
$toyota = ['name'=>"Toyota",'model'=>'Carina', 'speed'=>'100', 'doors'=>'4','year'=>1999];
$opel = ['name'=>"Opel",'model'=>'Astra', 'speed'=>'90', 'doors'=>'3','year'=>'2004'];

$cars = [
    "BMW" => $bmw,
    "TOYOTA" => $toyota,
    "OPEL" => $opel
];

echo "<div>";
echo $cars["BMW"]['name'];
echo '<br/>';
echo $cars["BMW"]['model'].' ';
echo $cars["BMW"]['speed'].' ';
echo $cars["BMW"]['doors'].' ';
echo $cars["BMW"]['year'].' ';

echo $cars["TOYOTA"]['name'];
echo '<br/>';
echo $cars["TOYOTA"]['model'].' ';
echo $cars["TOYOTA"]['speed'].' ';
echo $cars["TOYOTA"]['doors'].' ';
echo $cars["TOYOTA"]['year'].' ';

echo $cars["OPEL"]['name'];
echo '<br/>';
echo $cars["OPEL"]['model'].' ';
echo $cars["OPEL"]['speed'].' ';
echo $cars["OPEL"]['doors'].' ';
echo $cars["OPEL"]['year'].' ';

echo "</div>";


echo "<br/>===================================================";
echo "<br/><br/>Задача №6<br/><br/>";
/*
как можно будет понять,
решение выполнил на основе
решения в интернете;
*/

//1+1-четное 3+3-четное 2+2-четное
echo"<table border='1'>";
for ($i=1; $i<=10; $i++) {
    echo "<tr>";

    for ($h=1; $h<=10; $h++) {
        $value=$i*$h;
        if ($value%2==0) {
            if ($h%2==0) {
                echo "<td>(".$value.")</td>";
            } if ($h%2==1) {
                echo "<td>[".$value."]</td>";
            }
        } else {
            echo "<td>".$value."</td>";
        }
    }
    echo"</tr>";
} ;
echo"</table>";
