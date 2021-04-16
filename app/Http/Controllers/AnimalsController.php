<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimalsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $animals = DB::select('select * from animals');
        return view('/animals/displayAnimals',['animals'=>$animals]);
    }

    public function insertform()
    {
        return view('animals/addAnimals');
    }

    public function store(Request $request){
        $name = $request->input('name');
        $species = $request->input('species');
        $categorie = $request->input('categorie');
        $sexe = $request->input('sexe');
        $age = $request->input('age');
        $picture = $request->input('picture');
        $data=array('name'=>$name,"species"=>$species,"categorie"=>$categorie,"sexe"=>$sexe,"age"=>$age,"picture"=>$picture);
        DB::table('animals')->insert($data);
        return redirect('/displayAnimals');
    }
}
