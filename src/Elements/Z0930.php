<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0000 do Bloco 0 OBRIGATÓRIO [1:1]
 * REGISTRO 0030: DADOS CADASTRAIS
 */
class Z0930 extends Element implements ElementInterface
{
    const REG = '0930';
    const LEVEL = 2;
    const PARENT = '';

    protected $parameters = [
        'ident_nom'      => [
            'type'     => 'string',
            'regex'    => '^.{2,150}$',
            'required' => true,
            'info'     => 'Nome do signatario.',
            'format'   => ''
        ],
        'ident_cpf_cnpj' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{11,14}$',
            'required' => true,
            'info'     => 'CPF / CNPJ.',
            'format'   => ''
        ],
        'ident_qualif' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{3}$',
            'required' => true,
            'info'     => 'Qualificação do assinante, conforme tabela.',
            'format'   => ''
        ],
        'ind_crc' => [
            'type' => 'string',
            'regex' => '^.{0,15}$',
            'required' => false,
            'info' => 'Número de inscrição do contabilista no Conselho Regional de Contabilidade.',
            'format' => ''
        ],
        'email' => [
            'type'     => 'string',
            'regex'    => '^(.*){8,60}$', // '^[A-Za-z0-9]{115}$',
            'required' => false,
            'info'     => 'Email do signatário.',
            'format'   => ''
        ],
        'fone' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => false,
            'info'     => 'DDD + Numero do Telefone.',
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
