<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0200 do Bloco P OBRIGATÓRIO [0:N]
 * Registro P200: Abertura do Bloco P
 */
class P200 extends Element implements ElementInterface
{
    const REG = 'P200';
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
            'regex'    => '^.{0,250}$',
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
