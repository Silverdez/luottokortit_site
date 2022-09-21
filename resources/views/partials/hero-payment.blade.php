@php
  $fields           = get_fields(get_queried_object_id());
@endphp

<section class="section section--hero hero relative">
  <div class="pt-16 lg:pt-20 pb-8 mb-12">
      <main class="hero__main ">
        <div class="container mx-auto px-6">
          <div class="flex flex-wrap text-primary">
            <div class="hero__heading w-full lg:w-4/6 lg:pr-16 mb-8 lg:mb-0">
              <h1 class="hero__title font-bold text-5xl lg:text-6xl noDecoration">{!! the_title() !!}</h1>
              <p>{!! $fields['card_introduction'] !!}</p>
              <div class="flex items-center justify-start">
                <span class="bg-white rounded-full px-3 py-1 flex items-center text-cardBaseBg">
                @svg('images.icons.star', ['class' => 'icon-rating inline-block w-4 h-4 mr-2'])
                <span class="text-cardAccentBg font-medium text-xl">{!! $fields['card_rating'] !!}</span><span class="ml-1">/5</span></span>
              </div>

            </div>
            <div class="w-full lg:w-2/6 flex justify-center items-center">
              @if(has_post_thumbnail())
                <img class="payment__card-media rounded-2xl" src="@thumbnail('medium', false)" alt=" "/>
              @endif
            </div>
          </div>
        </div>

        <div class="container mx-auto px-6 mt-12 mb-6">
          <div class=" flex flex-col lg:flex-row lg:gap-4 w-full mb-2 mt-4">
            <div class="w-full lg:w-1/3 text-center leading-4 mb-1">
              <div class="bg-cardAccentBg p-3 rounded-md">
                <span class="text-xl">{!! $fields['card_maximum_credit'] !!}</span>
                <h5 class="text-0.8 leading-4 font-semibold mb-0">Maksimiluotto</h5>
              </div>

            </div>
            <div class="w-full lg:w-1/3 text-center leading-4 mb-1">
              <div class="bg-cardAccentBg p-3 rounded-md">
                <span class="text-xl">{!! $fields['card_annual_fee'] !!} €</span>
                <h5 class="text-0.8 leading-4 font-semibold mb-0">Vuosimaksu</h5>
              </div>
            </div>
            <div class="w-full lg:w-1/3 text-center leading-4 mb-1">
              <div class="bg-pro p-3 rounded-md">
                <span class="text-xl">{!! $fields['card_nominal_interest_rate'] !!}%</span>
                <h5 class="text-0.8 leading-4 font-semibold mb-0">Nimelliskorko</h5>
              </div>
            </div>

          </div>
        </div>

        <button class="hero__scroll">
          @svg('images.icons.arrow-down', ['class' => 'icon'])
        </button>
      </main>
      <div class="hero__gradient js-gradient" data-direction="horizontal" data-opacity="0.33"></div>
      <div class="hero__background js-background absolute top-0 bg-secondary h-full w-full -z-1 transform -skew-y-2"></div>
  </div>
</section>
