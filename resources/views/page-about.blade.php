@extends('layouts.app')

@section('content')
@php
$image = get_field('image');
@endphp
<section class="page-about" id="about">

    <hr>

    <div class="title"><img src="@asset('images/icon-rule.svg')" alt="Icône éclair"><h2>{{ the_title() }}</h2></div>
    <p>{{ the_content() }}</p>

    <div class="informations">
        <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">

        <h2>{{ the_field('firstname')}} {{ the_field('name')}}</h2>
        <ul>
            <li>Age: <span>{{ the_field('age')}} years old</span></li>
            <li>Date of birth: <span>{{ the_field('date_of_birth')}}</span></li>
            <li>Phone: <span>{{ the_field('phone')}}</span></li>
            <li>Email: <span>{{ the_field('email')}}</span></li>
        </ul>
        <p class="textarea">{{ the_field('text')}}</p>
    </div>



</section>
@endsection