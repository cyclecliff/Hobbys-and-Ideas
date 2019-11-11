<?php

$test1 = array(
    "_________________  ", //1
    "|               |  ", //2
    "|A              |  ", //3
    "|               |  ", //4
    "|               |  ", //5
    "|               |  ", //6
    "|       A       |  ", //7
    "|               |  ", //8
    "|               |  ", //9
    "|               |  ", //10
    "|              A|  ", //11
    "|_______________|  ", //12
);
$test2 = array(
    "_________________  ", //1
    "|               |  ", //2
    "|4              |  ", //3
    "|               |  ", //4
    "|               |  ", //5
    "|               |  ", //6
    "|       4       |  ", //7
    "|               |  ", //8
    "|               |  ", //9
    "|               |  ", //10
    "|              4|  ", //11
    "|_______________|  ", //12
);

//hoe maak ik een nieuwe array die uit 2 of meer gecombineerde arrays, bestaat?
// like so | | |
//         \/\/\/
//hier kan ook weer een nieuwe bij
$test4 = array(
    "_________________  _________________  ", //0
    "|               |  |               |  ", //1
    "|4              |  |A              |  ", //2
    "|               |  |               |  ", //3
    "|               |  |               |  ", //4
    "|               |  |               |  ", //5
    "|       4       |  |       A       |  ", //6
    "|               |  |               |  ", //7
    "|               |  |               |  ", //8
    "|               |  |               |  ", //9
    "|              4|  |              A|  ", //10
    "|_______________|  |_______________|  ", //11
);

//for($i=0; $i<11; $i++){
//    $test2[$i] += $test1[$i]; //werkt nie
//}
//$test2["2"] += $test1["0"]; //attempt to add a value of one array to the other
foreach ($test1 as $key1 => $regel1) {
    $regel1 += $test2[$key1];
}
//}
//$test = array_merge($test2, $test1);
//print_r($test);
//print(implode("\n", $test2));
//print("\n\n");
//print(implode("\n", $test1));
//print(implode("\n", $test1).implode("\n",$test2));
/*
    hoe voeg ik de tweede value toe aan de array[], <"value 1  "> -wordt- <"value 1   value 2"> en dat voor alle keys
*/
