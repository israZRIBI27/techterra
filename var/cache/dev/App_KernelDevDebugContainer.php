<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBEuU8T5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBEuU8T5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBEuU8T5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBEuU8T5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBEuU8T5\App_KernelDevDebugContainer([
    'container.build_hash' => 'BEuU8T5',
    'container.build_id' => '005aa411',
    'container.build_time' => 1715723685,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBEuU8T5');
