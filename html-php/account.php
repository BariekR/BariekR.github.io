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
        <form class="form-itself" action="./process-login.php" method="post">
          <div class="form-heading m-b-large">
            <h1 class="form-headline">Login to your account</h1>
            <p class="form-subheadline">
              Do not have an account? Register
              <a href="./register.php" class="anchor">here</a>
            </p>
          </div>
          <div class="flex-column gap-medium m-b-medium">
            <label class="font-label" for="form-email">E-mail</label>
            <input
              class="font-input style-input"
              type="email"
              id="form-email"
              name="form-email"
              placeholder="Your e-mail"
              required
            />
          </div>
          <div class="flex-column gap-medium m-b-medium">
            <label class="font-label" for="form-pass">Password</label>
            <input
              class="font-input style-input"
              type="password"
              id="form-pass"
              name="form-pass"
              placeholder="Your password"
              required
            />
          </div>
          <button
            type="submit"
            class="btn-subscribe m-b-small"
            id="account-button"
          >
            Log in
          </button>
          <p class="invalid-login">
            <?php  
              if(isset($_GET['invalidLoginInfo'])){
                echo $_GET['invalidLoginInfo'];
              }
            ?>
          </p>
        </form>
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
