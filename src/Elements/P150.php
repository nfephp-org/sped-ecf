<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0150 do Bloco P OBRIGATÓRIO [0:N]
 * Registro P150: Abertura do Bloco P
 */
class P150 extends Element implements ElementInterface
{
    const REG = 'P150';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'codigo'    => [
            'type'     => 'string',
            'regex'    => '^.{1,50}$',
            'required' => true,
            'info'     => 'Codigo da Conta Referencial.',
            'format'   => ''
        ],
        'descricao' => [
            'type'     => 'string',
            'regex'    => '^.{200}$',
            'required' => false,
            'info'     => 'Descricao da Conta Referencial.',
            'format'   => ''
        ],
        'tipo'  => [
            'type'     => 'string',
            'regex'    => '^(S|A)$',
            'required' => true,
            'info'     => 'Tipo de Conta.',
            'format'   => ''
        ],
        'nivel' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{3}$',
            'required' => false,
            'info'     => 'Nivel da conta.',
            'format'   => ''
        ],
        'cod_nat'      => [
            'type'     => 'string',
            'regex'    => '^(04)$',
            'required' => false,
            'info'     => 'Codigo de natureza.',
            'format'   => ''
        ],
        'cod_cta_sup'      => [
            'type'     => 'string',
            'regex'    => '^.{200}$',
            'required' => false,
            'info'     => 'Codigo da Conta Sintetica de Nivel Imediatamente Superior.',
            'format'   => ''
        ],
        'valor'        => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo Final da Conta Referencial.',
            'format'   => '19v2'
        ],
        'ind_valor' => [
            'type'     => 'string',
            'regex'    => '^(D|C)$',
            'required' => true,
            'info'     => 'Indicador da Situacao do Saldo Final.',
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