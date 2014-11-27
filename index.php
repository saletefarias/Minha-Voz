<?php session_start();
try {
	$dbConnection = new PDO("mysql:host=localhost;dbname=minhavoz","root","Root");
	$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
 if(isset($_POST['id_texto']))
 {
    echo "ENTREIIIIIIIIIIIIIIIIIII";
		global $dbConnection;
		try {
				$inserir = $dbConnection->prepare("INSERT desabafos usuarios(assunto,texto,longitude, latitude) VALUES (:assunto, :texto, :longitude,:latitude)");
				
		
				$inserir->bindParam(":assunto", $_usuario, PDO::PARAM_STR);
				$inserir->bindParam(":texto", $_hash, PDO::PARAM_STR);
				$inserir->bindParam(":longitude", $_tipo, PDO::PARAM_STR);
				$inserir->bindParam(":latitude", $_tipo, PDO::PARAM_STR);
				
				if ($inserir->execute()) {
					
				  echo "Dados inseridos com sucesso";
				}
				else {
				 echo "Os dados não foram inseridos com sucesso.";
				}
			
		}
		catch (PDOException $error) {
			echo "Ocorreu um erro inesperado.";
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
                <a href="#questionnaire" class="page-scroll btn btn-xl" >Iniciar Diagnóstico de Análise</a>
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
                    <a class="page-scroll" href="#desabafo"><p class="text-muted">FAZER A DESCRIÇÃO PARA O DESABAFO</p></a>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Desabafo de Outras Mulheres</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>-->
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
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma coisa</h4>
                                    <h4 class="subheading">Doméstica<h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">DESCRIÇÃO</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Alguma Coisa</h4>
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
    <section id="mapa" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Quem Somos</h2>
                    <h3 class="section-subheading text-muted">Descrição</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Daniela</h4>
                        <p class="text-muted">OCUPACAO</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Rafael</h4>
                        <p class="text-muted">OCUPACAO</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Salete</h4>
                        <p class="text-muted">OCUPACAO</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">DESCRIÇÃO DESSA PARTE</p>
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
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contato</h2>
                    <h3 class="section-subheading text-muted">Caso tenha alguma sugestão, crítica ou elogio entre em contato conosco!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Seu nome *" id="name" required data-validation-required-message="Por favor, insira o seu nome.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Seu email *" id="email" required data-validation-required-message="Por favor insira o seu email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Seu telefone*" id="phone" required data-validation-required-message="Por favor, insira seu número de telefone.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua mensagem *" id="message" required data-validation-required-message="Por favor, insira a sua mensagem."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar mensagem</button>
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
                    <h2 class="section-heading">Questionário</h2>
                    <h3 class="section-subheading text-muted">Preservar sua identidade é um direito seu. Não o violaremos sob nenhuma
					hipotese. Voce é livre para voltar se sentir necessidade e se um dia quiser, fazer 
					algo a respeito. Estaremos aqui para isso.</h3>
                </div>
            </div>
         
	 	<!-- Button trigger modal -->
		
		
      
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
<br>
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

<br>
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

<br>
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

<br>
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

<br>
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

<br>
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

<br>
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
  </div>-->
</div>

<br>
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

<br>
<!-- Text input-->
<!--<div class="control-group">
  <label class="control-label" for="outro">Outro lugar, especifique:</label>
  <div class="controls">
    <input id="outroLugar" name="outroLugar" type="text" placeholder="Digite o lugar" class="input-xlarge">
    <p class="help-block">Ajuda</p>
  </div>
</div>-->

<br>
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

<br>
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

<br>
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

<br>
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
<br>

	
	<input type="submit" id="minhavoz" name="minhavoz" value="Enviar">
			
	
	</fieldset>
	</form>

	
	
	</div>
	</section><!--end of questionnaire-->
	
	
	 <section id="desabafo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Desabafo</h2>FAZER UMA DESCRIÇÃO PARA AQUI! </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
	
	<form class="form-horizontal">
	<fieldset>

	<!-- Form Name - Meu Desabafo -->
	<legend>Meu Desabafo</legend>
    <p class="help-block">Todos os dados estão sob sigilo</p>
	
	
	<form action="index.php"  method="post">
	<!-- Text input-->
	<div class="control-group">
		<label class="control-label" for="textinput">Assunto:</label>
	
	<div class="controls">
		<input id="assunto" name="textinput" type="text" placeholder="Insira seu assunto" class="input-xlarge">
	</div>
	</div>

	<!-- Textarea -->
	<div class="control-group">
		<label class="control-label" for="textarea" >Texto</label>
	<div class="controls">    
        <br>	
		<textarea id="id_texto" name="textarea"></textarea>
	</div>
	</div>
	

	<!-- Button -->
	<div class="control-group">
		<label class="control-label" for="singlebutton"></label>
	<div class="controls">
		<button id="btn_depoimento" type="submit" name="singlebutton" class="btn btn-primary">Enviar</button>
	</div>
	</div>
	</form>
    
	</fieldset>
	</form>
	
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
