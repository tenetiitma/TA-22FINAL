<?php

use App\Http\Livewire\CheckoutPage;
use App\Http\Livewire\CheckoutSuccessPage;
use App\Http\Livewire\CollectionPage;
use App\Http\Livewire\Home;
use App\Http\Livewire\KKKPage;
use App\Http\Livewire\MeasurementPage;
use App\Http\Livewire\PrivacyPolicyPage;
use App\Http\Livewire\ProductPage;
use App\Http\Livewire\ReturnPolicyPage;
use App\Http\Livewire\SalesTermsPage;
use App\Http\Livewire\SearchPage;
use App\Http\Livewire\AboutPage;
use App\Http\Livewire\ContactForm;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class);

Route::get('/kkk', KKKPage::class)->name('kkk.view');
Route::get('/measurement', MeasurementPage::class)->name('measurement.view');
Route::get('/sales-terms', SalesTermsPage::class)->name('salesterms.view');
Route::get('/return-policy', ReturnPolicyPage::class)->name('returnpolicy.view');
Route::get('/privacy-policy', PrivacyPolicyPage::class)->name('privacypolicy.view');
Route::get('/about', AboutPage::class)->name('about.view');
Route::get('/contact', ContactForm::class)->name('contact-form.view');

Route::get('/collections/{slug}', CollectionPage::class)->name('collection.view');

Route::get('/products/{slug}', ProductPage::class)->name('product.view');

Route::get('search', SearchPage::class)->name('search.view');

Route::get('checkout', CheckoutPage::class)->name('checkout.view');

Route::get('checkout/success', CheckoutSuccessPage::class)->name('checkout-success.view');
