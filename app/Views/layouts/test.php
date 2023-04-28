<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page de test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() . "/css/default.css"?>">
    <link rel="stylesheet" href="<?= base_url() . "css/profile.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "css/checkbox.css"?>">
    <link rel="stylesheet" href="<?= base_url() . "/css/common.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "/css/navbar.css" ?>">
    <?= $this->renderSection('header')  ?>

</head>

<body>
    <?= $this->include('partials/menulogin'); ?>
    <?= $this->include('partials/mainmenu') ?>

    <?= $this->renderSection('content') ?>
    <?= $this->include('partials/footer') ?>
    <?= $this->renderSection('js') ?>
</body>

</html>