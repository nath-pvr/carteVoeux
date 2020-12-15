<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style/general.css">
    <link rel="stylesheet" href="asset/style/svg.css">
    <link rel="stylesheet" href="asset/style/form.css">
    <link rel="icon" href="asset/img/favicon.png">
    <script type="text/javascript" src="asset/JS/app_form.js" defer></script>
    <script type="text/javascript" src="asset/JS/app_carte.js" defer></script>
    <script type="text/javascript" src="asset/JS/traitement.js" defer></script>
</head>

<body>

    <div class="container">

        <div class="row justify-content-center">

            <h1 class="offset-1 col-11">Bientôt :</h1>

            <svg version="1.1" id="form_title" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="210px" height="148.5px" viewBox="0 0 841.89 595.28" enable-background="new 0 0 841.89 595.28" xml:space="preserve">
                <text class="svg" transform="matrix(1 0 0 1 19.3462 306.541)" fill="none" stroke="#B9A449" stroke-width="10" stroke-miterlimit="10" font-family="'MyriadPro-Regular'" font-size="400">2 0 2 1</text>
            </svg>

            <p class="offset-1 col-11 col-md-6">Envoyez une carte de voeux à vos proches !</p>
        </div>


        <form id="form" class="row justify-content-center">

            <div class="form-floating col-8 col-md-12 formperso">

                <input type="text" class="transparent form-control" id="expediteur" name="expediteur" >
                <label class="label" for="floatingInput">Votre prénom</label>
            </div>



            <div class="form-floating col-8 col-md-12 formperso">
                <input type="email" class="transparent form-control" id="expe_mail" name="expeMail" >
                <label class="label" for="floatingInput">Votre adresse mail</label>
            </div>


            <div class="form-floating col-8 col-md-12 formperso">

                <input type="text" class="transparent form-control" id="destinataire" name="destinataire" >
                <label class="label" for="floatingInput">Prénom du destinataire </label>
            </div>


            <div class="form-floating col-8 col-md-12 formperso">
                <input type="email" class="transparent form-control" id="dest_mail" name="destMail" >
                <label class="label" for="destinataire_mail">Adresse mail de votre destinataire</label>
            </div>


            <button type="submit" class=" btnpers btn  col-4">Envoie</button>
        </form>

        <!-- <?php
        $prenomExp = $_POST['expediteur'];
        $mailExp = $_POST['expeMail'];
        $prenomDest = $_POST['destinataire'];
        $mailDest = $_POST['destMail'];
        ?> -->

</body>

</html>