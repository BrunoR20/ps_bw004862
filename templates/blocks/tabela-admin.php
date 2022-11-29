<?php
/* ############# PROCESSANDO AS COLUNAS/TÍTULOS DA TABELA ############# */

// Pega as propriedades dos campos do objeto e converte os nomes para minúsculo
$colunasObjeto = array_change_key_case($objeto->getFields());

// Monta o cabeçalho da tabela a partir das informações o objeto
$htmlColunas = '';
foreach ($colunas as $coluna) {
    $infoColuna = $colunasObjeto[$coluna['campo']];

    $class = $coluna['class'] ?? '';

    $htmlColunas .= <<<HTML
            <th class="{$class}">{$infoColuna['label']}</th>
        HTML;
}
$htmlColunas .= '<th class="text-center align-middle">Opções</th>';

/* ############# PROCESSANDO AS LINHAS DE DADOS ############# */

// Pega o nome do campo chave da tabela atual
$campoChave = $objeto->getPkName();

// Pega a rota atual para fazer o link de edição
$rotaAtual = $_SERVER['REQUEST_URI'];

// Pega todos os registros cadastrados nesta tabela/objeto
$rows = $objeto->find();

// Motando as linhas de dados da tabela
$htmlLinhas = '';
foreach ($rows as $row) {
    $htmlLinhas .= '<tr>';

    foreach ($colunas as $coluna) {
        $class = $coluna['class'] ?? '';
        $valorColuna = $row[$coluna['campo']];

        $htmlLinhas .= "<td class='{$class}'>{$valorColuna}</td>";
    }

    // Criando o botão de editar
    $valorChave = $row[$campoChave];
    $linkEdicao = "{$rotaAtual}/{$valorChave}";

    $htmlLinhas .= <<<HTML
        <td class="text-center align-middle">
            <a href="{$linkEdicao}" class="text-secondary" title="Editar Registro">
                <i class="bi bi-pencil-square"></i>
            </a>    
        </td>
    HTML;

    $htmlLinhas .= '</tr>';
}
?>
<div class="text-end mb-3">
    <a href="<?=$rotaAtual?>/add" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Novo registro
    </a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-middle">
        <thead>
            <tr>
                <?= $htmlColunas ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?= $htmlLinhas ?>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td class="text-end" colspan="<?= count($colunas)+1 ?>">
                    Total de registros encontrados: <strong><?= count($rows) ?></strong>
                </td>
            </tr>
        </tfoot>
    </table>
</div>