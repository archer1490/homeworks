<?php


   for ($i = 100; $i <= 200; $i++) {
    $result = isprime($i);
       if($result) {
           echo $i.'<br>';
           break;
       }


}


function isprime($n){
    if($n==1) // 1 - не простое число
        return false;
    // перебираем возможные делители от 2 до sqrt(n)
    for($d=2; $d*$d<=$n; $d++){
        // если разделилось нацело, то составное
        if($n % $d==0)
            return false;
    }
    // если нет нетривиальных делителей, то простое
    return true;
}