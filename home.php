<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Elisa Scuppa</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

        <!-- custom css link -->
        <link rel="stylesheet" href="css_ES/style_home.css">

        <!-- Google font link -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <body>
        <!-- MAIN -->
        <main>

            <!-- SIDEBAR -->
            <?php include_once "php/sidebar.php" ?>

            <!-- main-content -->
            <div class="main-content">
                <!-- NAVBAR -->
                <nav class="navbar">
                    <ul class="navbar-list">
                        <li class="navbar-item">
                            <button class="navbar-link active" data-nav-link>Profilo</button>
                        </li>
                        <!-- 
                        <li class="navbar-item">
                            <div class="input-group-prepend">
                                <button id="scuola-button" class="navbar-link btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-nav-link>Scuola</button>
                                <div id="scuola-dropdown" class="dropdown-menu" aria-labelledby="scuola-button">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        
                            <button class="navbar-link" data-nav-link>Scuola</button>
                        </li> -->

                        <li class="navbar-item">
                            <button class="navbar-link"  data-nav-link>Scuola</button>
                        </li>

                        <li class="navbar-item">
                            <button class="navbar-link" data-nav-link>Erasmus+</button>
                        </li>

                        <li class="navbar-item">
                            <button class="navbar-link" data-nav-link>CV</button>
                        </li>

                        <li class="navbar-item">
                            <button class="navbar-link" data-nav-link>Contatti</button>
                        </li>
                    </ul>
                </nav>

                <!-- ABOUT -->
                <?php include_once "sub_pagine/1_AboutMe/about.php" ?>
                
                <!-- SCUOLA -->
                <?php include_once "sub_pagine/2_Scuola/scuola.php" ?>
                <?php include_once "sub_pagine/2_Scuola/M_Umanistiche/italiano/coscienzaDiZeno.php"?>
                <!--  include_once "sub_pagine/2_Scuola/M_Umanistiche/storia/laFattoriaDegliAnimali.php"?>
                      include_once "sub_pagine/2_Scuola/M_Umanistiche/anniAlTeatro.php"
                -->

                <!-- Erasmus+ -->
                <?php include_once "sub_pagine/3_Erasmus/erasmus.php" ?>

                <!-- CV -->
                <?php include_once "sub_pagine/4_CV/cv.php" ?>

                <!-- CONTATTI -->
                <?php include_once "sub_pagine/5_Contact/contact.php" ?>
            </div>
        </main>

        <!-- custom js link -->
        <script src="js_ES/script.js"></script>

        <!-- ionicon link -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>