<!DOCTYPE html>
<?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $correctPassword = 'crywank';
        $enteredPassword = $_POST['password'];
        if ($enteredPassword === $correctPassword) {
          header('Location: main-page.html');
          exit ();
        } else {
          echo '<p>Incorrect password. Please try again.</p>';
        }
      }
    ?>
  </div>
</body>
</html>