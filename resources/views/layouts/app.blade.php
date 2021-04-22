<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')

  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')

        <main class="main">
          @yield('content')
        </main>

    @php wp_footer() @endphp
  </body>
</html>
