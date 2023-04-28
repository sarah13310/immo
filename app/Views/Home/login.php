<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Create account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() . "/css/login.css" ?>">
    <script defer type="text/javascript" src="<?= base_url() . "/js/login.js" ?>"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v16.0&appId=543016527981563&autoLogAppEvents=1" nonce="KmVD5Cei"></script>

</head>

<body>
    <div class="card-login">
        <div class="close"><i class="fa fa-xmark"></i></div>
        <div class="caption">Connexion ou inscription</div>
        <form id="form_login" class="form" name="form_login" method="post">
            <h2>Bienvenue sur Immo</h2>
            <div class="form-control">
                <input id="mail" type="text" placeholder="Adresse e-mail" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>error message</small>
            </div>
            <button class="button-red">Continuer</button>
            <div class="container-barre">
                <div class="barre">ou</div>
            </div>
        </form>
        <div class="container-social">
            <a href="<?= $auth ?>" role=button class="btn" id="google"><i class="ic fab fa-google"></i> Continuer avec Google</a>
            <a href="<?= $auth_fb ?>" role=button class="btn" id="facebook"><i class="ic fab fa-facebook"></i> Continuer avec Facebook</a>
              
        </div>

    </div>

    <script>
    </script>
</body>

</html>