<?php


return [
    'title' => 'Пользователи',
    'single' => 'пользователя',
    'model' => 'App\User',
    'columns' => [
        'id',
        'email'
    ],
    'edit_fields' => [
        'email' => [
            'type' => 'text',
        ]
    ],
];
