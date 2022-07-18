@extends('layouts.app')

@php
  $paged            = get_query_var('paged') ? get_query_var('paged') : 1;
  $fields           = get_fields(get_queried_object_id());
  $cardIssuers      = get_posts([
        'posts_per_page'	=> -1,
	      'post_type'			=> 'issuer'
  ]);

  $argsPaymentsCards=[
      'post_type' => 'payment',
      'posts_per_page' => -1,
      'paged' => $paged,
      'order' => "DESC",
      'post_status' => 'publish',
  ];

  $argsBlogPost=[
      'posts_per_page' => 2,
  //  'category_name' => 'awards'
  ];

  // $paymentsCardsItems     = new WP_Query($argsPaymentsCards);
  $postItems              = new WP_Query($argsBlogPost);

@endphp

@section('content')
  @include('partials.hero')
  <section class="section__payment-cards">
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

  <section class="section__content">
    <div class="container mx-auto px-6">
      @while(have_posts()) @php(the_post())
      {{ the_content() }}
      @endwhile
    </div>

  </section>
@endsection
