
<?php
define("USERNAME", "root");
define("PASSWORD","toor");
function login($username, $password) {
    if($username == USERNAME && $password == PASSWORD){
        return true;
    }else{
        return false;
    }
}

?>
<!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>PYLO – mots en image</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style_class.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

</head>

<body id="home">




<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                    <h1>Connexion à PYLO </h1>
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="abcd@example.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Mot de passe</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="mot de passe">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Afficher mot de passe</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Se connecter">
                    </form>
                    <a href="index.html" class="forget" data-toggle="modal" data-target=".forget-modal">Retour</a>
                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
    document.getElementById("btn-login").addEventListener("click", function(){
      var usenrame = document.getElementById('email').value;
       var password = document.getElementById('key').value;
       $.post('validate.php', {user:usenrame, pass:password},
        function(data){
           if(data == "1"){
                 window.location.replace('recherche.html');
           }else{
                alert("L'email ou le mot de passe est incorect");
                document.getElementById('key').value = "";
                document.getElementById('email').value ="";
           }
        });
    });
</script>
</body>

</html>
