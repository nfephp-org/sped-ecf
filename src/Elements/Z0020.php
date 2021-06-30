<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0000 do Bloco 0 OBRIGATÓRIO [1:1]
 * REGISTRO 0030: DADOS CADASTRAIS
 */
class Z0020 extends Element implements ElementInterface
{
    const REG = '0020';
    const LEVEL = 2;
    const PARENT = '0000';

    protected $parameters = [
        'campo_unico' => [
            'type'     => 'string',
            'regex'    => '',
            'required' => true,
            'info'     => 'Indicador de movimento.',
            'format'   => ''
        ],
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
