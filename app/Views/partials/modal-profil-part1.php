<div class="black-screen">
    <div class="modal-complete-part1">
        <div class="close" id="close"><i class="fa fa-chevron-left"></i></div>
        <div class="caption">Créez votre profil</div>
        <form id="form3" class="p2" name="form_complete1" method="post" onsubmit="return sendCode();">
            <div class="small center fz7">ÉTAPE 1 SUR 2</div>
            <h2>Confirmez votre numéro de téléphone</h2>
            <p class="center">De cette façon, les hôtes, les voyageurs ou Airbnb pourront vous contacter.</p>
            <div class="form-control">
                <select id="tel-int">
                </select>
            </div>
            <div class="form-control">
                <input id="tel" type="text" placeholder="Numéro de téléphone" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>error message</small>
            </div>
            <p>Nous vous appellerons ou vous enverrons un SMS pour confirmer votre numéro. Les frais standards d'envoi de messages et d'échange de données s'appliquent.</p>
            <hr class="mt-2 mb-3">
            <div class="center">
                <input type="checkbox"><label><small>&nbsp;M'envoyer un SMS contenant un lien vers l'application gratuite Immo.</small></label>
            </div>
            <button id="validTel" class="btn btn-black mb-2">Continuer</button>
            <a class="center mt-2"><b>Je le ferai plus tard</b></a>
        </form>
    </div>
</div>