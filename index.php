<?php include("includes/header.php"); ?>

<section class="header">
	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-8">
				<?php include("includes/navbar.php"); ?>
				<?php include("includes/rotativo-home.php") ?>
			</div>
			<div class="col-sm-2">
			</div>
		</div>
	</div>
</section>

<section class="sec-sobre-icones">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="row text-center">
					<div class="col-sm-3 sobre-icone-social-div1">
						<img class="sobre-icone-img" src="img/sobre-icone1.png" alt="sobre-icone1">
						<img class="sobre-icones-separador" src="img/sobre-separador.png" alt="sobre-separador">
						<span class="sobre-icones-titulo">230+</span> <br>
						<div class="row">
							<span class="sobre-icones-desc">Servidores Ativos</span>
						</div>
						<div class="row">
							<img class="sobre-icones-linha sobre-nos-linha1" src="img/sobre-linha-cinza.png" alt="sobre-linha-cinza">
						</div>
					</div>
					<div class="col-sm-3 sobre-icone-social-div2">
						<img class="sobre-icone-img" src="img/sobre-icone2.png" alt="sobre-icone2">
						<img class="sobre-icones-separador" src="img/sobre-separador.png" alt="sobre-separador">
						<span class="sobre-icones-titulo">710+</span> <br>
						<div class="row">
							<span class="sobre-icones-desc">Clientes Ativos</span>
						</div>
						<div class="row">
							<img class="sobre-icones-linha sobre-nos-linha2" src="img/sobre-linha-cinza.png" alt="sobre-linha-cinza">
						</div>
					</div>
					<div class="col-sm-3 sobre-icone-social-div3">
						<img class="sobre-icone-img" src="img/sobre-icone3.png" alt="sobre-icone3">
						<img class="sobre-icones-separador" src="img/sobre-separador.png" alt="sobre-separador">
						<span class="sobre-icones-titulo">1985+</span> <br>
						<div class="row">
							<span class="sobre-icones-desc">Dias de Atividade</span>
						</div>
						<div class="row">
							<img class="sobre-icones-linha sobre-nos-linha3" src="img/sobre-linha-cinza.png" alt="sobre-linha-cinza">
						</div>
					</div>
					<div class="col-sm-3 sobre-icone-social-div4">
						<img class="sobre-icone-img" src="img/sobre-icone4.png" alt="sobre-icone4">
						<img class="sobre-icones-separador" src="img/sobre-separador.png" alt="sobre-separador">
						<span class="sobre-icones-titulo">100%</span> <br>
						<div class="row">
							<span class="sobre-icones-desc">Suporte Humanizado</span>
						</div>
						<div class="row">
							<img class="sobre-icones-linha sobre-nos-linha4" src="img/sobre-linha-cinza.png" alt="sobre-linha-cinza">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</section>

<section class="sobre-nos2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-4" id="sobre-nos2-esquerda">
				<img class="img-fluid" style="border-radius: 10px;" src="http://dummyimage.com/450x600/4d494d/686a82.gif&text=450x600px" alt="placeholder+image">
			</div>
			<div class="col-sm-4" id="sobre-nos2-direita">
				<p id="sobre-nos2-texto1">
					<img src="img/dot.png" alt=""> <span>SOBRE NÓS</span> <img src="img/dot.png" alt="dot">
				</p>
				<p id="sobre-nos2-texto2">
					Nós somos a <span>NextQ</span>
				</p>
				<p id="sobre-nos2-texto3">
					Empresa <strong>100% brasileira</strong>, formada por especialistas experientes, operando em servidores próprios
					na <strong>EQUINIX BRASIL</strong>, um dos maiores Data Centers do mundo, com rigorosos certificados de segurança
					para garantir os mais altos padrões de segurança e qualidade.
				</p>
				<!-- <img style="margin-left: 0px;" src="img/linha_pequena.png" alt="linha_pequena">
				<p id="sobre-nos2-texto4">
					Oferecemos <strong>tecnologias modernas baseadas em nuvem e serviços de consultoria e desenvolvimento.</strong> Trabalhamos forte para entregar a melhor experiência com produtos e serviços de qualidade, com um suporte prestativo e pronto para lidar com qualquer dúvida ou problema, não importa o grau de complexidade.
				</p>
				<p>
					<ul id="sobre-nos2-texto5" class="list-unstyled">
						<li><img src="img/ellipse.png" alt="ellipse"> Lorem ipsum dolor sit amet, consectetuer</li>
						<li><img src="img/ellipse.png" alt="ellipse"> Lorem ipsum dolor sit amet, consectetuer</li>
						<li><img src="img/ellipse.png" alt="ellipse"> Lorem ipsum dolor sit amet, consectetuer</li>
						<li><img src="img/ellipse.png" alt="ellipse"> Lorem ipsum dolor sit amet, consectetuer</li>
					</ul>
				</p> -->
				<button style="margin-top: 10px;" type="button" class="btn btn-padrao" onclick="window.location.href='sobre'">SOBRE
					NÓS</button>
				<button id="botao-contatenos-home" style="margin-top: 10px; margin-left: 25px;" type="button" class="btn btn-padrao" onclick="window.location.href='contato'">CONTATE-NOS</button>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</section>

<?php include("includes/pesquisa-dominio.php"); ?>
<?php include("includes/depoimentos.php"); ?>
<?php include("includes/tecnologias.php"); ?>
<?php include("includes/rodape-padrao.php"); ?>
<?php include("includes/footer.php"); ?>