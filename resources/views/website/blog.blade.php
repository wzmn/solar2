@section("title", "Knowledge Center – Insights & Resources at Enernew")

@extends("layouts.website")

@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
    <h1 class="text-white">Knowledge Center</h1>
    <div class="hero__content text-white mb-3">
        Home > Knowledge Center
    </div>
</div>
@endsection

@section("content")

<div class="blogs">
    <div class="mt-5 container">
        <div class="row mb-5">
            <div class="col">
                <h1 class="highlight mb-4">Charting the Future with Enernew's Discoveries and Learnings</h1>
                <p>Immerse yourself in Enernew's curated selection of thought-provoking articles focusing on renewable
                    energy, sustainability practices, and cutting-edge industry insights. Explore groundbreaking
                    technologies, impactful project showcases, and expert analyses that underscore our unwavering
                    commitment to advancing a sustainable future. Stay informed and inspired as we delve into pivotal
                    topics aimed at driving global sustainability efforts forward.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="row">
                    <div class="col-sm-4 col-12 mb-4">
                        <div class="card" href="/knowledge-center/why-off-site-solar-parks-are-the-future-of-renewable-energy">
                            <img src="{{ asset('assets/images/blogs/blog-1-details.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-around">
                                <div class="mb-2">January 9, 2024</div>
                                <div class="h4 mb-4 text-green">Why Off-Site Solar Parks are the Future of Renewable Energy</div>
                                <a href="/knowledge-center/why-off-site-solar-parks-are-the-future-of-renewable-energy" class="text-orange">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 mb-4">
                        <div class="card" href="/knowledge-center/embracing-sustainability-with-solar-energy-and-its-environmental-benefits">
                            <img src="{{ asset('assets/images/blogs/blog-2-details.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-around">
                                <div class="mb-2">January 9, 2024</div>
                                <div class="h4 mb-4 text-green">Embracing Sustainability with Solar Energy and Its Environmental Benefits</div>
                                <a href="/knowledge-center/embracing-sustainability-with-solar-energy-and-its-environmental-benefits" class="text-orange">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 mb-4">
                        <div class="card" href="/knowledge-center/choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas">
                            <img src="{{ asset('assets/images/blogs/blog-3-details.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column justify-content-around">
                                <div class="mb-2">January 9, 2024</div>
                                <div class="h4 mb-4 text-green">Choosing the Right Green Energy Path: A Comparison of Captive and Third-Party PPAS</div>
                                <a href="/knowledge-center/choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas" class="text-orange">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="search">
                    <h4>Search</h4>
                </div>
                <div class="search__box mb-5">
                    <input type="text" name="s" placeholder="Search">
                    <button>
                        <svg width="25" fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M310,190c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.52,0,10-4.48,10-10S315.52,190,310,190z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M500.281,443.719l-133.48-133.48C388.546,277.485,400,239.555,400,200C400,89.72,310.28,0,200,0S0,89.72,0,200 s89.72,200,200,200c39.556,0,77.486-11.455,110.239-33.198l36.895,36.895c0.005,0.005,0.01,0.01,0.016,0.016l96.568,96.568 C451.276,507.838,461.319,512,472,512c10.681,0,20.724-4.162,28.278-11.716C507.837,492.731,512,482.687,512,472 S507.837,451.269,500.281,443.719z M305.536,345.727c0,0.001-0.001,0.001-0.002,0.002C274.667,368.149,238.175,380,200,380 c-99.252,0-180-80.748-180-180S100.748,20,200,20s180,80.748,180,180c0,38.175-11.851,74.667-34.272,105.535 C334.511,320.988,320.989,334.511,305.536,345.727z M326.516,354.793c10.35-8.467,19.811-17.928,28.277-28.277l28.371,28.371 c-8.628,10.183-18.094,19.65-28.277,28.277L326.516,354.793z M486.139,486.139c-3.78,3.78-8.801,5.861-14.139,5.861 s-10.359-2.081-14.139-5.861l-88.795-88.795c10.127-8.691,19.587-18.15,28.277-28.277l88.798,88.798 C489.919,461.639,492,466.658,492,472C492,477.342,489.919,482.361,486.139,486.139z" /> 
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M200,40c-88.225,0-160,71.775-160,160s71.775,160,160,160s160-71.775,160-160S288.225,40,200,40z M200,340 c-77.196,0-140-62.804-140-140S122.804,60,200,60s140,62.804,140,140S277.196,340,200,340z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M312.065,157.073c-8.611-22.412-23.604-41.574-43.36-55.413C248.479,87.49,224.721,80,200,80c-5.522,0-10,4.478-10,10 c0,5.522,4.478,10,10,10c41.099,0,78.631,25.818,93.396,64.247c1.528,3.976,5.317,6.416,9.337,6.416 c1.192,0,2.405-0.215,3.584-0.668C311.472,168.014,314.046,162.229,312.065,157.073z" />
                                </g>
                            </g>
        
                        </svg>
                    </button>
                </div>
                <x-recent-posts :posts="$recentPosts" />
                <div class="categories">
                    <h4 class="mb-4 text-orange">Categories</h4>
                    <ul class="p-0">
                        <li class="align-items-center border-2 border-bottom d-flex justify-content-between mb-2">
                            <a class="py-3">Enviroment</a>
                            <span>(3)</span>
                        </li>
        
                        <li class="align-items-center border-2 border-bottom d-flex justify-content-between mb-2">
                            <a class="py-3">EPC Project</a>
                            <span>(1)</span>
                        </li>
                        <li class="align-items-center border-2 border-bottom d-flex justify-content-between mb-2">
                            <a class="py-3">Solar</a>
                            <span>(2)</span>
                        </li>
                        <li class="align-items-center border-2 border-bottom d-flex justify-content-between mb-2">
                            <a class="py-3">Solar Pump</a>
                            <span>(6)</span>
                        </li>
                        <li class="align-items-center border-2 border-bottom d-flex justify-content-between mb-2">
                            <a class="py-3">Solar Inverter</a>
                            <span>(1)</span>
                        </li>
                        <li class="align-items-center border-2 border-bottom d-flex justify-content-between mb-2">
                            <a class="py-3">Lithium-ion Battery</a>
                            <span>(1)</span>
                        </li>
                        <li class="align-items-center border-2 border-bottom d-flex justify-content-between mb-2">
                            <a class="py-3">Solar PV modules</a>
                            <span>(1)</span>
                        </li>
                        <li class="align-items-center border-2 border-bottom d-flex justify-content-between mb-2">
                            <a class="py-3">Waaree Expert</a>
                            <span>(3)</span>
                        </li>
        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section("scripts")
<script>
    document.addEventListener('DOMContentLoaded', () => {

        [...document.querySelectorAll("div[href]")].map(s => s.addEventListener('click', (event) => {window.open(event.currentTarget.getAttribute('href'))}))
    })
</script>
@endsection