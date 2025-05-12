<x-backend-layout>
    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                
                <!-- Error & Success Messages -->
                <x-error :messages="$errors->get('error')" class="mt-2" />
                <x-success :messages="session('success')" class="mt-2" />

                <div class="cnt-bg tm-block tm-block-h-auto">
                    
                    <!-- Back Button -->
                    <div class="row">
                        <div class="d-flex justify-content-between back-parent">
                            <a href="{{ route('banners.index') }}" class="back-btn cmn-btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> back
                            </a>
                        </div>
                    </div>

                    <!-- Page Title -->
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <h2 class="tm-block-title d-inline-block">Add Banner</h2>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="row tm-edit-product-row">
                        <div class="col-md-12">
                            <form action="{{ route('banners.store') }}" method="post" class="tm-edit-product-form" 
                                enctype="multipart/form-data">
                                @csrf

                                <!-- Sort Order -->
                                <div class="form-group row mb-3 w-50">
                                    <label for="sort_order" class="col-auto col-form-label">Sort Order<span class="text-danger">*</span></label>
                                    <div class="col">
                                        <input id="sort_order" name="sort_order" type="text" class="form-control" required />
                                    </div>
                                </div>

                                <!-- Title -->
                                <div class="form-group mb-3">
                                    <label for="title">Title<span class="text-danger">*</span>
                                    </label>
                                    <input id="title" name="title" type="text" class="form-control validate"  required />
                                </div>

                                <!-- Description -->
                                <div class="form-group mb-3">
                                    <label for="description">Description<span class="text-danger">*</span></label>
                                    <textarea class="form-control validate" name="description" rows="3" required></textarea>
                                </div>

                                <!-- Banner Image Upload -->
                                <div class="form-group mb-3 position-relative">
                                    <label for="image">Banner<span class="text-danger">*</span></label>
                                    <div class="tm-product-img-dummy mx-auto">
                                        <span onclick="resetImage();" class="no-display image-close">
                                            <i class="fa text-danger fa-close"></i>
                                        </span>
                                        <i class="fas fa-cloud-upload-alt tm-upload-icon"
                                        onclick="document.getElementById('fileInput').click();"></i>
                                    </div>
                                    <input id="fileInput" name="image_temp" accept="image/*" type="file"
                                        style="display:none;" required />
                                    <input type="hidden" name="image" id="base64_image">
                                </div>
                                        <div id="preview"></div>


                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-left mt-3">
                                        <div id="submit" class="btn btn-primary cmn-btn text-uppercase">
                                            Submit
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Image Preview Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        var resize = $('#preview').croppie({
            enableExif: true,
            enableOrientation: true,    
            viewport: { // Default { width: 100, height: 100, type: 'square' } 
                width: 200,
                height: 200,
                type: 'square' //square
            },
            boundary: {
                width: 300,
                height: 300
            }
        });
        $('#submit').on('click', function () {
            resize.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (img) {
                console.log(img)
                $('#base64_image').val(img);
                $('.tm-edit-product-form').submit();
            });
        });

        $('#fileInput').on('change', function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                // reader.onload = function(e) {
                //     $('#preview').attr('src', e.target.result);
                // };
                $('.tm-upload-icon').hide();
                $('#preview').removeClass('no-display');
                $('.image-close').removeClass('no-display');
                reader.readAsDataURL(this.files[0]);
                var reader = new FileReader();
            
            reader.onload = function (e) {
                    console.log(e.target.result);
                    resize.croppie('bind',{
                        url: e.target.result
                    });
                }
                reader.readAsDataURL(this.files[0]);
            }
        })

        function resetImage() {
            $('#fileInput').val('');
            $('#preview').attr('src', '');
            $('.tm-upload-icon').show();
            $('#preview').addClass('no-display');
            $('.image-close').addClass('no-display');
        }
    });
    </script>

</x-backend-layout>
