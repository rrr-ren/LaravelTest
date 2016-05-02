<?php

return [
    'title' => 'Новости',
    'single' => 'новости',
    'model' => 'App\News',
    'columns' => [
        'id',
        'title',
        'text',
        'image' => [
            'output' => '<img src="/images/small/(:value)" alt="">',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
        ],
        'title' => [
            'type' => 'text',
        ],
        'text' => [
            'type' => 'wysiwyg',
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path().'/images/original/',
            'sizes' => [
                [100, 100, 'auto', public_path().'/images/small/', 100],
                [185, 120, 'auto', public_path().'/images/original/', 100],
            ]
        ],
    ],
];