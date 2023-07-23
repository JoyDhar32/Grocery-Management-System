<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block;
        }

        td,
        th {
            text-align: center;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home.index') }}" rel="nofollow">Home</a>
                    <span></span> Add New Category
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if (Session()->has('message'))
                            <div class="alert alert-success"> {{ Session::get('message') }}</div>
                        @endif

                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    All Products
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-info float-end" data-bs-toggle="modal"
                                        data-bs-target="#addProduct">
                                        Add Product
                                    </button>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>SKU</th>
                                        <th>Selling Price</th>
                                        <th>Old Price</th>
                                        <th>Stock</th>
                                        <th>Featured</th>
                                        <th>Popular</th>
                                        <th>Best Sell</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php $i=($categories->currentPage()-1)*$categories->perPage();  @endphp --}}
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="image product-thumbnail"><img src="{{asset('assets/imgs/shop') }}/{{ $product->images }}-1.jpg" alt="#"></td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->slug }}</td>
                                            <td>{{ $product->SKU }}</td>
                                            <td>{{ $product->regular_price }}$</td>
                                            <td>{{ $product->old_price }}$</td>
                                            <td>{{ $product->stock_status }}</td>
                                            <td>{{ $product->featured }}</td>
                                            <td>{{ $product->popular }}</td>
                                            <td>{{ $product->best_sell }}</td>
                                            <td>
                                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateCategory" wire:click.prevent="edit({{$category->id}})">Edit</button> --}}
                                                <button type="button" class="btn btn-danger btn-sm" wire:click.prevent="delete({{$product->id}})">X</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('livewire.admin.create-product');
        {{-- @include('livewire.admin.update-category'); --}}

    </main>
