<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informations personnelles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() . "css/common.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "css/personal.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "css/input.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "css/loading.css" ?>">
    <link rel="stylesheet" href="<?= base_url() . "css/navbar.css" ?>">
</head>

<body>
    <navbar>
        <?= $this->include('partials/navbar'); ?>
    </navbar>
    <section>
        <?= $this->renderSection("content"); ?>
    </section>
    <section>
        <?= $this->include('partials/footer'); ?>
    </section>
    <?= $this->renderSection("js"); ?>    
</body>

</html>