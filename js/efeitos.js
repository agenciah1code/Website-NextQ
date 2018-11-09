/**
 * Função do dropdown do menu
 */

$('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
	if (!$(this).next().hasClass('show')) {
		$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	}
	var $subMenu = $(this).next(".dropdown-menu");
	$subMenu.toggleClass('show');


	$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
		$('.dropdown-submenu .show').removeClass("show");
	});


	return false;
});

/**
 * Sobre nós- Mudar linha para verde
 */

$(document).ready(function () {

	$('.sobre-icone-social-div1').hover(function () {
		$('.sobre-nos-linha1').attr('src', 'img/sobre-linha-verde.png');
	}, function () {
		$('.sobre-nos-linha1').attr('src', 'img/sobre-linha-cinza.png');
	});

	$('.sobre-icone-social-div2').hover(function () {
		$('.sobre-nos-linha2').attr('src', 'img/sobre-linha-verde.png');
	}, function () {
		$('.sobre-nos-linha2').attr('src', 'img/sobre-linha-cinza.png');
	});

	$('.sobre-icone-social-div3').hover(function () {
		$('.sobre-nos-linha3').attr('src', 'img/sobre-linha-verde.png');
	}, function () {
		$('.sobre-nos-linha3').attr('src', 'img/sobre-linha-cinza.png');
	});

	$('.sobre-icone-social-div4').hover(function () {
		$('.sobre-nos-linha4').attr('src', 'img/sobre-linha-verde.png');
	}, function () {
		$('.sobre-nos-linha4').attr('src', 'img/sobre-linha-cinza.png');
	});

});

/**
 * FAQS - Ativar linha verde quando o elemento estiver em "show"
 */

$(document).ready(function () {

	// INICIO FAQ 1 

	if ($("#faq-item1").hasClass('show')) {

		$("#faq1-efeito .card-header").toggleClass("card-header-verde");
	}

	$("#faq1-efeito").on('show.bs.collapse', function () {

		$("#faq1-efeito .card-header").toggleClass("card-header-verde");
	});

	$("#faq1-efeito").on('hide.bs.collapse', function () {

		$("#faq1-efeito .card-header-verde").removeClass('card-header-verde');
	});

	// FIM FAQ 1

	// INICIO FAQ 2

	$("#faq2-efeito").on('show.bs.collapse', function () {

		$("#faq2-efeito .card-header").toggleClass("card-header-verde");
	});

	$("#faq2-efeito").on('hide.bs.collapse', function () {

		$("#faq2-efeito .card-header-verde").removeClass('card-header-verde');
	});

	// FIM FAQ 2

	// INICIO FAQ 3

	$("#faq3-efeito").on('show.bs.collapse', function () {

		$("#faq3-efeito .card-header").toggleClass("card-header-verde");
	});

	$("#faq3-efeito").on('hide.bs.collapse', function () {

		$("#faq3-efeito .card-header-verde").removeClass('card-header-verde');
	});

	// FIM FAQ 3		 	

	// INICIO FAQ 4

	$("#faq4-efeito").on('show.bs.collapse', function () {

		$("#faq4-efeito .card-header").toggleClass("card-header-verde");
	});

	$("#faq4-efeito").on('hide.bs.collapse', function () {

		$("#faq4-efeito .card-header-verde").removeClass('card-header-verde');
	});

	// FIM FAQ 4

	// INICIO FAQ 5

	$("#faq5-efeito").on('show.bs.collapse', function () {

		$("#faq5-efeito .card-header").toggleClass("card-header-verde");
	});

	$("#faq5-efeito").on('hide.bs.collapse', function () {

		$("#faq5-efeito .card-header-verde").removeClass('card-header-verde');
	});

	// FIM FAQ 5

	// INICIO FAQ 6

	$("#faq6-efeito").on('show.bs.collapse', function () {

		$("#faq6-efeito .card-header").toggleClass("card-header-verde");
	});

	$("#faq6-efeito").on('hide.bs.collapse', function () {

		$("#faq6-efeito .card-header-verde").removeClass('card-header-verde');
	});

	// FIM FAQ 6

});

/**
 * Deixar botões do menu com "hover" na página atual
 */

$(document).ready(function () {

	var url_atual = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);

	// alert(url_atual);

	if (url_atual === "" || url_atual == "index.php" || url_atual == "index") {
		$("#menu-home").toggleClass('botao-ativo');
	}

	if (url_atual === "cloud-computing-br" || url_atual === "cloud-computing-br.php") {
		$("#menu-produtos").toggleClass('botao-ativo');
	}

	if (url_atual === "cloud-computing-ca" || url_atual === "cloud-computing-ca.php") {
		$("#menu-produtos").toggleClass('botao-ativo');
	}

	if (url_atual === "hospedagem-br" || url_atual === "hospedagem-br.php") {
		$("#menu-produtos").toggleClass('botao-ativo');
	}

	if (url_atual === "hospedagem-ca" || url_atual === "hospedagem-ca.php") {
		$("#menu-produtos").toggleClass('botao-ativo');
	}

	if (url_atual === "revenda-hospedagem-br" || url_atual === "revenda-hospedagem-br.php") {
		$("#menu-produtos").toggleClass('botao-ativo');
	}

	if (url_atual === "revenda-hospedagem-ca" || url_atual === "revenda-hospedagem-ca.php") {
		$("#menu-produtos").toggleClass('botao-ativo');
	}

	if (url_atual === "backup-online" || url_atual === "backup-online.php") {
		$("#menu-produtos").toggleClass('botao-ativo');
	}

	if (url_atual === "consultoria" || url_atual === "consultoria.php") {
		$("#menu-servicos").toggleClass('botao-ativo');
	}

	if (url_atual === "monitoramento" || url_atual === "monitoramento.php") {
		$("#menu-servicos").toggleClass('botao-ativo');
	}

	if (url_atual === "sobre" || url_atual === "sobre.php") {
		$("#menu-sobre").toggleClass('botao-ativo');
	}

	if (url_atual === "contato" || url_atual === "contato.php") {
		$("#menu-contato").toggleClass('botao-ativo');
	}

});

/**
 * COLOCAR MÁSCARA NOS CAMPOS "TELEFONE"
 */

$(document).ready(function () {

	$("#telefone").mask("(00) 0000-00000");

});