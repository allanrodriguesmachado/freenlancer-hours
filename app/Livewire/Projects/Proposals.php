<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Proposals extends Component
{
    public Project $project;
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('livewire.projects.proposals');
    }
}
