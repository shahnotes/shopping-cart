<?php

declare(strict_types=1);

arch('livewire components')
    ->expect('App\Livewire')
    ->toBeClasses()
    ->ignoring('App\Livewire\Concerns')
    ->ignoring('App\Livewire\Actions')
    ->toExtend('Livewire\Component')
    ->ignoring('App\Livewire\Concerns')
    ->ignoring('App\Livewire\Actions')
    ->toHaveMethod('render')
    ->ignoring('App\Livewire\Concerns')
    ->ignoring('App\Livewire\Actions')
    ->toOnlyBeUsedIn([
        'App\Http\Controllers',
        'App\Http\Livewire',
        'App\Providers\AppServiceProvider',
    ]);

arch('livewire concerns')
    ->expect('App\Livewire\Concerns')
    ->toBeTraits();
