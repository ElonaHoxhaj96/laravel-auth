@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Elenco dei Post:
    </h2>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col"># Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data</th>
            <th scope="col">Azione</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', ['post' => $post->id])}}" class="btn btn-primary">Dettagli</a>
                        <a href="{{ route('admin.posts.edit', ['post' => $post->id])}}" class="btn btn-info">Modifica</a>
                        <form action="{{ route('admin.posts.destroy', ['post' => $post->id])}}" method="POST" class="btn btn-danger">
                            @csrf
                            @method('DELETE')
                            Elimina
                        </form>
                        
                    </td>
                 
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection
