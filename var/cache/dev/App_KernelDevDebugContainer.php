<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZHB9xzT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZHB9xzT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZHB9xzT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZHB9xzT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZHB9xzT\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZHB9xzT',
    'container.build_id' => 'd9a50fb1',
    'container.build_time' => 1619535545,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZHB9xzT');
