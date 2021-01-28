<?php

namespace CodeTheCulture\Forms;

use CodeTheCulture\Forms\Components\Text;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FormsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('forms')
            ->hasConfigFile()
            ->hasViews();

        $this->loadViewComponentsAs('culture', [
            Text::class,
        ]);
    }
}
