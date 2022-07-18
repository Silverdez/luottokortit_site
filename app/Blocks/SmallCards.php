<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Roots\Acorn\Application;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SmallCards extends Block
{
    public function __construct(Application $app)
    {
        /**
         * The block name.
         *
         * @var string
         */
        $this->name = __('Section with Small Cards', 'sage');

        /**
         * The block slug.
         *
         * @var string
         */
        $this->slug = 'small-cards';

        /**
         * The block description.
         *
         * @var string
         */
        $this->description = __('A simple section with a title and introduction and Small Cards.', 'sage');

        /**
         * The block category.
         *
         * @var string
         */
        $this->category = 'formatting';

        /**
         * The block icon.
         *
         * @var string|array
         */
        $this->icon = 'editor-ul';

        /**
         * The block keywords.
         *
         * @var array
         */
        $this->keywords = [];

        /**
         * The block post type allow list.
         *
         * @var array
         */
        $this->post_types = [];

        /**
         * The parent block type allow list.
         *
         * @var array
         */
        $this->parent = [];

        /**
         * The default block mode.
         *
         * @var string
         */
        $this->mode = 'preview';

        /**
         * The default block alignment.
         *
         * @var string
         */
        $this->align = '';

        /**
         * The default block text alignment.
         *
         * @var string
         */
        $this->align_text = '';

        /**
         * The default block content alignment.
         *
         * @var string
         */
        $this->align_content = '';

        /**
         * The supported block features.
         *
         * @var array
         */
        $this->supports = [
            'align' => true,
            'align_text' => false,
            'align_content' => false,
            'full_height' => false,
            'anchor' => false,
            'mode' => false,
            'multiple' => true,
            'jsx' => true,
        ];

        /**
         * The block preview example data.
         *
         * @var array
         */
        $this->example = [
            'items' => [
                ['item' => 'Item one'],
                ['item' => 'Item two'],
                ['item' => 'Item three'],
           ],
        ];

        parent::__construct($app);
    }

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'items' => $this->items(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $smallCards = new FieldsBuilder('small_cards');

        $smallCards
            ->addText('title', [
                'label' => 'Title principal if needed',
                'required' => 0,
            ])
            ->addTextarea('introduction', [
                'label' => 'Small introduction if needed',
                'required' => 0,
                'delay' => 0,
            ])
            ->addRepeater('list_small_cards')
                ->addText('small_card_label', [
                    'label' => 'Label of the small Card',
                    'required' => 1,
                ])
                ->addImage('small_card_image', [
                    'label' => 'Image of the small card',
                    'required' => 0,
                ])
                ->addPageLink('small_card_url', [
                    'label' => 'Link to the page',
                    'required' => 0,
                ])
            ->endRepeater();

        return $smallCards->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function items()
    {
       return get_field('items') ?: $this->example['items'];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
