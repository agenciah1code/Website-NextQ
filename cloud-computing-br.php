<?php include("includes/header.php") ?>

<section class="header2">

	<div class="container-fluid text-center">
		<div class="row">

			<div class="col-sm-2">

			</div>

			<div class="col-sm-8">

				<?php include("includes/navbar.php"); ?>

				<p id="banner-fixo-texto1">
					<img src="img/dot.png" alt="dot"> <span>CONHEÇA NOSSAS SOLUÇÕES DE CLOUD COMPUTING NO BRASIL</span> <img src="img/dot.png" alt="dot">
				</p>

				<p id="banner-fixo-texto2">
					Cloud <span>Computing</span> Brasil
				</p>				

			</div>

			<div class="col-sm-2">

			</div>

		</div>
	</div>

</section>

<?php include("includes/sobre-icones-sociais.php") ?>

<section class="cloud-br">

	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-2"></div>

			<div class="col-sm-8">
				
				<p id="cloud-br-texto1">
					<img src="img/dot.png" alt="dot"> <span>CLOUD SERVER NO BRASIL</span> <img src="img/dot.png" alt="dot">
				</p>

				<p id="cloud-br-texto2">
					O Melhor em Cloud Server no Brasil
				</p>

				<!-- PRIMEIRA LINHA DE PRODUTOS -->

				<div class="container">
					<div class="card-deck mb-3 text-center">

						<div class="card mb-4 shadow-sm">
							<div class="card-header">

								<img src="img/icone_cloud.png" alt="dot">

								<h4 class="my-0 font-weight-normal">Next Cloud I</h4>
							</div>
							<div class="card-body">
								<ul class="list-unstyled mt-3 mb-4">
									<li><strong>4 x Cores 3.30 GHZ</strong></li> <br>
									<li><strong>Memória RAM:</strong> 4GB DDR3</li> <br>
									<li><strong>Espaço em Disco:</strong> 100GB</li> <br>
									<li>Suporte 24/7</li> <br>
									<li>Localidade <br> <img src="img/icone_brasil.png" alt="icone_brasil"></li>
									<li>Datacenter <br> <img src="img/tecnologias/equinix.png" alt="equinix"></li> <br> <br>

									<button type="button" class="btn btn-padrao" data-toggle="modal" data-target="#sob-consulta" data-whatever="sob-consulta">Sob Consulta</button>

									<div class="modal fade" id="sob-consulta" tabindex="-1" role="dialog" aria-labelledby="sob-consulta-label" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Preencha o formulário abaixo para consultar</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">

													<form id="formulario-contato" style="padding: 0;" method="POST" action="functions/formularios/formulario-contato.php">
														<div class="form-row">
															<div class="form-group col-md-4">
																<input name="nome" autocomplete="new-password" type="text" class="form-control" placeholder="Nome" required="">
															</div>
															<div class="form-group col-md-4">
																<input name="email" autocomplete="new-password" type="email" class="form-control" placeholder="E-mail" required="">
															</div>
															<div class="form-group col-md-4">
																<input name="telefone" autocomplete="new-password" type="tel" class="form-control" placeholder="Telefone" id="telefone">
															</div>
														</div>
														<div class="form-group">
															<textarea name="mensagem" style="resize: none;" placeholder="Sua mensagem" class="form-control" id="exampleFormControlTextarea1" rows="4" required=""></textarea>
														</div>
														<button type="submit" class="btn btn-padrao">ENVIAR E-MAIL</button>
													</form>

												</div>
											</div>
										</div>
									</div>

								</ul>
							</div>
						</div>

						<div class="card mb-4 shadow-sm">
							<div class="card-header">

								<img class="melhor-oferta" src="img/melhor_oferta.png" alt="melhor_oferta">

								<img src="img/icone_cloud.png" alt="icone_cloud">

								<h4 class="my-0 font-weight-normal">Next Cloud II</h4>
							</div>
							<div class="card-body">
								<ul class="list-unstyled mt-3 mb-4">
									<li><strong>4 x Cores 3.30 GHZ</strong></li> <br>
									<li><strong>Memória RAM:</strong> 8GB DDR3</li> <br>
									<li><strong>Espaço em Disco:</strong> 140GB</li> <br>
									<li>Suporte 24/7</li> <br>
									<li>Localidade <br> <img src="img/icone_brasil.png" alt="icone_brasil"></li>
									<li>Datacenter <br> <img src="img/tecnologias/equinix.png" alt="equinix"></li> <br> <br>
									<button type="button" class="btn btn-padrao" data-toggle="modal" data-target="#sob-consulta" data-whatever="sob-consulta">Sob Consulta</button>
								</ul>

							</div>
						</div>

						<div class="card mb-4 shadow-sm">
							<div class="card-header">

								<img src="img/icone_cloud.png" alt="icone_cloud">

								<h4 class="my-0 font-weight-normal">Next Cloud III</h4>
							</div>
							<div class="card-body">
								<ul class="list-unstyled mt-3 mb-4">
									<li><strong>5 x Cores 3.30 GHZ</strong></li> <br>
									<li><strong>Memória RAM:</strong> 16GB DDR3</li> <br>
									<li><strong>Espaço em Disco:</strong> 250GB</li> <br>
									<li>Suporte 24/7</li> <br>
									<li>Localidade <br> <img src="img/icone_brasil.png" alt="icone_brasil"></li>
									<li>Datacenter <br> <img src="img/tecnologias/equinix.png" alt="equinix"></li> <br> <br>
									<button type="button" class="btn btn-padrao" data-toggle="modal" data-target="#sob-consulta" data-whatever="sob-consulta">Sob Consulta</button>
								</ul>

							</div>
						</div>

					</div>

				</div>

				<!-- SEGUNDA LINHA DE PRODUTOS -->

				<div class="container">
					<div class="card-deck mb-3 text-center">

						<div class="card mb-4 shadow-sm">
							<div class="card-header">

								<img src="img/icone_cloud.png" alt="icone_cloud">

								<h4 class="my-0 font-weight-normal">Next Cloud IV</h4>
							</div>
							<div class="card-body">
								<ul class="list-unstyled mt-3 mb-4">
									<li><strong>5 x Cores 3.30 GHZ</strong></li> <br>
									<li><strong>Memória RAM:</strong> 16GB DDR3</li> <br>
									<li><strong>Espaço em Disco:</strong> 250GB</li> <br>
									<li>Suporte 24/7</li> <br>
									<li>Localidade <br> <img src="img/icone_brasil.png" alt="icone_brasil"></li>
									<li>Datacenter <br> <img src="img/tecnologias/equinix.png" alt="equinix"></li> <br> <br>
									<button type="button" class="btn btn-padrao" data-toggle="modal" data-target="#sob-consulta" data-whatever="sob-consulta">Sob Consulta</button>
								</ul>

							</div>
						</div>

						<div class="card mb-4 shadow-sm">
							<div class="card-header">

								<img src="img/icone_cloud.png" alt="icone_cloud">

								<h4 class="my-0 font-weight-normal">Next Cloud V</h4>
							</div>
							<div class="card-body">
								<ul class="list-unstyled mt-3 mb-4">
									<li><strong>4 x Cores 3.30 GHZ</strong></li> <br>
									<li><strong>Memória RAM:</strong> 4GB DDR3</li> <br>
									<li><strong>Espaço em Disco:</strong> 100GB</li> <br>
									<li>Suporte 24/7</li> <br>
									<li>Localidade <br> <img src="img/icone_brasil.png" alt="icone_brasil"></li>
									<li>Datacenter <br> <img src="img/tecnologias/equinix.png" alt="equinix"></li> <br> <br>
									<button type="button" class="btn btn-padrao" data-toggle="modal" data-target="#sob-consulta" data-whatever="sob-consulta">Sob Consulta</button>
								</ul>

							</div>
						</div>

						<div class="card mb-4 shadow-sm">
							<div class="card-header">

								<img src="img/icone_cloud.png" alt="icone_cloud">

								<h4 class="my-0 font-weight-normal">Next Cloud VI</h4>
							</div>
							<div class="card-body">
								<ul class="list-unstyled mt-3 mb-4">
									<li><strong>4 x Cores 3.30 GHZ</strong></li> <br>
									<li><strong>Memória RAM:</strong> 4GB DDR3</li> <br>
									<li><strong>Espaço em Disco:</strong> 100GB</li> <br>
									<li>Suporte 24/7</li> <br>
									<li>Localidade <br> <img src="img/icone_brasil.png" alt="icone_brasil"></li>
									<li>Datacenter <br> <img src="img/tecnologias/equinix.png" alt="equinix"></li> <br> <br>
									<button type="button" class="btn btn-padrao" data-toggle="modal" data-target="#sob-consulta" data-whatever="sob-consulta">Sob Consulta</button>
								</ul>

							</div>
						</div>

					</div>

				</div>

				<div class="col-sm-2"></div>

			</div>
		</div>

	</section>

	<section class="recursos">
		
		<div class="container-fluid">
			<div class="row">

				<div class="col-sm-2"></div>

				<div class="col-sm-8 text-center">

					<p id="recursos-texto1">
						<img src="img/dot.png" alt="dot"> <span>RECURSOS DISPONÍVEIS</span> <img src="img/dot.png" alt="dot">
					</p>

					<p id="recursos-texto2">
						Recursos disponíveis para este serviço
					</p>
					
					<img class="linha-verde-recursos" src="img/linha_verde_recursos.png" alt="linha_verde_recursos">

					<div id="margem-cards-recursos" class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<img src="img/img_cloud/cloud-computing-sob-medida.jpg" alt="cloud-computing-sob-medida">
									<h5 class="card-title">Sob medida para o seu negócio</h5>
									<p class="card-text">A configuração que você precisa. Nós te ouvimos e definimos
										a melhor configuração para atender a sua demanda.
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<img src="img/img_cloud/cloud-computing-escale.jpg" alt="cloud-computing-escale">
									<h5 class="card-title">Escale a qualquer momento</h5>
									<p class="card-text">Muito utilizado para empresas que estão em crescimento. Você
										pode expandir recursos de processamento, memória, espaço em
										disco e banda a qualquer momento.
									</p>
								</div>
							</div>
						</div>
					</div>

					

					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<img src="img/img_cloud/cloud-computing-datacenter.jpg" alt="cloud-computing-datacenter">
									<h5 class="card-title">Datacenter no Brasil</h5>
									<p class="card-text">Ganho de performance
										e redução de impostos.
										Nossa infraestrutura está alocada na EQUINIX,
										sinônimo de qualidade em instalações e conectividade
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<img src="img/img_cloud/cloud-computing-seguro.jpg" alt="cloud-computing-seguro">
									<h5 class="card-title">100% Seguro</h5>
									<p class="card-text">Fique tranquilo com nossas aplicações de segurança físicas e
										lógicas ativas em todos os ambientes.
									</p>
								</div>
							</div>
						</div>
					</div>

					

					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<img src="img/img_cloud/cloud-computing-suporte.jpg" alt="cloud-computing-suporte">
									<h5 class="card-title">Suporte Consultivo</h5>
									<p class="card-text">Especialistas qualificados e experientes para te
										ajudar no que precisar
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<img src="img/img_cloud/cloud-computing-tecnologia.jpg" alt="cloud-computing-tecnologia">
									<h5 class="card-title">Tecnologia de ponta</h5>
									<p class="card-text">Utilizamos Microsoft Hyper-V e System Center Operations
										Manager, soluções seguras de liderança global.
									</p>
								</div>
							</div>
						</div>
					</div>

					

					<div class="row">
						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<img src="img/img_cloud/cloud-computing-alta-perfomance.jpg" alt="cloud-computing-alta-perfomance">
									<h5 class="card-title">Alta Performance</h5>
									<p class="card-text">Estrutura desenhada por nossos arquitetos para garantir
										alta performance e eficiência computacional.
									</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="card">
								<div class="card-body">
									<img src="img/img_cloud/integracao.jpg" alt="integração">
									<h5 class="card-title">Integração</h5>
									<p class="card-text">Integre facilmente nuvens privadas,
										públicas e servidores dedicados.
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-2"></div>

			</div>
		</div>

	</section>

	<?php include("includes/depoimentos-cinza.php") ?>

	<section class="faq">
		
		<div class="container-fluid">
			<div class="row">

				<div class="col-sm-2"></div>

				<div class="col-sm-8">
					
					<p id="faq-texto1">
						<img src="img/dot.png" alt="dot"> <span>CLOUD SERVER NO BRASIL</span> <img src="img/dot.png" alt="dot">
					</p>

					<p id="faq-texto2">
						O Melhor em Cloud Server no Brasil
					</p>

					<p id="faq-texto3">
						Encontre suas <span>perguntas e respostas</span>
					</p>

					<img id="faq-linha-verde" src="img/linha_pequena.png" alt="linha_pequena">

					<div class="row">

						<!-- PRIMEIRA COLUNA DO FAQ -->

						<div class="col-sm-6">

							<div class="accordion" id="accordionExample">

								<!-- FAQ 1 -->
								
								<div class="card" id="faq1-efeito">

									<div class="card-header" id="faq-1">
										<h5 class="mb-0">
											<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq-item1" aria-expanded="true" aria-controls="faq-item1">
												Grupo de itens colapsável #1
											</button>
										</h5>
									</div>

									<div id="faq-item1" class="collapse show" aria-labelledby="faq-1" data-parent="#accordionExample">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>

								</div>

								<!-- FIM DO FAQ 1 -->

								<!-- FAQ 2 -->
								
								<div class="card" id="faq2-efeito">

									<div class="card-header" id="faq-2">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-item2" aria-expanded="false" aria-controls="faq-item2">
												Grupo de itens colapsável #2
											</button>
										</h5>
									</div>

									<div id="faq-item2" class="collapse" aria-labelledby="faq-2" data-parent="#accordionExample">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>

								</div>

								<!-- FIM DO FAQ 2 -->

								<!-- FAQ 3 -->

								<div class="card" id="faq3-efeito">

									<div class="card-header" id="faq-3">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-item3" aria-expanded="false" aria-controls="faq-item3">
												Grupo de itens colapsável #3
											</button>
										</h5>
									</div>

									<div id="faq-item3" class="collapse" aria-labelledby="faq-3" data-parent="#accordionExample">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>

								</div>

								<!-- FIM DO FAQ 3 -->

							</div>


						</div>

						<!-- SEGUNDA COLUNA DO FAQ -->

						<div class="col-sm-6">							
							<div class="accordion" id="accordionExample2">

								<!-- FAQ 4 -->

								<div class="card" id="faq4-efeito">

									<div class="card-header" id="faq-4">
										<h5 class="mb-0">
											<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq-item4" aria-expanded="true" aria-controls="faq-item4">
												Grupo de itens colapsável #4
											</button>
										</h5>
									</div>

									<div id="faq-item4" class="collapse" aria-labelledby="faq-4" data-parent="#accordionExample2">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non alemanha 0 x 2 coreia do sul cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>

								</div>

								<!-- FIM DO FAQ 4 -->

								<!-- FAQ 5 -->

								<div class="card" id="faq5-efeito">

									<div class="card-header" id="faq-5">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-item5" aria-expanded="false" aria-controls="faq-item5">
												Grupo de itens colapsável #5
											</button>
										</h5>
									</div>

									<div id="faq-item5" class="collapse" aria-labelledby="faq-5" data-parent="#accordionExample2">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>

								</div>

								<!-- FIM DO FAQ 5 -->

								<!-- FAQ 6 -->

								<div class="card" id="faq6-efeito">

									<div class="card-header" id="faq-6">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#faq-item-6" aria-expanded="false" aria-controls="faq-item-6">
												Grupo de itens colapsável #6
											</button>
										</h5>
									</div>

									<div id="faq-item-6" class="collapse" aria-labelledby="faq-6" data-parent="#accordionExample2">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>

								</div>

								<!-- FIM DO FAQ 6 -->

							</div>						
						</div>

					</div>

					<br> <br>
					<button class="btn btn-padrao"><a href="contato">CONTACTE-NOS</a></button>

				</div>

				<div class="col-sm-2"></div>

			</div>
		</div>

	</section>

	<?php include("includes/tecnologias.php") ?>

	<?php include("includes/rodape-padrao.php") ?>

	<?php include("includes/footer.php") ?>