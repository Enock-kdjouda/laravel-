@extends('master')
@section('title', "liste des livres")

@section('content')*
<div class="container">
     <form action="{{ route('Book.index') }}" method="GET">
         <div class="search-bar">
            <div>
                <input type="text" id="search" name="search" placeholder="Rechercher par Auteur,Titre,ISBN">
            </div>
            <div>
                <select id="author" name="author">
                    <option value="">Toutes les auteurs</option>
                    @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ request('author') == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                               </option> @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </div>
        </div>
    </form>

    <a href="{{ route('Book.create') }}" class="btn btn-primary mb-3"><button type="submit" class="btn btn-danger">Nouveaux livres<button></a>

       <h4>LISTES DES LIVRES </h4>
    <table border="05">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author_id</th>
                 
                <th>Isbn </th>
                <th>Published_year</th>
                
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
               
                <td>{{ $book->authors_id }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->published_year }}</td>
               
                <td class="actions">
                    <form action="{{ route('Book.show', $book->id) }}" method="GET">
                        @csrf
                       <button type="submit" class="btn btn-info">Voir</button>
                    </form>
                
               
                     <form action="{{ route('Book.edit', $book->id) }}" method="GET,HEAD">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-danger">Modifier</button>
                    </form>
                    <form action="{{ route('Book.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $books->links() }}
</div>
@endsection
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0px;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    border: 1px solid #ddd;
}
th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}
th {
    background-color: #f4f4f4;
}
tr:nth-child(even) {
    background-color: #f9f9f9;
}
tr:hover {
    background-color: #f1f1f1;
}
.ac{
    text-align: center;
}
form {
    display: inline;
}
.container {
    background-color: rgba(255, 255, 255, 0.4);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    margin-left: 30%;
    margin-top: 15px;
}
h2 {
    text-align: center;
    color: #48e518;
    font-size: 50px;
}
h4{
    text-align: center;
    color: #e6ce19;
    font-size: 20px;
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}
.ed img{
    width: 30px;
    height: 20px;
}

p{
    text-align: center;
    justify-content: center;
    margin-top: 200px;
    font-size: 50px;
    color: #1994e6;
    box-shadow: 10px 5px 5px brown;
    text-shadow: 1px 1px 2px pink;
}

input[type="text"],
input[type="number"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.container button[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #e6ce19;
    color: white;
    font-size: 16px;
    cursor: pointer;
    
}
.container button[type="submit"]:hover {
    background-color: #2575fc;
}
.container button[type="button"] {
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #838587;
    color: white;
    font-size: 16px;
    cursor: pointer;
}
.container button[type="button"]:hover {
    background-color: #2575fc;
}
.for {
    background-color: #9eacb5;
    width: 100%;
    height: 50px;
}
.for a{
    font-size: 30px;
    color: #5649e9;
}
.for a:hover{
    background-color: #48e518;
}

</style>

