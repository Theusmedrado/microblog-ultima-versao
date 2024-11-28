<?php // noticia-exclui.php
require "../includes/funcoes-noticias.php";
require "../includes/funcoes-controle-de-acesso.php";

// verificar acesso
verificarAcesso();

// capturando o id da noticia que será deletada
$idNoticia = $_GET['id'];

// capturando o id do usuário logado
$idUsuario = $_SESSION['id'];

// capturando o tipo do usuário logado
$tipoUsuario = $_SESSION['tipo'];

// executando o DELETE da notícia no banco de dados
excluirNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);

//redirecionando para a página com a lista de notícias
header("location:noticias.php");