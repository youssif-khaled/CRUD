<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    // public function index(){
    //     $categories = Categories::all();
    //  return view('view',['categories' => $categories]);
    // }

    public function show($id)
    {
        $categories = Categories::findOrFail($id);
        return view('show', ['categories' =>  $categories]);
}
public function create(){
    return view('create');
}
public function store(Request $request){
   $categories = Categories::create([
'name' => $request ->name,
'email' => $request ->email,
'password' => $request ->password,
'address' => $request ->address,
'country' =>$request ->country,
   ]);
   return redirect(url('/categories'));
}
public function edit($id){
    $categories = Categories::findOrFail($id);
       return view('edit', ['categories' => $categories]);

}
public function update($id,Request $request){
    $categories = Categories::findOrFail($id)->update([
        'name' => $request ->name,
        'email' => $request ->email,
        'password' => $request ->password,
        'address' => $request ->address,
        'country' =>$request ->country,
    ]);
    return redirect(url('/categories'));

}

public function destroy($id){
    $categories = Categories::findOrFail($id)->delete();
    return redirect(url('/categories'));
}

public function paginate(Request $request){
    $categories = Categories::select('*')->paginate(3);
    $find = Categories::where( 'name', 'LIKE','%' . $request->search .'%'   )->orWhere ( 'email', 'LIKE', '%' . $request->search . '%' )->get ();
      return view('view',['categories' =>  $categories, 'find' =>$find]);
}
// public function search(Request $request){

//      $find= Categories::all();
//     return view('view',['find' =>  $find]);

// }
}
