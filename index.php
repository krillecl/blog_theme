<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!--  Font: Open Sans  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!--  CSS Includes  -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body class="body">

<header class="header">

    <div class="topbar flex">

        <div class="nav__toggle">

            <i class="fas fa-bars"></i>

        </div> <!-- /.nav__toggle -->
        
        <div class="topbar__brand">

            <a href="#"><img class="topbar__brand__logo" src="images/logo-new.svg" alt="brand-logo"></a>
            <div class="topbar__brand__name"><a href="#">Madframor</a></div>

        </div> <!-- /.topbar__brand -->

        <nav class="nav list">
            <a href="#" class="nav__item">Opskrifter</a>
            <a href="#" class="nav__item">Madplaner</a>
            <a href="#" class="nav__item">Kontakt</a>
        </nav>

        <div class="search-field">
        
            Søg <i class="fas fa-search"></i>
    
        </div> <!-- /.search-field -->

    </div> <!-- /.topbar -->

</header>

<main class="main">

    <div class="section-headline">

        <div class="sticky-bg"></div>
        <h1>Seneste opskrifter</h1>

    </div>

    <section class="section-content">

        <div class="list">
            
            <div class="list__item">

                <div class="list__item__media">

                    <a href="#"><img src="images/blog-images/brownie.jpeg"></a>

                </div> <!-- /.list__item__media -->

                <div class="list__item__description">

                    <div class="item__category">
                    
                        <a href="#" class="item__category__link">Dessert</a>
                    
                    </div> <!-- /.item__category -->

                    <h3 class="h3 item__headline"><a href="#">Hjemmelavet brownie</a></h3>

                    <div class="item__timestamp">

                        15. Juli, 2021
                        
                    </div> <!-- /.item__timestamp -->

                </div> <!-- /.list__item__description -->

            </div> <!-- /.list__item -->

            <div class="list__item">

                <div class="list__item__media">

                    <a href="#"><img src="images/blog-images/broed.jpeg"></a>

                </div> <!-- /.list__item__media -->

                <div class="list__item__description">

                    <div class="item__category">

                        <a href="#" class="item__category__link">Dessert</a>
                    
                    </div> <!-- /.item__category -->

                    <h3 class="h3 item__headline"><a href="#">Hjemmelavet brownie</a></h3>

                    <div class="item__timestamp">

                        15. Juli, 2021
                        
                    </div> <!-- /.item__timestamp -->

                </div> <!-- /.list__item__description -->

            </div> <!-- /.list__item -->

            <div class="list__item">

                <div class="list__item__media">

                    <a href="#"><img src="images/blog-images/pasta.jpeg"></a>

                </div> <!-- /.list__item__media -->

                <div class="list__item__description">

                    <div class="item__category">
                    
                        <a href="#" class="item__category__link">Dessert</a>
                    
                    </div> <!-- /.item__category -->

                    <h3 class="h3 item__headline"><a href="#">Hjemmelavet brownie</a></h3>

                    <div class="item__timestamp">

                        15. Juli, 2021
                        
                    </div> <!-- /.item__timestamp -->

                </div> <!-- /.list__item__description -->

            </div> <!-- /.list__item -->

            <div class="list__item">

                <div class="list__item__media">

                    <a href="#"><img src="images/blog-images/pasta-ny.jpeg"></a>

                </div> <!-- /.list__item__media -->

                <div class="list__item__description">

                    <div class="item__category">
                    
                        <a href="#" class="item__category__link">Dessert</a>
                    
                    </div> <!-- /.item__category -->

                    <h3 class="h3 item__headline"><a href="#">Hjemmelavet brownie</a></h3>

                    <div class="item__timestamp">

                        15. Juli, 2021
                        
                    </div> <!-- /.item__timestamp -->

                </div> <!-- /.list__item__description -->

            </div> <!-- /.list__item -->

            <div class="list__item">

                <div class="list__item__media">

                    <a href="#"><img src="images/blog-images/kage.jpeg"></a>

                </div> <!-- /.list__item__media -->

                <div class="list__item__description">

                    <div class="item__category">
                    
                        <a href="#" class="item__category__link">Dessert</a>
                    
                    </div> <!-- /.item__category -->

                    <h3 class="h3 item__headline"><a href="#">Hjemmelavet brownie</a></h3>

                    <div class="item__timestamp">

                        15. Juli, 2021
                        
                    </div> <!-- /.item__timestamp -->

                </div> <!-- /.list__item__description -->

            </div> <!-- /.list__item -->

            <div class="list__item">

                <div class="list__item__media">

                    <a href="#"><img src="images/blog-images/smoothie.jpeg"></a>

                </div> <!-- /.list__item__media -->

                <div class="list__item__description">

                    <div class="item__category">
                    
                        <a href="#" class="item__category__link">Dessert</a>
                    
                    </div> <!-- /.item__category -->

                    <h3 class="h3 item__headline"><a href="#">Hjemmelavet brownie</a></h3>

                    <div class="item__timestamp">

                        15. Juli, 2021

                    </div> <!-- /.item__timestamp -->

                </div> <!-- /.list__item__description -->

            </div> <!-- /.list__item -->

        </div> <!-- /.list -->

        <div class="read-more">
            <a href="#">Læs mere</a>
        </div> <!-- /.read-more -->

    </section> <!-- /.section-content -->
    
</main>

<footer class="footer">

    <div class="footer__copyright">

        &copy; Copyright <a class="footer__link" href="#">www.madframor.dk</a> <?php echo date('Y'); ?>

    </div>

</footer>

<script src="js/app.js"></script>

</body>
</html>