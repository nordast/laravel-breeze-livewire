<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageIndex extends Component
{
    use WithFileUploads;

    #[Rule('image|max:1024')]
    public $image;

    public function save()
    {
        $this->validate();

        $name = $this->image->getHashedName();
        $path = $this->image->storeAs('images', $name, 'public');

        Image::create([
            'name' => $name,
            'path' => $path,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.image-index')->layout('layouts.app');
    }
}
