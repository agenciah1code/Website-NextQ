<?php

function seo()
{

    $url = basename($_SERVER['PHP_SELF']);

    $padrao = "NEXTQ:";

    switch ($url) {

        case '':
        case 'index.php':
            $titulo = "$padrao Cloud Computing";
            $descricao = "A NextQ traz serviços de cloud computing, hospedagem de site, revenda de hospedagem, monitoramento, consultoria e mais. Venha conhecer.";
            $palavra_chave = "nextq, cloud computing, hospedagem de site, revenda de hospedagem, monitoramento web, consultoria web";
            break;

        case 'cloud-computing-br.php':
            $titulo = "$padrao Cloud Computing Brasil";
            $descricao = "O melhor Cloud Computing você só encontra aqui na NextQ. Entre em contato agora mesmo com um de nossos especialistas.";
            $palavra_chave = "cloud computing brasil, cloud computing br, cloud br, cloud brasil, cloud server brasil, hospedagem cloud brasil, hospedagem cloud br";
            break;

        case 'cloud-computing-ca.php':
            $titulo = "$padrao Cloud Computing Canadá";
            $descricao = "O melhor Cloud Computing você só encontra aqui na NextQ. Entre em contato agora mesmo com um de nossos especialistas.";
            $palavra_chave = "cloud computing canada, cloud computing ca, cloud ca, cloud canada, cloud server canada, hospedagem cloud canada, hospedagem cloud ca";
            break;

        case 'hospedagem-br.php':
            $titulo = "$padrao Hospedagem de Site Brasil";
            $descricao = "A melhor Hospedagem de Site você só encontra aqui na NextQ. Entre em contato agora mesmo com um de nossos especialistas.";
            $palavra_chave = "hospedagem de site, hospedagem de site brasil, hospedagem de site br, melhor hospedagem brasil, melhor hospedagem br";
            break;

        case 'hospedagem-ca.php':
            $titulo = "$padrao Hospedagem de Site Canadá";
            $descricao = "A melhor Hospedagem de Site você só encontra aqui na NextQ. Entre em contato agora mesmo com um de nossos especialistas.";
            $palavra_chave = "hospedagem de site, hospedagem de site canada, hospedagem de site ca, melhor hospedagem canada, melhor hospedagem ca";
            break;

        case 'revenda-hospedagem-br.php':
            $titulo = "$padrao Revenda de Hospedagem de Site Brasil";
            $descricao = "A melhor Revenda de Hospedagem você só encontra aqui na NextQ. Entre em contato agora mesmo com um de nossos especialistas.";
            $palavra_chave = "revenda de hospedagem, revenda de hospedagem brasil, revenda de hospedagem br, melhor revenda de hospedagem, melhor revenda de hospedagem brasil, melhor revenda de hospedagem br, revenda de hospedagem de sites, revenda de hospedagem de sites brasil, revenda de hospedagem de sites br";
            break;

        case 'revenda-hospedagem-ca.php':
            $titulo = "$padrao Revenda de Hospedagem de Site Canadá";
            $descricao = "A melhor Revenda de Hospedagem você só encontra aqui na NextQ. Entre em contato agora mesmo com um de nossos especialistas.";
            $palavra_chave = "revenda de hospedagem, revenda de hospedagem canada, revenda de hospedagem ca, melhor revenda de hospedagem, melhor revenda de hospedagem canada, melhor revenda de hospedagem ca, revenda de hospedagem de sites, revenda de hospedagem de sites canada, revenda de hospedagem de sites ca";
            break;

        case 'sobre.php':
            $titulo = "$padrao Sobre Nós";
            $descricao = "Fique por dentro dos números da NextQ. + de 230 servidores ativos. + de 710 clientes ativos. + de 1985 dias de atividade. Suporte 100% humanizado.";
            $palavra_chave = "nextq, sobre a nextq, nextq confiável, nextq é confiável, nextq é boa, nextq boa, nextq sobre, nextq sobre nós";
            break;

        case 'contato.php':
            $titulo = "$padrao Fale Conosco";
            $descricao = "Tire suas dúvidas ou entre em contato. Atendimento NextQ.";
            $palavra_chave = "contato nextq, nextq fale conosco, nextq suporte, nextq duvidas, nextq telefone, nextq email";
            break;

        default:
            $titulo = "404 - Página não encontrada";
            $descricao = "";
            $palavra_chave = "";
            break;
    }

    return array($titulo, $descricao, $palavra_chave);

}
