<!DOCTYPE html>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<?php
   include_once "./assets/php/connectDB.php" 
 ?>
  <head>
    <title>DS WORK LTDA - Notícias</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/news.css" />
    <link rel="stylesheet" href="assets/css/all.css" />
  </head>

  <body class="is-preload">
    <!-- Header -->
    <header id="header">
      <a class="logo" href="index.html">DSWORK LTDA</a>
      <!-- Nav -->
      <nav id="nav_menu">
        <ul class="links">
          <li><a href="index.html">Home</a></li>
          <li><a href="news.php" style="color: #ce1b28">Notícias</a></li>
          <li><a href="client_area.html">Área do Cliente</a></li>
          <li><a href="contact.php">Contato</a></li>
        </ul>
      </nav>
    </header>

    <!-- Heading -->
    <div id="heading">
      <h1>Notícias</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
      <div class="inner">
        <div class="content">
        <?php
        $sql = "SELECT * FROM noticias ORDER BY `id` DESC LIMIT 5;";
        $result = mysqli_query($con,$sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck){
          while ($row = mysqli_fetch_assoc($result)){
              $title = $row['titulo'];
              $body = $row['corpo'];
              $img = $row['imagem'];

              echo "<div class = news_box>";
              echo '<img src="./images/'.$img.'" width = "100" height = "100"/> ';
              echo "<div class = news_text>";
              echo '<h2>'.$title.'</h2>';
              echo '<p>'.$body.'</p>';
              echo '</div> </div>';
              echo '<hr width="100%" />';
          }
        }
?>
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
