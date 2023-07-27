<?php declare(strict_types=1);

namespace SwagCustomField;

use Shopware\Core\Framework\Plugin;

use MyCustomPlugin\Product\DecoratedProductDefinition;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;
use Shopware\Core\Framework\Plugin\Context\DeactivateContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;

class SwagCustomField extends Plugin
{
    public function activate(ActivateContext $context): void
    {
        parent::activate($context);
    }

    public function deactivate(DeactivateContext $context): void
    {
        parent::deactivate($context);
    }

    public function uninstall(UninstallContext $context): void
    {
        parent::uninstall($context);
    }

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        // Zarejestruj dekorację klasy odpowiedzialnej za produkty
        $container->addCompilerPass(new DecoratedProductDefinition());
    }
}