<x-front-layout>
    <!-- breadcrums -->
    <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url(images/footer_bg.png)">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="text-primary">Contact Us</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- contact us -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-from-wrap">
                        <form id="contact-form" action="{{ route('sendMail') }}" method="post">
                            @csrf
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
                <div class="col-lg-6 col-md-6">
                    <div class="contact-info-wrap">
                        <div class="single-contact-info-wrap">
                            <div class="info-icon">
                                <i class="dlicon ui-1_home-51"></i>
                            </div>
                            <div class="info-content">
                                <h3 class="title">Head Office</h3>
                                <p class="width">307, 3rd floor, Sapphire Elegance complex, opp.khadims showroom, Waghavadi road, Bhavnagar - 364001, Gujarat, India.</p>
                            </div>
                        </div>
                        <div class="single-contact-info-wrap">
                            <div class="info-icon">
                                <i class="dlicon ui-2_phone"></i>
                            </div>
                            <div class="info-content">
                                <h3 class="title">Phone</h3>
                                <p>Mr. A A GAGNANI: <span><a href="tel:+91 92277 86787">+91 92277 86787</a></span></p>
                                <p>Mr. A N GAGNANI: <span><a href="tel:+91 92275 05350">+91 92275 05350></a></span></p>
                                <p>Mr. N A GAGNANI: <span><a href="tel:+91 92275 05550">+91 92275 05550</a></span></p>
                            </div>
                        </div>
                        <div class="single-contact-info-wrap">
                            <div class="info-icon">
                                <i class="dlicon ui-2_phone"></i>
                            </div>
                            <div class="info-content">
                                <h3 class="title">Senior Manager:</h3>
                                <p>Jignesh Maru : <span> <a href="tel:+91 92277 86787"> +91 70166 70071</a></span></p>
                            </div>
                        </div>
                        <div class="single-contact-info-wrap">
                            <div class="info-icon">
                                <i class="dlicon ui-1_email-85"></i>
                            </div>
                            <div class="info-content">
                                <h3 class="title">Email</h3>
                                <a href="mailto:credenceinational@gmail.com">infocredenceinational@gmail.com</a>
                                <a href="mailto:contact@gagnani.com">contact@gagnani.com</a>
                            </div>
                        </div>
                        <div class="single-contact-info-wrap">
                            <div class="info-icon">
                                <i class="dlicon ui-2_share"></i>
                            </div>
                            <div class="info-content">
                                <h3 class="title">Follow us</h3>
                                <div class="social-icon-style mt-4">
                                    <a class="facebook" href="https://www.facebook.com/profile.php?id=100003057155534"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="https://www.instagram.com/invites/contact/?i=2ht2ws8krw56&amp;utm_content=11pw5by"><i class="fa fa-instagram"></i></a>
                                    <a class="google-plus"href="https://youtu.be/R2prbXlE1HI"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="map mt-6 mt-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7410.556973781245!2d72.1425326323895!3d21.769480323147384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5bfdbe179327%3A0x15008a8c1956fcd2!2sNEOTECH%2C%20GAGNANI%20BUILDERS%2C%20NEHA%20CONSTRUCTION!5e0!3m2!1sen!2sin!4v1639997964489!5m2!1sen!2sin" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</x-front-layout>