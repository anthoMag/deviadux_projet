<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQU1GAHi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQU1GAHi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQU1GAHi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQU1GAHi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQU1GAHi\App_KernelDevDebugContainer([
    'container.build_hash' => 'QU1GAHi',
    'container.build_id' => '6eb7b354',
    'container.build_time' => 1671096163,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQU1GAHi');
