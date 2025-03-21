<?php

declare(strict_types=1);

arch()->preset()->php();
// Since Laravel Framework changed Model casting conventions from protected property $casts to protected function casts()
// we need to wait for Pest PHP updates to support this.
// arch()->preset()->strict();
arch()->preset()->laravel();
arch()->preset()->security();

arch('controllers')
    ->expect('App\Http\Controllers')
    ->not->toBeUsed();
