<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0000 do Bloco 0 OBRIGATÓRIO [1:1]
 * REGISTRO 0030: DADOS CADASTRAIS
 */
class Z0030 extends Element implements ElementInterface
{
    const REG = '0030';
    const LEVEL = 2;
    const PARENT = '0000';

    protected $parameters = [
        'cod_nat' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{4}$',
            'required' => true,
            'info'     => 'Codigo da Natureza Juridica.',
            'format'   => ''
        ],
        'cnae_fiscal' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Codigo da Natureza Juridica.',
            'format'   => ''
        ],
        'endereco'      => [
            'type'     => 'string',
            'regex'    => '^.{2,150}$',
            'required' => true,
            'info'     => 'Endereco da Pessoa Juridica.',
            'format'   => ''
        ],
        'num'      => [
            'type'     => 'string',
            'regex'    => '^.{1,6}$',
            'required' => true,
            'info'     => 'Numero.',
            'format'   => ''
        ],
        'compl'      => [
            'type'     => 'string',
            'regex'    => '^.{0,50}$',
            'required' => false,
            'info'     => 'Complemento do Endereco da Pessoa Juridica.',
            'format'   => ''
        ],
        'bairro'      => [
            'type'     => 'string',
            'regex'    => '^.{2,50}$',
            'required' => false,
            'info'     => 'Bairro/Distrito.',
            'format'   => ''
        ],
        'uf'        => [
            'type'     => 'string',
            'regex'    => '^[A-Z]{2}$',
            'required' => true,
            'info'     => 'Sigla da unidade da federação da entidade.',
            'format'   => ''
        ],
        'cod_mun'    => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código  do  município  do  domicílio  fiscal  da  '
                . 'entidade, conforme a tabela IBGE',
            'format'   => ''
        ],
        'cep' => [
            'type' => 'numeric',
            'regex' => '^(\d{8})$',
            'required' => true,
            'info' => 'Código de Endereçamento Postal.',
            'format' => ''
        ],
        'num_tel' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{6,15}$',
            'required' => false,
            'info'     => 'DDD + Numero do Telefone.',
            'format'   => ''
        ],
        'email' => [
            'type'     => 'string',
            'regex'    => '^.{2,250}$',
            'required' => false,
            'info'     => 'Email do signatário.',
            'format'   => ''
        ]
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
        $this->postValidation();
    }
}
