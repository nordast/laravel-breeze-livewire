<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;

class TasksForm extends Component
{
    public TaskForm $form;

    public function save()
    {
        $this->validate();
        $this->form->create();
        $this->dispatch('task-created');
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.tasks.tasks-form');
    }
}
