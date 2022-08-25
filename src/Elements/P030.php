<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0030 do Bloco P OBRIGATÓRIO [0:5]
 * Registro P030: Abertura do Bloco P
 */
class P030 extends Element implements ElementInterface
{
    const REG = 'P030';
    const LEVEL = 2;
    const PARENT = '';

    protected $parameters = [
        'dt_ini'     => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data inicio do periodo.',
            'format'   => ''
        ],
        'dt_fin'     => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data final do periodo.',
            'format'   => ''
        ],
        'per_apur'     => [
            'type'     => 'string',
            'regex'    => '^(A00|T01|T02|T03|T04)$',
            'required' => true,
            'info'     => 'Periodo de apuracao.',
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
