<?php
namespace App\Http\Controllers;
use DB;
use Request;
use App\Renter;
use App\Contract;
use App\Http\Requests;
use App\Http\Requests\RenterRequest;
use App\Http\Controllers\Controller;
class RentersController extends Controller{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
     //get each propert from database
     $columns = array('last_name' => 'Last Name', 'first_name' => 'First Name', 'phone_number' => 'Phone', 'email' =>  'Email');
     $renters = Renter::all();
     return view('renters.index', compact('columns', 'renters'));
  }

  public function show($id){
    $renter = Renter::find($id);
    return view('renters.show', compact('renter'));
  }

  public function create(){
    return view('renters.create');
  }

  public function store(RenterRequest $request){
    $input = $request->all();
    Renter::create($input);
    return redirect('renters');
  }
  public function edit($id){
    $renter = Renter::findOrFail($id);
    return view('renters.edit', compact('renter'));
  }
  public function update($id, RenterRequest $request){
    $renter = Renter::findOrFail($id);
    $renter->update($request->all());
    return redirect('renters');
  }
  public function destroy($id){
    $renter = Renter::findOrFail($id);
    $contract = Contract::where('renter_id', '=', $id)->delete();
    $renter->delete();
    return redirect('renters');
  }
}
