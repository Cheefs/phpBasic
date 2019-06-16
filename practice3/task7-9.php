<?php
/**
 *  7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
 *    for (…){ // здесь пусто}
*/
const COUNTER = 10;
for ($i = 0; $i < COUNTER; printf(($i++).'<br>')) {}

echo '<hr>';

/** 8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К». */
$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт' ],
    'Рязанская область' => ['Касимов', 'Рязань', 'Ряжск', 'Новомичуринск']
];

function filterTowns($array, $word) {
    foreach ($array as $k=>$v) {
        foreach ($v as $el) {
            if (preg_match("/^$word/iu", $el))
                echo $el.'<br>';
        }
    }
}
const wordToFilter = 'к';
filterTowns($regions, wordToFilter);

echo '<hr>';

/**
 * 9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке,
 *      производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
 * @var string $string  строка для преобразования
 * @var string $replacement замена пробелов
 *
 * @return string
 */


function transliteString($string, $replacement = '_') {
    $resultStr = '';

    #region ArrayWords
    $translatesWords = [
        'а'=> 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g',
        'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p',
        'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'kh',
        'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ъ' => '“', 'ы' => 'y',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
    ];
    #endregion

    $words = preg_split('//u', $string);

    foreach ($words as $word) {
        if ( preg_match('/[а-яА-Я]/iu',$word) ) {
            $resultStr .= $translatesWords[mb_convert_case($word, MB_CASE_LOWER)];
        } else {
            $resultStr .= $word;
        }
    }
    return str_replace(' ', $replacement, $resultStr);
}

echo transliteString('Объединить две ранее написанные функции в одну');

