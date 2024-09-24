<div>
    <!-- HERO -->
    <div class="grax_tm_hero" id="home">
        <div class="ripple" id="ripple"></div>
        <div class=" container water">
            <div class="details" data-animation="toRight">
                <!-- Animation Values: toTop, toRight, scale, rotate -->
                <h3 class="fn_animation name">{{ $setting->title }}</h3>
                <span class="fn_animation job">{{ $setting->subtitle }}</span>
            </div>
            <div class="grax_tm_down" data-skin="light">
                <div class="line_wrapper">
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /HERO -->

    <!-- ABOUT -->
    <div class="grax_tm_section" id="about">
        <div class="grax_tm_about">
            <div class="container">
                <div class="about_inner">
                    <div class="left wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="image parallax" data-relative-input="true">
                            <img src="{{ url($profile->avatar) }}" alt="" />
                            <div class="main layer" data-img-url="{{ url($profile->avatar) }}" data-depth="0.04"></div>
                        </div>
                    </div>
                    <div class="right wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="grax_tm_title_holder">
                            <h3>About <span>Me</span></h3>
                        </div>
                        <div class="text">
                            <p>{!! $profile->bio !!}</p>
                        </div>
                        <div class="list">
                            <ul>
                                @foreach ($skills as $skill)
                                <li>
                                    <div class="list_inner">
                                        <img class="svg" src="{{ asset('frontend/img/svg/checked.svg') }}" alt="" />
                                        <span>{{ $skill->name }}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="grax_tm_button">
                            <a href="{{ $setting->cv }}" download>Download CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /ABOUT -->

    <!-- PROGRESS -->
    <div class="grax_tm_progress_part">
        <div class="container">
            <div class="part_inner">
                <div class="left wow fadeInLeft" data-wow-duration="1.5s">
                    <h3>I have high skills in developing and programming</h3>
                    <p>I was doing everything in my power to provide me with all the experiences to provide
                        cost-effective and high quality products to satisfy my customers all over the world</p>
                </div>
                <div class="right wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">
                    <div class="kioto_progress">
                        <div class="progress_inner" data-value="90">
                            <span><span class="label">Mobile Development</span><span class="number">90%</span></span>
                            <div class="background">
                                <div class="bar">
                                    <div class="bar_in"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress_inner" data-value="85">
                            <span><span class="label">Web Development</span><span class="number">85%</span></span>
                            <div class="background">
                                <div class="bar">
                                    <div class="bar_in"></div>
                                </div>
                            </div>
                        </div>
                        <div class="progress_inner" data-value="90">
                            <span><span class="label">UI/UX Design</span><span class="number">90%</span></span>
                            <div class="background">
                                <div class="bar">
                                    <div class="bar_in"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /PROGRESS -->

    <!-- TALK -->
    <div class="grax_tm_section">
        <div class="grax_tm_talk">
            <div class="container">
                <div class="talk_inner">
                    <div class="text wow fadeInLeft" data-wow-duration="1.5s">
                        <h3><span>I'm available for freelance work</span></h3>
                    </div>
                    <div class="button wow fadeInLeft anchor" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <a href="#contact">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /TALK -->

    <!-- NEWS -->
    <div class="grax_tm_section" id="portfolio">
        <div class="grax_tm_news">
            <div class="container">
                <div class="grax_tm_title_holder">
                    <h3>My <span>Portofolio</span></h3>
                </div>
                <div class="news_list">
                    <ul>
                        @foreach ($projects as $project)
                        <li class="wow fadeInLeft" data-wow-duration="1.5s">
                            <div class="list_inner">
                                <div class="image">
                                    <img src="{{ asset('frontend/img/placeholders/4-3.jpg') }}" alt="" />
                                    <div class="main" data-img-url="{{ url($project->icon) }}"></div>
                                    <a class="grax_tm_full_link" href="#"></a>
                                </div>
                                <div class="details">
                                    <h3 class="title"><a href="#">{{ $project->name }}</a></h3>
                                    <p class="date"><a href="#">{{ $project->category->name }}</a> <span>{{
                                            $project->created_at->format('d M Y')
                                            }}</span></p>
                                </div>
                                <div class="description">
                                    {!! $project->description !!}
                                    <div class="share">
                                        <span>Share:</span>
                                        <ul class="social">
                                            <li><a href="#"><img class="svg"
                                                        src="{{ asset('frontend/img/svg/social/facebook.svg') }}"
                                                        alt=""></a></li>
                                            <li><a href="#"><img class="svg"
                                                        src="{{ asset('frontend/img/svg/social/twitter.svg') }}"
                                                        alt=""></a></li>
                                            <li><a href="#"><img class="svg"
                                                        src="{{ asset('frontend/img/svg/social/behance.svg') }}"
                                                        alt=""></a></li>
                                            <li><a href="#"><img class="svg"
                                                        src="{{ asset('frontend/img/svg/social/dribbble.svg') }}"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /NEWS -->

    <!-- CONTACT -->
    <div class="grax_tm_contact" id="contact">
        <div class="container">
            <div class="grax_tm_title_holder">
                <h3>Get in <span>Touch</span></h3>
            </div>
            <div class="contact_inner">
                <div class="left wow fadeInLeft" data-wow-duration="1s">
                    <div class="text">
                        <p>Please fill out the form on this section to contact with me. Or call between 9:00 a.m.
                            and 8:00 p.m. ET, Monday through Friday</p>
                    </div>
                    <div class="info_list">
                        <ul>
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="{{ asset('frontend/img/svg/location.svg') }}" alt="" />
                                    <p><span class="first">Address:</span><span class="second">{{ $profile->address
                                            }}</span></p>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="{{ asset('frontend/img/svg/email.svg') }}" alt="" />
                                    <p><span class="first">Email:</span><span class="second"><a href="#">{{
                                                Auth::user()->email }}</a></span></p>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="{{ asset('frontend/img/svg/phone.svg') }}" alt="" />
                                    <p><span class="first">Phone:</span><span class="second"><a href="#">{{
                                                $profile->phone }}</a></span></p>
                                </div>
                            </li>
                            @foreach ($medias as $media)
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="{{ url($media->icon) }}" alt="" />
                                    <p><span class="first">{{ $media->name }}:</span><span class="second"><a href="{{
                                        $media->url }}">{{ Str::afterLast($media->url, '/') }}</a></span></p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="right wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="fields">
                        {{-- buatkan saya alert --}}
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        <form class="contact_form" id="contact_form">
                            <div class="returnmessage"
                                data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                            <div class="first">
                                <ul>
                                    <li>
                                        <input wire:model='name' id="name" type="text" placeholder="Name">
                                    </li>
                                    <li>
                                        <input wire:model='email' id="email" type="text" placeholder="Email">
                                    </li>
                                    <li>
                                        <input wire:model='phone' id="phone" type="number" placeholder="Whatsapp">
                                    </li>
                                </ul>
                            </div>
                            <div class="last">
                                <textarea wire:model='message' id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="grax_tm_button">
                                <a id="send_message" href="#" wire:click='createContact'>Send Message</a>
                            </div>

                            <!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /CONTACT -->
</div>