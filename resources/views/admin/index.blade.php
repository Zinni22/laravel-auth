@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Tutti i progetti</h1>
        </div>
    </div>

    <a href="{{ route('admin.create') }}" class="btn btn-success">
      Inserisci un nuovo progetto
    </a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Description</th>
            <th scope="col">Link</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project->title }}</th>
                <td>{{ $project->slug }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->link }}</td>

                <td>
                  <div>
                    <a href="{{ route('admin.show', $project->id) }}" class="btn btn-primary">
                      Visualizza
                    </a>

                    <a href="{{ route('admin.edit', $project->id) }}" class="btn btn-warning">
                      Aggiorna
                    </a>

                    <a href="#" class="btn btn-danger">
                      Elimina
                    </a>
                  </div>
                </td>
            </tr>
            @endforeach

            
          
        </tbody>
      </table>
</div>
    
@endsection