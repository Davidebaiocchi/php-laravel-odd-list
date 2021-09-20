@extends('layouts.app');

@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Codice</th>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>

            @foreach($posts as $post)
              <tr>
                <th scope="row"> {{ $post->id }} </th>
                <td> {{ $post->title }} </td>
                <td>
                  @if ($post->postCategory)
                      {{$post->postCategory->name}}
                  @endif
                </td>
                <td>
                    <a href=" {{ route('admin.posts.show', $post->slug) }} " class="btn btn-primary">Show</a>
                    <a href=" {{ route('admin.posts.edit', $post->id) }} " class="btn btn-warning">Edit</a>
                    
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare l\'elemento?')">
                    </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection