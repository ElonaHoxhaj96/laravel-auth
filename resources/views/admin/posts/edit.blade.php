@extends('layouts.app')

@section('content')
<div class="container my-5">
   <h1>Edit Comic: {{$posts->title}}</h1>
   <form action="{{ route('admin.posts.update', $posts )}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input 
            type="text" 
            value="{{$posts->title}}"
            class="form-control" 
            id="title" 
            name="title" 
            placeholder="inserisci il titolo">
    </div> 
    <div class="mb-3">
        <label for="serie" class="form-label">Contenuto</label>
        <input 
            type="text" 
            value="{{$posts->txt}}"
            class="form-control" 
            id="content" 
            name="txt" 
            placeholder="inserisci il tuo contenturo">
    </div> 
    <div class="mb-3">
        <label for="reading_time" class="form-label">Data di Rilascio</label>
        <input 
            type="text" 
            value="{{$posts->sale_date}}"
            class="form-control" 
            id="reading_time" 
            name="reading_time" 
            placeholder="inserisci il tempo di lettura ">
    </div> 
    
    <div class="mb-3">
        <button type="submit" href="#" class="btn btn-success">Aggiorna</button>
        <button type="reset" href="#" class="btn btn-warning">Annulla</button>

    </div>
   </form>
</div>
@endsection
