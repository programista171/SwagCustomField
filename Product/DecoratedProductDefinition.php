<?php declare(strict_types=1);

namespace SwagCustomField\Product;

use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtensionInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Inherited;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Runtime;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\WriteProtected;
use Shopware\Core\Framework\DataAbstractionLayer\Field\LongTextField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class DecoratedProductDefinition implements EntityExtensionInterface
{
    public function extendFields(FieldCollection $collection): void
    {
        // Dodaj niestandardowe pole do definicji produktu
        $collection->add(
            new LongTextField('customTextField', 'custom_text_field')
        );
    }

    public function getDefinitionClass(): string
    {
        return ProductDefinition::class;
    }
}