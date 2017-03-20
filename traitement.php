<?php
/*if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
    



$nbr=$_POST["nombre"];
echo $nbr;
}
else{
echo "Veuillez saisir nombre";
} */
//echo $_POST["nombre"];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=$_POST["nombre"];
    if(isValid($nombre)){
    $nbr=validInput($nombre);
    echo mult($nbr);
    }
    else{
    echo "error nombre";
    }
}
function validInput($val){
    return htmlspecialchars(stripslashes(trim($val)));
}
function isValid($val){
    $res=false;
    if(!empty($val)&&!is_null($val)){
        $res=true;
    }
    return $res;
}
function mult($m){
    $res="";
    for($i=1; $i<=10; $i++){
        $res=$res.' '.$m.' * '.$i.' = '.$m*$i.'<br>';
    }
    return $res;
}
