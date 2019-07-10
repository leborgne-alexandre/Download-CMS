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
                    <a class="supress_a scroll-to dl mr-3" href="index.php?file=Archive.zip">Télécharger</a>   <a class="supress_a scroll-to"  href="#app">En savoir plus</a>
                    
                    <?php include"download.php";  ?> 
                </div>
                </div>

            </div>


            <div class="product section">

                <h2 class="text_center" id="app">Notre Application</h2>


                <div class="fact flex">

                    <img src="assets/images/wallhaven-767749.png" alt="">

                    <div class="fact-text">
                        <h2>Une solution efficace</h2>
                        <p>Intuitif et épuré notre outils est simple d’utilisation, et répondra à vos besoins.</p>
                    </div>

                </div>


                <div class="fact flex">

                    <img  src="assets/images/wallhaven-767749.png" alt="">

                    <div class="fact-text">
                        <h2>Une solution efficace</h2>
                        <p>Intuitif et épuré notre outils est simple d’utilisation, et répondra à vos besoins.</p>
                    </div>

                </div>



            </div>


            <div class="how_it_work section">

                <h2 class="text_center">Prise en main en 4 étapes</h2>


                <div class="flex">



                    <div class="step mt-4">

                        <div class="pic"></div>
                        <h3 class="text_center  mt-1"><strong>Etape 1: </strong>Je renseigne les informations</h3>
                        <p class="description text_justify mt-1 ">Pour l'étape 1 vous devez renseigner la configuration du serveur et vos indentifiants qui vous permettrons par la suite de prendre le controle de votre site.</p>


                    </div>


                    <div class="step mt-4">

                        <div class="pic"></div>
                        <h3 class="text_center mt-1"><strong>Etape 2 : </strong>Je configure le CMS</h3>
                        <p class="description text_justify mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                            quibusdam ducimus excepturi accusantium atque fugiat, sapiente perspicia reiciendis debitis
                            facilis. Reiciendis!</p>


                    </div>


                    <div class="step mt-4">

                        <div class="pic"></div>
                        <h3 class="text_center mt-1"><strong>Etape 3 : </strong>Je valide mon compte</h3>
                        <p class="description text_justify mt-1">Une fois vos informations renseigné vous recevrez un mail de confirmaton. </p>


                    </div>


                    <div class="step mt-4">

                        <div class="pic"></div>
                        <h3 class="text_center mt-1"><strong>Etape 4 : </strong>Je configure le CMS</h3>
                        <p class="description text_justify mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                            quibusdam ducimus excepturi accusantium atque fugiat, sapiente perspicia reiciendis debitis
                            facilis. Reiciendis!</p>

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
                        <p class="description mt-3">Lorem ipsum doloconsequuntur laboriosam
                            dolore veniam, tempore culpa et natus perspiciatis ducimus animi corporis beatae,
                            nesciunt nemo quasi nisi impedit, error quis veritatis.</p>

                        <div class="flex">

                            <a class="supress_a social_icon" href="#"><i class="fab fa-linkedin"></i></a>
                            <a class="supress_a social_icon" href="#"><i class="fab fa-twitter-square"></i></a>
                            <a class="supress_a social_icon" href="#"><i class="fab fa-github-square"></i></a>

                        </div>

                    </div>



                    <div class="card">

                        <div class="pic"></div>
                        <p class="name">Théo Faure</p>
                        <h3 class="status">
                            < Developper />
                        </h3>
                        <p class="description mt-3">Lorem ipsum doloconsequuntur laboriosam
                            dolore veniam, tempore culpa et natus perspiciatis ducimus animi corporis beatae,
                            nesciunt nemo quasi nisi impedit, error quis veritatis.</p>

                        <div class="flex">

                            <a class="supress_a social_icon" href="#"><i class="fab fa-linkedin"></i></a>
                            <a class="supress_a social_icon" href="#"><i class="fab fa-twitter-square"></i></a>
                            <a class="supress_a social_icon" href="#"><i class="fab fa-github-square"></i></a>

                        </div>

                    </div>



                    <div class="card">

                        <div class="pic"></div>
                        <p class="name">Lucas Estrade</p>
                        <h3 class="status">
                            < Developper />
                        </h3>
                        <p class="description mt-3">Lorem ipsum doloconsequuntur laboriosam
                            dolore veniam, tempore culpa et natus perspiciatis ducimus animi corporis beatae,
                            nesciunt nemo quasi nisi impedit, error quis veritatis.</p>

                        <div class="flex">

                            <a class="supress_a social_icon" href="#"><i class="fab fa-linkedin"></i></a>
                            <a class="supress_a social_icon" href="#"><i class="fab fa-twitter-square"></i></a>
                            <a class="supress_a social_icon" href="#"><i class="fab fa-github-square"></i></a>

                        </div>

                    </div>


                    <div class="card">

                        <div class="pic"></div>
                        <p class="name">Alexandre Le Borgne</p>
                        <h3 class="status">
                            < Developper />
                        </h3>
                        <p class="description mt-3">Lorem ipsum doloconsequuntur laboriosam
                            dolore veniam, tempore culpa et natus perspiciatis ducimus animi corporis beatae,
                            nesciunt nemo quasi nisi impedit, error quis veritatis.</p>

                        <div class="flex">

                            <a class="supress_a social_icon" href="#"><i class="fab fa-linkedin"></i></a>
                            <a class="supress_a social_icon" href="#"><i class="fab fa-twitter-square"></i></a>
                            <a class="supress_a social_icon" href="#"><i class="fab fa-github-square"></i></a>

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