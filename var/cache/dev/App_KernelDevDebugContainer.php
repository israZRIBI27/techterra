<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEL9uiHr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEL9uiHr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEL9uiHr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEL9uiHr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEL9uiHr\App_KernelDevDebugContainer([
    'container.build_hash' => 'EL9uiHr',
    'container.build_id' => 'ead98212',
    'container.build_time' => 1713141671,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEL9uiHr');