<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0612 do Bloco Y OBRIGATÓRIO [0:N]
 * REGISTRO Y612: IDENTIFICACAO E RENDIMENTOS DE DIRIGENTES E CONSELHEIROS – IMUNES OU ISENTAS
 */
class Y612 extends Element implements ElementInterface
{
    const REG = 'Y612';
    const LEVEL = 2;
    const PARENT = '';

    protected $parameters = [
        'cpf' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{11}$',
            'required' => true,
            'info'     => 'CPF.',
            'format'   => ''
        ],
        'nome'      => [
            'type'     => 'string',
            'regex'    => '^.{2,150}$',
            'required' => true,
            'info'     => 'Nome do signatario.',
            'format'   => ''
        ],
        'qualif' => [
            'type'     => 'string',
            'regex'    => '^(10|11|12|13|14|15|16|17)$',
            'required' => true,
            'info'     => 'Qualificação do assinante, conforme tabela.',
            'format'   => ''
        ],
        'vl_rem_trab' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de entrada dos recursos.',
            'format'   => '19v2'
        ],
        'vl_dem_rend' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de entrada dos recursos.',
            'format'   => '19v2'
        ],
        'vl_ir_ret' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de entrada dos recursos.',
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
