<?php
namespace App\Http\Controllers;
use DB;
use Request;
use App\Property;
use App\Http\Requests;
use App\Http\Requests\PropertyRequest;
use App\Http\Controllers\Controller;
class PropertiesController extends Controller{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
     //get each propert from database
     $columns = array('address' => 'Address', 'city' => 'City', 'state' => 'State', 'beds' => 'Beds', 'baths' => 'Baths');
     $properties = Property::all();
     return view('properties.index', compact('properties', 'columns'));
  }

  public function show($id){
    $property = Property::find($id);
    return view('properties.show', compact('property'));
  }

  public function create(){
    return view('properties.create');
  }

  public function store(PropertyRequest $request){
    $input = $request->all();
    Property::create($input);
    return redirect('properties');
  }
  public function edit($id){
    $property = Property::findOrFail($id);
    return view('properties.edit', compact('property'));
  }
  public function update($id, PropertyRequest $request){
    $property = Property::findOrFail($id);
    $property->update($request->all());

    return redirect('properties');
  }
}
