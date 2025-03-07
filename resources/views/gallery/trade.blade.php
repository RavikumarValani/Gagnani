<x-front-layout>
    <!-- breadcrums -->
    <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url({{ asset('images/footer_bg.png') }})">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="text-primary">Gallery</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Project area -->
    <div class="section section-padding">
        <div class="container">
            <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
                <h2 class="title"><span> TRADE</span></h2>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6 grid">
                @foreach ($galleries as $gallery)
                <div class="col mb-6 grid-item">
                    <div class="project-wrap">
                        <div class="project-inner">
                            <a class="img-zoom" href="{{ asset('images/gallery/'. $gallery->image) }}"><i class="dlicon arrows-1_zoom-88"></i></a>
                            <a class="thumbnail" href="project-details.html">
                                <img src="{{ asset('images/gallery/'. $gallery->image) }}" alt="{{$gallery->description}}">
                            </a>
                            <div class="project-content">
                                <span class="category"><a href="#">{{$gallery->description}}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-front-layout>