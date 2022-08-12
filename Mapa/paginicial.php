<?php
	include("dados.php");
	
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
		<img src="img/img11.jpg" width= "70px" alt="logo">
			<ul>
				<li><a href="#" title="" alt=" ">Home</a></li>
				<li><a href="#" title="" alt="">Sobre</a></li>
				<li><a href="#" title="" alt="">Contatos</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		
		<section class="main_marmita">
			<header class="main_marmita_header">
				<h1>Confira Nossas Marmitas</h1>
				<p>R$15,90 / 500g</p>
			</header>
			<?php
                $id = $_GET['id'];
                echo "id = " . $id;

				foreach($marmitas as $key => $value){
                    if($value['id'] == $id){
			?>
			<article>
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
			</article>
			<?php
                    }
				}
			?>
			
		</section>


        <section class="main_marmita">
			<header class="main_marmita_header">
				
				<p></p>
			</header>
			<?php
				foreach($marmitas as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><?=$value['titulo'];?></h2>
	    	</article>
			<?php
                    }
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
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
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