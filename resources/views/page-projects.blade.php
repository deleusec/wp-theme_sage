{{--
  Template Name: Projects
--}}

@extends('layouts.app')

@section('content')
<section class="page-projects" id="projects">
    <hr>

    <div class="title"><img src="@asset('images/icon-rule.svg')" alt="Icône éclair"><h2>{{ the_title() }}</h2></div>

<div class="all_projects">
@foreach ($projects as $project)
        <a href="{{ $project->permalink }}" class="bloc_item">
            <img src="{{ $project->url }}" alt="{{ $project->$alt }}">
        </a>
@endforeach
</div>

</section>
@endsection