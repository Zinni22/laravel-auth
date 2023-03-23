@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Tutti i progetti</h1>
        </div>
    </div>

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
            </tr>
            @endforeach
          
        </tbody>
      </table>
</div>
    
@endsection