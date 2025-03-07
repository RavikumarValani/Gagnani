<x-front-layout>
    <!-- breadcrums -->
    <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(images/footer_bg.png)">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="text-primary">About Us</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About area -->
    <div class="section section-padding">
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-1 mb-n6">
                <div class="col align-self-center mb-6">
                    <div class="about-content">
                        <h2 class="title">Welcome to <span class="text-primary">Gagnani Ventures Private Limited</span>
                        </h2>
                        <p>With a legacy of trust spanning decades, we at Gagnani Ventures are driven by our passion for
                            top-notch global standards. We cater end-to-end solutions to your architectural problems.
                            And go to lengths, from carefully restoring to creating world-class homes, offices and
                            workspaces. And from sourcing brilliant workmanship to designing the finest interiors to
                            securing home loans.</p>
                        <p>Our iconic developments provide comfort, peace and unparalleled amenities. We build
                            state-of-the-art infrastructure to have that sense of belonging and celebrate life’s finest
                            moments.</p>
                        <p>Our repertoire of award-winning work across India speaks volumes of our business reliability
                            and trust.</p>
                        <p>We have designed the skylines in Bhavnagar, landmark developments in Ahmedabad, and other
                            architectural solutions pan-India.</p>
                    </div>
                    <!-- <div class="working-away-wrap">
                        <div class="working-away">
                            <div class="working-away-icon">
                                <i class="dlicon ui-1_home-51"></i>
                            </div>
                            <div class="working-content">
                                <h3 class="title">Qualified Planning</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                            </div>
                        </div>
                        <div class="working-away">
                            <div class="working-away-icon">
                                <i class="dlicon design_measure-big"></i>
                            </div>
                            <div class="working-content">
                                <h3 class="title">Professional Design</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                            </div>
                        </div>
                    </div> -->

                </div>
                <div class="col mb-6">
                    <div class="about-banner">
                        <img src="images/banner/banner-2.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Funfact area -->
    <div class="section section-padding bg-img overly-style-1 opacity-point-7"
        style="background-image:url(images/bg/bg-1.jpg)">
        <div class="container">
            <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                <div class="col mb-8">
                    <div class="funfact-2 text-center">
                        <i class="dlicon travel_bag"></i>
                        <span class="odometer count-style-2" data-count-to="1995"></span>
                        <h4 class="title">Journey Started</h4>
                    </div>
                </div>
                <div class="col mb-8">
                    <div class="funfact-2 text-center">
                        <i class="dlicon users_man-23"></i>
                        <span class="odometer count-style-2" data-count-to="960"></span>
                        <h4 class="title">Projects Completed</h4>
                    </div>
                </div>
                <div class="col mb-8">
                    <div class="funfact-2 text-center">
                        <i class="dlicon emoticons_smile"></i>
                        <span class="odometer count-style-2" data-count-to="477"></span>
                        <h4 class="title">Team Apointed</h4>
                    </div>
                </div>
                <div class="col mb-8">
                    <div class="funfact-2 text-center">
                        <i class="dlicon tech-2_firewall"></i>
                        <span class="odometer count-style-2" data-count-to="820"></span>
                        <h4 class="title">5 Star Ratings</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team  area -->
    <div class="section section-padding">
        <div class="container">
            <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
                <h2 class="title">Our <span>Team</span></h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text.</p>
            </div>
            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n8">
                @foreach ($members as $key => $member)
                <div class="col mb-6">
                    <div class="team-wrap">
                        <a href="#team-popup-{{$key}}" class="open-popup-link">
                            <div class="team-top mb-4">
                                <img src="{{ asset('images/ourTeam/'. $member->image) }}" alt="{{ $member->name }}">
                                <div class="team-top-content">
                                    <h4 class="name">{{ $member->name }}</h4>
                                    <span class="profession">{{ $member->position }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="team-bottom">
                            <div class="team-bottom-content">
                                <h4 class="name">{{ $member->name }}</h4>
                                <span class="profession">{{ $member->position }}</span>
                            </div>
                            <div class="team-social">
                                <a href="{{ $member->facebook }}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ $member->twitter }}"><i class="fa fa-twitter"></i></a>
                                <a href="{{ $member->google }}"><i class="fa fa-google-plus"></i></a>
                                <a href="{{ $member->linkedin }}"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="team-popup-{{$key}}" class="mfp-hide team-popup">
                    <img src="{{ asset('images/ourTeam/'. $member->image) }}" alt="team">
                    <h2>{{ $member->name }}</h2>
                    <p class="profession">{{ $member->position }}</p>
                    <p>{{ $member->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-front-layout>
