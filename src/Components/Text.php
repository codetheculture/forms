<?php


namespace CodeTheCulture\Forms\Components;

use Illuminate\View\Component;

class Text extends Component
{
    public function __construct(
        public string $name,
        public ?string $value = null
    ) {
    }

    public function value()
    {
        return old($this->name, $this->value ?? '');
    }

    public function render()
    {
        return view('forms::components.text');
    }
}
