<?php
/**
С помощью конструкции switch выведите фразу: "Это рабочий день", если значение переменной day попадает
 * в диапазон чисел от 1 до 5 (включительно).</p>
 */
include '9.php';
   // echo $day;
switch ($day){
    case ($day >=1 and $day <=5 ):
        echo "Это рабочий день";
        break;
    case ($day ==6 or $day ==7 ):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;        
}