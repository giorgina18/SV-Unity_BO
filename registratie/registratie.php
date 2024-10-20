<?php
require_once '../template-parts/header.php';
?>

<div class="container__registratie">
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
require_once '../template-parts/footer.php';
?>