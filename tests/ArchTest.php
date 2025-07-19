<?php

declare(strict_types=1);

arch()->preset()->php();

// arch()->preset()->strict();

arch()->preset()->security()->ignoring('assert');

arch()->preset()->laravel();

arch('strict types')
    ->expect('App')
    ->toUseStrictTypes();

arch('annotations')
    ->expect('App')
    ->toHavePropertiesDocumented()
    ->toHaveMethodsDocumented();
