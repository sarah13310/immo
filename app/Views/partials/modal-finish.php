<div class="modal-finish ">
        <div class="close" id="close"><i class="fa fa-xmark"></i></div>
        <div class="caption">Terminer votre inscription</div>
        <form id="form" class="form2" name="form_add" method="post">

            <div class="form-control">
                <input id="name" type="text" placeholder="Nom" value="<?= $name ?>" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>error message</small>
            </div>
            <div class="form-control">
                <input id="firstname" type="text" placeholder="Prénom" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>error message</small>
            </div>
            <div class="small2">Assurez-vous qu'il correspond au nom figurant sur votre pièce d'identité.</div>
            <div class="form-control">
                <label>Date de naissance<i class="fa fa-light fa-circle-question"></i></label>
                <div class="flex">
                    <select id="day">
                        <option>Jour</option>
                    </select>
                    <select id="month">
                        <option>Mois</option>
                    </select>
                    <select id="year">
                        <option>Année</option>
                    </select>
                </div>
            </div>
            <div class="form-control">
                <input id="mail" readonly type="text" placeholder="Nom" value="<?= $email ?>" />
            </div>
            <div class="small2">
                Nous vous enverrons les confirmations et les reçus par e-mail.
            </div>
            <div class="small2">
                En cliquant sur <b>Accepter et continuer</b>, j'accepte les <a>Conditions générales</a>, les <a>Conditions de service relatives aux paiements</a>, la Politique de non-discrimination et je reconnais avoir pris connaissance de la <a>Politique de confidentialité</a> d'Immo.
            </div>
            <button class="button-red mb-3">Accepter et Continuer</button>
            <hr>
            <small>
                <p class="subtitle">Immo vous enverra des offres réservées aux membres, des idées, des e-mails promotionnels et des notifications push. Vous pouvez désactiver cette option à tout moment dans les paramètres de votre compte ou directement à partir de la notification promotionnelle.</p>
            </small>

            <div class="flex">
                <input type="checkbox"><label><small>&nbsp;Je ne souhaite pas recevoir de messages promotionnels d'Immo.</small></label>
            </div>
        </form>
    </div>
  