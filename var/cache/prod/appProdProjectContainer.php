<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4hrdgnh\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4hrdgnh/appProdProjectContainer.php') {
    touch(__DIR__.'/Container4hrdgnh.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container4hrdgnh\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container4hrdgnh\appProdProjectContainer([
    'container.build_hash' => '4hrdgnh',
    'container.build_id' => '5c442123',
    'container.build_time' => 1557213105,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4hrdgnh');
