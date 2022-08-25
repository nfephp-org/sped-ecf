<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0001 do Bloco P OBRIGATÓRIO [1:1]
 * Registro P001: Abertura do Bloco P
 */
class P001 extends Element implements ElementInterface
{
    const REG = 'P001';
    const LEVEL = 1;
    const PARENT = '';

    protected $parameters = [
        'ind_dad' => [
            'type'     => 'numeric',
            'regex'    => '^(0|1)$',
            'required' => true,
            'info'     => 'Indicador de movimento.',
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
