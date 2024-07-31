@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">

            <h1>
                Title: {{ $project->title }}
            </h1>
            <h2># {{ $project->id }}</h2>
            <h2 style="background: {{$project->type->color}}" class="d-inline-block p-2 rounded">{{ $project->type->name }}</h2>
            <h3>Programming language: {{ $project->prog_langs }}</h3>
            <h4>Due to: {{ $project->due_to }}</h4>
            <img src="{{ $project->url }}" alt="{{ $project->title }}">

        </div>
    </div>
</div>
@endsection
