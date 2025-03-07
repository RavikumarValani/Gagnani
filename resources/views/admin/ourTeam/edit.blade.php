<x-backend-layout>
    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <x-error :messages="$errors->get('error')" class="mt-2" />
                <x-success :messages="session('success')" class="mt-2" />
                <div class="cnt-bg tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="d-flex justify-content-between back-parent">
                            <a href="{{ route('ourTeam.index') }}" class="back-btn cmn-btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> back
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <h2 class="tm-block-title d-inline-block">Edit Member Deatils</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-md-12">
                            <form action="{{ route('ourTeam.update', $ourTeam) }}" method="post" class="tm-edit-product-form"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- Sort Order -->
                                <div class="form-group row mb-3 w-50">
                                    <label for="sort_order" class="col-auto col-form-label">Sort Order<span class="text-danger">*</span></label>
                                    <div class="col">
                                        <input id="sort_order" value="{{ $ourTeam->sort_order }}" name="sort_order" type="text" class="form-control" required />
                                    </div>
                                </div>

                                <!-- Title -->
                                <div class="form-group mb-3">
                                    <label for="name">name<span class="text-danger">*</span>
                                    </label>
                                    <input id="name" name="name" type="text" class="form-control validate" value="{{ $ourTeam->name }}"  required />
                                </div>

                                <!-- Position -->
                                <div class="form-group mb-3">
                                    <label for="position">Position<span class="text-danger">*</span>
                                    </label>
                                    <input id="position" name="position" type="text" class="form-control validate" value="{{ $ourTeam->position }}"  required />
                                </div>

                                <!-- Description -->
                                <div class="form-group mb-3">
                                    <label for="description">Description<span class="text-danger">*</span></label>
                                    <textarea class="form-control validate" name="description" rows="3" required>{{ $ourTeam->description }}</textarea>
                                </div>

                                <!-- Social Media URLs -->
                                <div class="form-group mb-3">
                                    <label for="google">Google Profile URL</label>
                                    <input id="google" name="google" type="url" value="{{ $ourTeam->google }}" class="form-control" placeholder="https://google.com/" />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="linkedin">LinkedIn Profile URL</label>
                                    <input id="linkedin" name="linkedin" value="{{ $ourTeam->linkedin }}" type="url" class="form-control" placeholder="https://linkedin.com/in/" />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="facebook">Facebook Profile URL</label>
                                    <input id="facebook" name="facebook" value="{{ $ourTeam->facebook }}" type="url" class="form-control" placeholder="https://facebook.com/" />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="twitter">Twitter Profile URL</label>
                                    <input id="twitter" name="twitter" value="{{ $ourTeam->twitter }}" type="url" class="form-control" placeholder="https://twitter.com/" />
                                </div>

                                <div class="form-group mb-3 position-relative">
                                    <label for="image">Image
                                    </label>
                                    <div class="tm-product-img-dummy mx-auto">
                                        <span onclick="resetImage();" class="image-close"><i
                                                class="fa text-danger fa-close "></i></span>
                                        <img id="preview" src="{{ asset('images/ourTeam/'. $ourTeam->image) }}" alt="your image" />
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
