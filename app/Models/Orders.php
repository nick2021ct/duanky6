<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'user_fullname',
        'user_email',
        'user_phone',
        'user_address',
        'payment_method',
        'status',
        'total_money',
        'created_at',
        'updated_at',
        
    ];
  

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
