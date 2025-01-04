<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class TasksIndex extends Component
{
    public $title;
    public $slug;
    public $description;
    public $status;
    public $priority;
    public $deadline;


    public function render()
    {
        return view('livewire.tasks.tasks-index')->layout('layouts.app');
    }
}
