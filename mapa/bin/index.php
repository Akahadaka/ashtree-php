<?php
$htm = Ashtree_Html_Page::instance();
$tpl = Ashtree_Common_Template::instance();
$usr = Ashtree_Common_Secure::instance();
//$sql = Ashtree_Database_Connection::instance(ASH_SITE_NAME);

// MAIN MENU
$mainmenu = new Plugin_Jquery_Anymenu('mainmenu');
//$reserve = $mainmenu->createItem('Add New Reserve', 'submissions/reserve/create', 'submissions/reserve', 'create');

$home = $mainmenu->createItem('Search', 'mapa/');
$about = $mainmenu->createItem('About', 'mapa/about');
$blog = $mainmenu->createItem('Blog', 'http://blog.mapaproject.org');
$contact = $mainmenu->createItem('Contact', 'mapa/contact');

$mainmenu->addItem($home);
$mainmenu->addItem($about);
$mainmenu->addItem($blog);
$mainmenu->addItem($contact);

$tpl->region_menu_inner = $mainmenu();