<?php include("includes/header.php") ?>

<section class="header2">

	<div class="container-fluid text-center">
		<div class="row">

			<div class="col-sm-2">

			</div>

			<div class="col-sm-8">

				<?php include("includes/navbar.php"); ?>

				<p id="banner-fixo-texto1">
					<img src="img/dot.png" alt="dot"> <span>TEM DÚVIDAS, CRÍTICAS, SUGESTÕES?</span> <img src="img/dot.png" alt="dot">
				</p>

				<p id="banner-fixo-texto2">
					Fale <span>Conosco</span>
				</p>				

			</div>

			<div class="col-sm-2">

			</div>

		</div>
	</div>

</section>

<?php include("includes/sobre-icones-sociais.php") ?>

<section class="sec-contato">
	
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-2"></div>

			<div class="col-sm-8 text-center">

				<p id="contato-texto1">
					<img src="img/dot.png" alt="dot"> <span>ENVIE-NOS UMA MENSAGEM</span> <img src="img/dot.png" alt="dot">					
				</p>

				<p id="contato-texto2">
					Formulário de <span>contato</span>
				</p>

				<form id="formulario-contato" method="POST" action="functions/formularios/formulario-contato.php">
					<div class="form-row">
						<div class="form-group col-md-4">
							<input name="nome" autocomplete="new-password" type="text" class="form-control" placeholder="Seu nome completo" required="">
						</div>
						<div class="form-group col-md-4">
							<input name="email" autocomplete="new-password" type="email" class="form-control" placeholder="Seu e-mail" required="">
						</div>
						<div class="form-group col-md-4">
							<input id="telefone" name="telefone" autocomplete="new-password" type="tel" class="form-control" placeholder="Seu telefone">
						</div>
					</div>
					<div class="form-group">
						<textarea name="mensagem" style="resize: none;" placeholder="Sua mensagem" class="form-control" id="exampleFormControlTextarea1" rows="8" required=""></textarea>
					</div>

					<button type="submit" class="btn btn-padrao">ENVIAR E-MAIL</button>
				</form>
				
			</div>

			<div class="col-sm-2"></div>

		</div>
	</div>

</section>


<?php include("includes/rodape-contato.php") ?>

<?php include("includes/footer.php") ?>