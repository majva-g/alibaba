<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class BladeHelper
{
    public static function activeManu($navigationKey, $subMenuIndex = null)
    {
        $navigations = [
            'navigationDashboards' => [
                0 => [],
                1 => ['dashboard'],
            ],
            'navigationArticles' => [
                0 => [],
                1 => [
                    'articles.index',
                    'articles.show',
                    'articles.edit',
                ],
                2 => ['articles.create']
            ]
        ];

        $canActivateClass = [];
        if (is_null($subMenuIndex) && array_key_exists($navigationKey, $navigations)) {
            foreach ($navigations[$navigationKey] as $items) {
                $canActivateClass = array_merge($canActivateClass, $items);
            }
        }
        if (!is_null($subMenuIndex) && array_key_exists($navigationKey, $navigations) && array_key_exists($subMenuIndex, $navigations[$navigationKey])) {
            $canActivateClass = array_merge($canActivateClass, $navigations[$navigationKey][$subMenuIndex]);
        }
        $currentRouteName = Route::currentRouteName();
        return in_array($currentRouteName, $canActivateClass) ? 'active' : '';
    }
}
