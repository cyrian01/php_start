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
function mult($m){
    $res="";
    for($i=1; $i<=10; $i++){
        $res=$res.' '.$m.' * '.$i.' = '.$m*$i.'<br>';
    }
    return $res;
}

    $v1=4;
    $v2=7;
    $b='<br>';
 /*   compar($v1,$v2);
    echo $b;
    echo $b; */
    $v3=$v1;
    $v1=$v2;
    $v2=$v3;
   /* echo $v1;
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
    echo $b;
    echo test(4,4);
    echo $b;
    echo $b;
    echo mult(2); */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
        <div class="jumbotrom header text-center">
            <h1>Table de Multiplication</h1>
        </div>
        <div class="container-fluid">
                <div class="row">
                <?php 
                    for($i=2; $i<=25; $i++){
                        echo '<div class="col-md-2 table1 text-center"><br>';
                        echo 'Table '.$i.'<br>';
                        echo mult($i);
                        echo '</div>'; 
                    }
                ?>
                </div>
        </div>

</body>
