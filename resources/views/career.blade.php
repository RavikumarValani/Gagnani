<x-front-layout>
    <!-- breadcrums -->
    <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(images/footer_bg.png)">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="text-primary">Career</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Career</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- contact us -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-12">
                    <div class="contact-from-wrap">
                        <div class="breadcrumb-content text-center">
                            <h4 class="text-dark">Rise with us!</h4>
                        </div>
                        <form id="contact-form" action="{{ route('sendMail') }}" method="post">
                            @csrf
                            <input hidden name="type" type="text" value="Career">
                            <input name="name" type="text" placeholder="Name">
                            <input name="email" type="email" placeholder="Email" required>
                            <input name="subject" type="text" placeholder="Subject" required>
                            <textarea name="message" placeholder="Your message" required></textarea>
                            <input class="submit" type="submit" value="Send Message">
                        </form>
                        <p class="form-messege">
                            <x-error :messages="$errors->get('error')" class="mt-2" />
                            <x-success :messages="session('success')" class="mt-2" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>