<x-backend-layout>
    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <x-error :messages="$errors->get('error')" class="mt-2" />
                <x-success :messages="session('success')" class="mt-2" />
                <div class="cnt-bg tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="d-flex justify-content-between back-parent">
                            <a href="{{ route('banners.index') }}" class="back-btn cmn-btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> back
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <h2 class="tm-block-title d-inline-block">Edit Banner</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-md-12">
                            <form action="{{ route('banners.update', $banner) }}" method="post" class="tm-edit-product-form"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-3 w-50">
                                    <label for="sort_order" class="col-auto col-form-label">Sort Order</label>
                                    <div class="col">
                                        <input id="sort_order" name="sort_order" type="text" value="{{ $banner->sort_order }}"
                                            class="form-control" required />
                                    </div>
                                </div>

                                <!-- Title -->
                                <div class="form-group mb-3">
                                    <label for="title">Title<span class="text-danger">*</span>
                                    </label>
                                    <input id="title" name="title" type="text" class="form-control validate" value="{{ $banner->title }}" required />
                                </div>

                                <!-- Description -->
                                <div class="form-group mb-3">
                                    <label for="description">Description<span class="text-danger">*</span></label>
                                    <textarea class="form-control validate" name="description" rows="3" required>{{ $banner->description }}</textarea>
                                </div>

                                <div class="form-group mb-3 position-relative">
                                    <label for="image">Banner
                                    </label>
                                    <div class="tm-product-img-dummy mx-auto">
                                        <span onclick="resetImage();" class="image-close"><i
                                                class="fa text-danger fa-close "></i></span>
                                        <img id="preview" src="{{ asset('images/banner/'. $banner->image) }}" alt="your image" />
                                        <i class="fas fa-cloud-upload-alt tm-upload-icon" style="display: none"
                                            onclick="document.getElementById('fileInput').click();"></i>
                                    </div>
                                    <input id="fileInput" name="image" accept="image/*" type="file"
                                        style="display:none;" onchange="readURL(this);" />
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <button type="submit" class="btn btn-primary cmn-btn text-uppercase">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            $('#fileInput').attr('required',true);
            $('#preview').attr('src', '');
            $('.tm-upload-icon').show();
            $('#preview').addClass('no-display');
            $('.image-close').addClass('no-display');
        }
    </script>
</x-backend-layout>
