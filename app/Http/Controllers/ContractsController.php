<?php
namespace App\Http\Controllers;
use DB;
use Request;
use Carbon\Carbon;
use App\Contract;
use App\Property;
use App\Renter;
use App\Http\Requests;
use App\Http\Requests\ContractRequest;
use App\Http\Controllers\Controller;
class ContractsController extends Controller{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){
    $now = Carbon::now()->toDateString();
    $columns = array('address' => 'Property Address', 'last_name' => 'Last Name', 'first_name' => 'First Name', 'renter_id' => 'Renter ID', 'term_start' => 'Start Date', 'term_end' => 'End Date', 'rent' => 'Rent');
    $contracts = Contract::whereDate('term_start', '<=', $now)
                        ->whereDate('term_end', '>=', $now)
                        ->join('renters','contracts.renter_id', '=', 'renters.id')
                        ->join('properties','contracts.property_id', '=', 'properties.id')
                        ->select('properties.address', 'renters.first_name', 'renters.last_name', 'contracts.*')
                        ->get();
    return view('contracts.index', compact('contracts', 'columns'));
    //return view('contracts.index', compact('contracts', 'columns', 'properties'));
  }
  public function getAll(){
    $columns = array('address' => 'Property Address', 'last_name' => 'Last Name', 'first_name' => 'First Name', 'renter_id' => 'Renter ID', 'term_start' => 'Start Date', 'term_end' => 'End Date', 'rent' => 'Rent');
    $contracts = Contract::join('renters','contracts.renter_id', '=', 'renters.id')
                        ->join('properties','contracts.property_id', '=', 'properties.id')
                        ->select('properties.address', 'renters.first_name', 'renters.last_name', 'contracts.*')
                        ->get();
    return view('contracts.index', compact('contracts', 'columns'));
  }
  public function show($id){
    $contract = Contract::find($id);
    return view('contracts.show', compact('contract'));
  }

  public function create(){
    $rented = Contract::select('property_id')->get();
    $renters = Renter::select('id', 'first_name', 'last_name')->get()->toArray();
    $properties = Property::select('id', 'address')->whereNotIn('id', $rented)->get()->toArray();
    return view('contracts.create', compact('rented', 'renters', 'properties'));
  }

  public function store(ContractRequest $request){
    //dd($request);
    $input = $request->all();
    Contract::create($input);
    return redirect('contracts');
  }
  public function edit($id){
    $contract = Contract::where('contracts.id', '=', $id)->join('renters','contracts.renter_id', '=', 'renters.id')
                                         ->join('properties','contracts.property_id', '=', 'properties.id')
                                         ->select('properties.address', 'renters.first_name', 'renters.last_name', 'contracts.*')->first();
  //  dd($contract);
    return view('contracts.edit', compact('contract'));
  }
  public function update($id, ContractRequest $request){
    $contract = Contract::findOrFail($id);
    $contract->update($request->all());

    return redirect('contracts');
  }
  public function destroy($id){
    $contract = Contract::where($id, '=', 'id')->delete();
    return redirect('contracts');

  }
}
