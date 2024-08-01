<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;


class BookController extends Controller
{
    public function index(Request $req)
    {
        $search = $req->input("search");
        $author_id = $req->input("author");
        $authors = Author::all();
        $query = Book::query();
    
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%$search%")
                  ->orWhere('isbn', 'like', "%$search%");
               
            });
        }
    
        if ($author_id) {
            $query->where("author_id", $author_id);
        }
        
        $books = $query->orderBy("title", "asc")->paginate(4); // Utilisation de la requête construite pour la pagination
        
       
        
        return view("Book.index", compact("books", "authors"));
    }



    public function create()
    {
        $authors = Author::all();

        return view('Book.create', [
            'authors'=>$authors
        ]);
        

    }


    public function store(Request $request){
        // dd($request->all());
         $rules=[
            'title' => 'required|string|max:255',
            'authors_id' => 'required|exists:authors,id',
            'isbn' => 'required|string|max:13',
            'published_year' => 'required|integer|min:1900|max:' . date('Y'),
         ];
        
         
         $validatedData = $request->validate($rules);
         
         $book = new Book;
         
         $book->title = $request->input('title');

         $book->authors_id = $request->input('authors_id');
        
         $book->isbn = $request->input('isbn');
        
         $book->published_year = $request->input('published_year');

         $book->save();
         
         return redirect()->route("Book.index")->with('status', ' Insert success');
 
 
 
   }
   public function destroy(string $id)
   {
       $book= Book::findOrFail($id);
       $book->delete();
       return redirect()->route("Book.index");
   }

   public function edit(string $id)
    {
        

        $book= Book::findOrFail($id);
        $authors = Author::all();
        return view('Book.edit',compact('book','authors'));

    }


    public function update(Request $request, string $id)
    {
        
        // dd($request->all());
        $book= Book::findOrFail($id);
        
        $book->title = $request->input('title');
       
        $book->isbn = $request->input('isbn');
        $book->published_year = $request->input('published_year');
       
        $book->update();
        return redirect()->route("Book.index");
    }


  


   public function byBiographyAuthor(string $biography){
    //dd($biography);
    $author=Author::firstWhere('biography', $biography);
    if(!isset($author))
        return redirect()->route("Book.index")->with('status', 'Auteur non trouvé');
    $books = $author->books;
    // dd($books);
    return view('Book.byBiographyAuthor', compact('books'));
    


}
public function show($id)
{
    $book = Book::with('author')->findOrFail($id);
    return view('Book.show', compact('book'));
}


}
