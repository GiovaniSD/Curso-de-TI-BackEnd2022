<?php
	include("dados.php");
	//var_dump($tutoriais);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#" title="" alt="">Home</a></li>
				<li><a href="#" title=" " alt=" ">Blog</a></li>
				<li><a href="#" title=" " alt=" ">Sobre</a></li>
				<li><a href="#" title=" " alt=" ">Contatos</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1> Venha Saborear as Delícias da Dona Rita!</h1>
                    </header>
                    <p>Nossas Refeições São Feitas Com Todo Carinho</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		<section class="main_marmita">
			<header class="main_marmita_header">
				<h2>Confira Nossas Marmitas</h2>
				<p>Aqui você encontra o nosso cardápio, escolha o seu!</p>
			</header>
			<?php
				foreach($marmitas as $key => $value){
			?>
			<article>
				<a href="paginicial.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
				}
			?>
			
		</section>
		
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
				<nav>
			<ul>
				<li><a href="#" title="" alt="">Nossas Páginas</a></li>
				<li><a href="#" title=" " alt=" ">Links Úteis</a></li>
				<li><a href="#" title=" " alt=" ">Sobre o Projeto</a></li>
				<li><a href="#" title=" " alt=" ">Contatos</a></li>
			</ul>
		</nav>
                    <h1>Quer receber todas as novidades e promoções?</h1>
                    <p>Informe seu nome e e-mail no campo ao lado, faça parte da nossa comunidade!</p>
                </header>
                <form action="paginaemail.php" method="POST">
                    <input type="text" name= "nome" placeholder="Seu nome">
                    <input type="email" name= "email" placeholder="Seu email">
                    <button>Enviar</button>
                </form>
            </div>
        </article>
        
	</main>

	
	<footer 
	        style="text-align: center; font-family: Calisto MT; font-size: 20px">
					Giovani Sales Dias 21065926-5 &copy; Direitos reservados.
    
	</footer>
</body>
</html>