<?php session_start();
try {
	$dbConnection = new PDO("mysql:host=localhost;dbname=minhavoz","root","Root");
	$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	global $dbConnection;
	
 if(isset($_POST['id_assunto']))
 {
		try {
				$inserir = $dbConnection->prepare("INSERT into desabafos(assunto,texto) VALUES (:assunto, :texto)");
				
				$inserir->bindParam(":texto", $_POST['id_texto'],PDO::PARAM_STR);
				$inserir->bindParam(":assunto", $_POST['id_assunto'],PDO::PARAM_STR);
		
			
				if ($inserir->execute()) {
				  echo "Desabafo inseridos com sucesso";
				}
				else {
				 echo "Os dados não foram inseridos com sucesso.";
				}
			
		}
		catch (PDOException $error) {
			echo "Ocorreu um erro inesperado.";
			echo $error;
		}

	}  	
}
catch (PDOException $e) {
	echo "O site está indisponível no momento. Por favor, tente novamente mais tarde";
	exit();
}   
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <?php include 'head.php'?>
<link href="css/decisionTree.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.3.3-min.js"></script>
<script type="text/javascript" src="js/decisionTree.js"></script>   

</head>

<body id="page-top" class="index">

    <?php include 'menu.php';?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Seja bem-vinda!</div>
                <div class="intro-heading">Aqui escutamos e respeitamos você!</div>
                <a href="#questionnaire" class="page-scroll btn btn-xl" >Acho Que Sofri Violência e Agora?</a>
            </div>
        </div>
    </header>

	   <!-- Portfolio Grid Section -->
   <!-- sessao dos meus direitos '>
   <?php include 'meusdireitos.php'; ?>
    
	<!-- Services Section -->
    <section id="direitodesrespeitado">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tive Meu Direito Desrespeitado</h2>
                    <h3 class="section-subheading text-muted">Bem vindo ao minha voz. Somos uma iniciativa que pretende assegurar 
					a integridade e o bem estar psicológico, moral e físico relacionados à questão de gênero. Também buscamos promover 
					a conscientização sobre os direitos que envolvem questões de genero. Isso significa, em primeiro lugar, nosso
					compromisso com o bem estar das mulheres, mas não só delas. Todas as pessoas, independente de 
					sua opção sexual ou sexo, são bem vindas
                    </h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Questionário</h4>
					<br>
                   <a class="page-scroll" href="#questionnaire"><p class="text-muted">FAZER A DESCRIÇÃO DO QUESTIONÁRIO</p></a>
                </div>
			
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Desabafo</h4>
					<br>
                    <a class="page-scroll" href="#desabafo"><p class="text-muted">FAZER UMA PEQUENA DESCRIÇÃO PARA O DESABAFO</p></a>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Desabafo de Outras Mulheres</h4>
                    <a class="page-scroll" href="#desabafosdeoutrasmulheres"><p class="text-muted">FAZER UMA PEQUENA DESCRIÇÃO PARA O FÓRUM</p></a>
                </div>
            </div>
        </div>
    </section>

 
    <!-- About Section -->
    <section id="violenciamulher">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Violência Contra a mulher</h2>
                    <h3 class="section-subheading text-muted">Descrição</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/projetos/click180.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Click 180</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
									Informações sobre os tipos de violência contra as mulheres; 	
                                    <br>Uma ferramenta colaborativa para mapear os locais da cidade que oferecem riscos às mulheres. 	
									
									</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/projetos/rede.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Rede de enfrentamento de violência contra a mulher</h4>
                                    <h4 class="subheading">Física</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Psicológica</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Sexual</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
						  <li class="timeline-image">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Patrimonial</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
						  <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Moral</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
						  <li class="timeline-image">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Assédio Sexual</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
						  <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Violência Racial</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
						  <li class="timeline-image">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Lesbofobia</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
						 <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Violência Institucional</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
						 <li class="timeline-image">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Abuso Sexual</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
						<li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Assédio Moral</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
						<li class="timeline-image">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Exploração Sexual</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
						<li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Feminicídio</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
							<li class="timeline-image">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Tráfico de Pessoas</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
							<li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Assédio de Rua</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
							<li class="timeline-image">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
                                    <h4 class="subheading">Violência Obstretrícia</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Corra atrás
                                    <br>dos seus
                                    <br>Direitos!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

		 <!-- Sessao anonimato -->
	 <section id="anonimato">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Anonimato</h2>Você está sob sigilo. <br></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
	<br>
	<p>Esse site tem o compromisso de divulgar os direitos das pessoas em relação a questões de gênero, e auxilia-las da forma que
	for possível quando esses direitos são violados. </p>
	
	<p>Mais que isso, nosso compromisso é com as pessoas que vem aqui buscar informações
	ou auxílio. </p>
	
	<p>Por isso, sua identidade e seus dados são sigilosos aqui. </p>
	
	<p>Não iremos entrar em contato sem consentimento sob nenhuma hipotese,</p>
	
	<p>Desse modo, os dados serão usados de maneira geral para fortalecer políticas publicas de combate e enfrentamento à  
	violencia de gênero, sem identificar as pessoas envolvidas.</p>
				
				</div>
			</div>
		</div>
	</section> <!-- fim do anonimato-->
	
    <!-- Team Section -->
    <section id="nossoobjetivo" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nosso Objetivo</h2>
                </div>
				
					  
			  <p class="large text-muted">
			     Bem vindo ao minha voz. Somos uma iniciativa que pretende assegurar a integridade e o bem estar psicológico, moral 
			     e físico relacionados à questão de gênero.</p>
             
			  <p class="large text-muted">
				 Também buscamos promover a conscientização sobre os 
			     direitos que envolvem questões de genero.
              </p>
			 
			  <p class="large text-muted">
				Isso significa, em primeiro lugar, nosso compromisso com o bem estar das mulheres, mas não só delas. 
				Todas as pessoas, independente de sua opção sexual ou sexo, são bem vindas.
			  </p>
			  
            </div>
           
        </div>
           
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/apoio1.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/apoio2.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/apoio3.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/apoio4.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

      <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contato</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu nome*" id="name" required>
                                      <p class="help-block"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	 <section id="questionnaire">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   
				   <h2 class="section-heading">Conte-nos o que aconteceu com você</h2>
					
					<h3 class="section-subheading text-muted">
					 "Essa vergonha não é sua
					  Essa dor não é só sua
                      Mas o corpo é seu, a vida é sua, as escolhas são suas"</h3>
					  
                    <h3 class="section-subheading text-muted">Preservar sua identidade é um direito seu. Não o violaremos sob nenhuma
					hipotese. Voce é livre para voltar se sentir necessidade e se um dia quiser, fazer 
					algo a respeito. Estaremos aqui para isso.</h3>
					
                </div>
            </div>
         
	  <div class="row">
              <p class="large text-muted">Lembre-se: você não está sozinha. Se você está passando por um momento difícil, está sofrendo violência, 
			  estamos aqui para ajudar, escutar e compreender o que você está passando.</p>
			  
			  <p class="large text-muted">
			  Busque ajuda, converse a respeito do acontecido com pessoas de sua confiança. 
			  Infelizmente, a violência contra a mulher acontece com muitas de nós. 
			  O primeiro passo para sair da situação e ajudar a acabar com a violência contra a mulher é 
			  cuidar de si mesma. Procure ficar bem e segura tanto física como psicologicamente. 
			  Busque os serviços de apoio (listados em...).</p>
			  
			  <p class="large text-muted">
			  Um outro passo importante é dar seu apoio a projetos que lutam pelo fim da violência contra a mulher.
			  Se possível, responda as perguntas desse site; se quiser, conte sua história na seção depoimentos.
			  Nós garantimos que ninguém saberá quem é você e que é você quem está contando essa história.</p>
			  
			  <p class="large text-muted">
			  Você pode também entrar em contato com outras mulheres que estão passando pelo mesmo tipo de problema que você.
			  Um passo importante para sair da sua situação é conversar com pessoas que estão passando por situações parecidas, 
			  isso ajuda a entender que a culpa do que está acontecendo não é sua, que há uma saída para o problema,
			  que é possível viver uma vida melhor, sem dor e violência. Você sempre tem alternativas. </p>
			  
			  <p class="large text-muted">Conversar com mulheres que já passaram por isso ou estão passando nos dá esperança de que é possível superar a dor, o medo,
			  a humilhação, a vergonha, o receio de sofrer ainda mais violência, de não acreditarem ou duvidarem do que você está sofrendo, 
			  de julgarem seu comportamento ou acharem que o que aconteceu não é nada demais, ou mesmo que o que aconteceu é sua culpa. 
			  Lembre-se: a culpa pela violência contra a mulher NUNCA é da mulher, não importa a roupa que você estava usando,
			  o que você estava fazendo, onde você estava, se a pessoa que cometeu violência é um parente ou mesmo companheiro. 
			  Não existe um “bom motivo” que justifique a violência contra a mulher.</p>
			  
			   <p class="large text-muted">
			   Faça parte dessa luta pelo fim da violência contra a mulher. Se você tem uma história sobre violência para contar, 
			   se aconteceu com você ou com alguém que você conhece, responda as perguntas em (ljahsdflal),
			   conte a história em (alfdnalenonasd). Seus dados serão tratados de forma anônima, ninguém irá 
			   te procurar para fazer uma denúncia formal, você não será obrigada a nada. </p>
			   
			   <p class="large text-muted">
			   Mas responder às perguntas e contar a sua história seguir será importante para entender melhor
			   o que está acontecendo, como e em que lugares é possível pedir ajuda, o que é possível fazer
			   para acabar com o seu sofrimento. Ao responder essas perguntas, você também estará dando 
			   uma ajuda muito importante para o fim da violência contra a mulher.
			   </p>
			   
			  <p class="large text-muted">
			   Quando se entende melhor quais os tipos de violência ocorrem, e como elas ocorrem, 
			   o poder público consegue pensar e oferecer programas de proteção à mulher e ações que 
			   irão proteger e assegurar o bem estar físico e psicológico de todas as mulheres brasileiras. 
			   </p>
			   
			   <p class="large text-muted">Ajudem-nos a vencer essa batalha!!!</p>
			</div>
			
		
		
      
	  <?php 
	  if(isset($_POST['arvore']))
	  {
	     include 'showTree.html';
	     session_destroy();
	  }else
	  {
	    echo '<form action="index.php" method="post" action="showTree.html?arvore">';
	    echo '<input type="hidden" name="arvore" id="arvore" value="ok">';
        echo '<input type="submit" value="Iniciar">';
        echo '</form>';
	  }
	  ?>
			
    <fieldset>
<!-- Form Name -->
<!--<legend>Colabore! Sua voz pode ser libertadora!</legend>-->

<!-- Multiple Radios -->
 <!-- <div class="control-group">
	<label class="control-label" for="radios">Informação</label>
	<br>
		<div class="controls">
			<label class="radio" for="radios-0">
				<input type="radio" name="proposito" id="proposito" value="Quero apenas saber mais sobre meus direitos em relação a questões de gênero" checked="checked">
				Quero apenas saber mais sobre meus direitos em relação a questões de gênero
			</label>
    
			<label class="radio" for="radios-1">
				<input type="radio" name="proposito" id="proposito" value="Ainda não tenho certeza sobre o que aconteceu, e quero entender mais sobre isso">
				Ainda não tenho certeza sobre o que aconteceu, e quero entender mais sobre isso
			</label>
    
			<label class="radio" for="radios-2">
				<input type="radio" name="proposito" id="proposito" value="Já entendi bem o que aconteceu, ou ainda estou entendendo, mas tenho medo de falar disso com alguém">
				Já entendi bem o que aconteceu, ou ainda estou entendendo, mas tenho medo de falar disso com alguém
			</label>
			
			<label class="radio" for="radios-3">/
				<input type="radio" name="proposito" id="proposito" value="Sim, já sei o que aconteceu, e quero saber mais sobre meus direitos e possibilidades de ação">
				Sim, já sei o que aconteceu, e quero saber mais sobre meus direitos e possibilidades de ação
			</label>
  </div>
</div>-->

<!-- Multiple Radios -->
		<!--<div class="control-group">
			<label class="control-label" for="radios">Idade</label>
		<br>
			<div class="controls">
		
			<label class="radio" for="radios-0">
				<input type="radio" name="idade" id="idade" value="Tenho menos de dez anos" checked="checked">
				Tenho menos de dez anos
			</label>
    
			<label class="radio" for="radios-1">
				<input type="radio" name="idade" id="idade" value="Tenho entre dez e 18 anos">
				Tenho entre dez e 18 anos
			</label>
		
			<label class="radio" for="radios-2">
				<input type="radio" name="idade" id="idade" value="Tenho entre 18 e 35 anos">
				Tenho entre 18 e 35 anos
			</label>
		
			<label class="radio" for="radios-3">
				<input type="radio" name="idade" id="idade" value="Tenho acima de 35 anos">
				Tenho acima de 35 anos
			</label>
			</div>
</div>-->


<!-- Multiple Radios -->
	<!--<div class="control-group">
		<label class="control-label" for="radios">Você acredita estar passando, ou já ter passado em algum momento
		na sua vida, alguma situação de gênero<br> que tenha considerado agressiva, e na qual tenha se sentido mal, 
		desconfortável, sem opções de reagir?</label>
		<br>
		<div class="controls">
		<br>
			<label class="radio" for="radios-0">
				<input type="radio" name="situacao" id="situacao" value="Sim" checked="checked">
				Sim
			</label>
			<label class="radio" for="radios-1">
				<input type="radio" name="situacao" id="situacao" value="Não">
				Não
			</label>
		</div>
	</div>->

<br>
<!-- Multiple Radios -->
  <!--<div class="control-group">
	<label class="control-label" for="radios">Essa agressão foi de que tipo? </label>
	<br>
	<div class="controls">
		<label class="radio" for="radios-0">
			<input type="radio" name="tipo" id="tipo" value="A pessoa me disse coisas ou agiu de forma que me deixaram mal, triste ou com raiva" checked="checked">
			A pessoa me disse coisas ou agiu de forma que me deixaram mal, triste ou com raiva
		</label>
    
		<label class="radio" for="radios-1">
			<input type="radio" name="tipo" id="tipo" value="Houve um contato físico que eu não queria">
			Houve um contato físico que eu não queria
		</label>
		
		<label class="radio" for="radios-2">
			<input type="radio" name="tipo" id="tipo" value="Os dois casos acima">
			Os dois casos acima
		</label>
  </div>
</div>-->


<!-- Multiple Radios -->
<!--<div class="control-group">
	<label class="control-label" for="radios">Qual foi a intensidade da agressão</label>
	<br>
	<div class="controls">
		<label class="radio" for="radios-0">
			<input type="radio" name="intensidade" id="intensidade" value="Leve" checked="checked">
			Leve
		</label>
		<label class="radio" for="radios-1">
			<input type="radio" name="intensidade" id="intensidade" value="Média">
			Média
		</label>
		<label class="radio" for="radios-2">
		<input type="radio" name="intensidade" id="intensidade" value="Forte">
			Forte
		</label>
		<label class="radio" for="radios-3">
			<input type="radio" name="intensidade" id="intensidade" value="Extrema">
      Extrema
    </label>
  </div>
</div>-->


<!-- Multiple Checkboxes -->
<!--div class="control-group">
  <label class="control-label" for="checkboxes">Como você se sentiu?</label>
  <br>
  <div class="controls">
    <label class="checkbox" for="checkboxes-0">
      <input type="checkbox" name="sensacao" id="sensacao" value="Não acreditei que aquilo pudesse estar acontecendo">
      Não acreditei que aquilo pudesse estar acontecendo
    </label>
    <label class="checkbox" for="checkboxes-1">
      <input type="checkbox" name="sensacao" id="sensacao" value="Nada, não consegui fazer nada na hora">
      Nada, não consegui fazer nada na hora
    </label>
    <label class="checkbox" for="checkboxes-2">
      <input type="checkbox" name="sensacao" id="sensacao" value="Raiva">
      Raiva
    </label>
    <label class="checkbox" for="checkboxes-3">
      <input type="checkbox" name="sensacao" id="sensacao" value="Nojo">
      Nojo
    </label>
    <label class="checkbox" for="checkboxes-4">
      <input type="checkbox" name="sensacao" id="sensacao" value="Medo">
      Medo
    </label>
    <label class="checkbox" for="checkboxes-5">
      <input type="checkbox" name="sensacao" id="sensacao" value="Me senti sozinha">
      Me senti sozinha
    </label>
  </div>
</div>-->


<!-- Multiple Radios -->
<!--<div class="control-group">
  <label class="control-label" for="radios">Você conseguiu contar para alguém ou procurar ajuda?</label>
  <br>
  <div class="controls">
    <label class="radio" for="radios-0">
      <input type="radio" name="ajuda" id="ajuda" value="Sim" checked="checked">
      Sim
    </label>
    <label class="radio" for="radios-1">
      <input type="radio" name="ajuda" id="ajuda" value="Não">
      Não
    </label>
    <label class="radio" for="radios-2">
      <input type="radio" name="ajuda" id="ajuda" value="Não acho que tem ninguém que possa me ajudar quanto a isso">
      Não acho que tem ninguém que possa me ajudar quanto a isso
    </label>
    <label class="radio" for="radios-3">
      <input type="radio" name="ajuda" id="ajuda" value="Quero procurar ajuda, mas não sei o que fazer">
      Quero procurar ajuda, mas não sei o que fazer
    </label>
  </div>
</div>-->


<!-- Multiple Radios (inline) -->
<!-- <div class="control-group">
  <label class="control-label" for="radios">Você conhece seu agressor?</label>
  <br>
  <div class="controls">
    <label class="radio inline" for="radios-0">
      <input type="radio" name="conhece" id="conhece" value="Sim" checked="checked">
      Sim
    </label>
    <label class="radio inline" for="radios-1">
      <input type="radio" name="conhece" id="conhece" value="Não">
      Não
    </label>
  </div>
</div>-->


<!-- Multiple Radios -->
<!--div class="control-group">
	<label class="control-label" for="radios">Se sim, qual é o tipo da relação de vocês?</label>
	<br>
	<div class="controls">
		<label class="radio" for="radios-0">
			<input type="radio" name="relacao" id="relacao" value="Conheço de vista" checked="checked">
			Conheço de vista
		</label>
		<label class="radio" for="radios-1">
			<input type="radio" name="relacao" id="relacao" value="Conhecido">
			Conhecido
		</label>
		<label class="radio" for="radios-2">
			<input type="radio" name="relacao" id="relacao" value="Amigo">
			Amigo
		</label>
		<label class="radio" for="radios-3">
			<input type="radio" name="relacao" id="relacao" value="Chefe">
			Chefe
		</label>
		<label class="radio" for="radios-4">
			<input type="radio" name="relacao" id="relacao" value="Colega">
			Colega
		</label>
		<label class="radio" for="radios-5">
			<input type="radio" name="relacao" id="relacao" value="Familia">
			Familia
		</label>
		<label class="radio" for="radios-6">
			<input type="radio" name="relacao" id="relacao" value="Alguém proximo dos amigos ou familia">
			Alguém proximo dos amigos ou familia
		</label>
		<label class="radio" for="radios-7">
			<input type="radio" name="relacao" id="relacao" value="Vizinho">
			Vizinho
		</label>
		<label class="radio" for="radios-8">
			<input type="radio" name="relacao" id="relacao" value="Mora ou trabalha perto de mim">
			Mora ou trabalha perto de mim
		</label>
  </div>
</div>


<!-- Multiple Radios -->
<!--<div class="control-group">
	<label class="control-label" for="radios">Em que lugar isso aconteceu?</label>
	<br>
	<div class="controls">
		<label class="radio" for="radios-0">
			<input type="radio" name="lugar" id="lugar" value="Na minha casa" checked="checked">
			Na minha casa
		</label>
		<label class="radio" for="radios-1">
			<input type="radio" name="lugar" id="lugar" value="Na casa do agressor">
			Na casa do agressor
		</label>
		<label class="radio" for="radios-2">
			<input type="radio" name="lugar" id="lugar" value="No trabalho">
			No trabalho
		</label>
		<label class="radio" for="radios-3">
			<input type="radio" name="lugar" id="lugar" value="No caminho entre casa e trabalho">
			No caminho entre casa e trabalho
		</label>
		<label class="radio" for="radios-4">
			<input type="radio" name="lugar" id="lugar" value="Na rua">
			Na rua
		</label>
		<label class="radio" for="radios-5">
			<input type="radio" name="lugar" id="lugar" value="Na casa de algum amigo, familiar">
			Na casa de algum amigo, familiar
		</label>
		<label class="radio" for="radios-6">
			<input type="radio" name="lugar" id="lugar" value="Em outro lugar público.">
			Em outro lugar público.
		</label>
  </div>
</div>-->

<!-- Text input-->
<!--<div class="control-group">
  <label class="control-label" for="outro">Outro lugar, especifique:</label>
  <div class="controls">
    <input id="outroLugar" name="outroLugar" type="text" placeholder="Digite o lugar" class="input-xlarge">
    <p class="help-block">Ajuda</p>
  </div>
</div>-->

<!-- Multiple Radios -->
<!--<div class="control-group">
  <label class="control-label" for="radios">Qual a duração do fato?</label>
    <br>
	<div class="controls">
		<label class="radio" for="radios-0">
			<input type="radio" name="duracao" id="duracao" value="Rápido" checked="checked">
			Rápido
		</label>
		<label class="radio" for="radios-1">
			<input type="radio" name="duracao" id="duracao" value="Demorado">
			Demorado
		</label>
  </div>
</div>-->

<!-- Multiple Radios -->
<!--<div class="control-group">
  <label class="control-label" for="radios">Qual é a frequência que isso ocorre?</label>
  <div class="controls">
		<label class="radio" for="radios-0">
			<input type="radio" name="frequencia" id="frequencia" value="Uma única vez" checked="checked">
			Uma única vez
		</label>
		<label class="radio" for="radios-1">
			<input type="radio" name="frequencia" id="frequencia" value="Aconteceu algumas vezes">
			Aconteceu algumas vezes
		</label>
		<label class="radio" for="radios-2">
			<input type="radio" name="frequencia" id="frequencia" value="Várias vezes">
			Várias vezes
		</label>
		<label class="radio" for="radios-3">
			<input type="radio" name="frequencia" id="frequencia" value="sempre">
			Sempre
		</label>
  </div>
</div>-->

<!-- Multiple Radios -->
<!--<div class="control-group">
  <label class="control-label" for="radios">Voce gostaria de descrever um pouco o que aconteceu?</label>
  <br>
  <div class="controls">
    <label class="radio" for="radios-0">
      <input type="radio" name="acontecimento" id="acontecimento" value="Sim" checked="checked">
      Sim
    </label>
    <label class="radio" for="radios-1">
      <input type="radio" name="acontecimento" id="acontecimento" value="Não">
      Não
    </label>
  </div>
</div>-->

<!-- Multiple Radios -->
<!--<div class="control-group">
  <label class="control-label" for="radios">Você gostaria de buscar ajuda para auxilia-la com esse problema?</label>
  <br>
  <div class="controls">
		<label class="radio" for="radios-0">
			<input type="radio" name="auxilio" id="auxilio" value="Não" checked="checked">
			Não
		</label>
		<label class="radio" for="radios-1">
			<input type="radio" name="auxilio" id="auxilio" value="Ainda não">
			Ainda não
		</label>
		<label class="radio" for="radios-2">
			<input type="radio" name="auxilio" id="auxilio" value="Não, isso não é possível, só Quero desabafar(Lembre-se que temos a sessão Desabafar)">
			Não, isso não é possível, só Quero desabafar(Lembre-se que temos a sessão Desabafar)
		</label>
		<label class="radio" for="radios-3">
			<input type="radio" name="auxilio" id="auxilio" value="Sim, mas tenho medo (Lembre-se que você está sob sigilo absoluto)">
			Sim, mas tenho medo (Lembre-se que você está sob sigilo absoluto)
		</label>
		<label class="radio" for="radios-4">
			<input type="radio" name="auxilio" id="auxilio" value="Se isso fosse possível, como seria?">
			Se isso fosse possível, como seria?
		</label>
		<label class="radio" for="radios-5">
			<input type="radio" name="auxilio" id="auxilio" value="Sim">
			Sim
		</label>
  </div>
</div>
--->
	<!--
	<input type="submit" id="minhavoz" name="minhavoz" value="Enviar">
			
	
	</fieldset>
	</form>
    -->

	</div>
	</section><!--end of questionnaire-->
	
	
	<!-- inicio do desabafo de outras mulheres -->
	<section id="desabafosdeoutrasmulheres">
        <div class="container">
	       <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Desabafo de outras mulheres</h2>FAZER UMA DESCRIÇÃO PARA AQUI! </h3>
                </div>
            </div>
	       
		  <div class="row">
		   <?php
		   
		   try {
				$carrega = $dbConnection->prepare("SELECT * FROM `desabafos` ");
				$carrega->execute();
				
				while ($desabafos = $carrega->fetch(PDO::FETCH_ASSOC)) {
				    echo "<img src='img/logos/arrow.png' height='42' width='42' class='seta'>".$desabafos['assunto']."<br>";
					echo $desabafos['texto']."<br><br>";
				}
			}
			catch (PDOException $e) {
			}
		   
		   ?>
		   </div>
	
	    </div>
	</section>
	
	
	
	 <section id="desabafo"> <!-- inicio do desabafo -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Desabafo</h2>FAZER UMA DESCRIÇÃO PARA AQUI! </h3>
                </div>
            </div>
           
	 <div class="col-lg-12">


	<!-- Form Name - Meu Desabafo -->
	<legend>Meu Desabafo</legend>
    <p class="help-block">Todos os dados estão sob sigilo</p>

	<form action="index.php"  method="Post" name="form_desabafo" >

	<div class="col-md-6">
        <label class="form-group">Assunto:</label>
         <div class="form-group">
            <input class="form-control"   type="text" name="id_assunto" required placeholder="Digite o assunto *" />
            <p class="help-block"></p>
        </div>
     
  
    
	 <label class="form-group">Desabafo:</label>
       <div class="form-group">
         <textarea name="id_texto"  class="form-control" placeholder="Seu desabafo *"  required data-validation-required-message="Please enter a message."></textarea>
         <p class="help-block text-danger"></p>
        </div>
      
		<label class="control-label" for="singlebutton"></label>
	   <div class="controls">
		<button id="btn_depoimento" type="submit" name="btn_depoimento" class="btn btn-primary" class="form-group">Enviar</button>
	   </div>
	</div>
	</form>
	
		</div>
		
		</div>
	</section><!--end of Desabafo-->
	

	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; MinhaVoz 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Termos de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Lei Maria da Penha</h2>
                            <p class="item-intro text-muted">Descrição Lei Maria da Penha.</p>
                            <img class="img-responsive" src="img/portfolio/lei-maria-da-penha.jpg" alt="">
                            <p>A Lei Maria da Penha (Lei 11.340/2006) é a legislação que garante direitos e proteção às mulheres em situação de violência.</p>
                           
                               
                          
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar Direito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PortfPortfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                             <h2>Lei Maria da Penha</h2>
                            <p class="item-intro text-muted">Descrição Lei Maria da Penha.</p>
                            <img class="img-responsive" src="img/portfolio/lei-maria-da-penha.jpg" alt="">
                            <p>A Lei Maria da Penha (Lei 11.340/2006) é a legislação que garante direitos e proteção às mulheres em situação de violência.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar Direito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
							<h2>Lei Maria da Penha</h2>
                            <p class="item-intro text-muted">Descrição Lei Maria da Penha.</p>
                            <img class="img-responsive" src="img/portfolio/lei-maria-da-penha.jpg" alt="">
                            <p>A Lei Maria da Penha (Lei 11.340/2006) é a legislação que garante direitos e proteção às mulheres em situação de violência.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar Direito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                             <h2>Lei Maria da Penha</h2>
                            <p class="item-intro text-muted">Descrição Lei Maria da Penha.</p>
                            <img class="img-responsive" src="img/portfolio/lei-maria-da-penha.jpg" alt="">
                            <p>A Lei Maria da Penha (Lei 11.340/2006) é a legislação que garante direitos e proteção às mulheres em situação de violência.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar Direito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                             <h2>Lei Maria da Penha</h2>
                            <p class="item-intro text-muted">Descrição Lei Maria da Penha.</p>
                            <img class="img-responsive" src="img/portfolio/lei-maria-da-penha.jpg" alt="">
                            <p>A Lei Maria da Penha (Lei 11.340/2006) é a legislação que garante direitos e proteção às mulheres em situação de violência.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar Direito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                                <h2>Lei Maria da Penha</h2>
                            <p class="item-intro text-muted">Descrição Lei Maria da Penha.</p>
                            <img class="img-responsive" src="img/portfolio/lei-maria-da-penha.jpg" alt="">
                            <p>A Lei Maria da Penha (Lei 11.340/2006) é a legislação que garante direitos e proteção às mulheres em situação de violência.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fechar Direito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'header.php' ?>
</body>

</html>
