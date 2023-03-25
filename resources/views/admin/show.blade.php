@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
      <div class="row justify-content-center mb-4">
            <div class="col">

                @if (session('success'))
                    <div class="alert alert-success mb-3">
                        {{ session('success') }}
                    </div>
                 @endif

                  <h1>{{ $project->title }}</h1>
                  
                  <h5>Slug: {{ $project->slug }}</h5>

                  <p>{{ $project->description }}</p>

                  <p>{{ $project->link }}</p>

                  <a href="{{ route('admin.index') }}" class="btn btn-primary">
                        Torna indietro
                  </a>
            </div>
      </div>
</div>
@endsection