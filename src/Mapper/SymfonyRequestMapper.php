<?php

namespace Bindto\Mapper;

use Liuggio\Filler\HTTPPropertyTrait;
use Bindto\MapperInterface;

class SymfonyRequestMapper implements MapperInterface
{
    use HTTPPropertyTrait;

    public function map($from, $to)
    {
        $copyOfTo = $to;
        $this->copyPropertiesFromRequest($from, $copyOfTo);

        return $copyOfTo;
    }
}
