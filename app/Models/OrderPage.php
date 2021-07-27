<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderPage extends Model
{
    protected $table = 'order_page';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'total'
    ];
}
