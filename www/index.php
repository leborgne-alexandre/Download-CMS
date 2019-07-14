<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fryzzer</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
    <div class="main_content">
        <div class="sidebar">
            <header>
                <nav>
                    <ul class="animated animatedFadeInUp fadeInUp">
                        <li class="no_list"><a class="supress_a" href="#top"></i>Accueil</a></li>
                        <li class="no_list scroll-to"><a class="supress_a" href="#app">Notre application</a></li>
                        <li class="no_list"><a class="supress_a" href="#team"></i>Notre équipe</a></li>
                        <li class="no_list"><a class="supress_a" href="#contact">Nous contacter</a></li>
                    </ul>
                </nav>
            </header>
        </div>


        <div class="content">

            <div class="accueil section">

                <div class="introduction animated animatedFadeInUp fadeInUp">
                    <img class="" src="/assets/images/main_logo_fryzzer.png" alt="logo de fryzzer cms">
                    <p class="">Fryzzer est un CMS qui vous permettra de déployer un site personnalisable.</p>
                    <div class="fix-wrap">
                    <a class="supress_a scroll-to dl mr-2" href="index.php?file=Archive.zip">Télécharger</a>   <a class="supress_a scroll-to down"  href="#app">En savoir plus</a>
                    
                    <?php include"download.php";  ?> 

                </div>
                </div>

            </div>


            <div class="product section">

                <h2 class="text_center" id="app">Notre Application</h2>


                <div class="fact flex">

                    <img src="assets/images/accueil.png" alt="">

                    <div class="fact-text">
                        <h2>Une solution efficace</h2>
                        <p>Intuitif et épuré notre outils est simple d’utilisation, et répondra à vos besoins.</p>
                    </div>

                </div>


                <div class="fact flex">

                    <img  src="assets/images/power.png" alt="">

                    <div class="fact-text">
                        <h2>Des fonctionnalités puissantes</h2>
                        <p>Personnalizez votre site grace à notre éditeur intégré, ou administrer les utilisateurs présent sur votre site.</p>
                    </div>

                </div>



            </div>


            <div class="how_it_work section">

                <h2 class="text_center">Prise en main en 4 étapes</h2>


                <div class="flex">



                    <div class="step mt-4">

                        <div class="pic"></div>
                        <h3 class="text_center  mt-1"><strong>Etape 1: </strong>Je créer ma base de donnée</h3>
                        <p class="description text_justify mt-1 ">Pour l'étape 1 vous devez créer et donner un nom à  votre base de donnée, toutes les informations seront automatiquement géneré par la suite.</p>


                    </div>


                    <div class="step mt-4">

                        <div class="pic1"></div>
                        <h3 class="text_center mt-1"><strong>Etape 2 : </strong>Je renseigne les informations</h3>
                        <p class="description text_justify mt-1">Pour l'étape 2 vous devez renseigner la configuration du serveur et vos indentifiants qui vous permettrons par la suite de prendre le controle de votre site.</p>


                    </div>


                    <div class="step mt-4">

                        <div class="pic2"></div>
                        <h3 class="text_center mt-1"><strong>Etape 3 : </strong>Je valide mon compte</h3>
                        <p class="description text_justify mt-1">Une fois vos informations renseignées, vous recevrez ensuite un mail de confirmaton.Celui ci vous permettra de valider votre identité. </p>


                    </div>


                    <div class="step mt-4">

                        <div class="pic3"></div>
                        <h3 class="text_center mt-1"><strong>Etape 4 : </strong>J'Utilise le CMS</h3>
                        <p class="description text_justify mt-1">Félicitation vous pouvez dès à présent personnaliser gérer et administrer votre site. Faite ce que bon vous semble !</p>

                    </div>


                </div>



            </div>

            <div class="team section" id="team">

                <h2 class="text_center">Notre équipe</h2>

                <div class="flex">

                    <div class="card">

                        <div class="pic"></div>
                        <p class="name">Paul Taitinger</p>
                        <h3 class="status">
                            < Developper />
                        </h3>
                        <p class="description mt-3">Git Master</p>

                        <div class="flex">

                            <a class="supress_a social_icon" href="https://www.linkedin.com/in/paul-taitinger-76abb1186/"><i class="fab fa-linkedin"></i></a>
                     
                            <a class="supress_a social_icon" href="https://github.com/PaulTAI"><i class="fab fa-github-square"></i></a>

                        </div>

                    </div>



                    <div class="card">

                        <div class="pic"></div>
                        <p class="name">Théo Faure</p>
                        <h3 class="status">
                            < Developper />
                        </h3>
                        <p class="description mt-3">Balanced Guy</p>

                        <div class="flex">

                            <a class="supress_a social_icon" href="https://www.linkedin.com/in/theo-faure-116b6b165/"><i class="fab fa-linkedin"></i></a>
                     
                            <a class="supress_a social_icon" href="https://github.com/theofaure77"><i class="fab fa-github-square"></i></a>

                        </div>

                    </div>



                    <div class="card">

                        <div class="pic"></div>
                        <p class="name">Lucas Estrade</p>
                        <h3 class="status">
                            < Developper />
                        </h3>
                        <p class="description mt-3">Ajax/Php Addict</p>

                        <div class="flex">

                            <a class="supress_a social_icon" href="https://www.linkedin.com/in/lucas-estrade-059559153/"><i class="fab fa-linkedin"></i></a>
                     
                            <a class="supress_a social_icon" href="https://github.com/lucasestrade"><i class="fab fa-github-square"></i></a>

                        </div>

                    </div>


                    <div class="card">

                        <div class="pic"></div>
                        <p class="name">Alexandre Le Borgne</p>
                        <h3 class="status">
                            < Developper />
                        </h3>
                        <p class="description mt-3">Creator</p>

                        <div class="flex">

                            <a class="supress_a social_icon" href="https://www.linkedin.com/in/alexandre-le-borgne-402007130/"><i class="fab fa-linkedin"></i></a>
                     
                            <a class="supress_a social_icon" href="https://github.com/leborgne-alexandre"><i class="fab fa-github-square"></i></a>

                        </div>

                    </div>




                </div>

            </div>



            <div class="contact section" id="contact">

                <div class="mail_to">

                <h2 class="mb-3">Besoin d'aide ou d'informations ?</h2>

                <div class="mail">
                    <a class="supress_a" href="mailto:test@hotmail.org"><i class="far fa-envelope"></i> Contactez nous</a>
                </div>


                <h2 class="">Merci de votre visite !</h2>

               <p class="pb-4">© Fryzzer. Tous droits réservés</p> 


            </div>

            </div>

        </div>


    </div>



    <script src="https://kit.fontawesome.com/2308eb7c9f.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

<script src="/assets/js/scroll.js"></script>
</body>

</html>