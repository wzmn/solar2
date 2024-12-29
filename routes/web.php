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
use App\Http\Controllers\BlockController;
use App\Http\Controllers\FileController;

use App\Models\JobListing;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Testimonial;
use App\Models\File;

use App\Http\Controllers\MediaController;

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
    Route::resource('block', BlockController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('solutions', SolutionsController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('form', FormEntryController::class);
    Route::resource('file', FileController::class);
    
    
    // Route::get('/media', [MediaController::class, 'index'])->name('media.index');
    // Route::get('/media/create', [MediaController::class, 'create'])->name('media.create');
    // Route::post('/media/upload', [MediaController::class, 'upload'])->name('media.upload');
    // Route::delete('/media/{media_id}', [MediaController::class, 'destroy'])->name('media.destroy');
});

Route::get('/', function () {
    $testimonials = Testimonial::where('type', 'client')->get();
    $seo = Page::where('slug', 'home')->first();
    $hero_img = [asset('assets/images/1.webp'), asset('assets/images/video-slide.webp'), asset('assets/images/slider-3.webp')];
    return view('website.index', compact('seo', 'testimonials', 'hero_img'));

})->name('home');

Route::get('/about-us', function () {
    $seo = Page::where('slug', 'about-us')->first();
    $hero_img = [asset('assets/images/about-header.png')];
    return view('website.about', compact('seo', 'hero_img'));
})->name('about-us');

Route::get('/solar-calculator', function () {
    $seo = Page::where('slug', 'solar-calculator')->first();
    $hero_img = [asset('assets/images/solar-calculator.png')];
    return view('website.coming-soon', compact('seo', 'hero_img') );
});

Route::get('/contact-us', function () {
    $seo = Page::where('slug', 'contact-us')->first();
    $hero_img = [asset('assets/images/contact-us.png')];
    return view('website.contact', compact('seo', 'hero_img'));
})->name('contact-us');

Route::get('/careers', function () {
    $testimonials = Testimonial::where('type', 'employee')->first();
    $seo = Page::where('slug', 'careers')->first();
    $hero_img = [asset('assets/images/career.png')];
    return view('website.career', compact('testimonials', 'seo', 'hero_img'));
})->name('careers');

Route::get('/employee-testimonials', function () {
    $testimonials = Testimonial::where('type', 'employee')->get();
    $seo = Page::where('slug', 'employee-testimonials')->first();
    $hero_img = [asset('assets/images/employee-testimonials.png')];
    return view('website.employee-testimonials', compact('testimonials', 'seo', 'hero_img'));
})->name('employee-testimonials');

Route::get('/job-openings', function () {
    $seo = Page::where('slug', 'job-openings')->first();
    $hero_img = [asset('assets/images/job-openings.png')];
    $jobs = JobListing::all();
    return view('website.job-openings', compact('seo', 'jobs', 'hero_img'));
})->name('job-openings');

Route::get('/life-at-enernew', function () {
    $seo = Page::where('slug', 'life-at-enernew')->first();
    $hero_img = [asset('assets/images/life-enernew.png')];
    return view('website.life-at-enernew', compact('seo', 'hero_img'));
});

Route::get('/press-release', function () {
    $seo = Page::where('slug', 'press-release')->first();
    $hero_img = [asset('assets/images/press-release.png')];
    return view('website.pr', compact('seo', 'hero_img'));
})->name('press-release');


Route::get('/knowledge-center/{slug}', function (string $slug) {
    $hero_img = [asset('assets/images/blog-header.png')];
    $blog = Blog::where('slug', $slug)->firstOrFail();
    $seo = new Fruit($blog);
    $seo->meta_title;
    $seo->meta_description;
    $seo->meta_keywords;
    return view('website.blog-single', compact('blog', 'seo', 'hero_img'));
})->name('blog.show');

Route::get('/knowledge-center', function () {
    $blogs = Blog::paginate();
    $seo = Page::where('slug', 'knowledge-center')->first();
    $recentPosts = $blogs;
    return view('website.blog', compact('blogs', 'seo', 'recentPosts'));
});

Route::get('/privacy', function () {
    $seo = Page::where('slug', 'privacy')->first();
    $hero_img = [asset('assets/images/privacy-policy.jpg')];
    return view('website.privacy', compact( 'seo', 'hero_img'));
});

Route::get('/terms-of-use', function () {
    $seo = Page::where('slug', 'terms-of-use')->first();
    $hero_img = [asset('assets/images/terms-of-use.jpg')];
    return view('website.terms-of-use', compact('seo', 'hero_img'));
});

Route::get('/b2b-solar-solutions', function () {
    $seo = Page::where('slug', 'b2b-solar-solutions')->first();
    $hero_img = [asset('assets/images/b2b.png')];
    return view('website.b2b', compact('seo', 'hero_img'));
});

Route::get('/asset-management-services', function () {
    $seo = Page::where('slug', 'asset-management-services')->first();
    $hero_img = [asset('assets/images/asset.png')];
    return view('website.asset-management', compact('seo', 'hero_img'));
});

Route::get('/utility-scale-solar-power-park-solutions', function () {
    $seo = Page::where('slug', 'utility-scale-solar-power-park-solutions')->first();
    $hero_img = [asset('assets/images/utility-scale.png')];
    return view('website.solar-solutions', compact('seo', 'hero_img'));
});

Route::get('/our-solutions', function () {
    $seo = Page::where('slug', 'our-solutions')->first();
    $hero_img = [asset('assets/images/our-solutions.png')];
    return view('website.coming-soon', compact('seo', 'hero_img'));
});

Route::post('/submit_form', [FormEntryController::class, 'store'])->name('form-entries.store');

require __DIR__.'/auth.php';
