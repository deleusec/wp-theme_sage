@extends('layouts.app')

@section('content')
    <div class="title"><img src="@asset('images/icon-rule.svg')" alt="Icône éclair"><h2>{{ the_title() }}</h2></div>
    <p>{{ the_content() }}</p>


    <p>{{ the_field('firstname')}}</p>
    <p>{{ the_field('name')}}</p>
    <p>{{ the_field('age')}} ans</p>
    <p>{{ the_field('date_of_birth')}}</p>
    <p>{{ the_field('text')}}</p>

@endsection