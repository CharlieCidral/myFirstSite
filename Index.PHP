<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,user-scalable=0" />
	<link rel="stylesheet" type="text/css" href="estilo.css" />
	<title>Meu pirmeiro site</title>
</head>
<body>
<header>
	<aside>
		<nav>
			<div id="menuMobile" onclick="menuToggle()">
				<img src="/IMG/menu.png" width="40">
			</div>
			<div id="menu-area">
				<ul>
					<li><a href="AutoloadRegister.php">Home</a></li>
					<li><a href="">About</a></li>
					<li><a href="">News</a></li>
					<li><a href="">Store</a></li>
					<li><a href="">contact</a></li>
					<li><a href="">Suport</a></li>
					<li><a href="">Music</a></li>
					<li><a href="cadastro.php">Login</a></li>
					<li><a href="">Search</a></li>
					<li><a href="">Location</a></li>
				</ul>
			</div>
		</nav>
	</aside>
</header>	
	<section id="banner">
	 		<div class="banneresquerda">
	 			<div class="frase1">
	 				Frase de EFEITO
	 			</div>
	 			<div class="frase2">
	 				Outras frases que complementam a frase<br/>de efeito
	 			</div>
				<div class="botao">
	 				Acessar o produto
	 			</div>
	 		</div>
	 		<div class="bannerdireita">
	 			<img src="/IMG/homem.png">
	 		</div>
	</section>
	<div class="conteudo">
		<div class="conteudointerno">
			<div class="outrosprodutos">
				Outros Produtos
			</div>
			<div class="fotosgeral">
				<div class="fotos1">
					<img src="/IMG/banner1.jpg">
					<img src="/IMG/banner2.jpg">
				</div>
				<div class="fotos2">
					<img src="/IMG/banner3.jpg">
					<img src="/IMG/banner4.jpg">
				</div>
			</div>
		</div>
	</div>
	<div class="rodape">
		<div>Sua Empresa</div>
		<div><?php
		require('DateTime.php');
		?></div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script>
		function menuToggle(){
    let menuArea = document.getElementById("menu-area");

    if(menuArea.style.height =='400px'){
        menuArea.style.height = '0px';
    }else{
        menuArea.style.height = '400px';
    }
}
jQuery(function () {
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 40) {
       $("#menu-area").addClass("menu-diferente");
      } else {
       $("#menu-area").removeClass("menu-diferente");
      }
    });
  });
let d= new Date()
console.log(d);
	</script>
</body>
	
</html>