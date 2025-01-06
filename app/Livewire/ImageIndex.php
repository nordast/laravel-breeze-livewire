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

    #[Rule('required')]
    #[Rule(['images.*' => 'image|max:1024'])]
    public $images = [];

    public function saveImage()
    {
        $this->validate();

        $name = $this->image->hashedName();
        $path = $this->image->storeAs('images', $name, 'public');

        Image::create([
            'name' => $name,
            'path' => $path,
        ]);

        $this->reset();
    }

    public function saveImages()
    {
        $this->validate();

        $images = [];

        if (!is_null($this->images)) {
            foreach ($this->images as $photo) {
                $name = $this->image->hashedName();
                $path = $this->image->storeAs('images', $name, 'public');

                $images = [
                    'name' => $name,
                    'path' => $path,
                ];
            }
        }

        foreach ($images as $image) {
            Image::create($image);
        }

        $this->reset();
    }

    public function render()
    {
        return view('livewire.image-index')->layout('layouts.app');
    }
}
