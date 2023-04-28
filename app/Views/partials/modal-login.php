<div class="black-screen collapse">
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
</div>