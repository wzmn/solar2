<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RecentPosts extends Component
{
    public $posts;

    public function __construct($posts)
    {
        if (empty($posts)) {
        	$this->posts = [
        		[
        			"image" => asset('assets/images/blogs/blog-1-details-thumb.jpg'),
        			"title" => "Why Off-Site Solar Parks are the Future of Renewable Energy",
        			"link" => "/knowledge-center/why-off-site-solar-parks-are-the-future-of-renewable-energy",
        			"date" => "January 9, 2024"
        		],

        		[
        			"image" => asset('assets/images/blogs/blog-2-details-thumb.jpg'),
        			"title" => "Embracing Sustainability with Solar Energy and Its Environmental Benefits",
        			"link" => "/knowledge-center/embracing-sustainability-with-solar-energy-and-its-environmental-benefits",
        			"date" => "January 9, 2024"
        		],

        		[
        			"image" => asset('assets/images/blogs/blog-3-details-thumb.jpg'),
        			"title" => "Choosing the Right Green Energy Path: A Comparison of Captive and Third-Party PPAS",
        			"link" => "/knowledge-center/choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas",
        			"date" => "January 9, 2024"
        		],

        	];
        	return;
        }
        $this->posts = $posts;
    }

    public function render()
    {
        return view('components.recent-posts');
    }
}