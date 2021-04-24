@extends('layouts.app')

@section('content')
<section class="page-projects" id="projects">
    <hr>

    <div class="title"><img src="@asset('images/icon-rule.svg')" alt="Icône éclair"><h2>{{ the_title() }}</h2></div>
    <p>{{ the_content() }}</p>

<div class="all_projects">
@foreach ($projects as $project)
        <a href="https://capsul-mmi.fr" class="bloc_item">
            <img src="{{ $project->url }}" alt="{{ $project->$alt }}">
        </a>
@endforeach
</div>

</section>
@endsection