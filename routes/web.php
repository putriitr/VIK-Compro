<?php

use App\Http\Controllers\Admin\MasterData\BidangPerusahaanController;
use App\Http\Controllers\Admin\MasterData\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\Member\MemberController;
use App\Http\Controllers\Admin\FAQ\FAQController;
use App\Http\Controllers\Admin\Parameter\CompanyParameterController;
use App\Http\Controllers\Admin\Produk\ProdukController;
use App\Http\Controllers\Member\Portal\PortalController;
use App\Http\Controllers\Member\Produk\ProdukMemberController;
use App\Http\Controllers\Admin\Slider\SliderController;
use App\Http\Controllers\Admin\Activity\ActivityController;
use App\Http\Controllers\Member\Activity\ActivityMemberController;
use App\Http\Controllers\Admin\BrandPartner\BrandPartnerController;
use App\Http\Controllers\Admin\Meta\MetaController;
use App\Http\Controllers\Member\Meta\MetaMemberController;
use App\Http\Controllers\Member\Profile\ProfileMemberController;
use App\Http\Controllers\Admin\Location\LocationController;
use App\Http\Controllers\Admin\Visitor\VisitorController;
use App\Http\Controllers\Guest\Message\GuestMessageController;
use App\Http\Controllers\Member\Location\LocationMemberController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\QnaGuest\QnaGuestController;
use App\Http\Controllers\Member\QnaGuest1\QnaGuest1Controller;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\Admin\Activity\CategoryActivityController;
use App\Http\Controllers\Distributor\PortalDistributor\PortalDistributorController;
use App\Exports\CustomerReportExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Admin\Ticket\TicketController;
use App\Http\Controllers\Member\Ticket\TicketMemberController;
use App\Http\Controllers\Admin\Distributor\DistributorApprovalController;
use App\Http\Controllers\Admin\Invoice\InvoiceAdminController;
use App\Http\Controllers\Admin\ProformaInvoice\ProformaInvoiceAdminController;
use App\Http\Controllers\Admin\PurchaseOrder\PurchaseOrderAdminController;
use App\Http\Controllers\Distribution\Portal\DistributionController;
use App\Http\Controllers\Distribution\Portal\TicketDistributorController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Distribution\Portal\QuotationController;
use App\Http\Controllers\Admin\Quotation\QuotationAdminController;
use App\Http\Controllers\Admin\Quotation\QuotationNegotiationController;
use App\Http\Controllers\Distribution\Portal\DistributorQuotationNegotiationController;
use App\Http\Controllers\Distribution\Portal\PurchaseOrderController;
use App\Http\Controllers\Distribution\Portal\InvoiceController;
use App\Http\Controllers\Distribution\Portal\ProformaInvoiceDistributorController;
use App\Http\Controllers\Admin\Admin\AdminController;
use App\Http\Controllers\Distribution\Profile\ProfileDistributorController;
use App\Http\Controllers\Admin\Vendor\VendorAdminController;
use App\Http\Controllers\Vendor\VendorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


// Guest Routes (No Authentication Required)
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');
    // Rute lainnya
    Route::get('/products', [ProdukMemberController::class, 'index'])->name('product.index');
    Route::get('/products/category/{id}', [ProdukMemberController::class, 'index'])->name('product.category');
    Route::get('/product/{id}', [ProdukMemberController::class, 'show'])->name('product.show');

    Route::get('/products/search', [ProdukMemberController::class, 'search'])->name('products.search');
    Route::match(['GET', 'POST'], 'products/search', [ProdukMemberController::class, 'search'])->name('products.search');

    Route::get('/products/filter/{id}', [ProdukMemberController::class, 'filterByCategory'])->name('filterByCategory');
    Route::get('/member/activities', [ActivityMemberController::class, 'activity'])->name('member.activity');
    Route::get('/member/activities/{activity}', [ActivityMemberController::class, 'show'])->name('member.activity.detail-act');
    Route::get('/member/meta/{slug}', [MetaMemberController::class, 'showMetaBySlug'])->name('member.meta.show');
    Route::get('/member/meta', [MetaMemberController::class, 'showMeta'])->name('member.meta.index');
    Route::get('/locations', [LocationMemberController::class, 'index']);
    Route::get('/admin/guest-messages', [GuestMessageController::class, 'index'])->name('admin.guest-messages.index');
    Route::post('/guest-messages', [GuestMessageController::class, 'store'])->name('guest-messages.store');

    // Member QnA Guest
    Route::get('/qnaguest1', [QnaGuest1Controller::class, 'index'])->name('qnaguest1');

    // Admin Qna Guest
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('qnaguest', QnaGuestController::class);
    });

    // Distributor Registration
    Route::get('/distributors/register', [RegisterController::class, 'showDistributorRegistrationForm'])->name('distributors.register');
    Route::post('/distributors/register', [RegisterController::class, 'registerDistributor']);
    Route::get('/distributors/waiting', function () {
        return view('auth.distributor_waiting');
    })->name('distributors.waiting');

    Auth::routes();
});

// Member Routes (Authenticated Users with "member" role)
Route::middleware(['auth', 'user-access:member'])->group(function () {
    Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
        Route::get('/portal', [PortalController::class, 'index'])->name('portal');
        Route::get('/portal/user-product', [PortalController::class, 'UserProduk'])->name('portal.user-product');
        Route::get('/product/user-product/{id}', [PortalController::class, 'detailProduk'])->name('user-product.show');
        Route::get('/portal/photos', [PortalController::class, 'photos'])->name('portal.photos');
        Route::get('/portal/instructions', [PortalController::class, 'instructions'])->name('portal.instructions');
        Route::get('/portal/tutorials', [PortalController::class, 'videos'])->name('portal.tutorials');
        Route::get('/portal/controlgenerations', [PortalController::class, 'ControllerGenerations'])->name('portal.controlgenerations');
        Route::get('/portal/document', [PortalController::class, 'document'])->name('portal.document');
        Route::get('/portal/qna', [PortalController::class, 'Faq'])->name('portal.qna');

        // Routes Tiketing Layanan untuk Member
        Route::get('/portal/tickets', [TicketMemberController::class, 'index'])->name('tickets.index');
        Route::get('/portal/tickets/create', [TicketMemberController::class, 'create'])->name('tickets.create');
        Route::post('/portal/tickets', [TicketMemberController::class, 'store'])->name('tickets.store');
        Route::get('/portal/tickets/{id}', [TicketMemberController::class, 'show'])->name('tickets.show');
        Route::get('/portal/tickets/{id}/edit', [TicketMemberController::class, 'edit'])->name('tickets.edit');
        Route::put('/portal/tickets/{id}/cancel', [TicketMemberController::class, 'cancel'])->name('tickets.cancel');
        Route::put('/portal/tickets/{id}', [TicketMemberController::class, 'update'])->name('tickets.update');

        Route::get('/portal/monitoring', [PortalController::class, 'Monitoring'])->name('portal.monitoring');
        Route::get('/portal/monitoring/detail/{userProduk}', [PortalController::class, 'showInspeksiMaintenance'])->name('portal.monitoring.detail');

        Route::get('/profile', [ProfileMemberController::class, 'show'])->name('profile.show');
        Route::get('/profile/edit', [ProfileMemberController::class, 'edit'])->name('profile.edit');
        Route::put('/profile/update', [ProfileMemberController::class, 'update'])->name('profile.update');
    });
});

// Distributor Routes (Authenticated Users with "distributor" role)
Route::middleware(['auth', 'user-access:distributor'])->group(function () {
    Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
        Route::get('/portal/distribution', [DistributionController::class, 'index'])->name('distribution');
        Route::get('/portal/distribution/request-quotation', [DistributionController::class, 'requestQuotation'])->name('distribution.request-quotation');
        Route::get('/portal/distribution/create-po', [DistributionController::class, 'createPO'])->name('distribution.create-po');
        Route::get('/portal/distribution/invoices', [DistributionController::class, 'invoices'])->name('distribution.invoices');

        // Routes for Distributor Ticketing Service
        Route::get('/portal/distribution/tickets', [TicketDistributorController::class, 'index'])->name('distribution.tickets.index');
        Route::get('/portal/distribution/tickets/create', [TicketDistributorController::class, 'create'])->name('distribution.tickets.create');
        Route::post('/portal/distribution/tickets', [TicketDistributorController::class, 'store'])->name('distribution.tickets.store');
        Route::get('/portal/distribution/tickets/{id}', [TicketDistributorController::class, 'show'])->name('distribution.tickets.show');
        Route::get('/portal/distribution/tickets/{id}/edit', [TicketDistributorController::class, 'edit'])->name('distribution.tickets.edit');
        Route::put('/portal/distribution/tickets/{id}/cancel', [TicketDistributorController::class, 'cancel'])->name('distribution.tickets.cancel');
        Route::put('/portal/distribution/tickets/{id}', [TicketDistributorController::class, 'update'])->name('distribution.tickets.update');

        Route::post('/portal/distribution/product/{id}/add-to-quotation', [ProdukMemberController::class, 'addToQuotation'])->name('Distributor.product.addToQuotation');
        // Menampilkan halaman keranjang quotation
        Route::get('/quotations/cart', [QuotationController::class, 'cart'])->name('quotations.cart');

        // Menambahkan produk ke keranjang
        Route::post('/quotations/add-to-cart', [QuotationController::class, 'addToCart'])->name('quotations.add_to_cart');

        // Mengirim permintaan quotation dari keranjang
        Route::post('/quotations/submit', [QuotationController::class, 'submitCart'])->name('quotations.submit');

        // Update quantity di keranjang
        Route::put('/quotations/update-cart', [QuotationController::class, 'updateCart'])->name('quotations.cart.update');

        // Hapus item dari keranjang
        Route::delete('/quotations/remove-from-cart', [QuotationController::class, 'removeFromCart'])->name('quotations.cart.remove');

        // Rute untuk negosiasi quotation
        Route::get('/quotations/{id}/nego', [QuotationController::class, 'nego'])->name('quotations.nego');

        // Route untuk menampilkan form negosiasi
        Route::get('/distributor/quotations/{quotationId}/negotiation', [DistributorQuotationNegotiationController::class, 'create'])->name('distributor.quotations.negotiations.create');

        // Route untuk menyimpan negosiasi
        Route::post('/distributor/quotations/{quotationId}/negotiation', [DistributorQuotationNegotiationController::class, 'store'])->name('distributor.quotations.negotiations.store');
        Route::get('/distributor/quotations/negotiations', [DistributorQuotationNegotiationController::class, 'index'])->name('distributor.quotations.negotiations.index');
        Route::get('/proforma-invoices', [ProformaInvoiceDistributorController::class, 'index'])->name('distributor.proforma-invoices.index');
        Route::post('/distributor/proforma-invoices/{id}/upload', [ProformaInvoiceDistributorController::class, 'uploadPaymentProof'])->name('distributor.proforma-invoices.upload');
        Route::get('/proforma-invoices/{id}', [ProformaInvoiceDistributorController::class, 'show'])->name('distributor.proforma-invoices.show');

        Route::get('/distributor/invoices', [InvoiceController::class, 'index'])->name('distributor.invoices.index');

        // Quotation Routes
        Route::get('/portal/distribution/quotations/{id}', [QuotationController::class, 'show'])->name('quotations.show');
        Route::put('/portal/distribution/quotations/{id}/cancel', [QuotationController::class, 'cancel'])->name('quotations.cancel');
        Route::get('/quotations/{quotationId}/create-po', [PurchaseOrderController::class, 'create'])->name('quotations.create_po');
        Route::post('/quotations/{quotationId}/create-po', [PurchaseOrderController::class, 'store'])->name('quotations.store_po');
        Route::get('/distributor/purchase-orders', [PurchaseOrderController::class, 'index'])->name('distributor.purchase-orders.index');

        Route::get('/distributor/profile', [ProfileDistributorController::class, 'show'])->name('distributor.profile.show');
        Route::get('/distributor/profile/edit', [ProfileDistributorController::class, 'edit'])->name('distributor.profile.edit');
        Route::put('/distributor/profile/update', [ProfileDistributorController::class, 'update'])->name('distributor.profile.update');
    });
});

// Vendor Routes (Authenticated Users with "vendor" role)
Route::middleware(['auth', 'user-access:vendor'])->group(function () {
    Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
        Route::get('/portal/vendor', [VendorController::class, 'portal'])->name('vendor.portal');
        Route::get('en/products/{vendorId}', [ProdukController::class, 'index'])->name('vendor.products.index');
        Route::post('products/upload/{vendorId}', [ProdukController::class, 'upload'])->name('vendor.products.upload');
    });
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
        Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

        Route::get('/admin/distributors', [DistributorApprovalController::class, 'index'])->name('admin.distributors.index');
        Route::post('/admin/distributors/{id}/approve', [DistributorApprovalController::class, 'approve'])->name('admin.distributors.approve');
        Route::get('/admin/distributors/{id}', [DistributorApprovalController::class, 'show'])->name('admin.distributors.show');

        // CRUD Admin
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
        Route::get('/admin/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
        Route::put('/admin/{admin}', [AdminController::class, 'update'])->name('admin.update');
        Route::delete('/admin/{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');

        // CRUD Vendor
        Route::get('/vendor', [VendorAdminController::class, 'index'])->name('admin.vendors.index');
        Route::get('/vendor/create', [VendorAdminController::class, 'create'])->name('admin.vendors.create');
        Route::post('/vendor', [VendorAdminController::class, 'store'])->name('admin.vendors.store');
        Route::get('/vendor/{vendor}/edit', [VendorAdminController::class, 'edit'])->name('admin.vendors.edit');
        Route::put('/vendor/{vendor}', [VendorAdminController::class, 'update'])->name('admin.vendors.update');
        Route::delete('/vendor/{vendor}', [VendorAdminController::class, 'destroy'])->name('admin.vendors.destroy');
        Route::get('/vendor/{vendor}', [VendorAdminController::class, 'show'])->name('admin.vendors.show');
        Route::get('vendors/{id}/add-products', [VendorAdminController::class, 'addProducts'])->name('admin.vendors.add-products');
        Route::post('vendors/{id}/store-products', [VendorAdminController::class, 'storeProducts'])->name('admin.vendors.store-products');
        Route::get('vendors/{id}/edit-products', [VendorAdminController::class, 'editProducts'])->name('admin.vendors.edit-products');
        Route::put('vendors/{id}/update-products', [VendorAdminController::class, 'updateProducts'])->name('admin.vendors.update-products');
        Route::post('/vendors/{id}/update-password', [VendorAdminController::class, 'updatePassword'])->name('admin.vendors.updatePassword');
        Route::post('/admin/validate-password', [VendorAdminController::class, 'validatePassword'])->name('admin.validatePassword');

        Route::resource('admin/activity/category-activity', CategoryActivityController::class)->names('admin.activity.category-activity');
        Route::put('/admin/activity/{activity}', [ActivityController::class, 'update'])->name('admin.activity.update');

        Route::resource('admin/members', MemberController::class);
        Route::get('members/{id}/add-products', [MemberController::class, 'addProducts'])->name('members.add-products');
        Route::post('members/{id}/store-products', [MemberController::class, 'storeProducts'])->name('members.store-products');
        Route::get('members/{id}/edit-products', [MemberController::class, 'editProducts'])->name('members.edit-products');
        Route::put('members/{id}/update-products', [MemberController::class, 'updateProducts'])->name('members.update-products');
        Route::post('/members/{id}/update-password', [MemberController::class, 'updatePassword'])->name('members.updatePassword');
        Route::post('/admin/validate-password', [MemberController::class, 'validatePassword'])->name('admin.validatePassword');

        // Routes Tiketing Layanan untuk Admin
        Route::get('/admin/tickets', [TicketController::class, 'index'])->name('admin.tickets.index');
        Route::put('/admin/tickets/{id}/process', [TicketController::class, 'process'])->name('admin.tickets.process');
        Route::put('/admin/tickets/{id}/complete', [TicketController::class, 'complete'])->name('admin.tickets.complete');
        Route::get('/admin/tickets/{id}', [TicketController::class, 'show'])->name('admin.tickets.show');

        Route::get('/admin/quotations', [QuotationAdminController::class, 'index'])->name('admin.quotations.index');
        Route::put('/quotations/{id}/status', [QuotationAdminController::class, 'updateStatus'])->name('admin.quotations.updateStatus');
        Route::post('/quotations/{id}/upload-file', [QuotationAdminController::class, 'uploadFile'])->name('admin.quotations.uploadFile');
        Route::get('admin/quotations/{id}/show', [QuotationAdminController::class, 'show'])->name('admin.quotations.show');
        Route::get('admin/quotations/{id}/edit', [QuotationAdminController::class, 'edit'])->name('admin.quotations.edit');
        Route::put('admin/quotations/{id}', [QuotationAdminController::class, 'update'])->name('admin.quotations.update');

        // Menampilkan semua negosiasi untuk ditinjau admin
        Route::get('/admin/quotations/negotiations', [QuotationNegotiationController::class, 'index'])->name('admin.quotations.negotiations.index');

        // Menerima negosiasi
        Route::put('/admin/quotations/negotiations/{id}/accept', [QuotationNegotiationController::class, 'accept'])->name('admin.quotations.negotiations.accept');
        Route::put('/admin/quotations/negotiations/{id}/process', [QuotationNegotiationController::class, 'process'])->name('admin.quotations.negotiations.process');

        // Menolak negosiasi
        Route::put('/admin/quotations/negotiations/{id}/reject', [QuotationNegotiationController::class, 'reject'])->name('admin.quotations.negotiations.reject');
        Route::get('/purchase-orders', [PurchaseOrderAdminController::class, 'index'])->name('admin.purchase-orders.index');
        Route::get('/purchase-orders/{id}', [PurchaseOrderAdminController::class, 'show'])->name('admin.purchase-orders.show');
        Route::put('/purchase-orders/{id}/approve', [PurchaseOrderAdminController::class, 'approve'])->name('admin.purchase-orders.approve');
        Route::put('/purchase-orders/{id}/reject', [PurchaseOrderAdminController::class, 'reject'])->name('admin.purchase-orders.reject');
        Route::put('/purchase-orders/{id}/po-number', [PurchaseOrderAdminController::class, 'updatePoNumber'])->name('admin.purchase-orders.update-po-number');

        Route::get('/purchase-orders/{id}/create-proforma-invoice', [ProformaInvoiceAdminController::class, 'create'])->name('admin.proforma-invoices.create');
        Route::post('/purchase-orders/{id}/store-proforma-invoice', [ProformaInvoiceAdminController::class, 'store'])->name('admin.proforma-invoices.store');
        Route::get('/admin/proforma-invoices', [ProformaInvoiceAdminController::class, 'index'])->name('admin.proforma-invoices.index');
        Route::get('/admin/proforma-invoices/{id}', [ProformaInvoiceAdminController::class, 'show'])->name('admin.proforma-invoices.show');
        Route::put('/admin/proforma-invoices/{id}/approve-reject', [ProformaInvoiceAdminController::class, 'approveRejectPayment'])
            ->name('admin.proforma-invoices.approve-reject');

        // Route untuk index dan pembuatan invoice
        Route::get('/invoices', [InvoiceAdminController::class, 'index'])->name('invoices.index');
        Route::get('/invoices/create/{proformaInvoiceId}', [InvoiceAdminController::class, 'create'])->name('invoices.create');
        Route::post('/invoices/store/{proformaInvoiceId}', [InvoiceAdminController::class, 'store'])->name('invoices.store');
        Route::get('/invoices/{id}', [InvoiceAdminController::class, 'show'])->name('invoices.show');

        Route::get('/admin/visitors', [VisitorController::class, 'index'])->name('admin.visitors');
        Route::resource('admin/produk', ProdukController::class)->names('admin.produk');
        Route::resource('admin/parameter', CompanyParameterController::class);
        Route::resource('admin/bidangperusahaan', BidangPerusahaanController::class);
        Route::resource('admin/kategori', KategoriController::class)->names('admin.kategori');
        Route::resource('admin/faq', FAQController::class)->names('admin.faq');
        Route::resource('admin/slider', SliderController::class)->names('admin.slider');
        Route::resource('admin/activity', ActivityController::class)->names('admin.activity');
        Route::resource('admin/brand', BrandPartnerController::class)->names('admin.brand');
        Route::resource('admin/meta', MetaController::class)->names('admin.meta');
        Route::post('/froala/upload_image', [MetaController::class, 'uploadImage'])->name('froala.upload_image');
        Route::resource('admin/location', LocationController::class)->names('admin.location');
    });
});
