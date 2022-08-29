<?php

namespace NFePHP\ECF\Elements;

use NFePHP\ECF\Common\Element;
use NFePHP\ECF\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0000 do Bloco 0 OBRIGATÓRIO [1:1]
 * REGISTRO 0000: ABERTURA DO ARQUIVO DIGITAL E IDENTIFICAÇÃO DO EMPRESÁRIO OU DA SOCIEDADE EMPRESÁRIA
 */
class Z0000 extends Element implements ElementInterface
{
    const REG = '0000';
    const LEVEL = 0;
    const PARENT = '';

    protected $parameters = [
        'nome_esc' => [
            'type'     => 'string',
            'regex'    => '^(LECF)$',
            'required' => true,
            'info'     => 'Texto fixo contendo LECF.',
            'format'   => ''
        ],
        'cod_ver'     => [
            'type'     => 'string',
            'regex'    => '^[0-9]{4}$', // '^(0007)$',
            'required' => true,
            'info'     => 'codigo da versao do layout.',
            'format'   => ''
        ],
        'cnpj'      => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'Número de inscrição da entidade no CNPJ.',
            'format'   => ''
        ],
        'nome'      => [
            'type'     => 'string',
            'regex'    => '^.{2,100}$',
            'required' => true,
            'info'     => 'Nome empresarial da entidade.',
            'format'   => ''
        ],
        'ind_sit_ini_per' => [
            'type'     => 'numeric',
            'regex'    => '^(0|1|2|3|4)$',
            'required' => true,
            'info'     => 'Indicador de situação no início do período.',
            'format'   => ''
        ],
        'sit_especial' => [
            'type'     => 'numeric',
            'regex'    => '^(0|1|2|3|4|5|6|7|8|9)$',
            'required' => false,
            'info'     => 'Indicador de Situação Especial e Outros Eventos.',
            'format'   => ''
        ],
        'pat_reman_cis'    => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Patrimonio Resmanescente em caso de cisao.',
            'format'   => '8v4'
        ],
        'dt_sit_esp'     => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info'     => 'Data da situacao especial.',
            'format'   => ''
        ],
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
            'info'     => 'Data final das informações contidas no arquivo.',
            'format'   => ''
        ],
        'retificadora' => [
            'type'     => 'string',
            'regex'    => '^(S|N|F)$',
            'required' => true,
            'info'     => 'Escritora Retificadora.',
            'format'   => ''
        ],
        'num_rec' => [
            'type'     => 'string',
            'regex'    => '^.{0,41}$',
            'required' => false,
            'info'     => 'Hash do numero do recibo da escrituração anterior.',
            'format'   => ''
        ],
        'tip_ecf' => [
            'type'     => 'numeric',
            'regex'    => '^(0|1|2)$',
            'required' => true,
            'info'     => 'Indicador de tipo de ecf',
            'format'   => ''
        ],
        'cod_scp'      => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => false,
            'info'     => 'Número de inscrição da entidade no CNPJ.',
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
