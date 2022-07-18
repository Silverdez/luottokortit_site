@extends('layouts.app')

@php
  $fields           = get_fields(get_queried_object_id());
@endphp

@section('content')
  <section class="section mb-16">
    @include('partials.page-header')
    <div class="container mx-auto px-6">
      @while(have_posts()) @php(the_post())
        @includeFirst(['partials.content-page', 'partials.content'])
      @endwhile
    </div>
    <div class="container mx-auto px-6">
      @if($fields['ranking_card_payment'])
        <section class="cards__payments">
          <div class="container">
            <ul class="w-full mb-8 noListImage">
              @foreach($fields['ranking_card_payment'] as $card)
                @include('partials.content-card', [$card])
              @endforeach
            </ul>
          </div>
        </section>
      @endif
    </div>
  </section>
@endsection
