
<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block;
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
                    <span></span> Users
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
                                    Users
                                </div>
                          
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=($users->currentPage()-1)*$users->perPage();  @endphp
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->utype }}</td>
                                            <td>
                                                @if($user->utype!=='ADM')
                                                <button type="button" class="btn btn-danger" style="background:transparent;border:none;"  wire:click.prevent="delete({{$user->id}})"><i
                                                    class="fa fa-trash btn_reject"
                                                    style="font-size:24px;color:red; "></i></button>
                                            @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
    </main>
