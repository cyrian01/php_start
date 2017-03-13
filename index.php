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
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 table1 text-center">
<?php 
    echo "Table 2";
    echo $b;
    echo $b;
    echo mult(2);
    echo $b;
    echo $b;
    echo "Table 6";
    echo $b;
    echo mult(6);
?>
                    </div>
                    <div class="col-md-3 table2 text-center">
<?php 
    echo "Table 3";
    echo $b;
    echo $b;
    echo mult(3);
    echo $b;
    echo $b;
    echo "Table 7";
    echo $b;
    echo mult(7);
?>
                    </div>
                    <div class="col-md-3 table3 text-center">
<?php 
    echo "Table 4";
    echo $b;
    echo $b;
    echo mult(4);
    echo $b;
    echo $b;
    echo "Table 8";
    echo $b;
    echo mult(8);
?>
                    </div>
                    <div class="col-md-3 table4 text-center">
<?php 
    echo "Table 5";
    echo $b;
    echo $b;
    echo mult(5);
    echo $b;
    echo $b;
    echo "Table 9";
    echo $b;
    echo mult(9);
?>
                    </div>
                </div>
        </div>

</body>
