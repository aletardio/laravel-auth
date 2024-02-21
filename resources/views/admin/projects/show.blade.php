@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase">{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection
