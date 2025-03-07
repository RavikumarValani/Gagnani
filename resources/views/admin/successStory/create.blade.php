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
                            <a href="{{ route('successStory.index') }}" class="back-btn cmn-btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> back
                            </a>
                        </div>
                    </div>

                    <!-- Page Title -->
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <h2 class="tm-block-title d-inline-block">Add Success Story</h2>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="row tm-edit-product-row">
                        <div class="col-md-12">
                            <form action="{{ route('successStory.store') }}" method="post" class="tm-edit-product-form"
                                enctype="multipart/form-data">
                                @csrf

                                <!-- Sort Order -->
                                <div class="form-group row mb-3 w-50">
                                    <label for="sort_order" class="col-auto col-form-label">Sort Order<span class="text-danger">*</span></label>
                                    <div class="col">
                                        <input id="sort_order" name="sort_order" type="text" class="form-control" required />
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="form-group mb-3">
                                    <label for="description">Description<span class="text-danger">*</span></label>
                                    <textarea class="form-control validate" name="description" rows="3" required></textarea>
                                </div>

                                <!-- Banner Image Upload -->
                                <div class="form-group mb-3 position-relative">
                                    <label for="image">Image<span class="text-danger">*</span></label>
                                    <div class="tm-product-img-dummy mx-auto">
                                        <span onclick="resetImage();" class="no-display image-close">
                                            <i class="fa text-danger fa-close"></i>
                                        </span>
                                        <img id="preview" class="no-display" alt="your image" />
                                        <i class="fas fa-cloud-upload-alt tm-upload-icon"
                                            onclick="document.getElementById('fileInput').click();"></i>
                                    </div>
                                    <input id="fileInput" name="image" accept="image/*" type="file"
                                        style="display:none;" onchange="readURL(this);" required />
                                </div>

                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <button type="submit" class="btn btn-primary cmn-btn text-uppercase">
                                            Submit
                                        </button>
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                    $('.tm-upload-icon').hide();
                    $('#preview').removeClass('no-display');
                    $('.image-close').removeClass('no-display');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function resetImage() {
            $('#fileInput').val('');
            $('#preview').attr('src', '');
            $('.tm-upload-icon').show();
            $('#preview').addClass('no-display');
            $('.image-close').addClass('no-display');
        }
    </script>

</x-backend-layout>
