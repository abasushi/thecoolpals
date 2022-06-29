<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Sabay)</title>

    <!--=== FAVICON ===-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>css/img/favicon.ico" type="image/x-icon">

    <!--=== CSS ===-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/nav-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/footer-styles.css">


    <!--=== FONTS ===-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Spline+Sans+Mono:wght@400;500;600;700&family=Spline+Sans:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- ===== FONT AWESOME ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <div class="index-wrapper">
        <header>
            <div class="nav-container">
                <div class="nav">
                    <div class="logo">
                        <a href=""> <img src="<?php echo base_url() ?>css/img/logo.svg"></a>

                    </div>
                </div>
            </div>
        </header>
    </div>
    <section>
        <div class="heroSection">
            <div class="title">
                <div class="heading">
                    <h1>(Sabay)</h1>
                </div>

                <div class="subheading">
                    <h2>Keep track of the trains on LRT Line 1</h2>
                </div>
            </div>

            <div class="crawlerContainer">

                <div class="crawlers">
                    <div class="marquee">
                        <div class="marquee-text">
                            Baclaran <span> – </span> EDSA <span> – </span> Libertad <span> – </span> Gil Puyat
                            <span> -
                            </span> Vito Cruz <span> – </span> Quirino <span> – </span> Pedro Gil <span> – </span>
                            United Nations <span> – </span> Central <span> – </span> Carriedo
                            <span> – </span> Doroteo Jose <span> – </span> Bambang <span> – </span> Tayuman <span> -
                            </span> Blumentritt <span> – </span> Abad Santos <span> – </span> R. Papa <span> –
                            </span>
                            5th Avenue <span> – </span> Monumento <span> – </span> Balintawak
                            <span> – </span> Roosevelt <span> –&nbsp; </span>
                        </div>


                        <div class="marquee-text">
                            Baclaran <span> – </span> EDSA <span> – </span> Libertad <span> – </span> Gil Puyat
                            <span> -
                            </span> Vito Cruz <span> – </span> Quirino <span> – </span> Pedro Gil <span> – </span>
                            United Nations <span> – </span> Central <span> – </span> Carriedo
                            <span> – </span> Doroteo Jose <span> – </span> Bambang <span> – </span> Tayuman <span> -
                            </span> Blumentritt <span> – </span> Abad Santos <span> – </span> R. Papa <span> –
                            </span>
                            5th Avenue <span> – </span> Monumento <span> – </span> Balintawak
                            <span> – </span> Roosevelt <span> –&nbsp; </span>
                        </div>

                        <div class="marquee-text">
                            Baclaran <span> – </span> EDSA <span> – </span> Libertad <span> – </span> Gil Puyat
                            <span> -
                            </span> Vito Cruz <span> – </span> Quirino <span> – </span> Pedro Gil <span> – </span>
                            United Nations <span> – </span> Central <span> – </span> Carriedo
                            <span> – </span> Doroteo Jose <span> – </span> Bambang <span> – </span> Tayuman <span> -
                            </span> Blumentritt <span> – </span> Abad Santos <span> – </span> R. Papa <span> –
                            </span>
                            5th Avenue <span> – </span> Monumento <span> – </span> Balintawak
                            <span> – </span> Roosevelt <span> –&nbsp; </span>
                        </div>

                        <div class="marquee-text">
                            Baclaran <span> – </span> EDSA <span> – </span> Libertad <span> – </span> Gil Puyat
                            <span> -
                            </span> Vito Cruz <span> – </span> Quirino <span> – </span> Pedro Gil <span> – </span>
                            United Nations <span> – </span> Central <span> – </span> Carriedo
                            <span> – </span> Doroteo Jose <span> – </span> Bambang <span> – </span> Tayuman <span> -
                            </span> Blumentritt <span> – </span> Abad Santos <span> – </span> R. Papa <span> –
                            </span>
                            5th Avenue <span> – </span> Monumento <span> – </span> Balintawak
                            <span> – </span> Roosevelt <span> –&nbsp; </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scrollButton">
                <div class="scroll-down"></div>
            </div>
        </div>
    </section>
    <section id='stations-section'>
        <div class='stationsSection'>
            <?php
            $i = 1;

            foreach ($data as $row) {

                echo "<div class='container'>";
                echo "<div class='stationCard'>";
                echo "<div class='cardTitle'>";
                echo "<h3>$row->stationName</h3>";
                echo "</div>";
                echo "<div class='cardButton'>";
                echo  "<a href='stations/station?id=" . $row->stationId . "'>View</a>";
                echo "</div>";
                echo "</div>";
                $i++;
            }
            ?>
        </div>
    </section>
    <!-- FOOTER STARTS HERE -->
    <div class="creator-popup center aba-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url() ?>css/img/creator-aba.gif">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Sean David Abalora</h2>
                </div>

                <div class="creator-details">
                    <p>Frontend Center!</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://www.instagram.com/seanabalora/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://abasushi.github.io/seanabalora/" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="aba-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center daniel-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url() ?>css/img/creator-daniel.gif">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Daniel Christian Borromeo</h2>
                </div>

                <div class="creator-details">
                    <p>Don't make everything so complicated. Life is easier if you stay simple.</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://www.instagram.com/nlrzzzz/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://neilruiz.github.io/" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="daniel-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center raja-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url() ?>css/img/creator-raja.gif">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Foehn Raja Dela Cruz</h2>
                </div>

                <div class="creator-details">
                    <p>Backend King</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://www.pixiv.net/en/users/44604324" target="_blank"><i class="fa-solid fa-ellipsis"></i></a>
                        <a href="https://foehnraja.github.io/DelaCruzFoehnRajaAct05/" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="raja-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center ra-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url() ?>css/img/creator-ra.gif">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Rose Anne Eugenio</h2>
                </div>

                <div class="creator-details">
                    <p>If I cannot do great things, I can do small things in a great way.</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://www.instagram.com/roseanneeugenio/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://eugenioroseanneact02.000webhostapp.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="ra-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center kurk-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url() ?>css/img/creator-kurk.gif">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Kurk Van Punzalan</h2>
                </div>

                <div class="creator-details">
                    <p>Main Cool Pal</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://steamcommunity.com/id/kurianna" target="_blank"><i class="fa-brands fa-steam"></i></a>
                        <a href="https://punzaman.github.io/" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="kurk-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-section">
        <div class="footer-container">
            <h1>Keep up with (Sabay)</h1>
            <span class="footer-divider"></span>

            <div class="footer">
                <div class="footer-row">

                    <div class="footer-column">
                        <h3>Creators</h3>
                        <ul>
                            <li><button class="underline" id="creator-aba">Abalora</button></li>
                            <li><button class="underline" id="creator-daniel">Borromeo</button></li>
                            <li><button class="underline" id="creator-raja">Dela Cruz</button></li>
                            <li><button class="underline" id="creator-ra">Eugenio</button></li>
                            <li><button class="underline" id="creator-kurk">Punzalan</button></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h3>Address</h3>
                        <div class="address">
                            <h2>Manila, Philippines</h2>
                        </div>
                    </div>

                    <div class="footer-column">
                        <h3>Say Hello!</h3>

                        <div class="e-mail">
                            <h2 class="underline" id="copy-email">thecoolpals@gmail.com</h2>
                            <div class="popup">
                                <h4>Copied to Clipboard!</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <span class="footer-divider"></span>

            <div class="footer-rights-container">
                <div class="footer-logo">
                    <a href="#">
                        <img src="<?php echo base_url() ?>css/img/logo.svg">
                    </a>
                </div>

                <div class="footer-rights">
                    <p>The Cool Pals &copy; 2022</p>
                </div>
            </div>
        </div>
    </footer>

    <!--=== SCRIPT ===-->
    <script src="js/footer-script.js"></script>

    <!--=== SCROLLREVEAL ===-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({
            reset: true,
        });

        ScrollReveal().reveal('.heading, .subheading', {
            delay: 100,
            interval: 100,
            duration: 700,
            distance: '20px',
            origin: 'top'
        });

        ScrollReveal().reveal('.crawlerContainer', {
            delay: 100,
            interval: 100,
            duration: 700,
            distance: '20px',
            origin: 'bottom'
        });

        ScrollReveal().reveal('.stationCard', {
            delay: 100,
            interval: 100,
            duration: 800,
            distance: '20px'
        });

        // ScrollReveal().reveal('.footer-section', {
        //     delay: 100,
        //     interval: 100,
        //     duration: 800,
        //     distance: '30px',
        //     origin: 'bottom'
        // });
    </script>
</body>

</html>