@extends('layouts.app')

@section('content')
<div class="container my-5">
   <h1>Add New Comics</h1>
   <form action="{{ route('admin.posts.store' )}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="inserisci il titolo">
    </div> 
    <div class="mb-3">
        <label for="content" class="form-label">Contenuto</label>
        <input type="content" class="form-control" id="content" name="txt" placeholder="inserisci il contenuto">
    </div>
 
    <div class="mb-3">
        <label for="reading_time" class="form-label">Tempo di lettura </label>
        <input type="text" class="form-control" id="reading_time" name="reading_time" placeholder="inserisci il tempo di lettura">
    </div>
    <div class="mb-3">
        <button type="submit" href="#" class="btn btn-success">Salva</button>
    </div>
   </form>
</div>

@endsection
