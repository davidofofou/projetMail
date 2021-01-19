<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Prise de contact sur mon beau site</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom</strong> : {{ $contact ?? 'bonjour' }}</li>
      <li><strong>Email</strong> : {{ $contact ?? 'david@gmail.com' }}</li>
      <li><strong>Message</strong> : {{ $contact ?? 'je suis un homme' }}</li>
    </ul>
  </body>
</html>