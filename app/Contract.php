<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable =[
      'property_id',
      'renter_id',
      'term_start',
      'term_end',
      'rent'
    ];
    public function property(){
      return $this-belongsTo('app\Property');
    }
    public function renter(){
      return $this-belongsTo('app\Renter');
    }
}
