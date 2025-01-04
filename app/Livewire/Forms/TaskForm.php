<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    #[Rule('required|min:3|max:50')]
    public $title;

    #[Rule('required|min:3|max:50')]
    public $slug;

    #[Rule('required|min:10|max:255')]
    public $description;

    #[Rule('required')]
    public $status;

    #[Rule('required')]
    public $priority;

    #[Rule('required')]
    public $deadline;

    public function create() {
        auth()->user()->tasks()->create($this->all());
        request()->session()->flash('success', 'Task created successfully');
    }
}
