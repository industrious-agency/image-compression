<?php

namespace App\Providers;

use App\Support\Services\ImageCompression;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\ServiceProvider;
use Tinify\Tinify;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ImageCompression::class, function() {
            $tinify = new Tinify;
            $tinify->setKey($this->app->config['servces.tinify']);

            return new ImageCompression($tinify);
        });

        UploadedFile::macro('compress', function() {
            $api = resolve(ImageCompression::class);
            $api->compress($this->path());

            return $this;
        });
    }
}
