<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHnwHRRV\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHnwHRRV/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHnwHRRV.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHnwHRRV\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHnwHRRV\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HnwHRRV',
    'container.build_id' => 'c117fc37',
    'container.build_time' => 1576074443,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHnwHRRV');
