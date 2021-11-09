<html>
    <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>runtrack2-jour07-job04</title>
    </head>
    <body>
        <div id="container">
            
            <form action="" method="POST">
                <h1>Connexion</h1>
                
                <label> Nom d'utilisateur</label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "utilisateur ou mot de passe incorrect";
                }
                ?>
            </form>
        </div>
        <div id="content">
            <?php
                session_start();

                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    echo "Bonjour $user !";
                }
            ?>
            
        </div>
        <div class ="content">
        <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:login.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    echo "<br>Bonjour $user, vous êtes connectés";
                }
            ?>
        </div>
    </body>
</html>