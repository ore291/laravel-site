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

            // Articles Dropdown
            $articles_menu = $menu->add('<i class="nav-icon fas fa-archive"></i> '.__('Predictions'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 11,
                'activematches' => [
                    'admin/predictions*',
                    'admin/categories*',
                ],
                'permission' => ['view_posts', 'view_categories'],
            ]);
            $articles_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Posts
            $articles_menu->add('<i class="nav-icon fas fa-plus"></i> '.__('Add Single Prediction'), [
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

            // Submenu: Posts
            $articles_menu->add('<i class="nav-icon fas fa-plus"></i> '.__('Bulk Add Predictions'), [
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
            // Submenu: Categories
            $articles_menu->add('<i class="nav-icon fas fa-sitemap"></i> '.__('View Predictions'), [
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
        })->sortBy('order');

        return $next($request);
    }
}
