<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  protected $fillable =[
    'address',
    'city',
    'state',
    'area',
    'base_rent',
    'beds',
    'baths',
    'notes'
  ];

  public function contracts(){
    return $this->hasMany('App\Contract');
  }


}
