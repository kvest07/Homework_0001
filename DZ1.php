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
    $krask = VSEGO-FLOMASTER-KARANDASH;
echo "Дано:<br/>
    Всего рисунков - 80<br/>
    Рисунков фломастерами - 23<br/>
    Рисунков карандашами - 40<br/>
    Рисунков красками - ?<br/>";
echo "<br/>Решение<br/><br/>";
echo VSEGO.'-'.FLOMASTER.'-'.KARANDASH.'='.$krask;
;

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
    padding: 5px;
    width: 150px;
    border: 1px  solid black;
   }
  </style>";
$bmw = ['name'=>"BMW ", 'model'=>'X5', 'speed'=>120, 'doors'=>5,'year'=>"2015 <br>"];
$toyota = ['name'=>"Toyota ",'model'=>'Camry', 'speed'=>240, 'doors'=>5,'year'=>"2018<br>"];
$opel = ['name'=>"Opel ",'model'=>'Astra', 'speed'=>90, 'doors'=>3,'year'=>"1981 <br>"];
echo "<div>";
$cars = array($bmw, $toyota, $opel);
foreach ($cars as $elem) {
    echo $elem['name']. ' <br>'.$elem['model']. ' '.$elem['speed']. ' '.$elem['doors']. ' '.$elem['year'];
}
echo "</div>";
echo "<br/>";


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
