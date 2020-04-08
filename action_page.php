
<?php
// Verifica daca au fost trimise datele de la formular
if (isset($_POST['email']) && isset($_POST['mesaj'])) {
    $to = 'constructii.eugen@gmail.com';                 // Adresa unde va fi trimis mesajul
    $subiect = 'Mesaj de pe site';
    $mesaj = $_POST['mesaj'];
    $from = 'From: '. $_POST['email'];

    // PHP trimite datele la serverul de e-mail
    if (mail($to, $subiect, $mesaj, $from)) {
              echo 'Mesajul a fost trimis cu succes.';
    }
    else {
              echo 'Eroare, mesajul nu a putut fi expediat.';
    }
}
?> 