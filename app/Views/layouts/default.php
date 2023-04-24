<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page d'accueil - Louer vos locaux</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <!-- <script src="./js/script.js"></script> -->
</head>

<body>
    <?= $this->include('partials/mainmenu') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('partials/footer') ?>
</body>

</html>