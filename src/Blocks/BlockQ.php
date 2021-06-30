<?php

namespace NFePHP\ECF\Blocks;

use NFePHP\ECF\Elements;
use NFePHP\ECF\Common\Block;
use NFePHP\ECF\Common\BlockInterface;

/**
 * Classe constutora do bloco Q - Livro Caixa
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * @method Elements\Q001 q001(\stdClass $std) Constructor element Q001
 * @method Elements\Q100 q100(\stdClass $std) Constructor element Q100
 */
final class BlockQ extends Block implements BlockInterface
{
    const TOTAL = 'Q990';

    public $elements = [
        'q001' => ['class' => Elements\Q001::class, 'level' => 1, 'type' => 'single'],
        'q100' => ['class' => Elements\Q100::class, 'level' => 2, 'type' => 'single']
    ];

    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
