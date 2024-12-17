<?php

namespace App\View\PowerGridThemes;

use Illuminate\View\Component;

class Form extends Component
{
    public string $action;
    public string $method;

    public function __construct(string $action, string $method = 'POST')
    {
        $this->action = $action;
        $this->method = strtoupper($method);
    }

    public function render()
    {
        return view('powergridthemes.form'); // Pastikan path view sesuai
    }
}
