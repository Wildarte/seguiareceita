<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-icons-1.8.1/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/m-caroussel.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Segui a Receita</title>
</head>
<body>

    <header class="header">
        <div class="header_content container_full">
            <div class="header_top">
                <div class="header_top_content container">
                    <div class="header_logo">
                        <a href="#">
                            <img src="assets/img/logo-small.png" alt="">
                        </a>
                    </div>
                    <div class="header_form">
                        <form action="">
                            <input type="search" name="" id="" placeholder="buscar receitas...">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>

                    <div class="header_social">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                
            </div>
            <div class="opt_top">
                <div class="opt_top_content container">
                    <ul>
                        <li><a href="#">Doces</a></li>
                        <li><a href="#">Salgados</a></li>
                        <li><a href="#">Bolos</a></li>
                        <li><a href="#">Sobremesas</a></li>
                        <li><a href="#">Tortas</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </header>

    <main>

        <section class="sec_intro">
            <div class="sec_intro_content container">
                <img src="assets/img/book.png" alt="">
                <div class="owl-carousel m_carousel">
                    <div class="item_carousel">
                        <a href="#">
                            <img src="assets/img/intro1.jpg" alt="">
                        </a>
                    </div>
                    <div class="item_carousel">
                        <a href="#">
                            <img src="assets/img/intro2.jpg" alt="">
                        </a>
                    </div>
                    <div class="item_carousel">
                        <a href="#">
                            <img src="assets/img/intro3.jpg" alt="">
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>

        <section>
            <div>
                <ul>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>

        </section>

        <section>

            <header>
                <h2>Destaque</h2>
            </header>
            
            <section>
                
                <section>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                    <article></article>
                </section>

                <aside>

                </aside>

            </section>


            <section>
                <section>
                    <header>
                        <h2>Últimas publicações</h2>
                    </header>

                    <section>
                        <article></article>
                        <article></article>
                        <article></article>
                        <article></article>
                        <article></article>
                        <article></article>
                    </section>
                </section>
                
                <aside></aside>

            </section>

        </section>

    </main>


    <footer>
        <div>
            <div>
                <img src="" alt="">
            </div>

            <div>
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>

            <div>
                <div>
                    <h4>Contato</h4>

                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>                
                
                <div>
                    <h3>Redes sociais</h3>

                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>

                
            </div>
        </div>
        <div>
            <p>seguieareceita.com</p>
        </div>
    </footer>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
        });
    </script>

</body>
</html>