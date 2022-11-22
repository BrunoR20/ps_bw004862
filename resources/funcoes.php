<?php


/**
 * Função que retorna um ALERT da mensagem
 * presa na sessão e elimina o seu conteúdo
 *
 * @return void
 */
function retornaHTMLAlertMensagemSessao()
{

    if ( !isset($_SESSION['mensagem']) || !is_array($_SESSION['mensagem']) ) {
        return '';  
    }

    $tipo = $_SESSION['mensagem']['tipo'];
    $texto = $_SESSION['mensagem']['texto'];


    $bootstrapAlert = <<<HTML
        <div class="alert alert-{$tipo}" role="alert">
            {$texto}
        </div>
    HTML;

    // Elimina a variável da memória para ela não aparecer novamente depois
    unset( $_SESSION['mensagem'] );

    return $bootstrapAlert;
}