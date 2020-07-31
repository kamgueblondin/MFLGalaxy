<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>mflgalaxy.com</h2>
    <p>Un nouveau mail d'un visiteur:</p>
    <ul>
      <li><strong>Nom</strong> : {{ $contact['name'] }}</li>
	  <li><strong>Email</strong> : {{ $contact['email'] }}</li>
      <li><strong>Message</strong> : {{ $contact['message'] }}</li>
      <li><strong>Parent</strong> : {{ $contact['parent'] }}</li>
	  <li><strong>Age</strong> : {{ $contact['age'] }}</li>
      <li><strong>Grade</strong> : {{ $contact['grade'] }}</li>
      <li><strong>Choice</strong> : {{ $contact['choice'] }}</li>
	  <li><strong>Primary Course</strong> : {{ $contact['primary_course'] }}</li>
	  <li><strong>Additional Course</strong> : {{ $contact['additional_course'] }}</li>
	  <li><strong>gender</strong> : {{ $contact['gender'] }}</li>
    </ul>
  </body>
</html>