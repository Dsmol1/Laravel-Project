<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    // protected $fillable = [
    //   'cart'
    // ];
    //
    // public function user(){
    //   return $this->belongsTo(User::class);
    //
    // }
    protected $fillable = ['shipped'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
      return $this->hasMany(OrderItem::class);
    }
}
