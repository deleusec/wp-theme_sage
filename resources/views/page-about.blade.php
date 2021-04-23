@extends('layouts.app')

@section('content')
@php
$image = get_field('image');
@endphp
<section class="page-about" id="about">
    <div class="title"><img src="@asset('images/icon-rule.svg')" alt="Icône éclair"><h2>{{ the_title() }}</h2></div>
    <p>{{ the_content() }}</p>

    <div class="informations">
        <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">

        <h2>{{ the_field('firstname')}} {{ the_field('name')}}</h2>
        <p>{{ the_field('age')}} ans</p>
        <p>{{ the_field('date_of_birth')}}</p>
        <p>{{ the_field('text')}}</p>
    </div>



</section>
@endsection