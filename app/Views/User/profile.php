<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() . "css/profile.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "css/checkbox.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "css/common.css" ?>">
</head>

<body>
    <div class="modal-cookies">
        <div class="modal-header">Votre vie privée &nbsp;<i class="fa-solid fa-lock"></i></div>
        <p>
            Nous utilisons des cookies et d'autres technologies similaires afin de personnaliser notre contenu, mesurer l'efficacité de nos publicités et améliorer leur pertinence, ainsi que proposer une meilleure expérience. En cliquant sur OK ou en activant une option dans Préférences de cookies, vous acceptez les conditions énoncées dans notre <a>Politique en matière de cookies</a>. Pour modifier vos préférences ou retirer votre consentement, vous devez mettre à jour vos Préférences de cookies.
        </p>
        <button class="btn btn-black">OK</button>
        <button class="btn">Préférences de cookies</button>
        <div class="p2 center"><a>Continuer sans accepter</a></div>
    </div>
    <div class="modal-param ">
        <div class="header">Votre confidentialité</div>
        <div class="content">
            <p>Lorsque vous consultez un site web, certaines informations peuvent être stockées ou récupérées, principalement sous la forme de cookies. Ces informations peuvent être relatives à vos préférences, à l'appareil que vous utilisez ou vous concerner personnellement. Elles sont principalement utilisées pour faire en sorte que le site fonctionne conformément à vos attentes. Elles ne permettent généralement pas de vous identifier directement, mais elles peuvent vous offrir une expérience de navigation plus personnalisée sur le site. Comme nous respectons votre droit à la vie privée, vous pouvez choisir de ne pas autoriser certains types de cookies. Cliquez sur les différents en-têtes de catégorie pour en savoir plus et modifier nos paramètres par défaut. Sachez toutefois que le blocage de certains types de cookies peut avoir un impact sur votre utilisation du site et sur les services que nous pouvons offrir.</p>
            <h2>Cookies strictement nécessaires</h2>
            <p>Ces cookies sont nécessaires au fonctionnement du site web et ne peuvent être désactivés dans nos systèmes. Ils sont généralement uniquement déposés en réponse à des actions de votre part correspondant à une demande de services, comme définir vos préférences de confidentialité, vous connecter ou remplir des formulaires. Vous pouvez configurer votre navigateur pour qu'il bloque ces cookies ou vous signale leur présence, mais certaines parties du site risquent alors de ne pas fonctionner.</p>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Tout refuser</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Sécurité</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Immo</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Paramètres de langue</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Expérience utilisateur</div>
            </div>
            
            <h2>Cookies de performance</h2>
            <p>Ces cookies nous permettent de compter le nombre de visites et de sources du trafic, afin de mesurer et d'améliorer les performances de notre site. Ils nous aident à savoir quelles pages sont plus ou moins fréquentées, et de quelle manière les visiteurs naviguent à travers le site. Si vous n'autorisez pas ces cookies, ils ne pourront pas être utilisés pour améliorer les performances du site.</p>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Tout activer</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Analyse Immo</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">data-net</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Inspectlet</div>
            </div>
            
            <h2>Cookies fonctionnels</h2>
            <p>Ces cookies permettent d'améliorer les fonctionnalités et la personnalisation de votre expérience, notamment les vidéos et les chats en ligne. Ils peuvent être paramétrés par nous ou par des prestataires tiers dont nous avons ajouté les services à nos pages. Si vous n'autorisez pas ces cookies, certaines ou l'ensemble de ces fonctionnalités peuvent ne pas fonctionner correctement.</p>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Tout activer</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Fonctionnalités Immo</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">compte-google</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Fonctionnalités Facebook</div>
            </div>
            
          
            <h2>Cookies de ciblage</h2>
            <p>Ces cookies sont déposés sur notre site par nos partenaires publicitaires. Ils peuvent être utilisés par ces entreprises pour établir des profils en fonction de vos centres d'intérêt et vous présenter des publicités pertinentes sur d'autres sites. Ils fonctionnent grâce à l'identification de votre navigateur et de votre appareil uniquement. Si vous n'autorisez pas ces cookies, nos publicités ciblées ne s'afficheront pas sur différents sites web.</p>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">Tout activer</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">bing.com</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">google.com</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">facebook.com</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">linkedin.com</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">twitter.com</div>
            </div>
            <div class="line-under">
                <label class="toggler-wrapper style-1">
                    <input type="checkbox">
                    <div class="toggler-slider">
                        <div class="toggler-knob"></div>
                    </div>
                </label>
                <div class="badge">yahoo.com</div>
            </div>           
            
        </div>
        <div class="footer">
            <button class="btn btn-black">Enregistrer</button>
        </div>
    </div>
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
    <div class="modal-activation">
        <div class="close" id="close-activation"><i class="fa fa-xmark"></i></div>
        <div class="caption">Créer votre profil</div>
        <div class="body-activation">
            <div class="logo"></div>
            <h2>Bienvenue sur Immo</h2>
            <p class="mb-2">Découvrez des locations et des expériences uniques à travers le monde.</p>
            <button class="btn btn-black">Continuer</button>
        </div>
    </div>
    <!-- formulaire du tel -->
    <div class="modal-complete-part1">
        <div class="close" id="close"><i class="fa fa-chevron-left"></i></div>
        <div class="caption">Créez votre profil</div>
        <form id="form3" class="p2" name="form_complete1" method="post">
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
            <button class="btn btn-black mb-2">Continuer</button>
            <a class="center mt-2"><b>Je le ferai plus tard</b></a>
        </form>
    </div>
    <!-- confirmation avec code sms -->
    <div class="modal-complete-part1-1">
        <div class="close" id="close"><i class="fa fa-chevron-left"></i></div>
        <div class="caption">Créez votre profil</div>
        <form id="form3" class="p2" name="form_complete1" method="post">
            <div class="small center fz7">ÉTAPE 1 SUR 2</div>
            <h2>Confirmez votre numéro de téléphone</h2>
            <p class="center">Saisissez le code à 4 chiffres qu'Immo vient d'envoyer :</p>
            <div class="form-control">
                <input type="text" class="code-sms" name="code-sms" id="code-sms" maxlength="4" placeholder="----">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>error message</small>
            </div>
            <p class="center">Nous vous appellerons ou vous enverrons un SMS pour confirmer votre numéro. Les frais standards d'envoi de messages et d'échange de données s'appliquent.</p>
            <hr class="mt-2 mb-3">
            <div class="center">
                <p>Vous n'avez pas reçu de SMS ? &nbsp;&nbsp;<a>Renvoyer</a></p>
            </div>
            <button class="flex btn btn-black btn-short">Continuer</button>
            <a class="center mt-1"><b>Je le ferai plus tard</b></a>
        </form>
    </div>
    <div class="modal-complete-part2">
        <div class="close" id="close"><i class="fa fa-chevron-left"></i></div>
        <div class="caption">Créez votre profil</div>
        <form id="form4" class="p2" name="form_complete2" method="post">
            <div class="small center fz7">ÉTAPE 2 SUR 2</div>
            <h2 class="center ">Ajouter une photo de profil</h2>
            <div class="center logo-void mb-2">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 185px; width: 185px; fill: rgb(221, 221, 221);">
                    <path d="m16 1c8.2842712 0 15 6.71572875 15 15 0 8.2842712-6.7157288 15-15 15-8.28427125 0-15-6.7157288-15-15 0-8.28427125 6.71572875-15 15-15zm0 8c-2.7614237 0-5 2.2385763-5 5 0 2.0143973 1.2022141 3.7998876 2.9996346 4.5835001l.0003231 2.0984999-.1499943.0278452c-2.8326474.5613112-5.31897338 2.2230336-6.93575953 4.5872979 2.34343054 2.291067 5.54974273 3.7028569 9.08579613 3.7028569 3.5355506 0 6.7414538-1.4113884 9.0850203-3.701476-1.6141801-2.3628535-4.0978119-4.0247647-6.929184-4.5867938l-.1558786-.0287302.001228-2.0991413c1.7288399-.7547474 2.9066959-2.4357565 2.9936498-4.355479l.0051645-.2283797c0-2.7614237-2.2385763-5-5-5zm0-6c-7.17970175 0-13 5.82029825-13 13 0 2.9045768.95257276 5.5866683 2.56235849 7.7509147 1.42074739-1.9134907 3.33951478-3.4002416 5.53860831-4.2955956l.3480332-.1363191-.0229565-.0189706c-1.43704227-1.2411241-2.34462949-3.045583-2.42083359-5.0285539l-.00520991-.2714755c0-3.8659932 3.1340068-7 7-7s7 3.1340068 7 7c0 1.9941317-.8415062 3.8279876-2.224566 5.1193683l-.225434.2006317.0447787.0163138c2.3268368.8792152 4.3570558 2.4138611 5.8430586 4.4127726 1.6098837-2.1632453 2.5621627-4.8449575 2.5621627-7.7490864 0-7.17970175-5.8202983-13-13-13z"></path>
                </svg>
            </div>
            <button class="btn btn-black ">Télécharger une photo</button>
            <button class="btn mb-3">Utiliser la photo de facebook</button>
            <a class="center mt-1"><b>Je le ferai plus tard</b></a>
        </form>
    </div>
    <script src='<?=base_url()."js/common.js" ?>'></script>
    <script>
        let close = document.querySelector("#close");
        let close_activation = document.querySelector("#close-activation");
        let day = document.querySelector("#day");
        let month = document.querySelector("#month");
        let year = document.querySelector("#year");
        let finish = document.querySelector(".modal-finish");
        let activation = document.querySelector(".modal-activation");
        let select_tel_int = document.querySelector("#tel-int");
        let code_sms = document.querySelector("#code-sms");

        code_sms.onkeypress = (event) => {
            if (event.keyCode < 48 || event.keyCode > 57) { // keyCode 48-57 représente les chiffres de 0 à 9

                event.preventDefault();
            }
        }
        close.addEventListener("click", () => {
            finish.classList.add("collapse");
        });

        close_activation.addEventListener("click", () => {
            activation.classList.add("collapse");
        });

       

        fillday();
        fillmonth();
        fillyear();
        fillTelInter(select_tel_int, "<?=base_url()?>./json/it-world.json");
    </script>
</body>

</html>