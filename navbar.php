<header>
    <nav id="mainNav">

            <a href="https://nkurs.co/" id="mainNavLogo" class="navbar-brand">
                <img src="assets/images/logo/nkursLogoG.png">
            </a>
            <div id="mainNavToggleBtn" >
                <div id="toggleBtn">
                </div>
            </div>

            <div id="mainNavSmallMedium" class="hidden">
                <div id="mainNavSmallMediumLinks">
                    <p><a href="https://nkurs.co/" id="<?= ($activePage == 'index') ? 'active':''; ?>">Home</a></p>
                    <p><a href="contact.php" id="<?= ($activePage == 'contact') ? 'active':''; ?>">Kontakto</a></p>
                </div>
            </div>

            <div id="mainNavLarge">
                <div id="mainNavLargeLinks">
                    <p><a href="https://nkurs.co/" id="<?= ($activePage == 'index') ? 'active':''; ?>" >Home</a></p>
                    <p><a href="contact.php" id="<?= ($activePage == 'contact') ? 'active':''; ?>" >Kontakto</a></p>
                </div>
            </div>

    </nav>
</header>