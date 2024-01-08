<?php

namespace App\View\Components\Admin;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropDownInput extends Component
{
    /**
     * @var mixed|null
     */
    private $name;
    private $selected;
    private $options;
    private $keyOfOption;
    private $keyOfValue;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $options, $selected = null, $keyOfValue = null, $keyOfOption = null)
    {
        $this->name = $name;
        $this->selected = $selected;
        $this->options = $options;
        $this->keyOfValue = $keyOfValue;
        $this->keyOfOption = $keyOfOption;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('Components.admin.drop-down-input', [
            'name' => $this->name,
            'selected' => $this->selected,
            'options' => $this->options,
            'keyOfValue' => $this->keyOfValue,
            'keyOfOption' => $this->keyOfOption,
        ]);
    }
}
