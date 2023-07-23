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
                                    @php $i=1;  @endphp
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $i++ }}</td>
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
                                             @if($order->status==0)
                <p class="alert alert-warning "style="font-weight:bold;">Pending</p>
                @else
                <p class="alert alert-success "style="font-weight:bold;">Completed</p>
@endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @else
                <p class="alert alert-warning mt-50 mb-50"style="font-weight:bold;">You don't have any orders</p>
                @endif

            </div>
        </section>
    </main>
