<?php

require '../autoload.php';
$dao = new TarefaDao();

$tarefa = createTarefa();
$lastId = $dao->insert($tarefa);
if ($lastId) {
    echo "<script>window.location='view.php';alert('Tarefa adicionada com sucesso');</script>";


 
} else {
    echo HtmlHelper::tag('h2', 'Erros');
    var_dump($tarefa->erros);
}


function createTarefa() {
    $tarefa = new Tarefa();
    $tarefa->concluida = 0;
    $tarefa->nome = $_POST['nome'];
    $tarefa->descricao = $_POST['descricao'];
    $tarefa->prazo = $_POST['prazo']; // Não trabalharemos com prazo agora
    $tarefa->prioriade = $_POST['prioridade'];
    return $tarefa;
}
