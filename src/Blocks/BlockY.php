<?php

namespace NFePHP\ECF\Blocks;

use NFePHP\ECF\Elements;
use NFePHP\ECF\Common\Block;
use NFePHP\ECF\Common\BlockInterface;

/**
 * Classe constutora do bloco Y - Livro Caixa
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * @method Elements\Y001 y001(\stdClass $std) Constructor element Y001
 * @method Elements\Y612 y612(\stdClass $std) Constructor element Y612
 */
final class BlockY extends Block implements BlockInterface
{
    const TOTAL = 'Y990';

    public $elements = [
        'y001' => ['class' => Elements\Y001::class, 'level' => 1, 'type' => 'single'],
        'y612' => ['class' => Elements\Y612::class, 'level' => 2, 'type' => 'multiple']
    ];

    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
