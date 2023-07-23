<?php

use App\Http\Controllers\CompletecheckoutController;
use App\Http\Controllers\ContactDetailsController;
use App\Http\Controllers\CustomerSubscriptionController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminOrderHistory;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminUsers;
use App\Http\Livewire\Admin\ManageOrderComponent;
use App\Http\Livewire\Admin\ViewMessageComponent;
use App\Http\Livewire\Admin\ViewSubscriberComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\ExclusivedealsComponent;
use App\Http\Livewire\PrivacyComponent;
use App\Http\Livewire\TermsComponent;
use App\Http\Livewire\User\MyordersComponent;
use Illuminate\Support\Facades\Route;


Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/about',AboutComponent::class)->name('home.about');
Route::get('/contact',ContactComponent::class)->name('home.contact');
Route::get('/terms and condition',TermsComponent::class)->name('home.terms');
Route::get('/privacy and policy',PrivacyComponent::class)->name('home.privacy');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
Route::get('/cart',CartComponent::class)->name('shop.cart');
Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');
Route::get('/search',SearchComponent::class)->name('product.search');
Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');
Route::POST('/subscription',[CustomerSubscriptionController::class,'subscribe'])->name('customer.subscribe');
Route::get('/exclusive-deals',ExclusivedealsComponent::class)->name('exclusive.deals');
Route::post('/contact-submit',[ContactDetailsController::class,'index'])->name('contact_submit');

Route::get('/myorders',MyordersComponent::class)->name('user.myorders');



//user info
Route::middleware(['auth'])->group(function(){
Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
Route::get('/checkout',CheckoutComponent::class)->name('shop.checkout');
Route::post('/checkout-completed',[CompletecheckoutController::class,'index'])->name('shop.checkout.completed');
});

//admin info
Route::middleware(['auth','authadmin'])->group(function(){
    
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/orders-history',AdminOrderHistory::class)->name('admin.orders_history');
    Route::get('/admin/customers',AdminUsers::class)->name('admin.users');
    Route::get('/admin/subscriber',ViewSubscriberComponent::class)->name('admin.subscriber');
    Route::get('/admin/messages',ViewMessageComponent::class)->name('admin.messages');
    Route::get('/admin/all-orders',ManageOrderComponent::class)->name('admin.allorders');
    // Route::get('/admin/all-orders',AdminOrderComponent::class)->name('admin.allorders');
    // Route::get('/admin/orders/{order_id}',AdminOrderDetailsComponent::class)->name('admin.order_detail');
    });

require __DIR__.'/auth.php';
