<section id="{{ 'column-entry-' . $block->block->id }}" class="{{ $block->classes }}">
  <div class="container mx-auto">
      @hasfield('title')
        <h2 class="">
          @field('title')
        </h2>
      @endfield

      @hasfield('introduction')
        <div class="">
          @field('introduction')
        </div>
      @endfield

      @hasfield('list_small_cards')
          <ul class="w-full mt-4 mb-8 noListImage flex">
            @fields('list_small_cards')
            @hassub('small_card_label')
            <a class="w-1/2 lg:w-2/12 p-1 lg:p-2" href="@sub('small_card_url')">
              <div class="bg-cardBaseBg rounded-2xl flex flex-col items-center justify-center p-8 gap-2">
                @hassub('small_card_image')
                  <img class="payment__card-media rounded-2xl shadow-lg" src="{!! get_sub_field('small_card_image')['url'] !!}" alt=" "/>
                @endsub
                <h5 class="font-semibold text-sm mb-0 text-primary">@sub('small_card_label')</h5>
              </div>
            </a>
            @endsub
            @endfields
          </ul>
      @endfield

  </div>
</section>
