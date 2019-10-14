
<!-- array_filter() -->
<?php 

$result3 = [
    'authors' => [
        'Stiven@mail.com' => ['Стивен Кинг', '21 сентября 1947'],
        'cherchel.uitson@mail.com' => ['Уинстон Черчилль', '30 ноября 1874'],
        'uoker.elis@mail.com' => ['Элис Уокер', '9 февраля 1944'],
        'Strechi@mail.com' => ['Литтон Стрейчи', '1 марта 1880']
    ], 
    'books' => [
        ['Кэрри', 'Stiven@mail.com'],
        ['Вторая мировая война', 'cherchel.uitson@mail.com'],
        ['Цвет пурпурный', 'uoker.elis@mail.com'],
        ['Знаменитые викторианцы', 'Strechi@mail.com']
    ]
];

// foreach ($result3['authors'] as $key => $value) {
//  $a = $key;
//  print_r(
//      array_filter($result3['books'], function ($key)
//  {
//      return $key[1] == $a;
//  }

// )
    
//  );
// }


foreach ($result3['authors'] as $mail => $value) {
// получаем email из первого массива
    $GLOBALS['emailAutor'] = $mail;
    $array = array_filter($result3['books'], function ($array)
    {
        return $array[1] === $GLOBALS['emailAutor'];
    });
    // echo "<pre>";
    // print_r(array_values($array)[0][0]);
    // print_r(array_map(function()
    //  {
    //      return $array[1];
    //  }, $array));
}

echo "<pre>";
// print_r($result3['books']);
// print_r($result3['books'][1]);
 ?>