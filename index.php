<?php session_start();
try {
	$dbConnection = new PDO("mysql:host=localhost;dbname=minhavoz","root","Root");
	$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	global $dbConnection;
	
 if(isset($_POST['id_assunto']))
 {
		try {
				$inserir = $dbConnection->prepare("INSERT into desabafos(status_moderacao,assunto,texto) VALUES (:status_moderacao,:assunto, :texto)");
				
				
				$status= "PENDENTE";
				$inserir->bindParam(":status_moderacao",$status,PDO::PARAM_STR);
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
<html lang="pt-BR">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <?php include 'head.php'?>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.3.3-min.js"></script>
 

</head>

<body id="page-top" class="index">

    <?php include 'menu.php';?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Seja bem-vinda!</div>
                <div class="intro-heading">Aqui escutamos e respeitamos você!</div>
                <a href="#diagnostico" class="page-scroll btn btn-xl" >Acho Que Sofri Violência e Agora?</a>
            </div>
        </div>
    </header>
    
	 <section id="diagnostico">
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
			  Infelizmente, a violência contra a mulher acontece com muitas de nós.</p> 
			  
			  <p class="large text-muted">O primeiro passo para sair da situação e ajudar a acabar com a violência contra a mulher é 
			  cuidar de si mesma. Procure ficar bem e segura tanto física como psicologicamente. 
			  Busque os serviços de apoio listados em  <a class="page-scroll" href="#violenciamulher">O que é violência contra a mulher</a>.</p>
			  
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
			  de julgarem seu comportamento ou acharem que o que aconteceu não é nada demais, ou mesmo que o que aconteceu é sua culpa. </p>
			  
			  <p class="large text-muted">Lembre-se: a culpa pela violência contra a mulher NUNCA é da mulher, não importa a roupa que você estava usando,
			  o que você estava fazendo, onde você estava, se a pessoa que cometeu violência é um parente ou mesmo companheiro. 
			  Não existe um “bom motivo” que justifique a violência contra a mulher.</p>
			  
			   <p class="large text-muted">
			   Faça parte dessa luta pelo fim da violência contra a mulher. Se você tem uma história sobre violência para contar, 
			   se aconteceu com você ou com alguém que você conhece, responda as perguntas em <a class="page-scroll" href="#questionario">Questionário</a>,
			   conte a história em <a class="page-scroll" href="#desabafo">Quero Desabafar</a>. </p>
			   
			   <p class="large text-muted">
			   Seus dados serão tratados de forma anônima, ninguém irá 
			   te procurar para fazer uma denúncia formal, você não será obrigada a nada. </p>
			   
			   <p class="large text-muted">
			   Mas responder às perguntas e contar a sua história seguir será importante para entender melhor
			   o que está acontecendo, como e em que lugares é possível pedir ajuda, o que é possível fazer
			   para acabar com o seu sofrimento.</p>

			   <p class="large text-muted">
			   Ao responder essas perguntas, você também estará dando 
			   uma ajuda muito importante para o fim da violência contra a mulher.
			   </p>
			   
			  <p class="large text-muted">
			   Quando se entende melhor quais os tipos de violência ocorrem, e como elas ocorrem, 
			   o poder público consegue pensar e oferecer programas de proteção à mulher e ações que 
			   irão proteger e assegurar o bem estar físico e psicológico de todas as mulheres brasileiras. 
			   </p>
			   
			   <p class="large text-muted">Ajudem-nos a vencer essa batalha!!!</p>
			</div>
		
		<br>
		<center><a href="./arvore/mostrararvore.php?arvore?" target="_blank" class="btn btn-xl">Iniciar</a></center>
	</section>
  
     <!-- Nosso objetivo -->
    <section id="nossavoz" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nossa Voz</h2>
                </div>
				
		
            <p class="large text-muted">
			 Criamos esse espaço para que as mulheres se sintam à vontade para contar compartilhar com
			 outras mulheres as experiências de violência que sofrem.
            </p>
			
			 <p class="large text-muted">
			 Se você chegou até aqui, provavelmente sofreu algum tipo violência contra a mulher ou viu acontecer com alguém próximo.
			 Somos um espaço virtual para que você entenda melhor o que aconteceu, possa desabafar, saber seus direitos e possibilidades,
			 buscar informações, compartilhar experiências com outras mulheres que sofreram coisas parecidas, ler depoimentos 
			 de outras mulheres, enfim, saber que você não está só.
			 </p>
          
		    <p class="pergunta">
             Mas o que pode ser considerado violência contra a mulher?
            </p>
			
			<p class="large text-muted">
             Acreditamos que qualquer ação que desrespeite o bem estar moral, psicológico e 
			 físico da mulher pode ser considerado uma forma de violência.
			 </p>

			 <p class="pergunta">
             E o que devemos considerar para saber se uma ação é violenta ou não?
			 Como sabemos se alguma ação é uma violência contra a mulher?
			 </p>
             
			 <p class="large text-muted">
             Para o Minha Voz, o que interessa é o ponto de vista da mulher que sofreu a violência. 
			 Se você sentiu uma ação como violenta, é porque ela é assim para você. Você não precisa da aprovação de ninguém para dizer 
			 se o seu sofrimento tem valor ou não. Esse sofrimento existe, e é tudo o que importa para nós.
             </p>
			  
			 <p class="pergunta">
             Por que contar o que aconteceu comigo é importante?
             </p/>
			 
			 <p class="large text-muted">
              A violência contra a mulher é um problema no mundo todo. Se considerarmos todas as formas de violência, desde as que nos 
			  fazem ficar mal emocionalmente, até as que nos machucam fisicamente, todas as mulheres já sofreram ou correm o risco de 
			  sofrer algum tipo de violência.</p>

			  <p class="large text-muted">
              Colaborar para o fim da violência é uma tarefa de todas nós. Contar sua história é importante por dois motivos:
			  </p>

			  <p class="large text-muted">
              1. Ao responder às perguntas do  <a href="#diagnostico" class="page-scroll" title="Acho Que Sofri Violência e Agora?">Acho Que Sofri Violência e Agora?</a>  você conseguirá entender melhor o que aconteceu com você. Quando você entende melhor isso, é possível saber mais sobre quais são os diferentes tipos de violência contra a mulher, quais são os seus direitos, quais são as coisas que você pode fazer para buscar ajuda, como se proteger, e como voltar a ficar bem, tanto fisica como psicologicamente, como combater a violência de modo geral.
              </p>
			  
			  <p class="large text-muted">
              2. Quanto mais informações existirem sobre a violência contra a mulher, será mais fácil para o governo e organizações pensarem e proporem ações para combater a violência. Sabe-se que geralmente as mulheres não conseguem denunciar, por uma série de motivos complicados que devemos entender e respeitar. Por causa disso, não se tem uma noção real da gravidade do problema e de quantas mulheres sofrem com a violência. Quando você conta o que aconteceu com você no Minha Voz, conseguimos ter mais dados para entender de modo cada vez mais preciso como acontece a violência contra a mulher no Brasil. Essas informações são fundamentais para o combate à violência.
              </p>
			  
			  <p class="pergunta">
              Mas o que acontece quando eu conto minha história aqui? Quem fica sabendo disso?
              </p>
			  
			  <p class="large text-muted">
              Todas as suas informações são anônimas no site. Nosso objetivo é oferecer um espaço onde as mulheres possam se sentir
			  bem para contar suas experiências que tenham a ver com violência contra a mulher. Portanto, o que você conta aqui não vira uma investigação da polícia ou legal. Ninguém tem acesso a suas informações.
              </p>
			  
			  <p class="large text-muted">
              No entanto, seus dados serão usados de forma anônima como informações para construir um retrato mais preciso da 
			  violência contra a mulher no Brasil.
			  </p>
			  
            </div>
           
        </div>
    </section>

    <!-- Apoiadores -->
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
	
	<!-- Violencia contra a mulher -->
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
                               <a href="http://clique180.org.br/" target="_blank" class="violencia">  <img class="img-circle img-responsive" src="img/projetos/click180.jpg" alt="">
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
							</a>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                               <a href="https://sistema3.planalto.gov.br//spmu/atendimento/atendimento_mulher.php" target="_blank" ><img class="img-circle img-responsive" src="img/projetos/rede.jpg"/></a>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                   <a href="https://sistema3.planalto.gov.br//spmu/atendimento/atendimento_mulher.php" class="violenciaInvertida"><h4>Rede de enfrentamento de violência contra a mulher</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted" >O conceito de rede de enfrentamento à violência contra as 
									mulheres diz respeito à atuação articulada entre as instituições/serviços governamentais,
									não-governamentais e a comunidade, </p>
                                </div>
                            </div></a>
                        </li>
						<li>
                            <div class="timeline-image">
                               <a href="http://chegadefiufiu.com.br/" target="_blank" class="violenciaInvertida">  <img class="img-circle img-responsive" src="img/projetos/chegadefiufiu.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Chega de fiu fiu</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
									A Chega de Fiu Fiu foi criada para lutar contra o assédio sexual em locais públicos.
									Mas queremos aqui também lutar contra outros tipos de violência contra a mulher.
									</p>
                                </div>
                            </div>
							</a>
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
						<p class="large text-muted">Esse site tem o compromisso de divulgar os direitos das pessoas em relação a questões de gênero, e auxilia-las da forma que
						for possível quando esses direitos são violados. </p>
	
						<p class="large text-muted">Mais que isso, nosso compromisso é com as pessoas que vem aqui buscar informações
						ou auxílio. </p>
	
						<p class="large text-muted">Por isso, sua identidade e seus dados são sigilosos aqui. </p>
	
						<p class="large text-muted">Não iremos entrar em contato sem consentimento sob nenhuma hipotese,</p>
	
						<p class="large text-muted">Desse modo, os dados serão usados de maneira geral para fortalecer políticas publicas de combate e enfrentamento à  
						violencia de gênero, sem identificar as pessoas envolvidas.</p>
				
				</div>
			</div>
		</div>
	</section> <!-- fim do anonimato-->
    
	<!-- Services Section -->
    <section id="direitodesrespeitado">
        <div class="container">
            <br><br>
			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Depoimentos</h2>
                </div>
            </div>
			<br><br><br>
            <div class="row text-center">
                <div class="col-md-4">
                    <!--<span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>-->
					<img src="img/logos/logo_bola.png"/>
                    <h4 class="service-heading">Quero Desabafar</h4>
                    <a class="page-scroll" href="#desabafo"><p class="text-muted">Procurando um lugar pra contar a sua história ou de alguém? clique aqui</p></a>
                </div>
				
                <div class="col-md-4">
                   	<img src="img/logos/computer.png"/>
                    <h4 class="service-heading">Desabafo de Outras Mulheres</h4>
                    <a class="page-scroll" href="#desabafosdeoutrasmulheres"><p class="text-muted">Você não está sozinha. Leia o que outras mulheres disseram</p></a>
                </div>
				
				  <div class="col-md-4">
                    <img src="img/logos/interrogacao.png"/>
                    <h4 class="service-heading">Questionário</h4>
                   <a class="page-scroll" href="#questionario"><p class="text-muted">
				   Entenda o que aconteceu com você e colabore com o Minha Voz. 
				   Responda ao nosso questionário, não é necessário identificação.
				   </p></a>
                </div>
            </div>
        </div>
    </section>
    

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
				$carrega = $dbConnection->prepare("SELECT * FROM `desabafos` where status_moderacao='MODERADO' ");
				$carrega->execute();
				
				while ($desabafos = $carrega->fetch(PDO::FETCH_ASSOC)) {
				    echo "<img src='img/logos/arrow.png' height='42' width='42' class='seta'>".$desabafos['assunto']."<br><br>";
					echo "<img src='img/logos/aspas.jpg' height='42' width='42' class='seta'>".$desabafos['texto']."<br><br>";
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
                    <h2 class="section-heading">QUESTIONÁRIO</h2>FAZER UMA DESCRIÇÃO PARA AQUI! </h3>
                </div>
            </div>
           
	 <div class="col-lg-12">
	 
	 
    <section id="questionario">
    <!-- Form Name -->
    <legend>Colabore! Sua voz pode ser libertadora!</legend>

    <div class="control-group">
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
			
			<label class="radio" for="radios-3">
				<input type="radio" name="proposito" id="proposito" value="Sim, já sei o que aconteceu, e quero saber mais sobre meus direitos e possibilidades de ação">
				Sim, já sei o que aconteceu, e quero saber mais sobre meus direitos e possibilidades de ação
			</label>
        </div>
     </div>

    <br>
	<div class="control-group">
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
     </div>

    
	<br>
	<div class="control-group">
		<label class="control-label" for="radios">Você acredita estar passando, ou já ter passado em algum momento
		na sua vida, alguma situação de gênero<br> que tenha considerado agressiva, e na qual tenha se sentido mal, 
		desconfortável, sem opções de reagir?</label>
		<br>
		<div class="controls">
			<label class="radio" for="radios-0">
				<input type="radio" name="situacao" id="situacao" value="Sim" checked="checked">
				Sim
			</label>
			<label class="radio" for="radios-1">
				<input type="radio" name="situacao" id="situacao" value="Não">
				Não
			</label>
		</div>
	</div>

    <br>
    <div class="control-group">
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
    </div>

	<br>
    <div class="control-group">
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
   </div>
   
   <br>
   <div class="control-group">
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
</div>

    
   <br>
   <div class="control-group">
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
</div>

  <br>
  <div class="control-group">
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
</div>

   <br>
   <div class="control-group">
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

   <br>
   <div class="control-group">
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
</div>

  <br>
  <div class="control-group">
  <label class="control-label" for="outro">Outro lugar, especifique:</label>
  <div class="controls">
    <input id="outroLugar" name="outroLugar" type="text" placeholder="Digite o lugar" class="input-xlarge">
    <p class="help-block">Ajuda</p>
  </div>
</div>

 <br>
 <div class="control-group">
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
  </div>

   <br>
   <div class="control-group">
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
   </div>

   <br>
  <div class="control-group">
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
  </div>

 
  <br>
  <div class="control-group">
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

	
	<input type="submit" id="minhavoz" name="minhavoz" value="Enviar">
			
	
	</fieldset>
	</form>
    

	</div>
	</section><!--end of questionnaire-->


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
	  
	  <!-- Quem somos -->
   <section id="quemsomos" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Quem Somos</h2>
                    <h3 class="section-subheading text-muted">Definicação?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/time/dani.jpg" class="img-responsive img-circle" alt="">
                        <h4>Dra. Daniela</h4>
                        <p class="text-muted">Filósofa  e Psicóloga</p>
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
                        <img src="img/time/rafael.jpg" class="img-responsive img-circle" alt="">
                        <h4>Rafael</h4>
                        <p class="text-muted">Estudante de Engenharia Elétrica</p>
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
                        <img src="img/time/salete.jpg" class="img-responsive img-circle" alt="">
                        <h4>Prof. Msc Salete</h4>
                        <p class="text-muted">Lead Developer</p>
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
        </div>
    </section>
    
    
      <!-- sessao de contatos -->
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
                                    <input type="tel" class="form-control" placeholder="Seu telefone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Sua mensagem *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button class="btn btn-xl">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	
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
                        <li><a href="#">Políticas de Privacidade</a>
                        </li>
                        <li><a href="#">Termos de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php include 'header.php' ?>
</body>

</html>
