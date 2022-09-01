<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="uft-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      mail("deinemail@mail.com", "Kontaktformular", 'Name: '.$_POST["name"].' Email: '.$_POST["email"].' Nachricht '.$_POST["message"]);
      ?>
      <h1 style="color: green;">Nachricht gesendet!</h1>
      <?php
    }
      ?>
    <form action="index.php" method="post">
      <input type="text" name="name" placeholder="Name" required
      <input type="email" name="email" placeholder="E-Mail" required
      <select name="priorität">
        <option value="hoch">Hoch</option>
        <option value="mittel">Mittel</option>
        <option value="gering">Gering</option>
      </select>
      <textarea name="message" rows="8" cols="80"></textarea>
      <button type="submit" name="submit">Senden</button>
      
    </form>
  </body>
</html>
