<?php
return array(

	'user/register' => 'user/register',
	'login' => 'user/login',
	'user/logout' => 'user/logout',
	'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
	'category/([0-9]+)' => 'catalog/category/$1', // actionCategory in CatalogController
	'product/([0-9]+)' => 'product/view/$1', // actionView in ProductController
	'catalog' => 'catalog/index', // actionIndex in CatalogController
	'cabinet/edit' => 'cabinet/edit',
	'cabinet' => 'cabinet/index',
	'contact' => 'site/contact',
	//управление товарами
	'admin/product/create' => 'adminProduct/create',
	'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
	'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
	'admin/product' => 'adminProduct/index',
	//управление категориями
	'admin/category/create' => 'adminCategory/create',
	'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
	'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
	'admin/category' => 'adminCategory/index',
	//setting admin
	'admin/setting/update' => 'adminSetting/update',
	//дополнительно
	'massege' => 'site/massege',
	'contacts' => 'site/contacts',
	'about' => 'site/about',
	'delivery' => 'site/delivery',
	//adminka
	'admin' => 'admin/index',
	'' => 'site/index',

	);																																																