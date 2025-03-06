<x-front-layout>
    @php
    $activeTab = request()->get('tab', 'neotech'); // Default to 'neotech' if no tab is provided
@endphp
    <!-- breadcrums -->
    <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url({{ asset('images/footer_bg.png') }})">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2 class="text-primary">Our Venture</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Our Venture</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- tabs -->
    <div class="section section-padding bg-img"  style="background-image:url({{ asset('images/bg-new.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-12"> 
                    <div class="card p-0 shadow our-venture-wrap rounded-10">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link {{$activeTab == 'neotech' ? 'active' : ''}} typing-effect" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><span class="fading">NEOTECH</span></button>
                                <button class="nav-link {{$activeTab == 'neha' ? 'active' : ''}} typing-effect" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><span class="fading">NEHA Construction</span></button>

                                <button class="nav-link {{$activeTab == 'trade' ? 'active' : ''}} typing-effect" id="nav-import-tab" data-bs-toggle="tab" data-bs-target="#nav-import" type="button" role="tab" aria-controls="nav-import" aria-selected="false"><span class="fading">Trade</span></button>
                            </div>
                        </nav>
                        <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                            <div class="tab-pane fade {{$activeTab == 'neotech' ? 'active' : ''}} show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="single-service-top p-3">
                                    <div class="single-service-image-box text-center">
                                        <img src="{{ asset('images/baner_neotech.jpg') }}" alt="NEOTECH Multicity Engineering Consultancy" class="img-fluid" style="height: 600px;">
                                    </div>
                                    <div class="text mt-4">
                                        <h2>NEOTECH Multicity Engineering Consultancy</h2>
                                        <div class="inner" style="text-align: justify;">
                                            <p>NEOTECH Multicity Engineering Consultancy Services Private Limited offers engineering design services for the built environment. Structural concepts developed by Multicity include a variety of Steel, Concrete and composite construction systems. Provides all types of land services within 200 KMS.
                                            </p>
                                            <p>Multicity Engineering Consultancy Services Private Limited offers engineering design services for the built environment. The practice gradually widened the scope of its activities to include large office complexes, industrial projects, apartment buildings and other civil engineering projects. Structural concepts developed by Multicity Engineering Consultancy include a variety of Steel, Concrete and composite construction systems. Such concepts have often established entirely new vocabularies in architectural and engineering solutions, which reflect state-of-the-art technology. The development of a new gearbox with higher power density, the improvement of an existing gas turbine to meet the market's increasing demands or the design of a completely new generation of wind turbines with higher kW-cost ratio. To run technical development projects successfully you often need different types of high-level knowledge, such as advanced calculation specialists and material experts.</p>
                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane {{$activeTab == 'neha' ? 'active' : ''}} fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="single-service-top  p-3">
                                    <div class="single-service-image-box text-center">
                                       <img src="{{ asset('images/baner_nehacon.jpg') }}" alt="NEHA Construction" class="img-fluid"  style="height: 600px;">
                                    </div>
                                    <div class="text mt-4">
                                        <h2>NEHA Construction</h2>
                                        <div class="inner" style="text-align: justify;">
                                            <p>We have regularly involved with construction-related services. Our work includes a Wide Variety projects, including commercial, Residential and industrial buildings. We provide all type of planning, designing, building 3-D elevation, Structure designing, interior designing, architectural designing, furniture designing.</p>
                                            <p>Our innovative house designs are result of expert, creative mind and best technology available. You can find the uniqueness and creativity in our innovative home designs. When we are designing of a house plan, we emphasize on every need and comfort as we designed like we are going to live in this house. Our goal is to make the process of finding your dream house simple, quick, and enjoyable.</p>
                                   <p>NEHA Construction provides all kind of 3-D elevation house. You can get best house design elevation here. NEHA Construction is the easiest and best-looking way to create and share interactive floor plans and online. Neha view Construction is an ultimate destination for all kinds of 3D Elevation. NEHA Construction proudly presents to you the most for excellent services elevations.</p>
                                      <p>NEHA Construction dealing in Interior Designing in Bhavnagar. We can give your home well sounded magnificence in respect of works and living comfort. Interior designing is structuring, furnishing and arranging, decorating home in such a way it naturally offers you that lavishness, spacious, comforting, luxurious ease. We believed in creativity and quality.</p>
                                        </div>
                                    </div>
                                       <div class="text">
                                        <h3>Gagnani Builders &amp; Land Developers</h3>
                                        <div class="inner" style="text-align: justify;">
                                            <p>We have emerged as one of the most reputed organizations most engaged in Bhavnagar to offering our clients with the Land Development Service and Investor related services.
                                            </p>
                                            <p>We have emerged as one of the most reputed organizations engaged in offering our clients with the Land Developer Services. Our highly competent and experienced team of professionals, continuously help our clients in selecting the best and appropriate place in terms of its location, transportation facilities, work place and other relevant amenities. These services are offered to our clients by our experienced team of professionals, who assure the materials being used in the before development process, providing them to the clients.</p>
                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="tab-pane {{$activeTab == 'trade' ? 'active' : ''}} fade" id="nav-import" role="tabpanel" aria-labelledby="nav-import-tab">
                                <div class="single-service-top  p-3">
                                    <div class="single-service-image-box text-center">
                                        <img src="{{ asset('images/baner_credence.jpg') }}" alt="CREDENCE International Imports / Exports" class="img-fluid" style="height: 600px;">
                                    </div>
                                    <div class="text mt-4">
                                        <h2>Credence International Import &amp; Export</h2>
                                        <div class="inner" style="text-align: justify;">
                                            <p>We Import / Export all Types of Agricultural Processed Food &amp; Edible Product, Marine Product Shellac Product, Cashew Product, Plastic Product, Leather Product, Textile Product, Handicraft Product, Footwear Products, Cabus Products, Sports &amp; Engineering Product, Chemicals, Alled &amp; Cosmetic Product.</p>
                                            <p>Our company executes services at par with international standards. We deal in distributing products based on ‘Best value for money” basis. We are one of the most recognized export companies to export and import all over the globe.</p>
                                   <p>Our organization strives to achieve the confidence of our buyers, by providing them the quality products at ‘cost-benefit’ basis. Our policy is to get complete satisfaction of customers.</p>
                                      <p>We believe in serving customers in the best possible manner. Shipment of quality products is our specialty. With efficient and timely services, we emerge out as the most dependable business partners in this competitive world.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>