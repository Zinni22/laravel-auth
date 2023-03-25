@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
      <div class="row justify-content-center mb-4">
            <div class="col">
                  <h1>Crea Progetto</h1>
                  <a href="{{ route('admin.index') }}" class="btn btn-primary">
                        Torna indietro
                  </a>
            </div>
      </div>

      @if ($errors->any())
            <div class="row mb-4">
                  <div class="col">
                        <div class="alert alert-danger">
                              <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                              </ul>
                        </div>
                  </div>
            </div>
      @endif

      <div class="row mb-4">
            <div class="col">
                  <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                              <label for="title" class="form-label">Titolo *</label>
                              <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Inserisci il titolo del progetto..." required maxlength="100">
                        </div>
                        
                        <div class="mb-3">
                              <label for="description" class="form-label">Descrizione *</label>
                              <textarea class="form-control" id="description" name="description" placeholder="Inserisci descrizione del progetto..." rows="10" required maxlength="500">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}" placeholder="Inserisci il link del progetto...">
                        </div>

                        <p>I campi contrassegnati con * sono obbligatori</p>

                        <div>
                              <button type="submit" class="btn btn-success">
                                    Crea
                              </button>
                        </div>
                  </form>
            </div>
      </div>
</div>
@endsection