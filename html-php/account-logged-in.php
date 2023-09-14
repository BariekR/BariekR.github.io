<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zahy's market / Account</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/account-style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
  </head>
  <body class="account-background">
    <div class="account-container">
      <div class="form-container">
        <div class="form-itself">
          <div class="form-heading m-b-large">
            <h1 class="form-headline">User account</h1>            
          </div>
          <div class="flex-column gap-medium m-b-medium">
            <div class="font-label">Full name</div>
            <div class="font-input style-input m-b-small">
              <?php
                session_start();
                echo $_SESSION['loggedInUser'];
              ?>
            </div>
            <div class="font-label">E-mail</div>
            <div class="font-input style-input">
              <?php
                echo $_SESSION['loggedInEmail'];
              ?>
            </div>
          </div>
          <form action="./process-logout.php" method="post">
            <button
            type="submit"
            class="btn-subscribe m-b-small"
            id="account-button"
            >
            Log out
            </button>
          </form>          
        </div>
      </div>
      <div class="logo-container">
        <div class="circle">
          <i class="ph-duotone ph-wave-sawtooth header-logo"></i>
        </div>
        <h1 class="h1-header">Zahy's market</h1>
      </div>
      <a href="./index.php"><i class="ph ph-x"></i></a>
    </div>

    <script type="text/javascript" src="../js/account-validation.js"></script>
  </body>
</html>
