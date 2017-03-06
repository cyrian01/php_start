<?php
function compar($p1,$p2){
    
    if($p1<$p2){
        echo $p1,' est inférieur de ',$p2;
    }
    else{
        echo $p1,' est superieur de ',$p2;
    }
}
function addition($p1,$p2){
    echo 'Somme de ',$p1,' et ',$p2,' est ',$p1+$p2;
}
function soustract($p1,$p2){
    echo $p1,' - ',$p2,' = ',$p1-$p2;
}
function test($p1,$p2){
    if(is_numeric($p1) and is_numeric($p2)){
        return $p1+$p2;
    }
    else{
        return $p1." ".$p2;
    }
}

    $v1=4;
    $v2=7;
    $b='<br>';
    compar($v1,$v2);
    echo $b;
    echo $b;
    $v3=$v1;
    $v1=$v2;
    $v2=$v3;
    echo $v1;
    echo $b;
    echo $b;
    echo $v2;
    echo $b;
    echo $b;
   
    compar($v1,$v2);
    echo $b;
    echo $b;
    addition($v1,$v2);
    echo $b;
    echo $b;
    soustract($v1,$v2);
    echo $b;
    test(4,4);
?>
