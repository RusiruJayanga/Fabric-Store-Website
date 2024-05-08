<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>viztoza co</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header class="header">
      <a href="#" class="logo"> <i class="fas fa-wallet"></i> viztoza </a>

      <nav class="navbar">
        <a href="maintest.php">home</a>

        <a
          href="https://bot.dialogflow.com/c7a73d05-58f0-4d89-a291-3c8a99bdf809"
          target="_blank"
          >chatbot</a
        >
      </nav>

      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <div class="fas" id="login-btn"></div>
      </div>
      <form action="php/login.php" class="login-form" method="post">
        <h3>sign in</h3>
        <input
          type="email"
          name="email"
          placeholder="enter your email"
          id=""
          class="box"
        />
        <input
          type="password"
          name="password"
          placeholder="enter your password"
          id=""
          class="box"
        />
        <div class="remember">
          <input type="checkbox" name="" id="remember-me" />
          <label for="remember-me">remember me</label>
        </div>
        <button type="submit" name="submit" class="btn">sign in</button>
        <div class="links">
          <a href="">forget password</a>
          <a href="php/pages/signin.php">sign up</a>
        </div>
      </form>
    </header>

    <section class="contact" id="contact" style="margin-top: 50px">
      <form method="post"  action="checkout2.php">
        <input
          type="text"
          name="name"
          placeholder="Enter your user name"
          class="box"
        />
        <input
          style="width: 30%"
          type="submit"
          value="Search"
          class="btn"
        />
      </form>
    </section>

    <script src="test.js"></script>
  </body>
</html>
