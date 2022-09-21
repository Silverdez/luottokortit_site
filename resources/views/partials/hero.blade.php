@php
  $title            = get_field('title');
  $description      = get_field('hero_description');
  $image            = get_field('hero_image');
  $fields           = get_fields(get_queried_object_id());
@endphp

<section class="section section--hero hero relative">
  <div class="pt-16 lg:pt-20 mb-6">
      <main class="hero__main ">
        <div class="container mx-auto px-6">
          <div class="flex flex-wrap">
            <div class="hero__heading w-full lg:w-4/6 lg:pr-16 mb-8 lg:mb-0">
              <h1 class="hero__title font-bold text-5xl lg:text-6xl noDecoration break-words">{!! $fields['title']  !!}</h1>
              <div class="hero__title hero__title--sub">{!! $fields['hero_description'] !!}</div>
              @if($fields['hero_link_url']['url'])
                <button class="block">
                  <a class="inline-block bg-btnBg py-3 px-6 rounded-md mt-8 mb-4 text-white text-lg hover:bg-btnBgHover transition shadow-lg" href="{!! $fields['hero_link_url']['url'] !!}" target="{!! $fields['hero_link_url']['target'] !!}">
                    {!! $fields['hero_link_url']['title'] !!}
                  </a>
                </button>
              @endif
            </div>
            <div class="w-full lg:w-2/6">
              @if($image)
                <img src="{!! $image['url'] ? $image['url'] : '@asset("images/hero.jpg")' !!}" alt="hero__image">
              @endif
            </div>
          </div>
        </div>

      </main>
  </div>
</section>
