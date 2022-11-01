<?php

namespace Filament\Contracts;

use Filament\Context;

interface Plugin
{
    public function getId(): string;

    public function boot(Context $context): void;
}