<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4a8nwdo\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4a8nwdo/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container4a8nwdo.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container4a8nwdo\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container4a8nwdo\appDevDebugProjectContainer([
    'container.build_hash' => '4a8nwdo',
    'container.build_id' => 'f70f0b29',
    'container.build_time' => 1557218616,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4a8nwdo');
