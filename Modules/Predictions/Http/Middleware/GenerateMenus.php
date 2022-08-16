<?php

namespace Modules\Predictions\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('admin_sidebar', function ($menu) {

            // Prediction Dropdown
            $articles_menu = $menu->add('<i class="nav-icon fas fa-archive"></i> ' . __('Predictions'), [
                'class' => 'nav-group',
            ])
                ->data([
                    'order'         => 11,
                    'activematches' => [
                        'admin/predictions*',

                    ],
                    'permission' => ['view_posts', 'view_categories'],
                ]);
            $articles_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                // 'href'  => '#',
            ]);

            $articles_menu->add('<i class="nav-icon fas fa-plus"></i> ' . __('Bulk Add Prediction'), [
                'route' => 'backend.predictions.create',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 82,
                    'activematches' => 'admin/predictions/create',
                    'permission'    => ['edit_posts'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

            // Submenu: Posts
            $articles_menu->add('<i class="nav-icon fas fa-plus"></i> ' . __('Add Single Prediction'), [
                'route' => 'backend.predictions.add',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 82,
                    'activematches' => 'admin/predictions/add',
                    'permission'    => ['edit_posts'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);
            // Submenu: Categories
            $articles_menu->add('<i class="nav-icon fas fa-sitemap"></i> ' . __('View Predictions'), [
                'route' => 'backend.predictions.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 83,
                    'activematches' => 'admin/predictions*',
                    'permission'    => ['edit_categories'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);


            // categories gan gan

            $categories_menu = $menu->add('<i class="nav-icon fas fa-list"></i> ' . __('Bet Categories'), [
                'class' => 'nav-group',
            ])
                ->data([
                    'order'         => 15,
                    'activematches' => [
                        'admin/sport_categories*',
                    ],
                    'permission' => ['view_posts', 'view_categories'],
                ]);
            $categories_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                // 'href'  => '#',
            ]);

            // Submenu: Posts
            $categories_menu->add('<i class="nav-icon fas fa-plus"></i> ' . __('Add Bet Category'), [
                'route' => 'backend.sport_categories.create',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 84,
                    'activematches' => 'admin/sport_categories/create',
                    'permission'    => ['edit_posts'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);
            // Submenu: Categories
            $categories_menu->add('<i class="nav-icon fas fa-sitemap"></i> ' . __('View Bet Category'), [
                'route' => 'backend.sport_categories.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 85,
                    'activematches' => 'admin/sport_categories',
                    'permission'    => ['edit_categories'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);


            // plans gan gan

            $categories_menu = $menu->add('<i class="nav-icon fas fa-cubes"></i> ' . __('Subscription Plans'), [
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 16,
                    'activematches' => [
                        'admin/plans*',
                    ],
                    'permission' => ['view_posts', 'view_categories'],
                ]);
            $categories_menu->link->attr([
                'class' => 'nav-link',
                'href'  => '/admin/plans',
            ]);

          
            // leagues gan gan

            $categories_menu = $menu->add('<i class="nav-icon fas fa-trophy"></i> ' . __('Leagues'), [
                'class' => 'nav-group',
            ])
                ->data([
                    'order'         => 18,
                    'activematches' => [
                        'admin/leagues*',
                    ],
                    'permission' => ['view_posts', 'view_categories'],
                ]);
            $categories_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                // 'href'  => '#',
            ]);

            // Submenu: Posts
            $categories_menu->add('<i class="nav-icon fas fa-plus"></i> ' . __('Add Football league'), [
                'route' => 'backend.leagues.create',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 87,
                    'activematches' => 'admin/leagues/create',
                    'permission'    => ['edit_posts'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);
            // Submenu: Categories
            $categories_menu->add('<i class="nav-icon fas fa-sitemap"></i> ' . __('View Leagues'), [
                'route' => 'backend.leagues.index',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 88,
                    'activematches' => 'admin/leagues',
                    'permission'    => ['edit_categories'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

        })->sortBy('order');




        return $next($request);
    }
}
