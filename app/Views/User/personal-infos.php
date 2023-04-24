<?= $this->extend('layouts/profile'); ?>
<?= $this->section("content") ?>
<div class="card-infos">
    <div><i class="fa fa-chevron-left"></i></div>
    <h2>Informations personnelles</h2>
    <div class="content">
        <form class="form-content" name="form_name" method="post">
            <div class="form-infos">
                <div class="col">
                    <h3>Nom Légal</h3>
                    <small id="name_comment"><?= $user['name'] . " " . $user['firstname'] ?></small>
                </div>
                <h3><a onclick="onModify(this)">Modifier</a></h3>
            </div>
            <div class="form-group collapse">
                <div class="form-control mt-2">
                    <input id="name" type="text" placeholder="Nom" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>error message</small>
                </div>
                <div class="form-control">
                    <input id="name" type="text" placeholder="Prénom" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>error message</small>
                </div>
                <button onclick="onChange('name', this)" class="btn btn-black btn-short ">Enregister</button>
            </div>
        </form>
        <form class="form-content" name="form_mail" method="post">
            <div class="form-infos">
                <div class="col">
                    <h3>Adresse e-mail</h3>
                    <small id="mail_comment"><?= $user['mail'] ?></small>
                </div>
                <h3><a onclick="onModify(this)">Modifier</a></h3>
            </div>
            <div class="form-group collapse">
                <div class="form-control">
                    <input id="mail" type="text" placeholder="Adresse e-mail" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>error message</small>
                </div>
                <button onclick="onChange('mail', this)" class="btn btn-black btn-short">Enregister</button>
            </div>
        </form>

        <form class="form-content" name="form_phone" method="post">
            <div class="form-infos">
                <div class="col">
                    <h3>Numéro de téléphone</h3>
                    <small id="tel_comment"><?= $user['phone'] ?></small>
                </div>
                <h3><a onclick="onModify(this)">Modifier</a></h3>
            </div>
            <div class="form-group collapse">
                <div class="form-control">
                    <select id="select_code"></select>
                </div>
                <div class="form-control">
                    <input id="phone" type="text" placeholder="Numéro de téléphone" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>error message</small>
                </div>
                <button onclick="onChange('phone', this)" class="btn btn-black btn-short">Vérifier</button>
            </div>
        </form>
        <div class="form-content">
            <div class="form-infos">
                <div class="col">
                    <h3>Pièce d'identité officielle</h3>
                    <small>pièce non fournie</small>
                </div>
                <h3><a onclick="onModify(this)">Ajouter</a></h3>
            </div>
            <div class="form-group collapse">
                <button onclick="onImage('file')" class="btn btn-black ">Télécharger une photo existante</button>
                <button onclick="onImage('webcam')" class="btn btn-black ">Prendre une photo</button>
            </div>
        </div>
        <form class="form-content" name="form_address" action="post">
            <div class="form-infos">
                <div class="col">
                    <h3>Adresse</h3>
                    <small id="address_comment"><?= $address ?></small>
                </div>
                <h3><a onclick="onModify(this)">Modifier</a></h3>
            </div>
            <div class="form-group collapse">
                <div class="form-control">
                    <input id="address" type="text" placeholder="Adresse postale" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>error message</small>
                </div>
                <div class="form-control">
                    <input id="address2" type="text" placeholder="Appartement, bâtiment (facultatif)" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>error message</small>
                </div>
                <div class="form-control">
                    <input id="cp" type="text" placeholder="Code postal" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>error message</small>
                </div>
                <div class="form-control">
                    <input id="city" type="text" placeholder="Ville" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>error message</small>
                </div>
                <button type="submit" onclick="onChange('address', this)" class="btn btn-black btn-short">Enregister</button>
            </div>
        </form>
    </div>
</div>
</section>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src='<?= base_url() . "js/common.js" ?>'></script>
<script>
    let anchors = document.querySelectorAll("a");

    function disableAllLink(elem) {
        anchors.forEach(el => {
            if (el !== elem)
                el.classList.add('disabled');
        });
        elem.classList.remove("disabled");
    }

    function enableAllLink(elem) {
        anchors.forEach(el => {
            el.classList.remove('disabled');
        });
    }

    function onModify(el) {

        //hideAll();
        let element = el.parentElement.parentElement.nextElementSibling;
        let state = element.classList.toggle("collapse");
        if (!state) {
            el.innerText = "Annuler";
            disableAllLink(el);
        } else {
            el.innerText = "Modifier";
            enableAllLink(el);
            //element.classList.remove("collapse");
        }
    }

    function hideAll() {
        let groups = document.querySelectorAll('.form-group');
        groups.forEach((group) => {
            group.classList.add('collapse');
        });
    }

    fillTelInter(select_code, "<?= base_url() ?>./json/it-world.json");

    function onChange(action, elem) {

        isLoading(action, elem);
        formAction(action);
    }

    function formAction(action) {

        switch (action) {
            case "name":
                form_name.action = "/user/modif/name";
                // form_name.submit();
                break;
            case "mail":
                form_mail.action = "/user/modif/mail";
                break;
            case "phone":
                form_phone.action = "/user/modif/phone";
                break;
            case "address":
                form_address.action = "/user/modif/address";
                break;

        }

    }

    function isLoading(action, elem) {
        //let child = elem.children[0];
        if (elem.innerText.trim() == "") {
            if (action !== "phone") {
                elem.innerHTML = "<div class='dot-fade collapse'></div>Enregistrer";
            } else {
                elem.innerText = "Vérifier";
            }

        } else {
            elem.innerHTML = "<div class='dot-fade'></div>&nbsp;";
        }
    }

    function onImage(type) {
        if (type === "file") {

        } else {

        }
    }
</script>

<?= $this->endSection() ?>