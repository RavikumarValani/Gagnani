<x-backend-layout>
    <x-error :messages="$errors->get('error')" class="mt-2" />
    <x-success :messages="session('success')" class="mt-2" />
    <div class="container mt-5">
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 tm-block-col">
                <div class="cnt-bg tm-block tm-block-products">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <h2 class="tm-block-title d-inline-block">Manage Banners</h2>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('banners.create') }}" class="btn btn-primary text-uppercase cmn-btn">Add new Banner</a>
                    </div>
                    <div class="tm-product-table-container">
                        <table class="table table-hover tm-table-small tm-product-table">
                            <thead>
                                <tr class="back-bg">
                                    <th scope="col">Title</th>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">SORT NO</th>
                                    <th scope="col">ADDED AT</th>
                                    <th scope="col">UPDATED AT</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $banner)
                                <tr class="back-bg">
                                    <td>{{ $banner->title }}</td>
                                    <td class="tm-product-name product-edit"><a href="{{ route('banners.edit', $banner) }}"><img width="130"  height="80" src="{{ asset('images/banner/'. $banner->image) }}"></a></td>
                                    <td>{{ $banner->sort_order }}</td>
                                    <td> {{ $banner->created_at }} </td>
                                    <td> {{ $banner->updated_at }} </td>
                                    <td>
                                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST">
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
