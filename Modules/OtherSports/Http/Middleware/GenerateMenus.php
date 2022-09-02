<?php

namespace Modules\OtherSports\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        \Menu::make('admin_sidebar', function ($menu) {

            // Prediction Dropdown
            $articles_menu = $menu->add('<i class="nav-icon fas fa-dice-three"></i> ' . __('Other Sports'), [
                'class' => 'nav-group',
            ])
                ->data([
                    'order'         => 14,
                    'activematches' => [
                        'admin/other-sports*',

                    ],
                    'permission' => ['view_posts', 'view_categories'],
                ]);
            $articles_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                // 'href'  => '#',
            ]);

            $articles_menu->add('<i class="nav-icon fas fa-plus"></i> ' . __('Bulk Add Predictions'), [
                'route' => 'backend.other_sports.create',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 82,
                    'activematches' => 'admin/other_sports/create',
                    'permission'    => ['edit_posts'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);


            // Submenu: Posts
            $articles_menu->add('<i class="nav-icon fas fa-plus"></i> ' . __('Add Prediction'), [
                'route' => 'backend.other_sports.add',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 82,
                    'activematches' => 'admin/live/add',
                    'permission'    => ['edit_posts'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

                $articles_menu->add('<i class="nav-icon fas fa-sitemap"></i> ' . __('View Predictions'), [
                    'route' => 'backend.other_sports.index',
                    'class' => 'nav-item',
                ])
                    ->data([
                        'order'         => 83,
                        'activematches' => 'admin/live*',
                        'permission'    => ['edit_categories'],
                    ])
                    ->link->attr([
                        'class' => 'nav-link',
                    ]);
    
    
          

        })->sortBy('order');
        return $next($request);
    }
}
