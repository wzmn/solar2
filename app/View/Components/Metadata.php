<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Http\Request;

class Metadata extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(Request $request, $page = null)
    {
        if ($page) {  // Check if $page is not null
            $this->title = $page->meta_title;
            $this->desc = $page->meta_description;
            $this->keywords = $page->meta_keywords;
            preg_match_all("/([-\w]+)$/", $request->url(), $matches); 
            $this->slug = $matches[0][0];
            $this->url = $request->url();
        } else { // Use default values if $page is null
            $this->title = "Enernew";
            $this->desc = "Enernew provides renewable energy solutions, specializing in solar power parks that drive sustainability & deliver efficient, clean energy for a greener future.";
            $this->keywords = "renewable energy, solar power, renewable energy park";
            preg_match_all("/([-\w]+)$/", $request->url(), $matches); 
            $this->slug = $matches[0][0];
            $this->url = $request->url();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.metadata', [
        'title' => $this->title, 
        "description" => $this->desc, 
        "keywords" => $this->keywords, "slug" => $this->slug,
        "url" => $this->url
        ]);
    }
}
