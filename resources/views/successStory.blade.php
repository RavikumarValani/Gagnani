<x-front-layout>
    <!-- breadcrums -->
    <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(images/footer_bg.png)">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="text-primary">SUCCESS STORY</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>SUCCESS STORY</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- success story -->
    <div class="section section-padding">
        <div class="container">
            <div class="row ">
                @foreach ($successStories as $successStory)
                <div class="col-md-6 col-12 mb-5">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <img src="{{ asset('images/successStory/'. $successStory->image) }}" alt="" class="img-fluid">
                        </div>
                        <div class="blog-content">
                            <h3>{{ $successStory->description }}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</x-front-layout>