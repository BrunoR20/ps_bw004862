<?php

namespace Petshop\Core;

use Bramus\Router\Router;

class App
{
    /**
     * Variável estática que conterá o objeto Router
     * responsável pelo tratamento das rotas
     *
     * @var Router
     */
    private static $router;

    /**
     * Método que será carregado quando alguma página do site
     * for invocada. Decide qual rota deve ser excecutada
     * a partir da URL informada pelo usuário
     *
     * @return void
     */
    public static function start()
    {
        // Associa um objeto Bramus\Router à variável $router
        self::$router = new Router();
        
        // Registra as rotas possíveis
        self::registraRotasDoFronted();
        self::registraRotasDoBackend();

        // Analisa a requisição e escolhe a rota compatível
        self::$router->run();
    }

    /**
     * Registra as rotas possíveis que estarão
     * associadas aos controllers para o FRONTEND
     *
     * @return void
     */
    private static function registraRotasDoFronted()
    {
        self::$router->get('/','\Petshop\Controller\HomeController@index');
    }

    /**
     * Registra as rotas possíveis que estarão
     * associadas aos controllers para o BACKEND
     *
     * @return void
     */
    private static function registraRotasDoBackend()
    {
        
    }
}