<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXIHjSsT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXIHjSsT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXIHjSsT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXIHjSsT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXIHjSsT\App_KernelDevDebugContainer([
    'container.build_hash' => 'XIHjSsT',
    'container.build_id' => 'a4876da2',
    'container.build_time' => 1654794032,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXIHjSsT');
