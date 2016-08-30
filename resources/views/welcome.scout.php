@extends('layouts.base')

@section('content')
    @include('partials.page-header')

    @if (!have_posts())
        <div class="alert alert-warning">
            {{ _e('Sorry, no results were found.', THEMOSIS_TEXTDOMAIN) }}
        </div>
       {{ get_search_form() }}
   @endif

    @loop
        @include('partials.content')
    @endloop
@stop