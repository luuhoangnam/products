<?php

namespace Namest\Products;

use Illuminate\Support\ServiceProvider;

/**
 * Class ProductsServiceProvider
 *
 * @author  Nam Hoang Luu <nam@mbearvn.com>
 * @package Namest\Products
 *
 */
class ProductsServiceProvider extends ServiceProvider
{
    /**
     * Boot up resources
     */
    public function boot()
    {
        // Publish a config file
        $this->publishes([
            __DIR__ . '/../config/products.php' => config_path('products.php')
        ], 'config');

        // Publish your migrations
        $this->publishes([
            __DIR__ . '/../database/migrations/' => base_path('/database/migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../tests/' => base_path('/tests')
        ], 'tests');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}
