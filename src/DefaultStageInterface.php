<?php

/**
 * This file is part of phuria/pipolino package.
 *
 * Copyright (c) 2017 Beniamin Jonatan Šimko
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phuria\Pipolino;

/**
 * @author Beniamin Jonatan Šimko <concat@simko.it>
 */
interface DefaultStageInterface
{
    /**
     * @param array ...$args
     *
     * @return mixed
     */
    public function __invoke(...$args);
}
