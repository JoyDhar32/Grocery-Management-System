<div>

    <style>
        .summary-checkout{
    background-color: #fdfdfd;
    width: 100%;
    border: 1px solid #e6e6e6;
    padding: 29px 29px 30px 29px;
    display: table;
    margin-top: 14px;
}
.summary-checkout .summary-item{
    display: block;
    float: left;
    width: 50%;
}
.summary-checkout .summary-item.payment-method{
    padding-right: 15px;
}
.summary-checkout .summary-item.shipping-method{
    padding-left: 15px;
}
.summary-checkout .summary-item>h4,
.summary-checkout .summary-item>p,
.summary-checkout .summary-item>div{
    max-width: 470px;
}
.summary-checkout .summary-item .summary-info{
    margin-bottom: 0;
}
.summary-checkout .summary-item .summary-info.grand-total{
    margin-top: 16px;
    margin-bottom: 14px;
}
.summary-checkout .summary-item .summary-info .title{
    font-size: 14px;
    color: #555555;
    line-height: 24px;
    margin: 0;
}
        .choose-payment-methods .payment-method{
    display: block;
    margin-bottom: 0;
}
.choose-payment-methods .payment-method input[type=radio]{
    display: none;
}
.choose-payment-methods .payment-method input[type=radio] + span{
    font-size: 14px;
    line-height: 30px;
    color: #333333;
    position: relative;
    font-weight: 600;
}
.choose-payment-methods .payment-method input[type=radio] + span + p{
    margin-top: 4px;
}
.choose-payment-methods .payment-method input[type=radio] + span::before{
    content: '';
    display: block;
    float: left;
    border: 1px solid #e9e9e9;
    width: 15px;
    height: 14px;
    background: linear-gradient(#fefefe, #f6f6f6);
    margin-top: 7px;
    margin-right: 7px;
}
.choose-payment-methods .payment-method input[type=radio] + span::after{
    content: "\f00c";
    font-family: FontAwesome;
    display: block;
    font-size: 12px;
    top: -1px;
    left: -20px;
    position: absolute;
    opacity: 0;
    filter: alpha(opacity=0);
    color: #F15412;
    line-height: 20px;
    font-weight: 400;
}
.choose-payment-methods .payment-method input[type=radio]:checked + span::after{
    opacity: 1;
    filter: alpha(opacity=100);
}
.choose-payment-methods .payment-method .payment-desc{
    width: 100%;
    display: none;
    font-size: 13px;
    line-height: 18px;
    color: #666666;
    font-weight: 400;
    margin: 0;
}
.choose-payment-methods .payment-method input[type=radio]:checked ~ .payment-desc{
    display: block;
}
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">


            <div class="container">
                @if (Cart::instance('cart')->count() > 0)
                    <div class="row">
                        <div class="col-12">
                            <div class="divider mt-50 mb-50"></div>
                        </div>
                    </div>
                    <form action="{{ route('shop.checkout.completed') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-25">
                                    <h4>Billing Details</h4>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"
                                        placeholder="First name *">
                                    <input type="hidden" name="user_name" value="{{ Auth::user()->name }}"
                                        placeholder="First name *">
                                    <input type="hidden" name="user_email" value="{{ Auth::user()->email }}"
                                        placeholder="First name *">
                                    <input type="hidden" name="products" value="{{ $productname }}"
                                        placeholder="First name *">
                                    <input type="hidden" name="qty" value="{{ $qty }}"
                                        placeholder="First name *">

                                    <input type="text" required="" name="fname" placeholder="First name *">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" name="lname" placeholder="Last name *">

                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="phone" placeholder="Phone *">

                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="email" placeholder="Email address *">

                                </div>
                                <div class="form-group">
                                    <input type="text" name="billing_address" required="" placeholder="Address *">

                                </div>

                                <div class="form-group">
                                    <input required="" type="text" name="city" placeholder="City / Town *">

                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="state" placeholder="State / County *">

                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *">

                                </div>




                            </div>


                            <div class="col-md-6">
                                <div class="order_review">
                                    <div class="mb-20">
                                        <h4>Your Orders</h4>
                                    </div>
                                    <div class="table-responsive order_table text-center">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Product</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>SubTotal</th>
                                                    <td class="product-subtotal" colspan="2">
                                                        ${{ Cart::instance('cart')->subtotal() }}</td>
                                                    <input type="hidden"
                                                        value="{{ Cart::instance('cart')->subtotal() }}"
                                                        name="subtotal">



                                                </tr>
                                                <tr>
                                                    <th>GST</th>
                                                    <td class="product-subtotal" colspan="2">
                                                        ${{ Cart::instance('cart')->tax() }}</td>
                                                    <input type="hidden"value="{{ Cart::instance('cart')->tax() }}"
                                                        name="tax">

                                                </tr>
                                                <tr>
                                                    <th>Shipping</th>
                                                    <td colspan="2"><em>Free Shipping</em></td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>

                                                    <td colspan="2" class="product-subtotal"><span
                                                            class="font-xl text-brand fw-900">${{ Cart::instance('cart')->total() }}</span>
                                                    </td>
                                                    <input type="hidden"value="{{ Cart::instance('cart')->total() }}"
                                                        name="total">

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @if (session('error_message'))
                                    <script>
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Missing Payment Details',
                                            text: 'TPlease fill payment details and try again!!!',
                                        });
                                    </script>
                                @endif 
                                    <div class="summary-item payment-method">
                                        <h4 class="title-box">Payment Method</h4>
                                        
                                        <div class="choose-payment-methods">
                                          <label class="payment-method custome-radio">
                                            <input  id="payment-method-bank" value="cod" type="radio" class="form-check-input" required name="payment_option">
                                            <span>Cash On Delivery</span>
                                            <span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
                                          </label>
                                          <label class="payment-method">
                                            <input  id="payment-method-visa" value="card" type="radio" required name="payment_option">
                                            <span>Card Payment</span>
                                            <span class="payment-desc">
                                              <div class="panel-body">
                                                
                                                {{-- <input type="hidden"value="{{ Cart::instance('cart')->total() }}"
                                                name="total">
                                                <input type="hidden" name="qty" value="{{ $qty }}"
                                                placeholder=""> --}}

                                                {{-- OLD VALUE --}}
                                                {{-- <div class="form-group">
                                                    <label for="cnumber" class="fw-bold">Card Number *</label>
                                                    <input type="hidden" name="cnumber" placeholder="Card Number" value="{{ old('cnumber') }}">
                                                    @error('cnumber')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="cexpire" class="fw-bold">Expire Date *</label>
                                                    <input type="text" name="cexpire" placeholder="MM/YY" value="{{ old('cexpire') }}">
                                                    @error('cexpire')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="ccvc" class="fw-bold">CVC *</label>
                                                    <input type="password" name="ccvc" placeholder="CVC">
                                                    @error('ccvc')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div> --}}
                                          
                                              </div>
                                            </span>
                                          </label>
                                        </div>
                                      </div>


                                    {{-- <div class="payment_method">
                                        <div class="mb-25">
                                            <h5>Payment</h5>
                                        </div>
                                        <div class="payment_option">
                                            <div class="custome-radio">
                                                <input class="form-check-input" required="" type="radio"
                                                    name="payment_option" id="exampleRadios3" value="cod">
                                                <label class="form-check-label" for="exampleRadios3"
                                                    data-bs-toggle="collapse" data-target="#cashOnDelivery"
                                                    aria-controls="cashOnDelivery">Cash On Delivery</label>
                                            </div>
                                          
                                            <div class="custome-radio toggle_info">
                                                <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" value="card">
                                                <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#cardPayment" aria-controls="cardPayment">
                                                  <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Card Payment</a>
                                                </label>
                                              
                                                <div class="panel-collapse collapse coupon_form" id="coupon">
                                              
                                                </div>
                                              </div>

                                        </div>
                                    </div> --}}
                                    <button type="submit" class="btn btn-fill-out btn-block mt-30">Place
                                        Order</button>
                                </div>
                            </div>

                        </div>
                    </form>
                @else
                    <p class="alert alert-warning"style="font-weight:bold;">No Item in Cart!!! Please---> <a
                            href="{{ route('shop') }}"
                            style="color:green;font-weight:bold; text-decoration:underline"> Select Product</a> </p>
                @endif
            </div>
        </section>
    </main>
</div>
