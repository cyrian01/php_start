<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video.Net</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
		<div class="header">
		<a href="index.php"><h1><img src="./assets/image/00.ico" class="logo"/>VIDEO.NET</h1></a>
		</div>
        <div class="navbar navbar-renverse">
             <div class="container-fluid">

                    <ul class="nav navbar-nav">
                        <li class="navbarbtns"><a href="index.php">Accueil</a></li>
                        <li class="navbarbtns"><a href="#">Nouveautés</a><li>
                        <li class="navbarbtns"><a href="#">Les plus téléchargés</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>

             </div>
        </div>
        <div class="container-fluid"> 
                <div class="row">
                    <div class="col-sm-3 log">
                         <form>
                            <div class="form-group">
                                <input type="text" name="pseudo" placeholder="Pseudo" id="psd" class="form-control"/>
                                <label for="psd">Votre pseudo</label>
                                <input type="password" name="password" placeholder="Mot de passe" id="pass" class="form-control"/>
                                <label for="pssword">Votre mot de passe</label>
                                <input type="submit" value="connexion" class="form-control"/>
                            </div> 
                        </form>
                    </div>
                </div>
        </div>
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>
