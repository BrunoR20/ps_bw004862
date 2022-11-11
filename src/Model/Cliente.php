<?php

namespace Petshop\Model;

use Exception;
use Petshop\Core\Attribute\Campo;
use Petshop\Core\Attribute\Entidade;
use Petshop\Core\DAO;
use Respect\Validation\Validator as v;

#[Entidade(name: 'clientes')]
class Cliente extends DAO
{
    #[Campo(label: 'Cód. Cliente', pk: true, nn: true, auto: true)]
    protected $idCliente;

    #[Campo(label: 'Tipo de cliente', nn: true)]
    protected $tipo;

    #[Campo(label: 'CPF/CNPJ do cliente', nn: true)]
    protected $cpfCnpj;

    #[Campo(label: 'Nome do cliente', nn: true, order: true)]
    protected $nome;

    #[Campo(label: 'E-mail do cliente', nn: true)]
    protected $email;

    #[Campo(label: 'Senha do cliente', nn: true)]
    protected $senha;

    #[Campo(label: 'Dt. Criação', nn: true, auto: true)]
    protected $created_at;

    #[Campo(label: 'Dt. Alteração', nn: true, auto: true)]
    protected $updated_at;

    /**
     * Get the value of idCliente
     */
    public function getIdCliente()
    {
        return $this->idCliente;
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
    public function setTipo(string $tipo): self
    {
        $tipo = strtoupper(trim($tipo));
        if ( !in_array($tipo, ['F', 'J']) ) {
            throw new Exception('O tipo de pessoa não está definido corretamente (F/J)');
        }

        $this->tipo = $tipo;
        return $this;
    }

    /**
     * Get the value of cpfCnpj
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * Set the value of cpfCnpj
     */
    public function setCpfCnpj(string $cpfCnpj): self
    {
        if ( !in_array($this->tipo, ['F', 'J']) ) {
            throw new Exception('O tipo de pessoa (F/J) precisa ser definido antes do documento');
        }

        if ($this->tipo == 'F') {
            $docValido = v::cpf()->validate($cpfCnpj);
        } else {
            $docValido = v::cnpj()->validate($cpfCnpj);
        }

        if (!$docValido) {
            throw new Exception('O documento informado é inválido');
        }

        $this->cpfCnpj = $cpfCnpj;
        return $this;
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
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $email = strtolower(trim($email));
        $emailValido = v::email()->validate($email);

        if (!$emailValido) {
            throw new Exception('O e-mail informado é inválido');
        }

        $this->email = $email;
        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     */
    public function setSenha(string $senha): self
    {
        $hashDaSenha = hash_hmac('md5', $senha, SALT_SENHA);
        $senha = password_hash($hashDaSenha, PASSWORD_DEFAULT);

        $this->senha = $senha;
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