<?php

return [
    'production' => false,
    'baseUrl' => 'https://yjamal.netlify.app',
    'site' => [
        'title' => 'My Deep Thoughts',
        'description' => 'Personal blog of Yawar Jamal.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'Yawar',
        'twitter' => 'yjamal',
        'github' => 'yj7o5',
    ],
    'services' => [
        'cmsVersion' => '2.10.139',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'artisanstatic',
            'apiKey' => '365895137117119',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
