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

    public function getIdArquivo()
    {
        return $this->idArquivo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getTabela()
    {
        return $this->tabela;
    }

    public function setTabela($tabela): self
    {
        $this->tabela = $tabela;

        return $this;
    }

    public function getTabelaId()
    {
        return $this->tabelaId;
    }

    public function setTabelaId($tabelaId): self
    {
        $this->tabelaId = $tabelaId;

        return $this;
    }

    public function getCreated_At()
    {
        return $this->created_at;
    }

    public function getUpdated_At()
    {
        return $this->updated_at;
    }
}