<?php

namespace Modules\Results\Http\Middleware;

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
           
            $articles_menu = $menu->add('<i class="nav-icon fas fa-display"></i> ' . __('Homepage Content'), [
                'class' => 'nav-group',
            ])
                ->data([
                    'order'         => 2,
                    'activematches' => [
                        'admin/results*',

                    ],
                    'permission' => ['view_posts', 'view_categories'],
                ]);
            $articles_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                // 'href'  => '#',
            ]);


            // Submenu: Posts
            $articles_menu->add('<i class="nav-icon fas fa-plus"></i> ' . __('Add Result'), [
                'route' => 'backend.results.add',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 82,
                    'activematches' => 'admin/results/add',
                    'permission'    => ['edit_posts'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

                $articles_menu->add('<i class="nav-icon fas fa-sitemap"></i> ' . __('View Results'), [
                    'route' => 'backend.results.index',
                    'class' => 'nav-item',
                ])
                    ->data([
                        'order'         => 83,
                        'activematches' => 'admin/results*',
                        'permission'    => ['edit_categories'],
                    ])
                    ->link->attr([
                        'class' => 'nav-link',
                    ]);

                $articles_menu->add('<i class="nav-icon fas fa-sitemap"></i> ' . __('Edit Result Stats'), [
                    'route' => 'backend.results.stats',
                    'class' => 'nav-item',
                ])
                    ->data([
                        'order'         => 83,
                        'activematches' => 'admin/results*',
                        'permission'    => ['edit_categories'],
                    ])
                    ->link->attr([
                        'class' => 'nav-link',
                    ]);

                $articles_menu->add('<i class="nav-icon fas fa-sitemap"></i> ' . __('View Expert Picks'), [
                    'route' => 'backend.experts.index',
                    'class' => 'nav-item',
                ])
                    ->data([
                        'order'         => 83,
                        'activematches' => 'admin/experts',
                        'permission'    => ['edit_categories'],
                    ])
                    ->link->attr([
                        'class' => 'nav-link',
                    ]);
           

            $prices_menu = $menu->add('<i class="nav-icon fas fa-piggy-bank"></i> ' . __('Other Country Prices'), [
                'class' => 'nav-group',
            ])
                ->data([
                    'order'         => 16,
                    'activematches' => [
                        'admin/prices*',

                    ],
                    'permission' => ['view_posts', 'view_categories'],
                ]);
            $prices_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                // 'href'  => '#',
            ]);


            // Submenu: Posts
            $prices_menu->add('<i class="nav-icon fas fa-plus"></i> ' . __('Add Price'), [
                'route' => 'backend.prices.create',
                'class' => 'nav-item',
            ])
                ->data([
                    'order'         => 82,
                    'activematches' => 'admin/prices/create',
                    'permission'    => ['edit_posts'],
                ])
                ->link->attr([
                    'class' => 'nav-link',
                ]);

                $prices_menu->add('<i class="nav-icon fas fa-sitemap"></i> ' . __('View Prices'), [
                    'route' => 'backend.prices.index',
                    'class' => 'nav-item',
                ])
                    ->data([
                        'order'         => 83,
                        'activematches' => 'admin/prices',
                        'permission'    => ['edit_categories'],
                    ])
                    ->link->attr([
                        'class' => 'nav-link',
                    ]);

                $prices_menu->add('<i class="nav-icon fas fa-sitemap"></i> ' . __('Edit Currencies'), [
                    'route' => 'backend.prices.currency',
                    'class' => 'nav-item',
                ])
                    ->data([
                        'order'         => 83,
                        'activematches' => 'admin/prices/currencies',
                        'permission'    => ['edit_categories'],
                    ])
                    ->link->attr([
                        'class' => 'nav-link',
                    ]);


                  
    
    
          

        })->sortBy('order');
        return $next($request);
    }
}
