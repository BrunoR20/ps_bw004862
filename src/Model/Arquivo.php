<?php

namespace Petshop\Model;

//arquivos
class Arquivo
{
    //Cód. Arquivo, pk, nn, auto
    protected $idArquivo;

    //Nome do arquivo, nn
    protected $nome;

    //Tipo do arquivo, nn
    protected $tipo;

    //Descrição do arquivo
    protected $descricao;
    
    //Tabela do arquivo
    protected $tabela;

    //Cód. Tabela do arquivo
    protected $tabelaId;

    //Dt. Criação, nn, auto
    protected $created_at;

    //Dt. Alteração, nn, auto
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