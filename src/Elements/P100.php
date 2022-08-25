<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0100 do Bloco P OBRIGATÓRIO [0:N]
 * Registro P100: Abertura do Bloco P
 */
class P100 extends Element implements ElementInterface
{
    const REG = 'P100';
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
            'regex'    => '^.{2}$',
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
        'val_cta_ref_ini'        => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo Inicial da Conta Referencial.',
            'format'   => '19v2'
        ],
        'ind_val_cta_ref_ini' => [
            'type'     => 'string',
            'regex'    => '^(D|C)$',
            'required' => true,
            'info'     => 'Indicador da Situacao do Saldo Inicial.',
            'format'   => ''
        ],
        'val_cta_ref_deb'        => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor Total dos Debitos: Somatorio dos valores mapeados.',
            'format'   => '19v2'
        ],
        'val_cta_ref_cred'        => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor Total dos Creditos: Somatorio dos valores mapeados.',
            'format'   => '19v2'
        ],
        'val_cta_ref_fin'        => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo Final da Conta Referencial.',
            'format'   => '19v2'
        ],
        'ind_val_cta_ref_fin' => [
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
