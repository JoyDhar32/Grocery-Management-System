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
.btn_disabled{
    cursor: no-drop !important;
}

    </style>

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home.index') }}" rel="nofollow">Home</a>
                    <span></span> Order History
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
                                    Order History
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
                                                        class="btn btn_disabled btn-sm"
                                                        style="background:green;color:white;font-weight:bold;border:none;"> Completed</button>
                                       
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
                <p class="alert alert-warning mt-50 mb-50"style="font-weight:bold;">No Previous Orders Available right now!!!!</p>
                @endif

            </div>
        </section>
    </main>
