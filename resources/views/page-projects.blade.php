@extends('layouts.app')

@section('content')
<section class="page-projects" id="projects">
    <hr>

    @while(have_posts()) @php the_post() @endphp
    
    <div class="title"><img src="@asset('images/icon-rule.svg')" alt="Icône éclair"><h2>{{ the_title() }}</h2></div>
    <p>{{ the_content() }}</p>

        @php
            $args = [
                'posts_per_page' => 1,
                'offset' => 0,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'projects'
            ];

            $the_query = new \WP_QUERY($args)
        @endphp

        @while ($the_query->have_posts()) @php $the_query->the_post();

                    
                $image = get_field('image_project');
                
                $url = $image['url'];
                $alt = $image['alt'];
                $title = $image['title'];
            @endphp

            <a href="https://capsul-mmi.fr" class="bloc_item">
                <img src="{{ $url }}" alt="{{ $alt }}">
            </a>
        @endwhile

        @php
            wp_reset_postdata();
        @endphp

    @endwhile
</section>
@endsection