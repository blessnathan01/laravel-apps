<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $brand = 'ACCOUNTING APP';
    public $home = 'Home';
    public $branches = 'Branches';
    public $users = 'Users';
    public $branchname = '';
    public $added = false;

    public function addBranch()
    {
        $this-> branchname = 'New';
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
