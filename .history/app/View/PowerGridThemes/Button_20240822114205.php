<?php

namespace App\View\PowerGridThemes;

use Illuminate\View\Component;

class Button extends Component
{
    public string $type;
    public string $text;

    public function __construct(string $type = 'button', string $text = 'Submit')
    {
        $this->type = $type;
        $this->text = $text;
    }

    public function render()
    {
        return view('components.button');
    }
}
