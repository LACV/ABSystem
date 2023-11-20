<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
  public function index()
  {
    $customers = Customer::get();
    return view("customer.index", ["customers" => $customers]);
  }
  public function show(Customer $customer)
  {
      return view("customer.show", ["customer" => $customer]);
  }

  /*  public function store(Request $request){
          $request->validate([
            "name"=> "",
          ])
    }*/
}