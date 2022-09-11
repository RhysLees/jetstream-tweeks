<?php

namespace RhysLees\JetstreamTweeks;

use Livewire\Livewire;
use RhysLees\JetstreamTweeks\Http\Livewire\DeleteTeamForm;
use RhysLees\JetstreamTweeks\Http\Livewire\DeleteUserForm;
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

    public function boot()
    {
        parent::boot();

        if (! $this->app->runningInConsole()) {
            Livewire::component('tenancy::delete-team-form', DeleteTeamForm::class);
            Livewire::component('tenancy::delete-user-form', DeleteUserForm::class);
        }
    }
}
