<!DOCTYPE html>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
  <?php 
  include_once "./assets/php/session.php";
  try{
    $db_ans = @$_GET['ans'];
    $style = @$_GET['style'];
  }
  catch(Exception $e){
    $db_ans = " ";
    $style = "auto;";
  }
  ?>
  <head>
    <title>Registro de Notícias - DSWORK LTDA</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/all.css" />
    <link rel="stylesheet" href="assets/css/news_register.css" />
  </head>

  <body class="is-preload">
    <!-- Header -->
    <header id="header">
      <a class="logo" href="index.html">DSWORK LTDA</a>
      <!-- Nav -->
      <nav id="nav_menu">
        <ul class="links">
          <li><a href="index.html">Home</a></li>
          <li><a href="news.php">Notícias</a></li>
          <li><a href="client_area.html" >Área do Cliente</a></li>
          <li><a href="contact.php">Contato</a></li>
        </ul>
      </nav>
    </header>
    <!-- Heading -->
    <div id="heading">
      <h1>Registro de Notícias</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
      <div class="inner">
        <div class="content">
          <header>
            <h2>Adicionar Notícias</h2>
            <p id="ans" style='color: <?php echo $style;?>'><?php echo $db_ans;?></p>
          </header>
          <form action="./assets/php/newsRegister.php" method="POST" enctype="multipart/form-data">
            <label for="title">Título</label>
            <input type="text" name="title" />
            <label for="body">Corpo do texto</label>
            <textarea cols="40" rows="10" name="body"></textarea>
            <label for="image">Imagem</label>
            <input type="file" name="image" />
            <input type="submit" value="Enviar" />
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
              <li><a href="./news.php">Notícias</a></li>
              <li><a href="./client_area.html">Área do Cliente</a></li>
              <li><a href="./contact.php">Contato</a></li>
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
          <a href="https://coverr.co">Coverr</a>, Template by templated.co.
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
