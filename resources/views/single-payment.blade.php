@extends('layouts.app')

@section('content')
  <section class="section mb-16">
    @include('partials.hero-payment')
    <div class="container mx-auto px-6">
      @while(have_posts()) @php(the_post())
      {{ the_content() }}
      @endwhile
    </div>
  </section>
@endsection
