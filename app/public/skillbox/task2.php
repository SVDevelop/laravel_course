<?php
$result2 = [
    'authors' => [
        [
            'fio' => 'Стивен Кинг',
            'email' => 'Stiven@mail.com'
        ],
        [
            'fio' => 'Уинстон Черчилль',
            'email' => 'cherchel.uitson@mail.com'
        ],
        [
            'fio' => 'Элис Уокер',
            'email' => 'uoker.elis@mail.com'
        ],
        [
            'fio' => 'Литтон Стрейчи',
            'email' => 'Strechi@mail.com'
        ]
    ], 
    'books' => [
        [
            'book_name' => 'Кэрри',
            'author_email' => 'Stiven@mail.com',
        ],
        [
            'book_name' => 'Вторая мировая война',
            'author_email' => 'cherchel.uitson@mail.com',
        ],
        [
            'book_name' => 'Цвет пурпурный',
            'author_email' => 'uoker.elis@mail.com',
        ],
        [
            'book_name' => 'Знаменитые викторианцы',
            'author_email' => 'Strechi@mail.com',
        ]
    ]
];
?>
<pre>
<?=print_r($result2);?>
</pre>