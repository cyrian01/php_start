<?php 
    require "traitement.php";
    
?>
<!DOCTYPE html> 
<html lang="en">
 <head>     
        <meta charset="UTF-8">    
        <title>Formulaire</title>     
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">   
        <link rel="stylesheet" href="./assets/css/font-awesome.min.css">   
        <link rel="stylesheet" href="./assets/css/style.css"> 
 </head>
 <body>
    <div class="container">
        <div class="row">
            <div class="col-md-2 formu">
            <form class="form-group" method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
                    <label for="nbr">Nombre à saisir</label>
                    <input type="number" name="nombre" placeholder="Saisi le nombre" id="nb" class="form-control"/>
                    <input type="submit" name="valid" value="Valider" id="val" class="btn-success form-control"/>
                </form>
            </div>
        </div>
    </div>  
</body>
</html>
