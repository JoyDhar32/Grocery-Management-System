
<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block;
        }
        .btn_approve:hover {
            font-weight: bold;
            cursor: pointer;
        }

        .btn_reject:hover {
            font-weight: bold;
            cursor: pointer;
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
                                    All Categories
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-info float-end" data-bs-toggle="modal"
                                        data-bs-target="#addCategory">
                                        Add Category
                                    </button>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=($categories->currentPage()-1)*$categories->perPage();  @endphp
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn_approve" style="background:transparent;border:none;" data-bs-toggle="modal" data-bs-target="#updateCategory" wire:click.prevent="edit({{$category->id}})"><i
                                                    class="fa fa-edit btn_approve"
                                                    style="font-size:20px;color:orange;"></i></button>
                                                <button type="button" class="btn btn-dange btn_reject" style="background:transparent;border:none;" wire:click.prevent="delete({{$category->id}})"><i
                                                    class="fa fa-trash btn_reject"
                                                    style="font-size:20px;color:red; "></i></button>
                                            
                                              
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('livewire.admin.create-category');
        @include('livewire.admin.update-category');
        
    </main>
