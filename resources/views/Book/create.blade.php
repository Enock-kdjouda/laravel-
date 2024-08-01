@extends('master')
@section('title', "Ajouter livres")


@section('content')

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
 
 

<div>



        <div class="container">
        <h2>Ajouter Livres</h2>
        @if (session('status'))
        <div class="alert alert-succes">
            {(session('status'))}
        </div>
        @endif
        <form action="{{ route('Book.store') }}" method="POST">

         @csrf
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif 
                     
                    

    
                    <div class="form-group">
                        <label for="text">Title:</label>
                        <input id="text" name="title" type="text" class="form-control" required value="{{ old('Title') }}">
                        @error('nom')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    


                      <div class="form-group">
                         <label for="author">Author:</label>
                        <select name="authors_id" class="form-control">
                              @foreach($authors as $author)
                                  <option value="{{ $author->id }}" {{ old('author_id') ==    $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                              @endforeach
                       </select>
                     </div>


                    <div class="form-group">
                        <label for="isbn">ISBN:</label>
                        <input id="text" name="isbn" type="text" class="form-control" required value="{{ old('ISBN') }}">
                        @error('ISBN')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                   
           
                  
           

                     <div class="form-group">
                        
                        <label for="published_year">Published Year:</label>
                        <input type="number" name="published_year" id="published_year" class="form-control" required value="{{ old('published_year') }}">
                         @error('Published_year')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
            

            
            <input type="submit" name="btn" value="AJOUTER" id="btn">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


     <style>
        body {
    font-family: Arial, sans-serif;
    background-size: cover;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 100px;
   
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
     margin-top: 10px;
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

@endsection

