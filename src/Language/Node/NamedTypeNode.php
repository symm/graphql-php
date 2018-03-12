<?php

namespace Digia\GraphQL\Language\Node;

use Digia\GraphQL\Language\Node\NodeKindEnum;

class NamedTypeNode extends AbstractNode implements TypeNodeInterface
{

    use NameTrait;

    /**
     * @var string
     */
    protected $kind = NodeKindEnum::NAMED_TYPE;

    /**
     * @inheritdoc
     */
    public function toArray(): array
    {
        return [
            'kind' => $this->kind,
            'name' => $this->getNameAsArray(),
            'loc'  => $this->getLocationAsArray(),
        ];
    }
}