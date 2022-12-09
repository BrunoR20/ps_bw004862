<?php

namespace Petshop\Core;

use Bramus\Router\Router;
use Petshop\Controller\ErrorController;

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
        // Carrega uma sessão ou inicia uma nova em caso de novo acesso
        self::carregaSessao();

        // Associa um objeto Bramus\Router à variável $router
        self::$router = new Router();
        
        // Registra as rotas possíveis
        self::registraRotasDoFrontend();
        self::registraRotasDoBackend();
        self::registra404Generico();
        
        // Analisa a requisição e escolhe a rota compatível
        self::$router->run();
    }

    /**
     * Registra as rotas possíveis que estarão
     * associadas aos controllers para o FRONTEND
     *
     * @return void
     */
    private static function registraRotasDoFrontend()
    {
        self::$router->get('/','\Petshop\Controller\HomeController@index');

        self::$router->post('/ajax','\Petshop\Controller\AjaxController@loader');

        self::$router->get('/login','\Petshop\Controller\LoginController@login');
        self::$router->get('/logout','\Petshop\Controller\LoginController@logout');
        self::$router->post('/login','\Petshop\Controller\LoginController@postLogin');

        self::$router->get('/cadastro','\Petshop\Controller\CadastroController@cadastro');
        self::$router->post('/cadastro','\Petshop\Controller\CadastroController@postCadastro');

        self::$router->get('/fale-conosco','\Petshop\Controller\FaleConoscoController@faleConosco');
        self::$router->post('/fale-conosco','\Petshop\Controller\FaleConoscoController@postFaleConosco');

        self::$router->get('/meus-dados','\Petshop\Controller\MeusDadosController@meusDados');
        self::$router->get('/produtos/{id}','\Petshop\Controller\ProdutoController@listar');
        self::$router->get('/categorias/{id}','\Petshop\Controller\CategoriaController@listar');
    }

    /**
     * Registra as rotas possíveis que estarão
     * associadas aos controllers para o BACKEND
     *
     * @return void
     */
    private static function registraRotasDoBackend()
    {
        self::$router->before('GET|POST', '/admin/.*', function (){
            if ( empty($_SESSION['usuario']) ) {
                redireciona('/admin', 'danger', 'Faça seu logon para continuar');
            }
        });

        self::$router->mount('/admin', function() {
            self::$router->get ('/','\Petshop\Controller\AdminLoginController@login');
            self::$router->post('/','\Petshop\Controller\AdminLoginController@postLogin');

            self::$router->get('/dashboard','\Petshop\Controller\AdminDashboardController@index');

            self::$router->get('/remover/(\w+)/(\d+)','\Petshop\Controller\AdminRemoveController@acao');

            self::$router->get ('/clientes',        '\Petshop\Controller\AdminClienteController@listar');
            self::$router->get ('/clientes/{valor}','\Petshop\Controller\AdminClienteController@form');
            self::$router->post('/clientes/{valor}','\Petshop\Controller\AdminClienteController@postForm');

            self::$router->get ('/usuarios',        '\Petshop\Controller\AdminUsuarioController@listar');
            self::$router->get ('/usuarios/{valor}','\Petshop\Controller\AdminUsuarioController@form');
            self::$router->post('/usuarios/{valor}','\Petshop\Controller\AdminUsuarioController@postForm');

            self::$router->get ('/categorias',        '\Petshop\Controller\AdminCategoriaController@listar');
            self::$router->get ('/categorias/{valor}','\Petshop\Controller\AdminCategoriaController@form');
            self::$router->post('/categorias/{valor}','\Petshop\Controller\AdminCategoriaController@postForm');

            self::$router->get ('/dicas',        '\Petshop\Controller\AdminDicaController@listar');
            self::$router->get ('/dicas/{valor}','\Petshop\Controller\AdminDicaController@form');
            self::$router->post('/dicas/{valor}','\Petshop\Controller\AdminDicaController@postForm');

            self::$router->get ('/marcas',        '\Petshop\Controller\AdminMarcaController@listar');
            self::$router->get ('/marcas/{valor}','\Petshop\Controller\AdminMarcaController@form');
            self::$router->post('/marcas/{valor}','\Petshop\Controller\AdminMarcaController@postForm');
            
            self::$router->get ('/produtos',        '\Petshop\Controller\AdminProdutoController@listar');
            self::$router->get ('/produtos/{valor}','\Petshop\Controller\AdminProdutoController@form');
            self::$router->post('/produtos/{valor}','\Petshop\Controller\AdminProdutoController@postForm');
            
            self::$router->get ('/imagens/(\w+)/(\d+)',      '\Petshop\Controller\AdminImagemController@listar');
            self::$router->get ('/imagens/(\w+)/(\d+)/(\w+)','\Petshop\Controller\AdminImagemController@form');
            self::$router->post('/imagens/(\w+)/(\d+)/(\w+)','\Petshop\Controller\AdminImagemController@postForm');
        });
    }

    /**
     * Registra rota genérica para erro de URL digitada
     *
     * @return void
     */
    private static function registra404Generico()
    {
        self::$router->set404(function() {
            header('HTTP/1.1 404 Not Found');
            $objErro = new ErrorController();
            $objErro->erro404();
        });
    }

    /**
     * Função que inicia uma nova versão e, posteriormente,
     * carrega o ID da sessão gravada no dispositivo do usuário
     *
     * @return void
     */
    private static function carregaSessao()
    {
        session_start();
    }
}