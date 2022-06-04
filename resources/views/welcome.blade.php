

        <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/uikit.min.css">
    <link rel="shortcut icon" href="./images/Logo_AUF.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    
    <body class="uk-position-center">
    <div class="uk-flex uk-align-center  uk-container uk-text-center uk-margin-large-top uk-padding-small main " uk-grid>
        <div class="uk-width-1-2 welcome-party  uk-form">
            <h3 class="auf">AUF</h3>
            <h5 class="">Agence Universitaire de la <br>Francophonie</h5>
            <h6 class="">Gestion des abonnes Inscrit a la biblioteque
                Numerique<br> et logant dans les locaux de l'AUF</h6>
            <div class="uk-padding-small"></div>
            <img src="./images/logo/logo-v3.jpg" alt="" class="uk-padding-small ">
        </div>
        <div class="uk-width-1-3@m uk-card uk-card-hover uk-card-body uk-align-center
         form-inputs uk-animation-toggle" tabindex="0">

            <form action="" method="post" class="uk-align-center">
                <p class="connect">Se connecter maintenant</p>
                
                <!-- if (isset($_GET["id"])) {
                    if ($_GET["id"]==1){

                    echo ' -->
            <!-- <div class="uk-alert-danger " uk-alert uk-sticky="duration:5;" >
    <a class="uk-alert-close" uk-close></a>
    <p>Mot de passe ou nom d\'utilsateur incorrect!</p>
</div> ';} -->
<!-- if ($_GET["id"]==2){

    echo '
<div class="uk-alert-success " uk-alert uk-sticky="duration:5;" >
<a class="uk-alert-close" uk-close></a>
<p>Utilisateur ajoute avec success!</p>
</div> ';}
                }
                ?> -->

               <a href="{{asset('/login')}}">
                    <p class="uk-margin uk-button uk-text-bold uk-text-align-right " style="color: #aa0a30;">Se connecter </p>
                </a>

                <a href="{{asset('/register')}}">
                    <p class="uk-margin uk-button uk-text-bold uk-text-align-right " style="color: #aa0a30;">Inscription </p>
                </a>
            </form>
        </div>
    </div>



    <script src="./assets/js/uikit.min.js"></script>
    <script src="./assets/js/uikit-icons.min.js"></script>
</body>
</html>
