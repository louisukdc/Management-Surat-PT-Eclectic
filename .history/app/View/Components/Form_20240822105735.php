<?php
namespace App\View\PowerGridThemes;

use Illuminate\View\PowerGridThemes;

class Form extends PowerGridThemes
{
    public $action;
    public $method;

    public function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function render()
    {
        return view('components.form');
    }
}

