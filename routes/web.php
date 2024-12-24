<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FormEntryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SolutionsController;
use App\Http\Controllers\TestimonialController;

use App\Models\JobListing;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Testimonial;

class Fruit {
    public function __construct($data) {
        $this->meta_title = $data->meta_title;
        $this->meta_description = $data->meta_description;
        $this->meta_keywords = $data->meta_keywords;
    }   
}  


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('blog', BlogController::class);
    Route::resource('page', PageController::class);
    Route::resource('jobs', JobController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('solutions', SolutionsController::class);
    Route::resource('projects', ProjectsController::class);
});

Route::get('/', function () {
    $testimonials = Testimonial::where('type', 'client')->get();
    $seo = Page::where('slug', 'home')->first();
    $hero_img = [asset('assets/images/1.webp'), asset('assets/images/video-slide.webp'), asset('assets/images/slider-3.webp')];
    return view('website.index', compact('seo', 'testimonials', 'hero_img'));

})->name('home');

Route::get('/about-us', function () {
    return view('website.about', [
        'seo' => Page::where('slug', 'about-us')->first(),
        'hero_img' => [asset('assets/images/about-header.png')]
    ]);
})->name('about-us');

Route::get('/solar-calculator', function () {
    return view('website.coming-soon', ['seo' => Page::where('slug', 'solar-calculator')->first(),'seoData' => Page::where('slug', 'solar-calculator')->count(),'hero_img' => [asset('assets/images/about-header.png')]]);
});

Route::get('/contact-us', function () {
    return view('website.contact', ['seo' => Page::where('slug', 'contact-us')->first(),'seoData' => Page::where('slug', 'contact-us')->count(),'hero_img' => [asset('assets/images/contact-us.png')]]);
})->name('contact-us');

Route::get('/careers', function () {
    return view('website.career', ['seo' => Page::where('slug', 'careers')->first(),'seoData' => Page::where('slug', 'careers')->count(),'hero_img' => [asset('assets/images/career.png')]]);
});

Route::get('/employee-testimonials', function () {
    return view('website.employee-testimonials', ['seo' => Page::where('slug', 'employee-testimonials')->first(),'seoData' => Page::where('slug', 'employee-testimonials')->count(),'hero_img' => [asset('assets/images/employee-testimonials.png')]]);
});

Route::get('/job-openings', function () {
    return view('website.job-openings', ['jobs' => JobListing::all(), 'seo' => Page::where('slug', 'job-openings')->first(),'seoData' => Page::where('slug', 'job-openings')->count(),'hero_img' => [asset('assets/images/job-openings.png')]]);
})->name('job-openings');

Route::get('/life-at-enernew', function () {
    return view('website.life-at-enernew', ['seo' => Page::where('slug', 'life-at-enernew')->first(),'seoData' => Page::where('slug', 'life-at-enernew')->count(),'hero_img' => [asset('assets/images/life-enernew.png')]]);
});

Route::get('/press-release', function () {
    return view('website.pr', ['hero_img' => ['seo' => Page::where('slug', 'press-release')->first(),'seoData' => Page::where('slug', 'press-release')->count(),asset('assets/images/press-release.png')]]);
});

Route::get('/knowledge-center', function () {
    return view('website.blog', ['seo' => Page::where('slug', 'knowledge-center')->first(),'seoData' => Page::where('slug', 'knowledge-center')->count(),
                                    'hero_img' => [asset('assets/images/blog-header.png')],
                                    'recentPosts' => []
                                ]);
});

Route::get('/privacy', function () {
    return view('website.privacy', ['seo' => Page::where('slug', 'privacy')->first(),'seoData' => Page::where('slug', 'privacy')->count(),'hero_img' => [asset('assets/images/privacy-policy.jpg')]]);
});

Route::get('/terms-of-use', function () {
    return view('website.terms-of-use', ['seo' => Page::where('slug', 'terms-of-use')->first(),'seoData' => Page::where('slug', 'terms-of-use')->count(),'hero_img' => [asset('assets/images/terms-of-use.jpg')]]);
});

Route::get('/b2b-solar-solutions', function () {
    return view('website.b2b', ['hero_img' => ['seo' => Page::where('slug', 'b2b-solar-solutions')->first(),'seoData' => Page::where('slug', 'b2b-solar-solutions')->count(),asset('assets/images/b2b.png')]]);
});

Route::get('/asset-management-services', function () {
    return view('website.asset-management', ['seo' => Page::where('slug', 'asset-management-services')->first(),'seoData' => Page::where('slug', 'asset-management-services')->count(),'hero_img' => [asset('assets/images/asset.png')]]);
});

Route::get('/utility-scale-solar-power-park-solutions', function () {
    return view('website.solar-solutions', ['seo' => Page::where('slug', 'utility-scale-solar-power-park-solutions')->first(),'seoData' => Page::where('slug', 'utility-scale-solar-power-park-solutions')->count(),'hero_img' => [asset('assets/images/utility-scale.png')]]);
});

Route::get('/our-solutions', function () {
    return view('website.coming-soon', ['seo' => Page::where('slug', 'our-solutions')->first(),'seoData' => Page::where('slug', 'our-solutions')->count(),'hero_img' => [asset('assets/images/about-header.png')]]);
});

// Blogs
// Route::get('/knowledge-center/why-off-site-solar-parks-are-the-future-of-renewable-energy', function () {
//     return view('website.blog-why-off-site-solar-parks-are-the-future-of-renewable-energy', ['seo' => Blog::where('slug', 'why-off-site-solar-parks-are-the-future-of-renewable-energy')->first(),'seoData' => Blog::where('slug', 'why-off-site-solar-parks-are-the-future-of-renewable-energy')->count(),'recentPosts' => []]);
// });
// Route::get('/knowledge-center/embracing-sustainability-with-solar-energy-and-its-environmental-benefits', function () {
//     return view('website.blog-embracing-sustainability-with-solar-energy-and-its-environmental-benefits', ['seo' => Blog::where('slug', 'embracing-sustainability-with-solar-energy-and-its-environmental-benefits')->first(),'seoData' => Blog::where('slug', 'embracing-sustainability-with-solar-energy-and-its-environmental-benefits')->count(),'recentPosts' => []]);
// });
// Route::get('/knowledge-center/choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas', function () {
//     return view('website.blog-3', ['seo' => Blog::where('slug', 'choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas')->first(),'seoData' => Blog::where('slug', 'choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas')->count(),'recentPosts' => []]);
// });

Route::post('/submit_form', [FormEntryController::class, 'store'])->name('form-entries.store');

Route::resource('form', FormEntryController::class);


Route::get('/knowledge-center/{slug}', function (string $slug) {
    $blog = Blog::where('slug', $slug)->firstOrFail();
    $seo = new Fruit($blog);
    $seo->meta_title;
    $seo->meta_description;
    $seo->meta_keywords;
    return view('website.blog-single', compact('blog', 'seo'));
})->name('blog.show');


require __DIR__.'/auth.php';
