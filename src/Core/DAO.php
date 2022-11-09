<?php

namespace Petshop\Core;

class DAO
{
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
}