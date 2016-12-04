<?php
$debug=$_GET['debug'];

$navmenu_main=[
		'Name' => 'Головна',
		'Link' => '/'
];

$navmenu_catalog=[
		'Name' => 'Каталог',
		'Link' => '?url=./goods.view.php'				
];

$navmenu_contacts=[
		'Name' => 'Контакти',
		'Link' => '?url=./contacts.view.php'
];

$navmenu=[$navmenu_main, $navmenu_catalog, $navmenu_contacts ];


$dinosaurus =[
		'Name' => 'Ділафозавр',
		'Mass' => 65,
		'MassUnit' => 'кг',
		'Img' => 'imgs/Dilophosaurus.jpg',
		'Description' => 'Цей динозавр може стріляти кислотою.'
		];

$spinosaurus  =[
		'Name' => 'Спинозавр',
		'Mass' => 4,		
		'MassUnit' =>'т',		
		'Img' =>'imgs/Spinosaurus.jpg',
		'Description' => 'Спинозавр - маловивчений м\'ясоїдний динозавр. Його висота складає 20м що вище 5 поверхового будинку.'
	];

$dinos=[$dinosaurus, $spinosaurus ];


?>