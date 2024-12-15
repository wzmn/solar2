<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Page;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('blog', BlogController::class);
    Route::resource('page', PageController::class);
});

Route::get('/', function () {
    return view('website.index', ['seo' => Page::where('slug', 'home')->first(),'seoData' => Page::where('slug', 'home')->count(), 'hero_img' => [asset('storage/assets/images/1.webp'), asset('storage/assets/images/video-slide.webp'), asset('storage/assets/images/slider-3.webp')]]);
})->name('home');

Route::get('/about-us', function () {
    return view('website.about', ['seo' => Page::where('slug', 'about-us')->first(),'seoData' => Page::where('slug', 'about-us')->count(),'hero_img' => [asset('storage/assets/images/about-header.png')]]);
})->name('about-us');

Route::get('/solar-calculator', function () {
    return view('website.coming-soon', ['seo' => Page::where('slug', 'solar-calculator')->first(),'seoData' => Page::where('slug', 'solar-calculator')->count(),'hero_img' => [asset('storage/assets/images/about-header.png')]]);
});

Route::get('/contact-us', function () {
    return view('website.contact', ['seo' => Page::where('slug', 'contact-us')->first(),'seoData' => Page::where('slug', 'contact-us')->count(),'hero_img' => [asset('storage/assets/images/contact-us.png')]]);
})->name('contact-us');

Route::get('/careers', function () {
    return view('website.career', ['seo' => Page::where('slug', 'careers')->first(),'seoData' => Page::where('slug', 'careers')->count(),'hero_img' => [asset('storage/assets/images/career.png')]]);
});

Route::get('/employee-testimonials', function () {
    return view('website.employee-testimonials', ['seo' => Page::where('slug', 'employee-testimonials')->first(),'seoData' => Page::where('slug', 'employee-testimonials')->count(),'hero_img' => [asset('storage/assets/images/employee-testimonials.png')]]);
});

Route::get('/job-openings', function () {
    return view('website.job-openings', ['seo' => Page::where('slug', 'job-openings')->first(),'seoData' => Page::where('slug', 'job-openings')->count(),'hero_img' => [asset('storage/assets/images/job-openings.png')]]);
});

Route::get('/life-at-enernew', function () {
    return view('website.life-at-enernew', ['seo' => Page::where('slug', 'life-at-enernew')->first(),'seoData' => Page::where('slug', 'life-at-enernew')->count(),'hero_img' => [asset('storage/assets/images/life-enernew.png')]]);
});

Route::get('/press-release', function () {
    return view('website.pr', ['hero_img' => ['seo' => Page::where('slug', 'press-release')->first(),'seoData' => Page::where('slug', 'press-release')->count(),asset('storage/assets/images/press-release.png')]]);
});

Route::get('/knowledge-center', function () {
    return view('website.blog', ['seo' => Page::where('slug', 'knowledge-center')->first(),'seoData' => Page::where('slug', 'knowledge-center')->count(),
                                    'hero_img' => [asset('storage/assets/images/blog-header.png')],
                                    'recentPosts' => []
                                ]);
});

Route::get('/privacy', function () {
    return view('website.privacy', ['seo' => Page::where('slug', 'privacy')->first(),'seoData' => Page::where('slug', 'privacy')->count(),'hero_img' => [asset('storage/assets/images/privacy-policy.jpg')]]);
});

Route::get('/terms-of-use', function () {
    return view('website.terms-of-use', ['seo' => Page::where('slug', 'terms-of-use')->first(),'seoData' => Page::where('slug', 'terms-of-use')->count(),'hero_img' => [asset('storage/assets/images/terms-of-use.jpg')]]);
});

Route::get('/b2b-solar-solutions', function () {
    return view('website.b2b', ['hero_img' => ['seo' => Page::where('slug', 'b2b-solar-solutions')->first(),'seoData' => Page::where('slug', 'b2b-solar-solutions')->count(),asset('storage/assets/images/b2b.png')]]);
});

Route::get('/asset-management-services', function () {
    return view('website.asset-management', ['seo' => Page::where('slug', 'asset-management-services')->first(),'seoData' => Page::where('slug', 'asset-management-services')->count(),'hero_img' => [asset('storage/assets/images/asset.png')]]);
});

Route::get('/utility-scale-solar-power-park-solutions', function () {
    return view('website.solar-solutions', ['seo' => Page::where('slug', 'utility-scale-solar-power-park-solutions')->first(),'seoData' => Page::where('slug', 'utility-scale-solar-power-park-solutions')->count(),'hero_img' => [asset('storage/assets/images/utility-scale.png')]]);
});

Route::get('/our-solutions', function () {
    return view('website.coming-soon', ['seo' => Page::where('slug', 'our-solutions')->first(),'seoData' => Page::where('slug', 'our-solutions')->count(),'hero_img' => [asset('storage/assets/images/about-header.png')]]);
});

// Blogs
Route::get('/knowledge-center/why-off-site-solar-parks-are-the-future-of-renewable-energy', function () {
    return view('website.blog-why-off-site-solar-parks-are-the-future-of-renewable-energy', ['seo' => Blog::where('slug', 'why-off-site-solar-parks-are-the-future-of-renewable-energy')->first(),'seoData' => Blog::where('slug', 'why-off-site-solar-parks-are-the-future-of-renewable-energy')->count(),'recentPosts' => []]);
});
Route::get('/knowledge-center/embracing-sustainability-with-solar-energy-and-its-environmental-benefits', function () {
    return view('website.blog-embracing-sustainability-with-solar-energy-and-its-environmental-benefits', ['seo' => Blog::where('slug', 'embracing-sustainability-with-solar-energy-and-its-environmental-benefits')->first(),'seoData' => Blog::where('slug', 'embracing-sustainability-with-solar-energy-and-its-environmental-benefits')->count(),'recentPosts' => []]);
});
Route::get('/knowledge-center/choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas', function () {
    return view('website.blog-3', ['seo' => Blog::where('slug', 'choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas')->first(),'seoData' => Blog::where('slug', 'choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas')->count(),'recentPosts' => []]);
});




Route::get('/form_submit', [App\Http\Controllers\FormController::class, 'store'])->name('form.store');
Route::get('/admin/form_view', [App\Http\Controllers\FormController::class, 'show'])->name('form.show');


require __DIR__.'/auth.php';
