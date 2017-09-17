<?php

function rand_podstav_smv($text){
    //$text = str_replace('х','x',$text);
    $text = str_replace('а','a',$text);
    //$text = str_replace('р','p',$text);
    //$text = str_replace('о','o',$text);//исп
    //$text = str_replace('е','e',$text);//исп
    //$text = str_replace('с','c',$text);
    return $text;
}


$REQUEST_URI = $_SERVER['REQUEST_URI'];

$REQUEST_URI = $main_name.$REQUEST_URI;

$REQUEST_URI = str_replace( '177-rosdiplom.html', '', $REQUEST_URI  );//new

$REQUEST_URI = str_replace( '177-'.$raskrutka_site_4.'.html', '', $REQUEST_URI  );//new

$REQUEST_URI = str_replace( '177', '', $REQUEST_URI  );//new

$REQUEST_URI = str_replace( '1001-'.$raskrutka_site_4, '177-rosdiplom_ru', $REQUEST_URI  );//new

$contentTitle = str_replace($main_name, $donor_name, $REQUEST_URI );

$mainContent = file_get_contents($contentTitle);

$mainContent = str_replace($donor_name, $main_name, $mainContent  );
$mainContent = str_replace('url(/fi', 'url('.$donor_name.'/fi', $mainContent  );
$mainContent = str_replace('src="http', 'gfhtyur', $mainContent  );
$mainContent = str_replace('src="', 'src="'.$donor_name, $mainContent  );
$mainContent = str_replace('href="/templates/', 'href="'.$donor_name.'/templates/', $mainContent  );
$mainContent = str_replace('href="/3d-corner-ribbons.css"', 'href="'.$donor_name.'/3d-corner-ribbons.css"', $mainContent  );
$mainContent = str_replace('href="/favicon.png"', 'href="'.$donor_name.'/favicon.png"', $mainContent  );
$mainContent = str_replace('gfhtyur', 'src="http', $mainContent  );
$mainContent = str_replace('http://xn--d1acynfdde.xn--p1ai/engine/modules/antibot/antibot.php', $main_name.'/fi/capcha.jpg', $mainContent  );
$mainContent = str_replace($donor_site_name, $site_name, $mainContent  );

$mainContent = str_replace('Росдиплома', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('Росдиплому', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('Росдипломе', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('Росдипломом', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('Росдиплом', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('РОСДИПЛОМ', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('Рос Диплому', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('Рос Диплом', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('росдипломовцы', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('росдиплома', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('росдиплому', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('росдипломе', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('росдипломом', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('росдиплом', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('РосДиплома', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('РосДиплому', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('РосДипломе', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('РосДипломом', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('РосДиплом', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('rosdiplom.ru', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('Rosdiplom.ru', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('ROSDIPLOM.RU', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('ROSDIPLOM', $raskrutka_site_2, $mainContent  );

$mainContent = str_replace('http://xn--d1acynfdde.xn--p1ai/fi/www.'.$raskrutka_site_1.'.jpg', $main_name.'/fi/baza.png', $mainContent  );
$mainContent = str_replace('Rosdiplom', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('г. Москва</span>, <span itemprop="streetAddress">ст.м. Метро Сухаревская, ул.Сретенка, д.27/29, стр 1',
    $raskrutka_site_adress, $mainContent  );
$mainContent = str_replace('8-800-555-05-66: +7 (495) 987-41-36', 'Компания работает без телефонных менеджеров', $mainContent  );
$mainContent = str_replace('/goto.php?url=d3d3LnJvc2RpcGxvbS5ydQ==', 'http://'.$raskrutka_site_1.'/', $mainContent  );
$mainContent = str_replace('/goto.php?url=cm9zZGlwbG9tLnJ1L3JlZmVyZXIuYXNweD9yZWY9c3R1ZGVudHU=', 'http://'.$raskrutka_site_1.'/order.php', $mainContent  );

$mainContent = str_replace('rosdiplom_ru', $raskrutka_site_4, $mainContent  );
$mainContent = str_replace('Публикации</a>', '</a>', $mainContent  );
$mainContent = str_replace('это интересно</a>', '</a>', $mainContent  );

$mainContent = str_replace('</title>', '</title> '.$yandex_google, $mainContent  );

$mainContent = rand_podstav_smv($mainContent);

$mainContent = str_replace('177', '1001', $mainContent  );//new


echo $mainContent;
