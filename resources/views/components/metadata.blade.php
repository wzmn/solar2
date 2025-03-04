<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}" >
<meta name="keywords" content="{{ $keywords }}">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<!-- Open Graph Meta Tags -->
<meta property='og:title' content='{{ $title }}' />
<meta property='og:description' content='{{ $description }}' />
<meta property='og:url' content='{{$url}}' />
<meta property='og:type' content='website' />
<meta property='og:site_name' content='Enernew' />

<!-- Twitter Card Meta Tags -->
<meta name='twitter:card' content='summary_large_image' />
<meta name='twitter:title' content='{{ $title }}' />
<meta name='twitter:description' content='{{ $description }}' />
<meta name='twitter:url' content='{{$url}}' />
<meta name='twitter:site' content='@Enernew' />
<meta name='twitter:creator' content='@Enernew' />

@switch($slug)
    @case('about-us')
        <meta property='og:image' content='{{asset('assets/images/about-header.png')}}' />
        <meta name='twitter:image' content='{{asset('assets/images/about-header.png')}}' />
        @break
    @case('press-release')
        <meta property='og:image' content='{{asset('assets/images/press-release.png')}}' />
        <meta name='twitter:image' content='{{asset('assets/images/press-release.png')}}' />
        @break
    @case('life-at-enernew')
        <meta property='og:image' content='{{asset('assets/images/about-header.png')}}' />
        <meta name='twitter:image' content='{{asset('assets/images/about-header.png')}}' />
        @break
    @case('job-openings')
        <meta property='og:image' content='{{asset('assets/images/job-openings.png')}}' />
        <meta name='twitter:image' content='{{asset('assets/images/job-openings.png')}}' />
        @break
    @case('careers')
        <meta property='og:image' content='{{asset('assets/images/career.png')}}' />
        <meta name='twitter:image' content='{{asset('assets/images/career.png')}}' />
        @break
    @case('utility-scale-solar-power-park-solutions')
        <meta property='og:image' content='{{asset('assets/images/utility-scale.png')}}' />
        <meta name='twitter:image' content='{{asset('assets/images/utility-scale.png')}}' />
        @break
    @case('b2b-solar-solutions')
        <meta property='og:image' content='{{asset('assets/images/b2b.png')}}' />
        <meta name='twitter:image' content='{{asset('assets/images/b2b.png')}}' />
        @break
    @case('asset-management-services')
        <meta property='og:image' content='{{asset('assets/images/asset-cta.png')}}' />
        <meta name='twitter:image' content='{{asset('assets/images/asset-cta.png')}}' />
        @break
    @case('knowledge-center')
        <meta property='og:image' content='https://enernew.in/storage/images/GZJsTXe7SdNzKuTS4sCyc5T0ciIPwNMVcUc1rOLW.jpg' />
        <meta name='twitter:image' content='https://enernew.in/storage/images/GZJsTXe7SdNzKuTS4sCyc5T0ciIPwNMVcUc1rOLW.jpg' />
        @break
    @case('why-off-site-solar-parks-are-the-future-of-renewable-energy')
        <meta property='og:image' content='https://enernew.in/storage/images/qLytv7QOFVnE4kDT3FazbmjGjaapSuLMS0Y5zAE4.jpg' />
        <meta name='twitter:image' content='https://enernew.in/storage/images/qLytv7QOFVnE4kDT3FazbmjGjaapSuLMS0Y5zAE4.jpg' />
        @break
    @case('choosing-the-right-green-energy-path-a-comparison-of-captive-and-third-party-ppas')
        <meta property='og:image' content='https://enernew.in/storage/images/AK2HzVaBpkyP2yRGi7HOC6qLngTo2DqVG10fr8tI.jpg' />
        <meta name='twitter:image' content='https://enernew.in/storage/images/AK2HzVaBpkyP2yRGi7HOC6qLngTo2DqVG10fr8tI.jpg' />
        @break
    @case('embracing-sustainability-with-solar-energy-and-its-environmental-benefits')
        <meta property='og:image' content='https://enernew.in/storage/images/runJnq0JpNWSurqxy6kqIjzgqSbUwkLBu5g7uuSj.jpg' />
        <meta name='twitter:image' content='https://enernew.in/storage/images/runJnq0JpNWSurqxy6kqIjzgqSbUwkLBu5g7uuSj.jpg' />
        @break
    @case('solar-energy-in-textile-industry-path-to-a-sustainable-future')
        <meta property='og:image' content='https://enernew.in/storage/images/Z7bbO5e1ajzLARBoZEuAYZq15HWYUFcJBpPbmEM6.webp' />
        <meta name='twitter:image' content='https://enernew.in/storage/images/Z7bbO5e1ajzLARBoZEuAYZq15HWYUFcJBpPbmEM6.webp' />
        @break
    @default        
@endswitch