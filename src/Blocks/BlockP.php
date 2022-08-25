<?php

namespace NFePHP\ECF\Blocks;

use NFePHP\ECF\Elements;
use NFePHP\ECF\Common\Block;
use NFePHP\ECF\Common\BlockInterface;

/**
 * Classe constutora do bloco P -  Lucro Presumido
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * @method Elements\P001 p001(\stdClass $std) Constructor element P001
 * @method Elements\P030 p030(\stdClass $std) Constructor element P030
 * @method Elements\P100 p100(\stdClass $std) Constructor element P100
 * @method Elements\P130 p130(\stdClass $std) Constructor element P130
 * @method Elements\P150 p150(\stdClass $std) Constructor element P150
 * @method Elements\P200 p200(\stdClass $std) Constructor element P200
 * @method Elements\P230 p230(\stdClass $std) Constructor element P230
 * @method Elements\P300 p300(\stdClass $std) Constructor element P300
 * @method Elements\P400 p400(\stdClass $std) Constructor element P400
 * @method Elements\P500 p500(\stdClass $std) Constructor element P500
 */
final class BlockP extends Block implements BlockInterface
{
    const TOTAL = 'P990';

    public $elements = [
        'p001' => ['class' => Elements\P001::class, 'level' => 1, 'type' => 'single'],
        'p030' => ['class' => Elements\P030::class, 'level' => 2, 'type' => 'multiple'],
        'p100' => ['class' => Elements\P100::class, 'level' => 3, 'type' => 'multiple'],
        'p130' => ['class' => Elements\P130::class, 'level' => 3, 'type' => 'multiple'],
        'p150' => ['class' => Elements\P150::class, 'level' => 3, 'type' => 'multiple'],
        'P200' => ['class' => Elements\P200::class, 'level' => 3, 'type' => 'multiple'],
        'p230' => ['class' => Elements\P230::class, 'level' => 3, 'type' => 'multiple'],
        'p300' => ['class' => Elements\P300::class, 'level' => 3, 'type' => 'multiple'],
        'p400' => ['class' => Elements\P400::class, 'level' => 3, 'type' => 'multiple'],
        'p500' => ['class' => Elements\P500::class, 'level' => 3, 'type' => 'multiple']
    ];

    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
