# SV-Unity_BO

les 1: De opdracht was om de back-end security te versterken, zodat gebruikers niet te maken krijgen met broken access control.
voorbeeld: zodat mensen niet in de link andere gegevens kunnen opzoeken zoals je vrienden zijn bank gegevens waardoor je dan zijn saldo / bankgegevens kunt zien.

les 2: 
Wat is symmetrische cryptografie: Er wordt één enkele sleutel gebruikt voor zowel versleutelen (encryptie) als ontsleutelen (decryptie) voordeel daarvan is dat het snel en effiecient is en geschikte voor grote hoeveelheid data, de nadeel ervan is dat de sleutel veilig gedeeld moet worden met de ontvanger, als iemand dan de sleutel onderschept kan die persoon alle data inlezen.
voorbeelden ervan:
-AES Advanced Encryption Standard
-DES Data Encryption Standard, verouderd
praktijk toepassingen: versleutel van je bestanden op je harde schijf 
VPN-verbindingen gebruiken vaak symmetrische algoritmes om de datastroom snel te versleutelen.

Wat is asymmetrische cryptografie:
Werkt met een sleutelpaar, een publieke sleutel (is voor iedereen toegankelijk) en een private sleutel (geheim). Versleutelen doe je vaak met de publieke sleutel, Ontsleutelen alleen met de bijbehorende private sleutel zo dat mensen niet alles kunnen inlezen als het fout gaat. voordeel ervan is dat er Geen noodzaak is om een geheime sleutel te delen je kunt veilig communiceren zonder elkaar eerst te ontmoeten. de nadeel ervan is dat het trager is en rekenintensiever dan symmetrische cryptografie.
voorbeelden ervan:
-RSA
-Elliptic Curve Cryptography (ECC)
praktijk toepassingen:
Asymmetrische cryptografie gebruik je bij HTTPS voor veilige websites,bij digitale handtekeningen om echtheid te bewijzen,en bij e-mailencryptie zoals PGP.
