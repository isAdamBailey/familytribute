<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'FamilyTribute',
    'siteDescription' => 'Add your family\'s stories and pictures to a place you can sort, connect and share.',
    'siteKeywords' => 'genealogy,obituaries,history,pictures,stories,family history',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
