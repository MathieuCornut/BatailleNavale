<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXewgG8h\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXewgG8h/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXewgG8h.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXewgG8h\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXewgG8h\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XewgG8h',
    'container.build_id' => '51d527e7',
    'container.build_time' => 1575904310,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXewgG8h');
