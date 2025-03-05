<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
@php
    $og_img='';
    $tw_img='';
@endphp

@switch($slug)
    @case('about-us')
        @php
            $og_img = "<meta property='og:image' content='" . asset('assets/images/about-header.png') . "' />";
            $tw_img = "<meta name='twitter:image' content='" . asset('assets/images/about-header.png') . "' />";
        @endphp
    @break

    @case('press-release')
        @php
            $og_img = "<meta property='og:image' content='" . asset('assets/images/press-release.png') . "' />";
            $tw_img = "<meta name='twitter:image' content='" . asset('assets/images/press-release.png') . "' />";
        @endphp
    @break

    @case('life-at-enernew')
        @php
            $og_img = "<meta property='og:image' content='" . asset('assets/images/about-header.png') . "' />";
            $tw_img = "<meta name='twitter:image' content='" . asset('assets/images/about-header.png') . "' />";
        @endphp
    @break

    @case('job-openings')
        @php
            $og_img = "<meta property='og:image' content='" . asset('assets/images/job-openings.png') . "' />";
            $tw_img = "<meta name='twitter:image' content='" . asset('assets/images/job-openings.png') . "' />";
        @endphp
    @break

    @case('careers')
        @php
            $og_img = "<meta property='og:image' content='" . asset('assets/images/career.png') . "' />";
            $tw_img = "<meta name='twitter:image' content='" . asset('assets/images/career.png') . "' />";
        @endphp
    @break

    @case('utility-scale-solar-power-park-solutions')
        @php
            $og_img = "<meta property='og:image' content='" . asset('assets/images/utility-scale.png') . "' />";
            $tw_img = "<meta name='twitter:image' content='" . asset('assets/images/utility-scale.png') . "' />";
        @endphp
    @break

    @case('b2b-solar-solutions')
        @php
            $og_img = "<meta property='og:image' content='" . asset('assets/images/b2b.png') . "' />";
            $tw_img = "<meta name='twitter:image' content='" . asset('assets/images/b2b.png') . "' />";
        @endphp
    @break

    @case('asset-management-services')
        @php
            $og_img = "<meta property='og:image' content='" . asset('assets/images/asset-cta.png') . "' />";
            $tw_img = "<meta name='twitter:image' content='" . asset('assets/images/asset-cta.png') . "' />";
        @endphp
    @break

    @case('knowledge-center')
        @php
            $og_img =
                "<meta property='og:image' content='https://enernew.in/storage/images/GZJsTXe7SdNzKuTS4sCyc5T0ciIPwNMVcUc1rOLW.jpg' />";
            $tw_img =
                "<meta name='twitter:image' content='https://enernew.in/storage/images/GZJsTXe7SdNzKuTS4sCyc5T0ciIPwNMVcUc1rOLW.jpg' />";
        @endphp
    @break

    @case('why-off-site-solar-parks-are-the-future-of-renewable-energy')
        @php
            $og_img =
                "<meta property='og:image' content='https://enernew.in/storage/images/qLytv7QOFVnE4kDT3FazbmjGjaapSuLMS0Y5zAE4.jpg' />";
            $tw_img =
                "<meta name='twitter:image' content='https://enernew.in/storage/images/qLytv7QOFVnE4kDT3FazbmjGjaapSuLMS0Y5zAE4.jpg' />";
        @endphp
    @break

    @case('choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas')
        @php
            $og_img =
                "<meta property='og:image' content='https://enernew.in/storage/images/AK2HzVaBpkyP2yRGi7HOC6qLngTo2DqVG10fr8tI.jpg' />";
            $tw_img =
                "<meta name='twitter:image' content='https://enernew.in/storage/images/AK2HzVaBpkyP2yRGi7HOC6qLngTo2DqVG10fr8tI.jpg' />";
        @endphp
    @break

    @case('embracing-sustainability-with-solar-energy-and-its-environmental-benefits')
        @php
            $og_img =
                "<meta property='og:image' content='https://enernew.in/storage/images/runJnq0JpNWSurqxy6kqIjzgqSbUwkLBu5g7uuSj.jpg' />";
            $tw_img =
                "<meta name='twitter:image' content='https://enernew.in/storage/images/runJnq0JpNWSurqxy6kqIjzgqSbUwkLBu5g7uuSj.jpg' />";
        @endphp
    @break

    @case('solar-energy-in-textile-industry-path-to-a-sustainable-future')
        @php
            $og_img =
                "<meta property='og:image' content='https://enernew.in/storage/images/Z7bbO5e1ajzLARBoZEuAYZq15HWYUFcJBpPbmEM6.webp' />";
            $tw_img =
                "<meta name='twitter:image' content='https://enernew.in/storage/images/Z7bbO5e1ajzLARBoZEuAYZq15HWYUFcJBpPbmEM6.webp' />";
        @endphp
    @break

    @default

@endswitch

<!-- Open Graph Meta Tags -->
<meta property='og:title' content='{{ $title }}' />
<meta property='og:description' content='{{ $description }}' />
<meta property='og:url' content='{{ $url }}' />
<meta property='og:type' content='website' />
<meta property='og:site_name' content='Enernew' />
{!! $og_img !!}
<!-- Twitter Card Meta Tags -->
<meta name='twitter:card' content='summary_large_image' />
<meta name='twitter:title' content='{{ $title }}' />
<meta name='twitter:description' content='{{ $description }}' />
<meta name='twitter:url' content='{{ $url }}' />
<meta name='twitter:site' content='@Enernew' />
<meta name='twitter:creator' content='@Enernew' />
{!! $tw_img !!}