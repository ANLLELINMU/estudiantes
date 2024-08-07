<?php

namespace App\Http\Controllers;
use App\Models\myfirstmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;



   

class myfirstcontroller extends Controller
{
   
     public function __invoke() {
        return "Bienvenid@s a la pagina Principal";

     
    }
    
   

/**
     * Store a newly created resource in storage.
     */
        
     public function index(request $request){
       
        $buscarpor= $request->get('buscarpor', '');

        $myfirstmodels = myfirstmodel::where(function($query) use ($buscarpor) {
            $query->where('name', 'like', "%$buscarpor%")
                  ->orWhere('lastname', 'like', "%$buscarpor%");
        })->paginate(10);
        
        return view ('estudiantes.index',compact('myfirstmodels','buscarpor'));
//
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){

        return view ('estudiantes.create');
    }
    
      
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate ([
            'name'=> 'required',
            'lastname'=> 'required',

           
          ]);

        $myfirstmodel = new myfirstmodel();
        $myfirstmodel->name=$request->name;
        $myfirstmodel->lastname=$request->lastname;


        $myfirstmodel->save();
        return view ("estudiantes.massage", ['msg'=>"Registro Guardado"]);
    

        {

            
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $myfirstmodel = new myfirstmodel();
        $response = $myfirstmodel->get('https://api.example.com/data');
        $data = json_decode($response->getBody()->getContents());

       
        if (isset($data->links)) {
            $links = $data->links;
        } else {
            $links = 'La propiedad "links" no está definida.';
        }

        return view('myview', compact('links'));
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      
        $myfirstmodel=myfirstmodel::find($id);
        return view ('estudiantes.edit',['myfirstmodel'=> $myfirstmodel]);

        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate ([
            'name'=> 'required',
            'lastname'=> 'required',

           
          ]);

        $myfirstmodel = myfirstmodel::find($id);
        $myfirstmodel->name=$request->input('name');
        $myfirstmodel->lastname=$request->input('lastname');


        $myfirstmodel->save();
        
        return view ("estudiantes.massage", ['msg'=>"Registro Actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
       
        $myfirstmodel=myfirstmodel::find($id);
        $myfirstmodel->delete();

        return redirect("estudiante");
    }


//
    }

    