<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $primaryKey = "id_order";

    public function detail_order()
    {
        return $this->hasMany(DetailOrders::class,"id_order","id_order");
    }

}
