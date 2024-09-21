<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminBannerComponent;
use App\Http\Livewire\Admin\ClientsComponent;
use App\Http\Livewire\Admin\ClippingPathComponent;
use App\Http\Livewire\Admin\ContactsComponent;
use App\Http\Livewire\Admin\CreateBannerComponent;
use App\Http\Livewire\Admin\CreateClientsComponent;
use App\Http\Livewire\Admin\CreateClippingPathComponent;
use App\Http\Livewire\Admin\CreateDigitalServicesComponent;
use App\Http\Livewire\Admin\CreateSoftwareServicesComponent;
use App\Http\Livewire\Admin\CreateTeamComponent;
use App\Http\Livewire\Admin\CreateTestimonialsComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\DigitalServicesComponent;
use App\Http\Livewire\Admin\OrdersComponent;
use App\Http\Livewire\Admin\SettingComponent;
use App\Http\Livewire\Admin\SoftwareServicesComponent;
use App\Http\Livewire\Admin\TeamComponent;
use App\Http\Livewire\Admin\TestimonialsComponent as AdminTestimonialsComponent;
use App\Http\Livewire\Admin\UpdateBannerComponent;
use App\Http\Livewire\Admin\UpdateClientsComponent;
use App\Http\Livewire\Admin\UpdateClippingPathComponent;
use App\Http\Livewire\Admin\UpdateDigitalServicesComponent;
use App\Http\Livewire\Admin\UpdateSoftwareServicesComponent;
use App\Http\Livewire\Admin\UpdateTeamComponent;
use App\Http\Livewire\Admin\UpdateTestimonialsComponent;
use App\Http\Livewire\ClippingpathComponent as LivewireClippingpathComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DigitalServicesComponent as LivewireDigitalServicesComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PurchaseComponent;
use App\Http\Livewire\SoftwareServicesComponent as LivewireSoftwareServicesComponent;
use App\Http\Livewire\TestimonialsComponent;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class);
Route::get('about',AboutComponent::class)->name('about');
Route::get('software-services',LivewireSoftwareServicesComponent::class)->name('software-services');
Route::get('digital-services',LivewireDigitalServicesComponent::class)->name('digital-srvices');
Route::get('clippingpath',LivewireClippingpathComponent::class)->name('clippingpath');
Route::get('testimonials',TestimonialsComponent::class)->name('testimonials');
Route::get('contact',ContactComponent::class)->name('conatct');
Route::get('order-service',PurchaseComponent::class)->name('order-service');

Route::middleware(['auth:sanctum', 'authAdmin', 'verified',])->group(function () {
    Route::get('admin/dashboard', DashboardComponent::class)->name('dashboard');

    // Banner routes 
    Route::get('admin/banner',AdminBannerComponent::class)->name('admin.banner');
    Route::get('admin/banner/create',CreateBannerComponent::class)->name('admin.banner.create');
    Route::get('admin/banner/update/{id}',UpdateBannerComponent::class)->name('admin.banner.update');

    // software services routes
    Route::get('/admin/software-services',SoftwareServicesComponent::class)->name('admin.software-services');
    Route::get('/admin/software-services/create',CreateSoftwareServicesComponent::class)->name('admin.software-services.create');
    Route::get('/admin/software-services/update/{id}',UpdateSoftwareServicesComponent::class)->name('admin.software-services.update');

    // Clippingpath routes 
    Route::get('admin/clippingpath',ClippingPathComponent::class)->name('admin.clippingpath');
    Route::get('admin/clippingpath/create',CreateClippingPathComponent::class)->name('admin.clippingpath.create');
    Route::get('admin/clippingpath/update/{id}',UpdateClippingPathComponent::class)->name('admin.clippingpath.update');

    // Client routes 
    Route::get('admin/clients',ClientsComponent::class)->name('admin.clients');
    Route::get('admin/clients/create',CreateClientsComponent::class)->name('admin.clients.create');
    Route::get('admin/clients/update/{id}',UpdateClientsComponent::class)->name('admin.clients.update');

    // software services routes
    Route::get('/admin/digital-services',DigitalServicesComponent::class)->name('admin.digital-services');
    Route::get('/admin/digital-services/create',CreateDigitalServicesComponent::class)->name('admin.digital-services.create');
    Route::get('/admin/digital-services/update/{id}',UpdateDigitalServicesComponent::class)->name('admin.digital-services.update');

    // Team routes 
    Route::get('admin/team', TeamComponent::class)->name('admin.team');
    Route::get('admin/team/create',CreateTeamComponent::class)->name('admin.team.create');
    Route::get('admin/team/update/{id}',UpdateTeamComponent::class)->name('admin.team.update');

    // Testimonial routes 
    Route::get('admin/testimonials',AdminTestimonialsComponent::class)->name('admin.testimonails');
    Route::get('admin/testimonials/create',CreateTestimonialsComponent::class)->name('admin.testimonials.create');
    Route::get('admin/testimonials/update/{id}',UpdateTestimonialsComponent::class)->name('admin.testimonials.update');

    // orders 
    Route::get('admin/orders',OrdersComponent::class)->name('admin.orders');

    // contacts 
    Route::get('admin/contacts',ContactsComponent::class)->name('admin.contacts');
    Route::get('admin/settings',SettingComponent::class)->name('admin.settings');
});
