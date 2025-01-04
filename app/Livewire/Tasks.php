<?php

namespace App\Livewire;

use Livewire\Component;

class Tasks extends Component
{
    public $tasks = [];
    public $task = '';

    public function mount()
    {
//        $this->tasks = \App\Models\Task::all();
        $this->tasks = ['Task 1', 'Task 2', 'Task 3'];
    }

    public function add()
    {
        $this->tasks[] = $this->task;
        $this->task = '';
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
