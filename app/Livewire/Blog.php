<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Blog extends Component
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $body = '';

    #[Title('Blog')]

    public function render()
    {
        return view('livewire.blog');
    }

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        session()->flash('status', 'Post successfully updated.');
        return $this->redirect('/blog', navigate: true);
    }
}
