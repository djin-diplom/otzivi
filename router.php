<?php

$REQUEST_URI = $_SERVER['REQUEST_URI'];

$contentTitle = str_replace($main_name, $donor_name, $REQUEST_URI );

$mainContent = file_get_contents($contentTitle);

$mainContent = str_replace('src="', 'src="'.$donor_name, $mainContent  );
$mainContent = str_replace('href="/templates/', 'href="'.$donor_name.'/templates/', $mainContent  );f

//$mainContent = str_replace($donor_name, $main_name, $mainContent  );
$mainContent = str_replace($donor_site_name, $site_name, $mainContent  );
//$mainContent = str_replace('/engine/classes/js/', './index_files/', $mainContent  );
//$mainContent = str_replace('/engine/classes/', './index_files/', $mainContent  );
//$mainContent = str_replace('/templates/city-skyline/assets/css/', './index_files/', $mainContent  );


//$mainContent = str_replace('/templates/city-skyline/assets/js/', './index_files/', $mainContent  );
//$mainContent = str_replace('/templates/city-skyline/style/', './index_files/', $mainContent  );
//$mainContent = str_replace('/favicon.png', './favicon.ico', $mainContent  );


echo $mainContent;
