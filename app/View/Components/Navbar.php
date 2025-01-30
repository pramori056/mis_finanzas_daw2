<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public array $links)
    {
        $this->validateLinks($links);
    }

    protected function validateLinks(array $links): void
    {
        foreach ($links as $link) {
            if (!is_array($link) || count($link) !== 3) {
                throw new InvalidArgumentException('Each link must be an array with exactly three elements: [URI, Text, Active]');
            }

            if (!is_string($link[0]) || !is_string($link[1]) || !is_bool($link[2])) {
                throw new InvalidArgumentException('Invalid link structure: [URI must be a string, Text must be a string, Active must be a boolean]');
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
