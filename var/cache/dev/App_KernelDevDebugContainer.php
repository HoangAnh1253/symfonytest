<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYkVdxC7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYkVdxC7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYkVdxC7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYkVdxC7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYkVdxC7\App_KernelDevDebugContainer([
    'container.build_hash' => 'YkVdxC7',
    'container.build_id' => 'bcf28f54',
    'container.build_time' => 1658249845,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYkVdxC7');
