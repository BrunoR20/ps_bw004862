<?php

namespace Petshop\Model;

//marcas
class Marca
{
    //Cód. Marca, pk, nn, auto
    protected $idMarca;

    //Nome da marca, nn
    protected $marca;

    //Fabricante da marca
    protected $fabricante;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
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
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}