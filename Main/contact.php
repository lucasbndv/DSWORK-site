<!DOCTYPE html>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
  <?php  
  try{
    $ans = @$_GET['ans'];
    $style = @$_GET['style'];
  }catch(Exception $e){
    $ans = " ";
    $style = "auto";
  }?>
  <head>
    <title>DS WORK LTDA - Contato</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/contact.css" />
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
          <li><a href="news.php">Notícias</a></li>
          <li><a href="client_area.html">Área do Cliente</a></li>
          <li><a href="contact.php" style="color: #5674b6">Contato</a></li>
        </ul>
      </nav>
    </header>

    <!-- Heading -->
    <div id="heading">
      <h1>Contato</h1>
    </div>

    <!-- Main -->
    <section id="main" class="wrapper">
      <div class="inner">
        <div class="content">
          <form action="./assets/php/mail.php" method="POST" id="form" enctype=”multipart/form-data”>
            <h2>Fale conosco</h2>
            <p style='color:<?php echo $style;?>'><?php echo $ans;?></p>
            <label for="name">Nome</label>
            <input type="text" name="name" size="40" />
            <label for="email">Email</label>
            <input type="email" name="email" size="40" />
            <label for="subject">Assunto</label>
            <input type="text" name="subject" size="40" />
            <label for="message">Mensagem</label>
            <textarea cols="40" rows="10" name="body"></textarea>
            <input type="submit" value=" Enviar " class="primary" />
          </form>

          <div class="contact_info">
            <h2>Informações</h2>
            <p>info@dswork.com.br - <strong>Administração Geral</strong></p>
            <p>comercial@dswork.com.br - <strong>Comercial</strong></p>
            <p>condominios@dswork.com.br - <strong>Condomínio</strong></p>
            <p><strong>Telefone(1):</strong>(21) 2581-7330</p>
            <p><strong>Telefone(2):</strong>(21) 2143-9605</p>
            <p><strong>Telefone(3):</strong>(21) 3880-2926</p>
            <p>
              <strong>Localização:</strong>Rua Dias da Cruz, 47 - 207, Meier -
              RJ - Rio de Janeiro.
            </p>
            <iframe
              id="map"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
              src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=+Rua+Dias+da+Cruz,+47&amp;aq=&amp;sll=-22.066441,-42.924029&amp;sspn=3.980356,7.498169&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Dias+da+Cruz,+47+-+M%C3%A9ier,+Rio+de+Janeiro,+20720-010&amp;t=m&amp;ll=-22.902022,-43.279127&amp;spn=0.002866,0.004603&amp;z=17&amp;output=embed"
            ></iframe>
          </div>
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
