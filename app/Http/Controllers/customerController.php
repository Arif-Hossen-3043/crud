<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function show()
    {
        $customers = Customer::all();
        return view('form.show', compact('customers'));
    }

    public function create()
    {
        return view('form.add');
    }

    // ✅ THIS METHOD WAS MISSING
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:3',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        Customer::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('show')
            ->with('success', 'Customer Added Successfully!');
    }

    //edit 
    public function edit($id)
    {
        $customer = customer::findOrFail($id);
        return view('form.edit', compact('customer'));
    }

  public function update(Request $request, $id)
{
    $customer = Customer::findOrFail($id);

    $customer->update([
        'username' => $request->username,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('show')
        ->with('success',
        'Customer Updated Successfully!');
}

    public function delete($id)
    {
        // Find record
        $customer = Customer::findOrFail($id);

        // Delete record
        $customer->delete();

        // Redirect to show page
        return redirect()->route('show')
            ->with(
                'success',
                'Customer Deleted Successfully!'
            );
    }
}





//edit 

