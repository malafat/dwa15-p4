<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
  protected $fillable =[
    'first_name',
    'last_name',
    'phone_number',
    'email',
    'notes'
  ];
  public function contracts(){
    return $this->hasMany('App\Contract');
  }
}
