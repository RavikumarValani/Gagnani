<x-backend-layout>
    <x-error :messages="$errors->get('error')" class="mt-2" />
    <x-success :messages="session('success')" class="mt-2" />
    <div class="container mt-5">
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 tm-block-col">
                <div class="cnt-bg tm-block tm-block-products">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <h2 class="tm-block-title d-inline-block">Manage Gallery Images</h2>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('gallery.create') }}" class="btn btn-primary text-uppercase cmn-btn">Add
                            Gallery Image</a>
                    </div>
                    <form method="GET" action="{{ route('gallery.index') }}">
                        <label class="text-white" for="type">Filter:</label>
                        <select name="type" id="type" onchange="this.form.submit()"
                            class="filter-select form-select shadow-sm rounded-pill mb-1 text-uppercase w-25 ">
                            <option value="" {{ request('type') == '' ? 'selected' : '' }}>All</option>
                            <option value="3d-elevation" {{ request('type') == '3d-elevation' ? 'selected' : '' }}>3D
                                Elevation</option>
                            <option value="interior-design"
                                {{ request('type') == 'interior-design' ? 'selected' : '' }}>INTERIOR DESIGN</option>
                            <option value="live-site-photos"
                                {{ request('type') == 'live-site-photos' ? 'selected' : '' }}>LIVE SITE PHOTOS</option>
                            <option value="trade"
                                {{ request('type') == 'trade' ? 'selected' : '' }}>TRADE</option>
                        </select>
                    </form>
                    <div class="tm-product-table-container">
                        <table class="table table-hover tm-table-small tm-product-table">
                            <thead>
                                <tr class="back-bg">
                                    <th scope="col">Type</th>
                                    <th scope="col">SORT ORDER</th>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">ADDED AT</th>
                                    <th scope="col">UPDATED AT</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                    <tr class="back-bg">
                                        <td>{{ $gallery->type }}</td>
                                        <td>{{ $gallery->sort_order }}</td>
                                        <td class="tm-product-name product-edit"><a
                                                href="{{ route('gallery.edit', $gallery) }}"><img width="130"
                                                    height="80"
                                                    src="{{ asset('images/gallery/' . $gallery->image) }}"></a></td>
                                        <td> {{ $gallery->created_at }} </td>
                                        <td> {{ $gallery->updated_at }} </td>
                                        <td>
                                            <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="tm-product-delete-link">
                                                    <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend-layout>
