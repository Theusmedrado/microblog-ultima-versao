<?php
require "includes/cabecalho.php"; 
require "includes/funcoes-noticias.php";

//capturando via URL/GET o que foi digtado no campode de busca
$termoDigitado = $_GET['busca'];

//carregando os dados da busca no banco de dados pelo termo digitado
$dadosBusca = buscar($conexao,$termoDigitado);

?>

<div class="row bg-white rounded shadow my-1 py-4">
    <h2 class="col-12 fw-light">
        Você procurou por <span class="badge bg-dark"><?=$termoDigitado?></span> e
        obteve <span class="badge bg-info"><?=count($dadosBusca)?></span> resultados
    </h2>
    <?php foreach ($dadosBusca as $noticia){ ?>
    <div class="col-12 my-1">
        <article class="card">
            <div class="card-body">
                <h3 class="fs-4 card-title fw-light"><?=$noticia['titulo']?></h3>
                <p class="card-text">
                    <time.><?=formataData($noticia['data'])?></time> - 
                    <?=$noticia['resumo']?>
                </p>
                
                <a href="noticia.php?id=<?=$noticia['id']?>" class="btn btn-primary btn-sm">Continuar lendo</a>
            </div>
        </article>
    </div>
    <?php }?>
        
</div>     

<?php 
require "includes/rodape.php";
?>

