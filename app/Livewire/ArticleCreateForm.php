<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleCreateForm extends Component
{
    public $title;
    public $subtitle;
    public $body;


    public function render()
    {
        return view('livewire.article-create-form');
    }
}
