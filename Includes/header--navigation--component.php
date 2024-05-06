<!-- Header Component -->
<div id="header--component">
    <!--Patter Bar -->
    <div class="bar"></div>
    <!-- Header Navigation -->
    <header id="header" class="header">
        <div class="header__navigation">
            <!-- Logo -->
            <div>
                <a href="index.php">
                    <svg width="153" height="37" class="header__logo" viewBox="0 0 153 37" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.402832 1.3474L16.7132 1.3474L16.7132 22.8876L39.1414 0.784528L58.4724 0.784528L21.729 36.9934L0.402832 36.9934L0.402832 1.3474Z" />
                    <path d="M91.7467 36.4324L75.4363 36.4324L75.4363 14.8903L53.0062 36.9934L33.6771 36.9934L70.4205 0.784528L91.7467 0.784528L91.7467 36.4324Z" />
                    <path d="M152.752 0.402985L100.425 0.402985L100.502 12.2951L122.02 12.2951L100.425 33.5765L100.425 36.3398L142.506 36.3398L151.673 27.3056L125.452 27.3056L152.752 0.402985Z" />
                    </svg>
                </a>
            </div>
            <!-- Menu Navigation -->
            <nav>
                <ul>
                    <li><a href="index.php" class="header__active" >Domov</a></li>
                    <li><a href="sluzby.php">Služby</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                    <li><a href="dokumenty.php">Dokumenty</a></li>
                    <li><a href="cennik.php">Cennik</a></li>
                    <li><a href="fotogaleria.php">Fotogaléria</a></li>
                </ul>
            </nav>
            <!-- Burger Menu Icon -->
            <div class="header__burger">
                <img src="src/svg/menu.svg" alt="Burger Menu Icon">
            </div>
            <!-- Reservation Button With Hand Icon-->
            <a href="" class="header__reservation">
                    <img src="src/svg/hand.svg" alt="Hand Icon">
                    <span>Rezervácia</span>
            </a>
            <!-- Header Language Selection -->
            <div class="header__languages">
                <a href="">SK</a>
                <a href="">HU</a>
            </div>
        </div>
    </header>

    <!-- Responsive Header Navigation Menu -->
    <div class="burger--menu">
        <div class="burger__container">
                <svg class="burger__exit" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                <ul class="burger__links">
                <li><a href="index.php">Domov</a></li>
                <li><a href="sluzby.php">Služby</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="dokumenty.php">Dokumenty</a></li>
                <li><a href="cennik.php">Cennik</a></li>
                <li><a href="fotogaleria.php">Fotogaléria</a></li>
            </ul>
    </div>
</div>