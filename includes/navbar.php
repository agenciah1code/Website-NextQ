<nav class="navbar navbar-expand-lg navbar-dark menu" style="width: 100%; display: flex;">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<a class="navbar-brand" href="/" style="justify-content: flex-start; background: none;">
		<img src="img/logotipo.png" alt="Logotipo NextQ" style="height: 50px;">
	</a>

	<div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: flex-end;">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a id="menu-home" class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item dropdown active">
				<a id="menu-produtos" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Produtos
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#"><img class="icone-menu" src="img/icone_cloud.png" alt="icone_cloud"> Cloud Computing</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="cloud-computing-br"><img class="flags-menu" src="img/icone_brasil.png" alt="icone_brasil"> Brasil</a></li>
							<div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="cloud-computing-ca"><img class="flags-menu" src="img/icone_canada.png" alt="icone_canada"> Canadá</a></li>
						</ul>
					</li>
					<div class="dropdown-divider"></div>
					<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#"><img src="img/icone_hospedagem.png" alt="icone_hospedagem" class="icone-menu"> Hospedagem</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="hospedagem-br"><img class="flags-menu" src="img/icone_brasil.png" alt="icone_brasil"> Brasil</a></li>
							<div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="hospedagem-ca"><img class="flags-menu" src="img/icone_canada.png" alt="icone_canada"> Canadá</a></li>
						</ul>
					</li>
					<div class="dropdown-divider"></div>
					<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#"><img src="img/icone_revenda_hospedagem.png" alt="icone_revenda_hospedagem" class="icone-menu"> Revenda de Hospedagem</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="revenda-hospedagem-br"><img class="flags-menu" src="img/icone_brasil.png" alt="icone_brasil"> Brasil</a></li>
							<div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="revenda-hospedagem-ca"><img class="flags-menu" src="img/icone_canada.png" alt="icone_canada"> Canadá</a></li>
						</ul>
					</li>
					<div class="dropdown-divider"></div>
					<li class="nav-item active">
						<a class="dropdown-item" href="#"><img src="img/icone_backup.png" alt="icone_backup" class="icone-menu"> Backup Online</a>
					</li>
				</ul>
			</li>
			<li class="nav-item dropdown active">
				<a id="menu-servicos" class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Serviços
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<li class="dropdown-submenu"><a class="dropdown-item" href="#"><img src="img/icone_consultoria.png" alt="icone_consultoria" class="icone-menu"> Consultoria</a></li>
					<div class="dropdown-divider"></div>
					<li class="dropdown-submenu"><a class="dropdown-item" href="#"><img src="img/icone_monitoramento.png" alt="icone_monitoramento" class="icone-menu"> Monitoramento</a></li>
				</ul>
			</li>
			<li class="nav-item active">
				<a id="menu-sobre" class="nav-link" href="sobre">Sobre</a>
			</li>
			<li class="nav-item active">
				<a id="menu-contato" class="nav-link" href="contato">Contato</a>
			</li>
			<li class="nav-item active">
				<a id="menu-ajuda" class="nav-link" href="#">Ajuda</a>
			</li>
			<li class="nav-item dropdown active" id="central-do-cliente-menu">
				<a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="img/icone_central_cliente.png" alt="icone_central_cliente">
				</a>
				<ul class="dropdown-menu central-do-cliente" aria-labelledby="navbarDropdownMenuLink">
					<div id="topo-central-do-cliente" class="text-center">
						<p>
							<span>Entre</span> na sua conta
						</p>						
					</div>
					<form id="formulario-central-do-cliente" class="formulario-menu" method="post" action="http://central.nextq.com.br/dologin.php">
						<div class="form-group">
							<input type="email" name="username" size="50" class="form-control" placeholder="E-mail">
						</div>
						<div class="form-group">
							<input type="password" name="password" size="20" autocomplete="off" class="form-control" placeholder="Senha">
						</div>
						<input class="btn-block btn-padrao" type="submit" value="CONECTE-SE AGORA" formtarget="_blank"  />

						<a id="esqueci-a-senha" class="dropdown-item text-center" href="http://central.nextq.com.br/pwreset.php" target="_blank">Esqueci a minha senha</a>
					</form>
				</ul>
			</li>
		</ul>
	</div>
</nav>