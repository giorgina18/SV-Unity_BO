<?php
require_once '../template-parts/header.php';
require_once 'db.php'; 



if (isset($_POST['name']) && !empty($_POST['name'])) {
    $fullname = $_POST['name'];
    $username = (isset($_POST['uname']) && !empty($_POST['uname']) ? htmlspecialchars( $_POST['uname']) : null);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $gender = $_POST['gender'] ?? '';

    // kijk of de wachtwoorden gelijk zijn
    if ($password !== $confirmPassword) {
        $error = "Wachtwoorden komen niet overeen!";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        try {
            $stmt = $conn->prepare("INSERT INTO registratie (fullname, username, email, phone, password, gender) 
                                    VALUES (:fullname, :username, :email, :phone, :password, :gender)");
            $stmt->execute([
                ':fullname' => $fullname,
                ':username' => $username,
                ':email' => $email,
                ':phone' => $phone,
                ':password' => $hashedPassword,
                ':gender' => $gender
            ]);

            $success = "Registratie gelukt! Je kunt nu inloggen.";
        } catch (PDOException $e) {
            $error = "Fout bij registratie: " . $e->getMessage();
        }
    }
}
?>

<div class="container__registratie">
    <form action="registratie.php" method="post">
        <h2>registratie</h2>

        <?php if (!empty($error)): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php elseif (!empty($success)): ?>
            <p style="color:green;"><?= $success ?></p>
        <?php endif; ?>

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
                <input type="email" placeholder="voer je e-mailadres in" name="email" required>
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
                <label for="confirm-password">Bevestig het wachtwoord</label>
                <input type="password" placeholder="bevestig uw wachtwoord" name="confirmPassword" required>
            </div>
            <span class="gender-title">Gender</span>
            <div class="gender-category">
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">Man</label>
                <input type="radio" name="gender" value="female" id="female">
                <label for="female">Vrouw</label>
                <input type="radio" name="gender" value="other" id="other">
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
