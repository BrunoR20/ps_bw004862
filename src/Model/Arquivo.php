<?php

namespace Petshop\Model;

use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;

#[Entidade(name: 'arquivos')]
class Arquivo extends DAO
{
    #[Campo(label: 'Cód. Arquivo', pk: true, nn: true, auto: true)]
    protected $idArquivo;

    #[Campo(label: 'Nome do arquivo', nn: true, order: true)]
    protected $nome;

    #[Campo(label: 'Tipo do arquivo', nn: true)]
    protected $tipo;

    #[Campo(label: 'Descrição do arquivo')]
    protected $descricao;
    
    #[Campo(label: 'Tabela do arquivo')]
    protected $tabela;

    #[Campo(label: 'Cód. Tabela do arquivo')]
    protected $tabelaId;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    /**
     * Get the value of idArquivo
     */
    public function getIdArquivo()
    {
        return $this->idArquivo;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of tabela
     */
    public function getTabela()
    {
        return $this->tabela;
    }

    /**
     * Set the value of tabela
     */
    public function setTabela($tabela): self
    {
        $this->tabela = $tabela;

        return $this;
    }

    /**
     * Get the value of tabelaId
     */
    public function getTabelaId()
    {
        return $this->tabelaId;
    }

    /**
     * Set the value of tabelaId
     */
    public function setTabelaId($tabelaId): self
    {
        $this->tabelaId = $tabelaId;

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