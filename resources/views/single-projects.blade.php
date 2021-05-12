@extends('layouts.app')

@section('content')
<section class="single-project" id="single">

  <hr>

  <h2>{{ $project->name }}</h2>
  <p>{{ $project->description }}</p>
  <a href="{{ $project->url }}">{{ $project->url }}</a>
</section>
@endsection
