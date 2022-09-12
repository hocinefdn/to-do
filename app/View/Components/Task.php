<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Task extends Component
{
    public $id;
    public $title;
    public $description;
    public $dueDate;
    public $done;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title, $description, $dueDate, $done)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->dueDate = $dueDate;
        $this->done = $done;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.task');
    }
}