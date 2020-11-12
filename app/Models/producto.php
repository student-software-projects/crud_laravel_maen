<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $table='products';
    protected $primaryKey='id';
    protected $fillable=[
        'name','description','price','company_id','product_type:id'
    ];

}
