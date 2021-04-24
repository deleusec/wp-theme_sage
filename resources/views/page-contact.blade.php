@extends('layouts.app')

@section('content')
    <section class="page-contact" id="contact">
        <hr>

        <div class="title"><img src="@asset('images/icon-rule.svg')" alt="Icône éclair"><h2>{{ the_title() }}</h2></div>
        <div class="form">
            {{{ the_content() }}}
        </div>
    </section>
@endsection