@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Aggiungi un nuovo progetto</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="form-group my-3">
                        <label for="title" class="control-label">Titolo:</label>
                        <input type="text" name="title" id="title" placeholder="Titolo" class="form-control"
                            required>
                    </div>
                    <div class="form-group my-3">
                        <label for="link" class="control-label">Link:</label>
                        <input type="text" name="link" id="link" placeholder="Link" class="form-control"
                            required>
                    </div>
                    <div class="form-group my-3">
                        <label for="description" class="control-label">Descrizione:</label>
                        <textarea name="description" id="description" cols="100" rows="10" placeholder="Descrizione"
                            class="form-control" required></textarea>
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-sm btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
