<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

return [
	[
		'title' => 'Dashboard',
		'icon'  => 'fa fa-dashboard',
		'url'   => route('admin.dashboard'),
	],
	[
		'title' => 'Information',
		'icon'  => 'fa fa-exclamation-circle',
		'url'   => route('admin.information'),
	],
	[
		'title' => 'Content',
		'pages' => [
			(new Page(Modules\Users\Models\User::class))
				->setPriority(100)
				->setIcon('fa fa-user'),
			(new Page(Modules\Users\Models\Role::class))
				->setPriority(200)
				->setIcon('fa fa-users'),
			(new Page(Modules\Users\Models\Permission::class))
				->setPriority(300)
				->setIcon('fa fa-user-times'),
		]
	],
	[
		'title' => 'Shop',
		'pages' => [
			(new Page(\Modules\Products\Entities\Category::class))
				->setPriority(100),
			(new Page(\Modules\Products\Entities\Product::class))
				->setPriority(200),
			(new Page(\Modules\Products\Entities\Attribute::class))
				->setPriority(300),
		]
	]
	// Examples
	// [
	//    'title' => 'Content',
	//    'pages' => [
	//
	//        \App\User::class,
	//
	//        // or
	//
	//        (new Page(\App\User::class))
	//            ->setPriority(100)
	//            ->setIcon('fa fa-user')
	//            ->setUrl('users')
	//            ->setAccessLogic(function (Page $page) {
	//                return auth()->user()->isSuperAdmin();
	//            }),
	//
	//        // or
	//
	//        new Page([
	//            'title'    => 'News',
	//            'priority' => 200,
	//            'model'    => \App\News::class
	//        ]),
	//
	//        // or
	//        (new Page(/* ... */))->setPages(function (Page $page) {
	//            $page->addPage([
	//                'title'    => 'Blog',
	//                'priority' => 100,
	//                'model'    => \App\Blog::class
	//		      ));
	//
	//		      $page->addPage(\App\Blog::class);
	//	      }),
	//
	//        // or
	//
	//        [
	//            'title'       => 'News',
	//            'priority'    => 300,
	//            'accessLogic' => function ($page) {
	//                return $page->isActive();
	//		      },
	//            'pages'       => [
	//
	//                // ...
	//
	//            ]
	//        ]
	//    ]
	// ]
];