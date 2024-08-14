<?php
declare(strict_types=1);

namespace EonX\EasyEncryption\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final class EncryptableField
{
    public function __construct(
        private ?string $fieldName = null,
    ) {
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
}
