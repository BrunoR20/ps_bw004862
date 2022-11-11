<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'marcas')]
class Marca extends DAO
{
    #[Campo(label: 'Cód. Marca', pk: true, nn: true, auto: true)]
    protected $idMarca;

    #[Campo(label: 'Nome da marca', nn: true, order: true)]
    protected $marca;

    #[Campo(label: 'Fabricante da marca')]
    protected $fabricante;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    /**
     * Get the value of idMarca
     */
    public function getIdMarca()
    {
        return $this->idMarca;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of fabricante
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set the value of fabricante
     */
    public function setFabricante($fabricante): self
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreated_At()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdated_At()
    {
        return $this->updated_at;
    }
}