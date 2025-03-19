<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;  // Menyimpan title untuk card

    // Konstruktor untuk menerima parameter title
    public function __construct($title = '')
    {
        $this->title = $title;
    }

    // Render tampilan komponen
    public function render()
    {
        return view('components.card');
    }
}
