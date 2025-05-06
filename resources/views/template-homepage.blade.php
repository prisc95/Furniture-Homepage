{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header')
    @include('partials.content-page') --}}
    @include('partials.pageblocks.hero')
    @include('partials.pageblocks.products')
    @include('partials.pageblocks.pricing')
    @include('partials.pageblocks.blog')
    @include('partials.pageblocks.contact')

  @endwhile
@endsection
