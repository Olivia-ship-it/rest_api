<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNKhiWbp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNKhiWbp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNKhiWbp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNKhiWbp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNKhiWbp\App_KernelDevDebugContainer([
    'container.build_hash' => 'NKhiWbp',
    'container.build_id' => '124f5de6',
    'container.build_time' => 1620139832,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNKhiWbp');
