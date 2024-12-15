<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Metadata extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct($page)
    {
        $this->title = $page->meta_title ?? "Enernew";
        $this->desc = $page->meta_description ?? "Innovative Renewable Energy & Solar Power Park Solutions";
        $this->keywords = $page->meta_keywords ?? "renewable energy, solar power, renewable energy park";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.metadata', ['title' => $this->title, "description" => $this->desc, "keywords" => $this->keywords]);
    }
}
