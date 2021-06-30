<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0100 do Bloco Q OBRIGATÓRIO [1:1]
 * REGISTRO Q100: DEMONSTRATIVO DO LIVRO CAIXA
 */
class Q100 extends Element implements ElementInterface
{
    const REG = 'Q100';
    const LEVEL = 2;
    const PARENT = '';

    protected $parameters = [
        'data'     => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data de entrada ou saida dos recursos.',
            'format'   => ''
        ],
        'num_doc'      => [
            'type'     => 'string',
            'regex'    => '^.{0,25}$',
            'required' => false,
            'info'     => 'Numero do documento.',
            'format'   => ''
        ],
        'hist'      => [
            'type'     => 'string',
            // 'regex'    => '^.{2,150}$',
            'regex'    => '',
            'required' => true,
            'info'     => 'Historico.',
            'format'   => ''
        ],
        'vr_entrada'        => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de entrada dos recursos.',
            'format'   => '19v2'
        ],
        'vr_saida'        => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de saida dos recursos.',
            'format'   => '19v2'
        ],
        'sld_fin'        => [
            'type'     => 'numeric',
            // 'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'regex'    => '',
            'required' => true,
            'info'     => 'Saldo final.',
            'format'   => '19v2'
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
