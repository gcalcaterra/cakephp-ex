<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <?= $this->Html->charset() ?>
    <title>VIDUC</title>
    <meta name="description" content="VIDUC: Videos Educacionales para inspirarte y atreverte a lograr tus sueños a travéz del aprendizaje autodidacta con videos">
    <meta name="author" content="Gustavo Calcaterra, Fatima Romero">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('vendor.css') ?>
    <?= $this->Html->css('main.css') ?>

    <!-- script
    ================================================== -->

    <script src="/js/modernizr.js"></script>
    <script src="/js/pace.min.js"></script>
    <script>
        function mostrar(dato) {
            if (dato == "Otros") {
                document.getElementById("otro").style.display = "block";
                document.getElementById("opciones").style.display = "none";
            } else {
                document.getElementById("otro").style.display = "none";
                document.getElementById("opciones").style.display = "block";

            }

        }
    </script>

    <!-- favicons
    ================================================== -->
    <?= $this->Html->meta('icon') ?>

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="#0">
                <img src="/img/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3><?= $LoggedUser ? "Hola " . $LoggedUser['name'] . "!" : "Ver" ?></h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="/#home" title="Inicio">Inicio</a></li>
                    <li><a class="smoothscroll" href="/#about" title="Inspirate">Inspirate</a></li>
                    <li><a class="smoothscroll" href="/#contact" title="Ayudanos a Conocerte">Ayudanos a Conocerte</a></li>
                    <li><a class="smoothscroll" href="/#services" title="Historias">Historias</a></li>
                    <li><a class="smoothscroll" href="/#about" title="Nosotros">Acerca de Nosotros</a></li>
                    <?= $LoggedUser ?
                        "<li><a href=\"/users/logout\">Salir</a></li>" :
                        "<li><a href=\"/users/login\">Iniciar Sesión</a></li><li><a href=\"/users/add\">Registrarse</a></li>"
                    ?>
                </ul>

                <p>VIDUC
                    <a href='#0'></a>Aprende viendo en tu Mundo</p>

                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>

            </div>
            <!-- end header-nav__content -->

        </nav>
        <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header>
    <!-- end s-header -->

    <!-- Calling the content from the pages -->
    <?= $this->fetch('content') ?>

    <!-- footer
    ================================================== -->
    <footer>

        <?= $this->Flash->render() ?>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                Esta Web trata de inspirar a las personas a conectarse, navegar y alimentar sus mentes aprendiendo algo nuevo viendo videos e implementarlos.
            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h2> <span><a href="https://forms.gle/DUgkZnkF6W6Q2y4q8">Hey, dejanos tu opinión</a></span></h2>
               
            </div>

</div>
<!--             <div class="col-six tab-full right footer-subscribe">

                <h4>¿Querés recibir contenido de VIDUC? </h4>
                <p>¡Suscribite a nuestro news lettter! </p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Direccion Email" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div> -->

        </div>
        <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Fatima Romero y Gustavo Calcaterra 2019</span>
                    <span>Site Template by <a href="https://www.colorlib.com/">Colorlib</a></span>
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>
        <!-- end footer-bottom -->

    </footer>
    <!-- end footer -->

    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div>
    <!-- end photoSwipe background -->

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>