<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
  <title>YOUR OPTION - Plano de Manutenção, Operação e Controle</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="your option, plano de operação, plano de manutenção, plano de controle, manutenção de ar condicionado" name="keywords">
  <meta content="A Your Option vem evoluindo em qualidade, prestação de serviço e qualificação de seus profissionais. Estamos no segmento de restauração, manutenção preventiva, preditiva, corretiva, análises e correções de projetos (mudança de Layout) relacionados a condicionadores de ar e torres de resfriamento, visando a transparência dos seus trabalhos executados em campo e, assim sintonizando a comunicação com seus clientes. " name="description">


    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
	
</head>

<body>
	
			
<?php

$mensagemHTML = 
"
Você tem uma nova mensagem:\n
Via: http://www.your-option.com.br/\n
Detalhes da Mensagem:\n
Nome: ".$nome.
"\n\n E-mail: ".$email.
"\n\n Telefone: ".$telefone.
"\n\n Assunto: ".$assunto.
"\n\n Mensagem: ".$message."
\n\n Este e-mail foi enviado automaticamente através do site da Your-Option. Não responda.";
			$emailsender='contato@your-option.com.br';
			$emaildestinatario='contato@your-option.com.br';
			$assunto = "Nova mensagem atraves do seu site, de: ".$email;
			$headers = "MIME-Version: 1.1\n";
			$headers .= "Content-type: text/plain; charset=utf-8\n";
			$headers .= "From: no-reply@your-option.com.br\r\n"; //E-mail do remetente
			$headers .= "Return-Path: Your Option <contato@your-option.com.br>\r\n"; //E-mail do remetente 
			/*$headers .= "Reply-To: contato@your-option.com.br\n" */
			$headers .= "X-Priority: 1\n";
	if($email !=""){
		
		if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
		
		$headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
		mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
			
		$headers .= "From: Nova mensagem através do seu site <contato@your-option.com.br>\n";
		
		}
			
	}
?>
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3 class="center">Your Option</h3>
              <p class="center">
			  Venha tomar um café conosco.
			  </p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Avenida Prestes Maia, 1346<br>Taboão, Diadema, SP, CEP: 09930-270</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>contato@your-option.com​.br</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>Tel: (11) 4079-2737 / (11) 4056-2635<br>Cel: (11) 96783-1267</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Sua mensagem foi enviada com sucesso. Em breve retornaremos o seu contato. Obrigado!</div>
              <div id="errormessage"></div> 
			  <form action="enviar_mensagem.php" method="post" role="form" class="contactForm" autocomplete="off">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="nomeremetente" class="form-control" id="nomeremetente" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Por favor, insira pelo menos 4 caracteres" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="emailremetente" id="emailremetente" placeholder="Seu Email" data-rule="email" data-msg="Por favor, insira um e-mail válido" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" data-rule="minlen:4" data-msg="Por favor, insira pelo menos 8 caracteres no assunto" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="mensagem" id="mensagem" rows="5" data-rule="required" data-msg="Por favor, escreva algo para nós" placeholder="Mensagem"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Enviar mensagem</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>

    </section><!-- #contact -->

	
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.015108493615!2d-46.61657618516329!3d-23.675417684626375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce45910c80cab9%3A0x68e5fe4b7fc5b35b!2sYour+Option+Plano+de+manuten%C3%A7%C3%A3o+opera%C3%A7%C3%A3o+e+controle!5e0!3m2!1spt-BR!2sbr!4v1536689532899" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Your Option</strong>. Todos os Direitos Reservados
          </div>
          <div class="credits">

            Desenvolvido por <a href="">Solution Cloud</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">Quem Somos</a>
            <a href="#">Política de Privacidade</a>
            <a href="#">Termos de Uso</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>