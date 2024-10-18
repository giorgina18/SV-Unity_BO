<?php
require_once 'template-parts/header.php';
?>

    <!-- home page -->
    <section class="main__home">
        <div class="main__text">

            <h1>Welkom bij SV-Unity</h1>
            <p>Wij bieden ondersteuning voor diverse educatieve onderwerpen en<br> organiseren toffe evenementen.<br>
                Meld je
                hier onder aan voor exclusieve updates!
            </p>
            <a href="#" class="main__btn">Meld je aan!</a>
        </div>
    </section>
    

    <!-- about SV-Unity -->
    <section class="informatie">
        <div class="informatie__text">
            <h1>SV-Unity: MBO studentenvereneging van Amsterdam</h1>
            <h3>Gezzeligheid, verbinding en belangen MBO studenten</h3>
            <h5> DE MBO studentenvereniging van Amsterdam! <br>
                Waar vriendschap, groei en onvergetelijke ervaringen samenkomen!
            </h5>
            <h6>Onze missie is om een plek te creëren waar studenten zich thuis voelen en waar zij elkaar beter leren
                kennen,<br> om zo de band met andere studenten van andere MBO's te bevorderen.
                Ook bouwen wij deze vereniging op<br> met als doel om zo veel als mogelijk studenten van het MBO bij
                elkaar te brengen om zo het mbo gelijk te trekken met het HBO en WO.
            </h6>
            <a href="#" class="informatie__btn">Klik hier voor meer informatie!</a>

        </div>
        <div class="info__img">
            <img class="informatie__img" src="logo/groep_mensen.jpg" alt="">
        </div>
    </section>

    <!-- inschrijf formulier -->

    <div class="container">
        <form action="" method="post">
            <h2>registratie</h2>
            <div class="content">
                <div class="input-box">
                    <label for="name">Volledige naam</label>
                    <input type="text" placeholder="Voer volledige naam in" name="name" required>
                </div>
                <div class="input-box">
                    <label for="Username">Gebruikersnaam</label>
                    <input type="text" placeholder="vul je Gebruikersnaam" name="uname" required>
                </div>
                <div class="input-box">
                    <label for="email">E-mail</label>
                    <input type="email" placeholder="Enter voer je e-mailadres in" name="email" required>
                </div>
                <div class="input-box">
                    <label for="phone">Telefoon nummer</label>
                    <input type="tel" placeholder="telefoonnummer invoeren" name="phone" required>
                </div>
                <div class="input-box">
                    <label for="password">Wachtwoord</label>
                    <input type="password" placeholder="nieuw wachtwoord invoeren" name="password" required>
                </div>
                <div class="input-box">
                    <label for="confirm-password">bevestig het wachtwoord</label>
                    <input type="password" placeholder="bevestig uw wachtwoord" name="confirmPassword" required>
                </div>
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female">
                    <label for="female">Vrouw</label>
                    <input type="radio" name="gender" id="other">
                    <label for="other">Other</label>
                </div>
            </div>
            <div class="alert">
                <p>Door op aanmelden te klikken, gaat u akkoord met onze <a href="#">voorwaarden</a>, <a
                        href="#">privacybeleid</a> en <a href="#">cookiesbeleid</a>.</p>
            </div>
            <div class="button-container">
                <button type="submit">registratie</button>
            </div>
        </form>
    </div>
    <?php
require_once 'template-parts/footer.php';
?>