

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
<div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@extends('master')
@section('title', "Modifier livres")


@section('content')

        <div class="container">
        <h2>Modifier Livres</h2>
        
        <form action="{{ route('Book.update',$book->id) }}" method="POST">

        @csrf
        @method('PUT')
        <input type="text" name="id" value="{{$book->id}}">
        @if(session('Book.index'))
                <div>
                    {{(session('Book.index'))}}
                </div>
        @endif
       
        <div class="form-group">
                        <label for="text">Title:</label>
                        <input id="text" name="title" type="text" class="form-control" required value="{{ $book->Title }}">
                        @error('nom')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="author">Author:</label>
                        <select name="author" class="form-control" type="text"id="author">
                             @foreach($authors as $author)
                                <option value="{{ $author->id }}"   {{($author->id==$book->author_id)? 'selected' : '' }}>{{ $author->name }} </option>

                               
                             @endforeach
                        </select>
                    </div>
                   
           
                    <div class="form-group">
                        <label for="isbn">ISBN:</label>
                        <input id="text" name="isbn" type="text" class="form-control" required value="{{ $book->ISBN }}">
                        @error('ISBN')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
           

                    <div class="form-group">
                        
                        <label for="published_year">Published Year:</label>
                        <input type="number" name="published_year" id="published_year" class="form-control" required value="{{ $book->published_year }}">
                         @error('Published_year')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
            

            
            <input type="submit" name="btn" value="MODIFIER" id="btn">
    
                    
        </form>
    </div>


    <style>
        body {
    font-family: Arial, sans-serif;
    background: url('img.avif') no-repeat center center fixed;
    background-size: cover;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
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
label {
    display: block;
    margin-top: 20px;
    font-weight: bold;
}
input[type="text"],
input[type="number"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}


input[type="submit"] {
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
input[type="submit"]:hover {
    background-color: #2575fc;
}
    </style>

</div>
@endsection

