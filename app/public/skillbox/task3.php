<?php
$result3 = [
    'authors' => [
        'Stiven@mail.com' => [
            'fio' => 'Стивен Кинг',
            'data' => '21 сентября 1947'
        ],
        'cherchel.uitson@mail.com' => [
            'fio' => 'Уинстон Черчилль',
            'data' => '30 ноября 1874'
        ],
        'uoker.elis@mail.com' => [
            'fio' => 'Элис Уокер',
            'data' => '9 февраля 1944'
        ],
        'Strechi@mail.com' => [
            'fio' => 'Литтон Стрейчи',
            'data' => '1 марта 1880'
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

foreach ($result3['books'] as $book) :
?>
    <p>
        Книга "<?=$book['book_name'];?>", ее написал <?=$result3['authors'][$book['author_email']]['fio'];?> (<?=$book['author_email'];?>)
    </p>

<?php endforeach ?>
<br>
<?php 
shuffle($result3['books']);
foreach ($result3['books'] as $book) :
?>
<p>
    Книга "<?=$book['book_name'];?>", ее написал <?=$result3['authors'][$book['author_email']]['fio'];?> (<?=$book['author_email'];?>)
</p>

<?php endforeach ?>






