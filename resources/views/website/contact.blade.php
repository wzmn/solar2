@section("title", "Contact Us – Get in Touch with Enernew")
@extends("layouts.website")


@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
    <h1 class="text-white">Contact Us</h1>
    <div class="hero__content text-white mb-3">
        Home > Contact Us
    </div>
</div>
@endsection

@section("content")
<div class="bg-peach">
    <div class="container py-5">
        <div class="my-5">
            <br>
        </div>
    </div>
</div>
<div style="background-image: url('{{ asset('assets/images/contact-us-map-new.png') }}');    background-size: cover;background-position: 100% 100px;">
    <div class="container py-5">
        <div class="contact my-5 py-5">
            <div class="contact__info bg-white p-5 rounded-3">
                <div class="contact-us-grid">
                    @foreach ($seo->blocks as $item)
                        @if ($item->type === 'Content')
                        <?php $data = json_decode($item->data);?>
                            <div class="p-5">
                                <div class="contact__info_block d-flex gap-3 align-items-center">
                                    <img src="{{ $data[0]->content }}" alt="Office Location Icon">
                                    <div>
                                       {!! $data[1]->content !!}
                                    </div>
                                </div>
                            </div>
                            
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-image: url('{{ asset('assets/images/7.png') }}');    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contact__grid">
                    <div class="contact__grid_item contact__grid_item--2"
                        style="background-image: url('{{ asset('assets/images/contact-grid-image.png') }}');height: 100%;background-size: cover;">

                    </div>
                    <div class="contact__grid_item"
                        style="background-image: url('{{ asset('assets/images/contact-grid-section-bg.png') }}');height: 100%;background-size: cover;">
                        <div class="fs-1">Sales Enquiry</div>
                        <div>Connect to our sales times to discuss your clean energy project</div>
                        <a href="#contact" data-click-target="#pills-sales" class="btn bg-orange">Connect Sales Team</a>
                    </div>
                    <div class="contact__grid_item"
                        style="background-image: url('{{ asset('assets/images/contact-grid-section-bg.png') }}');height: 100%;background-size: cover;">
                        <div>
                            <img src="{{ asset('assets/images/icon-careers.png') }}" alt="Careers at Enernew">
                            <div class="fs-4 mb-3">
                                Careers at Enernew
                            </div>
                            <div class="mb-4">
                                Join team Enernew and make your power move.
                            </div>
                        </div>
                        <div>
                            <a href="/job-openings" class="btn bg-orange">Current Opportunities</a>
                        </div>
                    </div>
                    <div class="contact__grid_item"
                        style="background-image: url('{{ asset('assets/images/contact-grid-section-bg.png') }}');height: 100%;background-size: cover;">
                        <div>
                            <img src="{{ asset('assets/images/icon-partner.png') }}" alt="Become a Channel Partner">

                            <div class="fs-4 mb-3">
                                Become a Channel Partner
                            </div>

                            <div class="mb-4">
                                For becoming a channel partner, get in touch with us.
                            </div>
                        </div>
                        <div>
                            <a href="#contact" data-click-target="#pills-channel" class="btn bg-orange">Channel Partner</a>
                        </div>
                    </div>
                    <div class="contact__grid_item"
                        style="background-image: url('{{ asset('assets/images/contact-grid-section-bg.png') }}');height: 100%;background-size: cover;">
                        <div>
                            <img src="{{ asset('assets/images/icon-news.png') }}" alt="News, Media and Press Inquiries">

                            <div class="fs-4 mb-3">
                                Media & Press Inquiries
                            </div>

                            <div class="mb-4">
                                For media inquiries or press-related matters, please contact our press team for more information.
                            </div>
                        </div>
                        <div>
                            <a href="#contact" data-click-target="#pills-media" class="btn bg-orange">Contact Press & Media</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background-image: url('{{ asset('assets/images/4.png') }}');padding-bottom: 1px;background-size: cover;" id="contact">
    <div class="container mb-100 solutions" data-aos="fade-up">
        <div class="row" data-aos="fade-up">
            <div class="col">
                <h2 class="text-center mt-5 mb-5 highlight highlight--center">Reach out to get a free quote</h2>
            </div>
        </div>
        <div class="row bg-white pt-5 rounded">
            <div class="col">
                <ul class="nav nav-pills flex-column flex-md-row mb-3 gap-2 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btn btn--green active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">General enquiry</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn--green" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-sales" type="button" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Sales enquiry</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn--green" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-supplier" type="button" role="tab"
                            aria-controls="pills-contact" aria-selected="false">Supplier enquiry</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn--green" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-channel" type="button" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Channel enquiry</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn--green" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-media" type="button" role="tab"
                            aria-controls="pills-contact" aria-selected="false">Media enquiry</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row bg-white p-5 rounded mb-5">
            <div class="col mb-5 col-md-12">

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <form class="lets_talk__form" name="General Enquiry">
                            <div>* represents mandatory fields</div>
                            <div class="d-grid lets_talk__form_input_group mb-3">
                                @csrf
                                <input type="hidden" name="reason" value="General Enquiry">
                                <label for="name">
                                    <input type="text" placeholder="First Name*" name="name" id="name" required>
                                </label>
                                <label for="LastName">
                                    <input type="text" placeholder="Last Name*" name="LastName" id="LastName" required>
                                </label>
                                <label for="email">
                                    <input name="email" id="email" type="email" placeholder="Email Address*" required>
                                </label>
                                <label for="phone">
                                    <input name="phone" id="phone" type="phone" placeholder="Phone No.*" required>
                                </label>
                                <label for="zip">
                                    <input name="zip" autocomplete="off" id="zip" type="zip" placeholder="Zipcode/Pincode*" required>
                                </label>
                                <label for="city">
                                    <input name="city" id="city" type="text" placeholder="City*" required>
                                </label>
                                <label for="state">
                                    <input name="state" id="state" type="text" placeholder="State*" required>
                                </label>
                                <label for="country">
                                    <input name="country" id="country" type="text" placeholder="Country*" required>
                                </label>
                                <textarea name="message" id="message" id="" placeholder="Your Message" rows="30"></textarea>
                                <div class="message_box"></div>
                            </div>
                            <button type="submit" class="btn btn--orange">Send Message</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-sales" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <form class="lets_talk__form" name="Sales Enquiry">
                            <div>* represents mandatory fields</div>
                            <div class="d-grid lets_talk__form_input_group mb-3">
                                @csrf
                                <input type="hidden" name="reason" value="Sales Enquiry">

                                <label for="name">
                                    <input type="text" placeholder="First Name*" name="name" id="name" required>
                                </label>
                                <label for="LastName">
                                    <input type="text" placeholder="Last Name*" name="LastName" id="LastName" required>
                                </label>
                                <label for="email">
                                    <input name="email" id="email" type="email" placeholder="Email Address*" required>
                                </label>
                                <label for="phone">
                                    <input name="phone" id="phone" type="phone" placeholder="Phone No.*" required>
                                </label>
                                <label for="zip">
                                    <input name="zip" autocomplete="off" id="zip" type="zip" placeholder="Zipcode/Pincode*" required>
                                </label>
                                <label for="city">
                                    <input name="city" id="city" type="text" placeholder="City*" required>
                                </label>
                                <label for="state">
                                    <input name="state" id="state" type="text" placeholder="State*" required>
                                </label>
                                <label for="country">
                                    <input name="country" id="country" type="text" placeholder="Country*" required>
                                </label>
                                <textarea name="message" id="message" id="" placeholder="Your Message" rows="30"></textarea>
                                <div class="message_box"></div>
                            </div>
                            <button type="submit" class="btn btn--orange">Send Message</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-supplier" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <form class="lets_talk__form" name="Supplier Enquiry">
                            <div>* represents mandatory fields</div>
                            <div class="d-grid lets_talk__form_input_group mb-3">
                                @csrf
                                <input type="hidden" name="reason" value="Supplier Enquiry">

                                <label for="name">
                                    <input type="text" placeholder="First Name*" name="name" id="name" required>
                                </label>
                                <label for="LastName">
                                    <input type="text" placeholder="Last Name*" name="LastName" id="LastName" required>
                                </label>
                                <label for="email">
                                    <input name="email" id="email" type="email" placeholder="Email Address*" required>
                                </label>
                                <label for="phone">
                                    <input name="phone" id="phone" type="phone" placeholder="Phone No.*" required>
                                </label>
                                <label for="zip">
                                    <input name="zip" autocomplete="off" id="zip" type="zip" placeholder="Zipcode/Pincode*" required>
                                </label>
                                <label for="city">
                                    <input name="city" id="city" type="text" placeholder="City*" required>
                                </label>
                                <label for="state">
                                    <input name="state" id="state" type="text" placeholder="State*" required>
                                </label>
                                <label for="country">
                                    <input name="country" id="country" type="text" placeholder="Country*" required>
                                </label>
                                <textarea name="message" id="message" id="" placeholder="Your Message" rows="30"></textarea>
                                <div class="message_box"></div>
                            </div>
                            <button type="submit" class="btn btn--orange">Send Message</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-channel" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <form class="lets_talk__form" name="Channel Enquiry">
                            <div>* represents mandatory fields</div>
                            <div class="d-grid lets_talk__form_input_group mb-3">
                                @csrf
                                <input type="hidden" name="reason" value="Channel Enquiry">

                                <label for="name">
                                    <input type="text" placeholder="First Name*" name="name" id="name" required>
                                </label>
                                <label for="LastName">
                                    <input type="text" placeholder="Last Name*" name="LastName" id="LastName" required>
                                </label>
                                <label for="email">
                                    <input name="email" id="email" type="email" placeholder="Email Address*" required>
                                </label>
                                <label for="phone">
                                    <input name="phone" id="phone" type="phone" placeholder="Phone No.*" required>
                                </label>
                                <label for="zip">
                                    <input name="zip" autocomplete="off" id="zip" type="zip" placeholder="Zipcode/Pincode*" required>
                                </label>
                                <label for="city">
                                    <input name="city" id="city" type="text" placeholder="City*" required>
                                </label>
                                <label for="state">
                                    <input name="state" id="state" type="text" placeholder="State*" required>
                                </label>
                                <label for="country">
                                    <input name="country" id="country" type="text" placeholder="Country*" required>
                                </label>
                                <textarea name="message" id="message" id="" placeholder="Your Message" rows="30"></textarea>
                                <div class="message_box"></div>
                            </div>
                            <button type="submit" class="btn btn--orange">Send Message</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-media" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        <form class="lets_talk__form" name="Media Enquiry">
                            <div>* represents mandatory fields</div>
                            <div class="d-grid lets_talk__form_input_group mb-3">
                                @csrf
                                <input type="hidden" name="reason" value="Media Enquiry">

                                <label for="name">
                                    <input type="text" placeholder="First Name*" name="name" id="name" required>
                                </label>
                                <label for="LastName">
                                    <input type="text" placeholder="Last Name*" name="LastName" id="LastName" required>
                                </label>
                                <label for="email">
                                    <input name="email" id="email" type="email" placeholder="Email Address*" required>
                                </label>
                                <label for="phone">
                                    <input name="phone" id="phone" type="phone" placeholder="Phone No.*" required>
                                </label>
                                <label for="zip">
                                    <input name="zip" autocomplete="off" id="zip" type="zip" placeholder="Zipcode/Pincode*" required>
                                </label>
                                <label for="city">
                                    <input name="city" id="city" type="text" placeholder="City*" required>
                                </label>
                                <label for="state">
                                    <input name="state" id="state" type="text" placeholder="State*" required>
                                </label>
                                <label for="country">
                                    <input name="country" id="country" type="text" placeholder="Country*" required>
                                </label>
                                <textarea name="message" id="message" id="" placeholder="Your Message" rows="30"></textarea>
                                <div class="message_box"></div>
                            </div>
                            <button type="submit" class="btn btn--orange">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        [...document.querySelectorAll('[data-click-target]')].map(s=>{
            s.addEventListener('click', e => {
                document.querySelector(`[data-bs-target='${e.target.getAttribute('data-click-target')}']`).click()
            })
        })
    })
</script>
@endsection