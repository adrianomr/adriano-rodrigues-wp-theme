

  
  <?php get_header(); ?>
  
    <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <img class="rounded-circle border-light mx-auto w-25 h-25 " src="<?php echo get_stylesheet_directory_uri();?>/img/index.jpg" alt="">
      <h1 class="text-uppercase mt-5 mb-0">Adriano de Mello Rodrigues</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Engenheiro de Computação - Técnico em Desenvolvimento de Software - Desenvolvedor de Software na SCADIAgro</h2>
    </div>
  </header>

  <!-- Professional Posts -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Posts</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <!-- inicio artigo -->
        <?php 
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post(); 
        ?>
        <div class="col-md-3 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
            <div class="portfolio-item-caption d-flex position-absolute mh-100 mw-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
                <?php if ( has_post_thumbnail()){ 
                        the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid', 'style'=>''));
                      }else{
                        echo '<img class="img-fluid" src="'.get_stylesheet_directory_uri().'/img/portfolio/cabin.png" alt="">';
                      } ?>
                </a>
          </a>
          <div>
          
            <a href="<?php echo the_permalink();?>"><?php echo the_title();?></a>
          </div>
        </div>
        <?php 
            }
          }else
            echo '<h1 class="my-5">Em breve...</h1>';
        ?>
        <!-- Fim artigo -->
      </div>
    </div>
  </section>


  <!-- About Section -->
  <section class="bg-primary text-white mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Sobre</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
        
          <p class="lead">
          Este blog foi idealizado através da leitura do livro <a class = "a-secondary" href="https://austinkleon.com/show-your-work/">"Show your work" - ("Mostre o seu trabalho")</a> de <a class = "a-secondary" href="https://austinkleon.com/">Austin Kleon</a>. O objetivo do site é compartilhar assuntos de interesse profissional, para promover o conhecimento e receber feedback a cerca dos assuntos compratilhados. Meu trabalho é com o desenvolvimento e a manutenção de um software construído para auxiliar a gerenciar empresas de Agronegócio. As principais tecnologias que utilizo atualmente são <a class = "a-secondary" href="https://www.java.com/pt_BR/">Java</a>, <a class = "a-secondary" href='https://www.microsoft.com/SQL'>SQLServer</a> e <a class = "a-secondary" href='https://www.mysql.com/'>MySQL</a>.
          </p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">
          Durante minha graduação em Engenharia de Computação na <a class = "a-secondary" href="https://www.furg.br/">FURG</a> trabalhei bastante com Java e C para desenvolver meus projetos.
          Para exemplificar, meu projeto de final de curso é um <a class = "a-secondary" href="https://github.com/adrianomr/VSFramework">Sistema Distribuído para Execução Paralela de Simulações de Triagem Virtual</a>. Este sistema foi construído para avaliar técnicas de Engenharia de Software de maneira prática e está disponível no meu repositório no GitHub.
          </p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">
          Pessoalmente, tenho grande interesse em Sistemas Distribuídos, Sistemas Inteligentes, Big Data, Computação de Alta Performance e Engenharia de Software. Resumindo, gosto de lidar com novos desafios e tecnologias. Acredito que quando lidamos com tecnologia, existe sempre uma maneira diferente de impactar positivamente a vida de alguém. Isso e a mudança contínua que observa-se na tecnologia me mantém motivado e são a razão para eu amar o meu trabalho. 
          </p>
        </div>
      </div>
      <div class="text-center mt-4">
        <a class=" btn btn-xl btn-outline-light" href="https://github.com/adrianomr/">
          <i class="fa fa-download mr-2"></i>
          Repositório GitHub
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Contato</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
    <!-- Bootstrap core JavaScript
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript 
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript 
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template
    <script src="js/freelancer.min.js"></script>
        -->
 
  <?php get_footer(); ?>


