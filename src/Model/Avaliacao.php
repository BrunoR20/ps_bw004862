<?php

namespace Petshop\Modal;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'avaliacoes')]
class Avaliacao extends DAO
{
    #[Campo(label: 'Cód. Avaliação', pk: true, nn: true, auto: true)]
    protected $idAvaliacao;

    #[Campo(label: 'Cód. Produto', nn: true)]
    protected $idProduto;

    #[Campo(label: 'Cód. Cliente', nn: true)]
    protected $idCliente;

    #[Campo(label: 'Nota da avaliação', nn: true)]
    protected $nota;

    #[Campo(label: 'Comentário da avaliação')]
    protected $comentario;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    /**
     * Get the value of idAvaliacao
     */
    public function getIdAvaliacao()
    {
        return $this->idAvaliacao;
    }

    /**
     * Get the value of idProduto
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set the value of idProduto
     */
    public function setIdProduto($idProduto): self
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Get the value of idCliente
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set the value of idCliente
     */
    public function setIdCliente($idCliente): self
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get the value of nota
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     */
    public function setNota($nota): self
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get the value of comentario
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set the value of comentario
     */
    public function setComentario($comentario): self
    {
        $this->comentario = $comentario;

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