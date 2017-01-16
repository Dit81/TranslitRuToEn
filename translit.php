<?php
/*
* Translit Ru to En
* Web-Developer: Tulupov Dmitry
*/
function translitRusToEng($str = ''){
	// Массив транслита
	$translit_array = array(
		'ж' => 'zh',
		'ч'=>'ch',
		'ш'=>'sh',
		'щ'=>'sh',
		'ю'=>'yu',
		'я'=>'ya',
		'а'=>'a',
		'б'=>'b',
		'в'=>'v',
		'г'=>'g',
		'д'=>'d',
		'е'=>'e',
		'ё'=>'e',
		'з'=>'z',
		'и'=>'i',
		'й'=>'y',
		'к'=>'k',
		'л'=>'l',
		'м'=>'m',
		'н'=>'n',
		'о'=>'o',
		'п'=>'p',
		'р'=>'r',
		'с'=>'s',
		'т'=>'t',
		'у'=>'u',
		'ф'=>'f',
		'х'=>'h',
		'ц'=>'c',
		'ъ'=>'\'',
		'ы'=>'i',
		'ь'=>'\'',
		'э'=>'e',
		'  '=>'_',
		' '=>'_',
		','=>'-'
	);
	
	$str = trim($str);
	
	$translit = '';
	for ($i = 0; $i < strlen($str); $i++){
		$translit .= $translit_array[$str[$i]];
	}
	return $translit;
}

/*********************************************************/
// Пример
$str = '  фывапролджэ '; // Строка для замены букв

echo translitRusToEng($str);

?>
