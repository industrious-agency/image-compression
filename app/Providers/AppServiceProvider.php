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
            resolve(ImageCompression::class);

            try {
                $path = $this->path();
                \Tinify\fromFile($path)->toFile($path);
            } catch (\Exception $e) {}

            return $this;
        });
    }
}
