<?php

namespace Digia\GraphQL\Language\AST\Node;

trait KindTrait
{

    /**
     * @var ?string
     */
    private $kind;

    /**
     * @return null|string
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * @param null|string $kind
     * @return $this
     */
    protected function setKind(?string $kind)
    {
        $this->kind = $kind;

        return $this;
    }
}
