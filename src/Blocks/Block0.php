<?php

namespace NFePHP\ECF\Blocks;

use NFePHP\ECF\Elements;
use NFePHP\ECF\Common\Block;
use NFePHP\ECF\Common\BlockInterface;

/**
 * Classe constutora do bloco 0 Abertura, Identificação e Referências
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * NOTA: usada a letra z no inicio do elemento devido ao fato de não poder chamar classes
 * apenas com numeros e também para não confundir os com elementos do bloco B
 *
 * @method Elements\Z0000 z0000(\stdClass $std) Constructor element 0000
 * @method Elements\Z0001 z0001(\stdClass $std) Constructor element 0001
 * @method Elements\Z0010 z0010(\stdClass $std) Constructor element 0010
 * @method Elements\Z0020 z0020(\stdClass $std) Constructor element 0020
 * @method Elements\Z0021 z0021(\stdClass $std) Constructor element 0021
 * @method Elements\Z0030 z0030(\stdClass $std) Constructor element 0030
 * @method Elements\Z0035 z0035(\stdClass $std) Constructor element 0035
 * @method Elements\Z0930 z0930(\stdClass $std) Constructor element 0930
 */
final class Block0 extends Block implements BlockInterface
{
    const TOTAL = '0990';

    public $elements = [
        'z0000' => ['class' => Elements\Z0000::class, 'level' => 0, 'type' => 'single'],
        'z0001' => ['class' => Elements\Z0001::class, 'level' => 1, 'type' => 'single'],
        'z0010' => ['class' => Elements\Z0010::class, 'level' => 2, 'type' => 'multiple'],
        'z0020' => ['class' => Elements\Z0020::class, 'level' => 2, 'type' => 'multiple'],
        'z0021' => ['class' => Elements\Z0021::class, 'level' => 2, 'type' => 'multiple'],
        'z0030' => ['class' => Elements\Z0030::class, 'level' => 2, 'type' => 'multiple'],
        'z0035' => ['class' => Elements\Z0035::class, 'level' => 2, 'type' => 'multiple'],
        'z0930' => ['class' => Elements\Z0930::class, 'level' => 2, 'type' => 'multiple'],
    ];

    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
