<?php

namespace App\Http\Controllers;

use App\Models\bookshop;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('bookshop.index',['books'=>bookshop::latest()->paginate(5)]);
    }
   public function add()
   {
        return view('bookshop.add');

   }
   public function insert(Request $request)
    {
        // dd($request->all());
        // //validate
        $request->validate([
            'bookname'=>'required',
            'author'=>'required',
            'image'=>'required|mimes:mimes:jpeg,jpg,png,gif|max:10000',
            'price'=>'required'

        ]);
        
        //uplod image
        $imagename=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imagename);

        $book=new bookshop;
        $book->image=$imagename;
        $book->bookname=$request->bookname;
        $book->author=$request->author;
        $book->price=$request->price;

        $book->save();
        return redirect('/index')->withsuccess('Books Added Successfully');
    }
    public function edit($id)
    {
        $book=bookshop::where('id',$id)->first();
        return view('bookshop.edit',['book'=>$book]);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'bookname'=>'required',
            'author'=>'required',
            'image'=>'required|mimes:mimes:jpeg,jpg,png,gif|max:10000',
            'price'=>'required'

        ]);
        $book=bookshop::where('id',$id)->first();
        //uplod image
        if(isset($request->image))
        {
        $imagename=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imagename);
        $book->image=$imagename;      
        } 

        $book->bookname=$request->bookname;
        $book->author=$request->author;
        $book->price=$request->price;

        $book->save();
        return redirect('/index')->withsuccess('Books Edited Successfully');
    }
    public function destroy($id){

        $book=bookshop::where('id',$id)->first();
        $book->delete();
        return redirect('/index')->withsuccess('Books Deleted Successfully');
    }
    public function show($id)
    {
        $book=bookshop::where('id',$id)->first();
        return view('bookshop.show',['book'=>$book]);
    }
}
