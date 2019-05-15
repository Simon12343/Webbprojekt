<?php
  require "header.php";
?>

  <main>
  <h1>Signup</h1>
  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfields") {
      echo '<p> Fyll i alla fält! </p>';
    }
    else if ($_GET['error'] == "invalidmailuid") {
      echo '<p>Invalid Username and e-mail!</p>';
    }
    else if ($_GET['error'] == "invaliduid") {
      echo '<p>Ogiltigt namn!</p>';
    }
    else if ($_GET['error'] == "invalidmail") {
      echo '<p> Oacceptabel e-mail!</p>';
    }
    else if ($_GET['error'] == "passwordcheck") {
      echo '<p>Dina lösenord matchar inte!</p>';
    }
    else if ($_GET['error'] == "usertaken") {
      echo '<p>Användarnamn upptaget!</p>';
    }
  }
  else if ($_GET['signup'] == "success") {
    echo '<p> Konto skapat! </p>';
  }
  ?>
  <form action="includes/signup.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="text" name="mail" placeholder="E-mail">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwd-repeat" placeholder="Repeat password">
    <button type="submit" name="signup-submit">Signup</button>
  </form>
  </main>

<?php
  require "footer.php";
?>
