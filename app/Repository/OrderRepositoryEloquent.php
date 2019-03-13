<?php
namespace App\Repository;

use Illuminate\Database\Query\Builder;
use App\Models\Order;

class OrderRepositoryEloquent extends BaseRepositoryEloquent implements OrderRepository  {


    public function __construct()
    {
      $this->model = app(Order::class);
    }


}
