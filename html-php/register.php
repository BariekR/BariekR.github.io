<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zahy's market / Register</title>
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
        <form class="form-itself" action="./process-register.php" method="post">
          <div class="form-heading m-b-large">
            <h1 class="form-headline">Create new account</h1>
            <p class="form-subheadline">
              Already have an account? Login
              <a href="./account.php" class="anchor">here</a>
            </p>
          </div>
          <div class="flex-column gap-medium m-b-medium">
            <label class="font-label" for="form-fullName">Full name</label>
            <input
              class="font-input style-input"
              type="text"
              id="form-fullName"
              name="reg-name"
              placeholder="Your full name"
              required
            />
          </div>
          <div class="flex-column gap-medium m-b-medium">
            <label class="font-label" for="form-email">E-mail</label>
            <input
              class="font-input style-input"
              type="email"
              id="form-email"
              name="reg-email"
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
              name="reg-pass"
              placeholder="Your password (at least 8 characters)"
              required
            />
          </div>
          <div class="flex-column gap-medium m-b-medium">
            <label class="font-label" for="form-re-pass"
              >Confirm password</label
            >
            <input
              class="font-input style-input"
              type="password"
              id="form-re-pass"
              placeholder="Re-enter password"
              required
            />
          </div>
          <div class="m-b-medium">
            <input type="checkbox" id="form-check" required />
            <label class="font-label-check" for="form-check"
              >I agree to the
              <a class="anchor-conditions" href="#">terms and conditions</a> of
              Zahy's market.</label
            >
          </div>
          <button
            type="submit"
            class="btn-subscribe m-b-small"
            id="account-button"
          >
            Create account
          </button>
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

    <script type="text/javascript" src="../js/register-validation.js"></script>
  </body>
</html>
