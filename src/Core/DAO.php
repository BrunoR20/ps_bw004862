<?php

namespace Petshop\Core;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;

class DAO
{
    /** @var array Informações da tabela/campos carregados*/
    private $tableInfo = [];

    public function __construct()
    {
        $this->tableInfo = $this->getTableInfo();
    }

    /**
     * Método GET para acesso direto via nomes
     * de propriedades da classe
     *
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        $metodoProcurado = 'get' . $name;
        if ( method_exists($this, $metodoProcurado) ) {
            return $this->$metodoProcurado();
        } else {
            throw new Exception("O atributo {$name} não tem método 'get' associado");
        }
    }

    /**
     * Método SET para gravação direta via nomes
     * de propriedades da classe
     *
     * @param string $name Nome da propriedade
     * @param mixed $value Valor da propriedade
     * @return mixed
     */
    public function __set(string $name, $value)
    {
        $metodoProcurado = 'set' . $name;
        if ( method_exists($this, $metodoProcurado) ) {
            $this->$metodoProcurado($value);
        } else {
            throw new Exception("O atributo {$name} não tem método 'set' associado");
        }
    }

    /**
     * Função que objetiva retornar as metainformações da classe,
     * baseando-se para isso, na leitura dos Attributes
     *
     * @return array Propriedades da entidade (tabela e campos)
     */
    public function getTableInfo() : array
    {
        // Vetor que armazenará as informações da classe
        // referente às tabelas e campos do banco de dados
        $info = [];
        
        // Pegando as metainformações da classe
        // referente ao objeto atual instanciado
        $ref = new \ReflectionClass($this::class);
        foreach($ref->getAttributes(Entidade::class) as $attrTable) {
            $info['tabela'] = $attrTable->getArguments();

            // Procurando as metainformações das propriedades da classe
            foreach($ref->getProperties() as $propriedade) {
                // Pra cada campo/prop localizado, procuras seus atributos
                foreach($propriedade->getAttributes(Campo::class) as $attrCampo) {
                    $info['campos'][$propriedade->getName()] = $attrCampo->getArguments();
                }
            }
        }

        if (!isset($info['tabela']) || !isset($info['campos'])) {
            throw new Exception('Os atributos da classe/propriedades não foram preenchidos');
        }

        return $info;
    }
 
    /**
     * Retorna o nome da tabela da classe instanciada
     *
     * @return string
     */
    public function getTableName() : string
    {
        return $this->tableInfo['tabela']['name'];
    }

    /**
     * Retorna informações dos campos/propriedades da classe associada
     *
     * @return array
     */
    public function getFields() : array
    {
        return $this->tableInfo['campos'];
    }

    /**
     * Retorna o nome do campo chave da tabela associada a classe atual
     *
     * @return string
     */
    public function getPkName() : string
    {
        foreach($this->tableInfo['campos'] as $cname => $cprops) {
            if (array_key_exists('pk', $cprops)) {
                return strtolower($cname);
            }
        }
        return '';
    }

     /**
     * Retorna o nome do campo de ordenação padrão
     *
     * @return string
     */
    public function getOrderByField() : string
    {
        foreach($this->tableInfo['campos'] as $cname => $cprops) {
            if (array_key_exists('order', $cprops)) {
                return strtolower($cname);
            }
        }
        return '';
    }

    /**
     * Função genérica que busca dados no banco de dados
     * para a entidade relacionada ao objeto instanciado
     *
     * @param array $params Os parâmetros de condição da busca, ex: ['titulo = '=>'Teste']
     * @param array $order Os campos de ordenação, ex: ['titulo desc', 'dtcad']
     * @param string $columns As colunas do SELECT (separadas por vírgula)
     * @return array
     */
    public function find(array $params = [], array $order = [], string $columns = '*') : array
    {
        $where = '';
        if (count($params)) {
            $where = 'WHERE ' . implode(' ? and ', array_keys($params)) .  ' ? ';
        }

        $orderBy = '';
        if (count($order)) {
            $orderBy = 'ORDER BY ' . implode(', ', $order);
        } elseif ( $this->getOrderByField() ) {
            $orderBy = 'ORDER BY ' . $this->getOrderByField();
        }

        $sql = sprintf(
            'SELECT %s FROM %s %s %s',
            $columns,
            $this->getTableName(),
            $where,
            $orderBy 
        );

        return DB::select($sql, array_values($params));
    }
}