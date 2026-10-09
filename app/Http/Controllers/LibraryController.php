<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\library;

class LibraryController extends Controller
{
    public function index()
    {
        return view('index');
    
    }
    public function store(Request $request)
    {
         $data=$request->all();
         library::create($data);
        $libraries=library::orderBy('created_at','desc')->get();
         return view('showbooks',compact('libraries'));
    }
   public function edit($id)
 {
    $library=library::find($id);
    return view('edit',compact('library'));
  }
   public function update(Request $request, $id)
{
    $library = library::find($id);

    $library->book_name = $request->book_name;
    $library->author = $request->author;
    $library->category = $request->category;
    $library->price = $request->price;
    $library->quantity = $request->quantity;

    $library->save();

    return view('showbooks', ['libraries' => library::all()]);
}

   public function delete($id)
   {
    $library = library::find($id);
    $library->delete();
    return view('showbooks', ['libraries' => library::all()]);
   }
   public function search(Request $request)
{
    $search = $request->book_name;
    
    $libraries = library::where('book_name', 'like', '%' . $search . '%')->get();

    return view('showbooks', compact('libraries'));
}

   public function available(Request $request)
{
    $available = $request->quantity;
    
    $libraries = library::where('quantity', '>', 0)->orderBy('created_at', 'desc')->get();

    return view('showbooks', compact('libraries'));
}

}