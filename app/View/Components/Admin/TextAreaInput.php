<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class TextAreaInput extends Component
{
    private $name;
    /**
     * @var mixed|null
     */
    private $value;
    /**
     * @var mixed|null
     */
    private $groupWith;
    private $rows;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value = null, $groupWith = null, $rows = 4)
    {
        $this->name = $name;
        $this->value = $value;
        $this->groupWith = $groupWith;
        $this->rows = $rows;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('Components.admin.text-area-input', [
            'name' => $this->name,
            'value' => $this->value,
            'groupWith' => $this->groupWith,
            'rows' => $this->rows
        ]);
    }
}
