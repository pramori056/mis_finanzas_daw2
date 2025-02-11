<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Transaction extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $options,
        public string $method = 'POST',
        public string $action = '',
        public ?string $date = null, // Add date property
        public ?string $category = null, // Add category property
        public ?float $amount = null // Add amount property
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.transaction');
    }
}   
