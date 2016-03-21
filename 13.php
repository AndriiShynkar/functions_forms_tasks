<?php
/**
 * Created by PhpStorm.
 * User: chester
 * Date: 21.03.2016
 * Time: 21:02
 */

/*13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко
черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня
груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';<br>

Подсчитайте, сколько раз каждый фрукт встречается в этой строке.
Выведите  в виде списка в порядке уменьшения количества:

Пример вывода:<br>
яблоко – 12<br>
    черешня – 8<br>
    груша – 5<br>
    слива - 3<br>*/

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

function numberElementOfString ($string){
    $array_string = explode(" ", $string);
    $array_fruits = [];
    $array_number = [];
    foreach ($array_string as $key => $item) {
        if (in_array($item, $array_fruits) != true){
            array_push($array_fruits, $item);

        }
    }

    for ($i=0; $i < count($array_fruits); $i++){
        $number = 0;
        for ($j=0; $j<count($array_string); $j++){
            if ($array_fruits[$i] == $array_string[$j]){
                $number++;
            }
        }
        array_push($array_number, $number);

    }
    $array_result = array_combine($array_fruits, $array_number);
    arsort($array_result);

    foreach ($array_result as $key => $item) {
        echo "$key - $item  <br>";

    }
    return 0;
}

numberElementOfString($string);

