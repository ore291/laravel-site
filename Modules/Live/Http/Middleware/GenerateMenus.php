<?php

namespace Modules\Live\Http\Middleware;

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
           
            $articles_menu = $menu->add('<i class="nav-icon fas fa-display"></i> ' . __('Live Bets'), [
                'class' => 'nav-group',
            ])
                ->data([
                    'order'         => 16,
                    'activematches' => [
                        'admin/live*',

                    ],
                    'permission' => ['view_posts', 'view_categories'],
                ]);
            $articles_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                // 'href'  => '#',
            ]);


            // Submenu: Posts
            $articles_menu->add('<i class="nav-icon fas fa-plus"></i> ' . __('Add Live Bet'), [
                'route' => 'backend.live_events.add',
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

                $articles_menu->add('<i class="nav-icon fas fa-sitemap"></i> ' . __('View Live Bets'), [
                    'route' => 'backend.live_events.index',
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


                    $sms_menu = $menu->add('<i class="nav-icon fas fa-comment"></i> ' . __('SMS Users'), [
                        'class' => 'nav-item',
                    ])
                        ->data([
                            'order'         => 16,
                            'activematches' => [
                                'admin/sms*',
                            ],
                            'permission' => ['view_posts', 'view_categories'],
                        ]);
                    $sms_menu->link->attr([
                        'class' => 'nav-link',
                        'href'  => '/admin/sms',
                    ]);
    
    
          

        })->sortBy('order');
        return $next($request);
    }
}
