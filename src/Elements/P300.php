<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0300 do Bloco P OBRIGATÓRIO [0:N]
 * Registro P300: Abertura do Bloco P
 */
class P300 extends Element implements ElementInterface
{
    const REG = 'P300';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'codigo'    => [
            'type'     => 'string',
            'regex'    => '^.{1,200}$',
            'required' => true,
            'info'     => 'Codigo, conforme tabela dinamica do Sped.',
            'format'   => ''
        ],
        'descricao' => [
            'type'     => 'string',
            'regex'    => '^.{1,250}$',
            'required' => false,
            'info'     => 'Descricao, conforme tabela dinamica do Sped.',
            'format'   => ''
        ],
        'valor'        => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Valor.',
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
