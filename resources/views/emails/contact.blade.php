<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>mflgalaxy.com</h2>
    <p>Un nouveau mail d'un visiteur:</p>
    <ul>
      <li><strong>Nom</strong> : {{ $contact['nom'] }}</li>
	  <li><strong>Objet</strong> : {{ $contact['subject'] }}</li>
      <li><strong>Email</strong> : {{ $contact['email'] }}</li>
      <li><strong>Message</strong> : {{ $contact['message'] }}</li>
    </ul>
  </body>
</html>