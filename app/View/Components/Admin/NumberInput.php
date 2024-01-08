<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NumberInput extends Component
{
    private $name;
    private $value;
    private $groupWithText;
    private $groupWithHTML;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value = null, $groupWithText = null, $groupWithHtml = null)

    {
        $this->name = $name;
        $this->value = $value;
        $this->groupWithText = $groupWithText;
        $this->groupWithHTML = $groupWithHtml;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('Components.admin.number-input', [
            'name' => $this->name,
            'value' => $this->value,
            'groupWithText' => $this->groupWithText,
            'groupWithHTML' => $this->groupWithHTML
        ]);
    }
}
