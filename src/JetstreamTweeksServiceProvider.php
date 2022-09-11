<?php

namespace RhysLees\JetstreamTweeks;

use Livewire\Livewire;
use RhysLees\JetstreamTweeks\Http\Livewire\DeleteTeamForm;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class JetstreamTweeksServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('jetstream-tweeks')
            ->hasViews();
    }

    public function bootingPackage()
    {
        if (! $this->app->runningInConsole()) {
            Livewire::component('jetstream-tweeks::delete-team-form', DeleteTeamForm::class);
        }
    }
}
