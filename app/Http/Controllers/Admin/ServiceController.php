<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $validations = [
        'name'          => 'required|string|min:3|max:100',
        'price'          => 'required|numeric',

    ];

    public function index()
    {
        $services = Service::paginate(25);

        return view('admin.services.index', compact('services'));
    }
    
    
    public function create()
    {

       
        return view('admin.services.create');
    }


    public function store(Request $request)
    {
        
        $request->validate($this->validations);
    
        $data = $request->all();

        $newservice = new Service();
    
        
        $newservice->name   = $data['name'];
        $newservice->price  = $data['price'];
        $newservice->slot   = $data['slot'];
        $newservice->save();
        
       
		return redirect()->route('admin.services.index', ['service']);
    }


    public function edit($id)
    {
        
        $service = Service::where('id', $id)->firstOrFail();

        
        return view('admin.services.edit', compact('service'));
    }




    public function update(Request $request, $id)
    {
        $service = Service::where('id', $id)->firstOrFail();

        // validare i dati del form
        $request->validate($this->validations);

        $data = $request->all();


        // aggiornare i dati nel db se validi
        $service->name   = $data['name'];
        $service->price  = $data['price'];
        $service->slot   = $data['slot'];
        $service->update();

        
        // ridirezionare su una rotta di tipo get
        return to_route('admin.services.index');
    }

  
    public function destroy($id)
    {
        $service = Service::where('id', $id)->firstOrFail();
        $service->delete();
        return to_route('admin.services.index')->with('delete_success', $service);
    }

}
