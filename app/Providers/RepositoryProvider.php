<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\BaseRepository;
use App\Repository\BaseRepositoryEloquent;
use App\Repository\OrderRepository;
use App\Repository\OrderRepositoryEloquent;
use App\Repository\UsersRepository;
use App\Repository\UsersRepositoryEloquent;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(BaseRepository::class,BaseRepositoryEloquent::class);
      $this->app->bind(OrderRepository::class,OrderRepositoryEloquent::class);
      $this->app->bind(UsersRepository::class,UsersRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
