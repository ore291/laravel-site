<?php

namespace Modules\Live\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UpgradeUser extends Component
{

    use WithPagination;

    public $searchTerm;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $users = User::where('name', 'like', $searchTerm)->orWhere('email', 'like', $searchTerm)->orderBy('id', 'desc')->with('subscriptions')->paginate();

     

        return view('live::livewire.pages.upgrade-user', compact('users'));
    }

   
}
