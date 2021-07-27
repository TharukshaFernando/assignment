<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $fillable = [
        'order_id', 'item', 'cost', 'qty', 'sub_total'
    ];
}
