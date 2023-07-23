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
                    <span></span> Orders
                </div>
            </div>
        </div>
        <section class="mt-2 mb-2">
            <div class="container">
                @if($orders->count()>0)
                <div class="row">
                    <div class="col-md-12">
                        @if (Session()->has('message'))
                            <div class="alert alert-success"> {{ Session::get('message') }}</div>
                        @endif

                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    All Orders
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>FullName</th>
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Products</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Zip</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=($orders->currentPage()-1)*$orders->perPage();  @endphp
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $order->fname }} {{ $order->lname }}</td>
                                            <td>{{ $order->username }}</td>
                                            <td>{{ $order->email }}</td>
                                            <td>{{ $order->phone }}</td>
                                            <td>{{ $order->products }}</td>
                                            <td>{{ $order->qty }}</td>
                                            <td>{{ $order->total }}$</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->city }}</td>
                                            <td>{{ $order->zipcode }}</td>
                                            <td>{{ $order->payment_option }}</td>
                                            <td>
                                                <div class="row">
                                                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateCategory" wire:click.prevent="edit({{$category->id}})">Edit</button> --}}
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm col-md-5 mr-2 btn_approve"
                                                        style="background:transparent;border:none;"
                                                        onclick="confirm('Are you sure to approve product???')|| event.stopImmediatePropagation()"
                                                        wire:click.prevent="approve({{ $order->id }})"><i
                                                            class="fa fa-check btn_approve"
                                                            style="font-size:20px;color:green; "></i></button>
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm col-md-5 btn_reject"
                                                        style="background:transparent;border:none;"
                                                        onclick="confirm('Are you sure to delete product???')|| event.stopImmediatePropagation()"
                                                        wire:click.prevent="delete({{ $order->id }})"><i
                                                            class="fa fa-trash btn_reject"
                                                            style="font-size:20px;color:red; "></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
                @else
                <p class="alert alert-warning mt-50 mb-50"style="font-weight:bold;">No Pending Orders</p>
                @endif

            </div>
        </section>
    </main>
