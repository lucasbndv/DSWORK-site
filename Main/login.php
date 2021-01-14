<!DOCTYPE html>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
  <head>
    <title>Generic Page - Industrious by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/all.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
  </head>

  <body class="is-preload">
    <!-- Header -->
    <header id="header">
      <a class="logo" href="index.html">DSWORK LTDA</a>
      <!-- Nav -->
      <nav id="nav_menu">
        <ul class="links">
          <li><a href="index.html">Home</a></li>
          <li><a href="news.html">Notícias</a></li>
          <li><a href="client_area.html">Área do Cliente</a></li>
          <li><a href="contato.html">Contato</a></li>
        </ul>
      </nav>
    </header>

    <!-- Heading -->
    <div id="heading">
      <h1>Página de Login</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
      <div class="inner">
        <div class="content">
          <form action="./assets/php/validaLogin.php" id="login_form" method="POST">
            <h2>Login</h2>
            <label for="user"> Usuário </label>
            <input type="text" name="user" />
            <label for="password">Senha</label>
            <input type="password" name="password"></input>
            <input type="submit" value="Login" />
          </form>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
      <div class="inner">
        <div class="content">
          <section>
            <h3>Sobre nós</h3>
            <p>
              A Empresa conta com grande experiência do seu fundador.
              Especializada nas áreas Administrativo-Financeira, Contabilidade e
              Recursos Humanos, passou a desenvolver trabalho de consultoria
              junto a empresas internacionais, condomínios e pequenas e médias
              empresas. A DS WORK possui alto grau de informatização e
              profissionais qualificados em outras áreas como Jurídica e
              Comunicação.
            </p>
          </section>
          <section>
            <h4>Seções do site</h4>
            <ul class="alt">
              <li><a href="./index.html">Home</a></li>
              <li><a href="./news.html">Notícias</a></li>
              <li><a href="./client_area.html">Área do Cliente</a></li>
              <li><a href="./contato.html">Contato</a></li>
            </ul>
          </section>
          <section>
            <h4>Redes Sociais</h4>
            <ul class="plain">
              <li>
                <a
                  href="https://www.facebook.com/DS-Work-ADM-e-Consultoria-111090494085157"
                  ><i class="icon fa-facebook">&nbsp;</i>Facebook</a
                >
              </li>
            </ul>
          </section>
        </div>
        <div class="copyright">
          &copy; 2021 DS WORK LTDA. Photos
          <a href="https://unsplash.co">Unsplash</a>, Video
          <a href="https://coverr.co">Coverr</a>.
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
