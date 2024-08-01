@extends('master')
@section('title', "Détails du Livre")

@section('content')
<div class="container">
    <h2>Détails du Livre</h2>
    <p><strong>Titre :</strong> {{ $book->title }}</p>
    <p><strong>Auteur :</strong> {{ $book->author ? $book->author->name : 'Auteur inconnu' }}</p>
    <p><strong>ISBN :</strong> {{ $book->isbn }}</p>
    <p><strong>Année de Publication :</strong> {{ $book->published_year }}</p>
    <form action="{{ route('Book.index') }}" method="GET,HEAD">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-primary">Retour à la Liste</button>
                    </form>
    <!-- <a href="{{ route('Book.index') }}" class="btn btn-primary">Retour à la Liste</a> -->
</div>
<style>
    button{
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #6a11cb;
    color: white;
    font-size: 16px;
    cursor: pointer;
}
button[type="submit"]:hover {
    background-color: #2575fc;
}
.container {
    background-color: rgba(255, 255, 255, 0.4);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%; 
} 
h2 {
    text-align: center;
    color: #333;
}
</style>
@endsection
