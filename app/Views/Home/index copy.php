<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contratar - Louer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/script.js"></script>
</head>

<body>

    <header>
        <div class="menu-log">
            <a class="first" href="/login">Inscription</a>
            <a href="/login">Connexion</a>
            <a href="/property/add">Mettre son commerce sur Immo</a>
            <hr>
            <a href="/help">Aide</a>
        </div>
        <div class="menu-header">
            <div class="logo"></div>
            <div class="spacer"></div>
            <div class="menu-top">
                <span id="anywhere" class="darkgray">
                    <p>N'importe où</p>
                </span>
                <span id="duration" class="darkgray">
                    <p>Une Semaine</p>
                </span>
                <span class="gray">
                    <p>Ajouter une personne</p>
                </span>
                <span><i class="btn-search fa-xs fa-solid fa-magnifying-glass"></i></span>
            </div>
            <div class="sp-10"></div>
            <div class="menu-end">
                <div class="sp-10"></div>
                <span id="addcommerce" class="darkgray "></i>Mettre son commerce</span>
                <div id="global"><i class="fa-solid fa-globe"></i></div>
                <div class="log"><i class="fa-solid fa-bars"></i>&nbsp;<i class="fa-solid fa-user"></i></div>
            </div>
            <div class="sp-10"></div>
        </div>
        <div class="slides"></div>
        <div class="menu-header2">

            <div class="menu-end">
                <span id="addcommerce2" class="darkgray "></i>Mettre son commerce</span>
                <div id="global2"><i class="fa-solid fa-globe"></i></div>
                <div class="log"><i class="fa-solid fa-bars"></i>&nbsp;<i class="fa-solid fa-user"></i></div>
            </div>
            <div class="flex">
                <div class="header-expanded">
                    <div><i class="btn-search2 fa-xs fa-solid fa-magnifying-glass"><span class="font1">&nbsp;&nbsp;Rechercher</span></i>
                    </div>
                </div>
            </div>

            <div class="sp-10"></div>
        </div>
    </header>
    <main>
        <div class="container">
            <div id="cards"></div>
        </div>
    </main>

    <!--<h1>Bienvenue sur Contratar</h1>-->
    <!--<p>Recherchez des hébergements commerciaux uniques et des expériences incroyables partout dans le monde.</p>-->

    <script>
        const anywhere = document.querySelector("#anywhere");
        const _cards = document.querySelector("#cards");
        const _slides = document.querySelector(".slides");
        anywhere.addEventListener("click", () => {
            console.log("You clicked");
        })
        let cards = [{
                name: "Arles",
                type: "Particulier",
                src: "./img/img1.jpeg",
                "ratings": 7.5,
                "date": "2-15 avr",
                "price": 749
            },
            {
                name: "Arles",
                type: "Professionnel",
                src: "./img/img2.jpeg",
                "ratings": 7.9,
                "date": "12-15 avr",
                "price": 629
            },
            {
                name: "Salon de provence",
                type: "Particulier",
                src: "./img/img3.jpeg",
                "ratings": 5.5,
                "date": "20-25 avr",
                "price": 529
            },
            {
                name: "Marseille",
                type: "Particulier",
                src: "./img/img4.jpeg",
                "ratings": 6.5,
                "date": "5-25 avr",
                "price": 649
            },
            {
                name: "Marseille",
                type: "Professionnel",
                src: "./img/img7.jpeg",
                "ratings": 8.5,
                "date": "8-19 avr",
                "price": 249
            },
            {
                name: "Salon de provence",
                type: "Professionnel",
                src: "./img/img5.jpeg",
                "ratings": 6.4,
                "date": "12-19 avr",
                "price": 449
            },
            {
                name: "Salon de provence",
                type: "Professionnel",
                src: "./img/img5.jpeg",
                "ratings": 6.8,
                "date": "22-29 avr",
                "price": 419
            },
            {
                name: "Salon de provence",
                type: "Professionnel",
                src: "./img/img7.jpeg",
                "ratings": 6.4,
                "date": "12-19 mai",
                "price": 549
            }, {
                name: "Salon de provence",
                type: "Professionnel",
                src: "./img/img9.jpeg",
                "ratings": 5.4,
                "date": "22-29 juin",
                "price": 1549
            }, {
                name: "Salon de provence",
                type: "Professionnel",
                src: "./img/img10.jpeg",
                "ratings": 9.4,
                "date": "12-19 juil",
                "price": 526
            }, {
                name: "Salon de provence",
                type: "Professionnel",
                src: "./img/img11.jpeg",
                "ratings": 8.4,
                "date": "12-19 août",
                "price": 629
            }, {
                name: "Salon de provence",
                type: "Professionnel",
                src: "./img/img12.jpeg",
                "ratings": 6.4,
                "date": "12-19 oct",
                "price": 539
            },
        ];


        let slides = [{
                "name": "entrepôt",
                icon: "<i class=\"fa-solid fa-warehouse\"></i>"
            },
            {
                "name": "cave",
                icon: "<i class=\"fa-solid fa-wine-bottle\"></i>"
            },
            {
                "name": "maison",
                icon: "<i class=\"fa-solid fa-people-roof\"></i>"
            },
            {
                "name": "usine",
                icon: "<i class=\"fa-solid fa-city\"></i>"
            },
            {
                "name": "local",
                icon: "<i class=\"fa-solid fa-paint-roller\"></i>"
            },
            {
                "name": "magasin",
                icon: "<i class=\"fa-solid fa-shop\"></i>"
            },
            {
                "name": "lieu",
                icon: "<i class=\"fa-solid fa-landmark\"></i>"
            },
            {
                "name": "lieu insolite",
                icon: "<i class=\"fa-solid fa-igloo\"></i>"
            },
        ];

        function CreateCard(card) {
            const _card = document.createElement("div");
            _card.innerHTML = `
        <div class="card">
            <img src="${card.src}"></img>
            <div><div class="ratings"><div>${card.name}</div><div><i class="fa-solid fa-star"></i>&nbsp;${card.ratings}</div></div></div>
            <div><span class="gray">${card.type}</span></div>
            <div><div class="gray">${card.date}<div></div>
            <div><div class="darkgray">${card.price} € <span class="darkgray2">par jour</span><div></div>
        </div>`;
            _cards.append(_card);
        }

        cards.forEach(card => {
            new CreateCard(card);
        })

        function CreateCardSlide(card) {
            const _slide = document.createElement('div');
            _slide.classList.add('slide-card');
            _slide.innerHTML += `<div>${card.icon}</div><div>${card.name}</div>`;
            _slides.appendChild(_slide);
        }

        slides.forEach(card => {
            new CreateCardSlide(card);
        })
    </script>
</body>

</html>