<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Crud\ChoixController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Pages\RouteController;
use App\Http\Controllers\Client\ColisController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\VoyageController;
use App\Http\Controllers\Gestion\ClientController;
use App\Http\Controllers\Client\LocationController;
use App\Http\Controllers\Gestion\ArticleController;
use App\Http\Controllers\Gestion\CompanyController;
use App\Http\Controllers\Gestion\PayementController;
use App\Http\Controllers\Gestion\SuperAdminController;
use App\Http\Controllers\Gestion\ReservationController;

// Routes accessibles à tous (sans middleware)
Route::middleware(['web'])->group(function () {
    Route::get("/tologin", [LoginController::class, 'index'])->name("tologin");
    Route::get("/toregister", [RegisterController::class, 'index'])->name("toregister");
    Route::get("/forgot-password", [LoginController::class, 'forgot'])->name("forgotpassword");
    Route::post("/traitement/register", [RegisterController::class, 'traitement'])->name("traitement");
    Route::post("/verification/login", [LoginController::class, 'login'])->name("verification");
    Route::get("/disconect/{id}",[LogoutController::class,'logout'])->name("logout");
    Route::get("/descript", [RouteController::class, 'descript'])->name("descript");
    Route::get('/détail/article/{id}', [ArticleController::class, 'showdetailarticle'])->name("détails");
    Route::get("/", [RouteController::class, 'index'])->name("home");
    Route::get("/this/show/{id}", [RouteController::class, 'showarticle'])->name("voirarticle");
    Route::post('/reserver', [RouteController::class,'sho'])->name('reserver');
    Route::get('/allarticle', [RouteController::class,'versarticle'])->name('allarticles');
    Route::get('/recherche-articles', [RouteController::class, 'index'])->name('articles.search');
    Route::get("/articles/voyage",[VoyageController::class,'index'])->name('voyagearticle');
    Route::get("/articles/location",[LocationController::class,'index'])->name('locationarticle');
    Route::get("/articles/colis",[ColisController::class,'index'])->name('colisarticle');
    Route::get("/deletenote/{id}",[CompanyController::class,'deletenote'])->name('delete/note');
    Route::post('/add/photo/location', [ArticleController::class, 'addphotolocation'])->name('add.photos.location');
    Route::get("/mon/compte/all",[RouteController::class,'compte'])->name("voirmoncompte");
    Route::get("/delete/account/{id}",[RouteController::class,'supprimercompte'])->name("deleteaccount");

    
});
// Groupe de routes pour les clients
Route::middleware(['auth','client'])->group(function () {
    Route::get("/addimage", [RegisterController::class, 'addimage'])->name("addimage");
    Route::post("/add/photo/{id}", [RegisterController::class, 'addtraiter'])->name("addphoto");
    // Route::get("/this/show/{id}", [RouteController::class, 'showarticle'])->name("voirarticle");
   
    
    Route::post("/create/reservation/voyage", [ReservationController::class, 'create'])->name("reserver/voyage");
    Route::post("/create/reservation/voiture", [LocationController::class, 'louer'])->name("reserver/voiture");

    
    Route::post('/pay/res', [PayementController::class, 'payerVoyage'])->name('payer/voyage');
    Route::get("/up/commpany/{id}", [RegisterController::class, 'tocreatecompany'])->name("tocreatecompany");
    Route::post("/update/comp/{id}", [RegisterController::class, 'createcompany'])->name("create");
    Route::post("/create", [RegisterController::class, 'creation'])->name("creation");
    Route::get("/tabperso",[ClientController::class,'index'])->name("activity");
    Route::get("/tabperso/list",[ClientController::class,'tolist'])->name("activitylist");
    Route::get("/tabperso/notification",[ClientController::class,'tonotification'])->name("anotify");
    Route::get("/reservation/voiture/{id}",[LocationController::class,'showpage'])->name("location/reservation");
    Route::get("/payement/reservation/{id}",[PayementController::class,"payementreservation"])->name("reser/pay");


    
    Route::get("/prendre/{id}",[ReservationController::class,'index'])->name('tiv');
    Route::get("/list/evenemt",[ClientController::class,'eventlist'])->name("eventlist");
    Route::get('/anuler/{id}',[ClientController::class,'annulerevent'])->name("annuler");
    Route::get('/supprimer/reser/client/{id}',[ClientController::class,'suprimerevent'])->name("supprimereventclient");
    
});

// Groupe de routes pour les entreprises (companies)
Route::middleware(['auth','admin'])->group(function () {

    Route::get("/addsupplem/{id}", [ArticleController::class, 'suppadd'])->name("addsupp");
    Route::post("/addother", [ArticleController::class, 'sko'])->name("articles.storeDetails");
    Route::get("/tocreate", [ArticleController::class, 'tocreate'])->name("tocreate");
    Route::get("/dash/company", [CompanyController::class, 'index'])->name("dashcompany");
    Route::get("/toupdate/article/{id}", [ArticleController::class, 'editarticle'])->name("toupdatearticle");
    Route::post("/create/article", [ArticleController::class, 'createphase1'])->name("phase1");
    Route::post("/update/article/{id}", [ArticleController::class, 'updatearticle'])->name("phase3");

    Route::post('/article/voyage', [ArticleController::class, 'storeVoyage'])->name('addvoyage');
    Route::get('/article/voyage/delete/{id}', [ArticleController::class, 'deleteVoyage'])->name('deletevoyage');
    Route::post('/article/location', [ArticleController::class, 'storeLocation'])->name('addlocation');
    Route::get('/article/location/delete/{id}', [ArticleController::class, 'deletelocation'])->name('deletelocation');
    Route::post('/article/contact', [ArticleController::class, 'storecontact'])->name('addcontact');
    Route::get('/article/contact/delete/{id}', [ArticleController::class, 'deletecontact'])->name('deletecontact');
    
    Route::post('/article/colis', [ArticleController::class, 'storecolis'])->name('addcolis');
    Route::get('/article/colis/delete/{id}', [ArticleController::class, 'deletecolis'])->name('deletecolis');
    
    Route::get('/article/number/delete/{id}', [ArticleController::class, 'deletenumber'])->name('deletenumber');
    Route::post('/article/number', [ArticleController::class, 'storeNumber'])->name('addnumero');
    Route::post('/article/autre', [ArticleController::class, 'storeAutreType'])->name('phase1.autre');

    Route::get('/pay/{id}', [PayementController::class, 'payement'])->name("pay");
    Route::post('/pay/article', [PayementController::class, 'ajouter'])->name("payer");

    Route::get('/liste/article', [CompanyController::class, 'tolist'])->name("listearticle");
    Route::get('/actifs/article', [CompanyController::class, 'tolistactifs'])->name("listearticleactifs");
    Route::get('/notification/company', [CompanyController::class, 'listnotif'])->name("listenotif");
    Route::get('/détail/article/{id}', [ArticleController::class, 'showdetailarticle'])->name("détails");

    Route::get("/reservation/company",[CompanyController::class,'listeres'])->name("listeres");

    //Avant création
    
    Route::get("/choix/article",[ArticleController::class,'avantcreate'])->name("avantcreate");
    Route::get("/choix/article/voyage",[ChoixController::class,'storevoyage'])->name("voyageroute");
    Route::get("/choix/article/location",[ChoixController::class,'storelocation'])->name("locationroute");
    Route::get("/choix/article/colis",[ChoixController::class,'storecolis'])->name("colisroute");

    Route::get("/reedit/article/{id}",[ChoixController::class,'reeditVoyage'])->name('reedit/article/voyage');
   
    Route::get("/payer/activate/{id}",[CompanyController::class,'accepter'])->name("payeres/activate");
    Route::get("/payer/refuser/{id}",[CompanyController::class,'refuser'])->name("payeres/refuser");


    Route::get("/tache/Article/{id}",[CompanyController::class,'tache'])->name("tache/article");

});

// Groupe de routes pour les administrateurs
Route::middleware(['auth','superadmin'])->group(function () {
    Route::get("/dash/admin", [SuperAdminController::class, 'index'])->name("dashadmin");
    Route::get("/list/payement", [SuperAdminController::class, 'verifier'])->name("listepaye");
    Route::post("/affichage/activation/{id}", [SuperAdminController::class, 'activer'])->name("activer");
    Route::get("/admin/list/article",[SuperAdminController::class,'listearticle'])->name("listearticle/admin");
    Route::get("/desactiver/article/{id}",[SuperAdminController::class,'desactiver'])->name("desactiver");
    Route::get("/supprimer/article/{id}",[SuperAdminController::class,'supprimer'])->name("supprimer");

    Route::get("/list/company/",[SuperAdminController::class,"listcompany"])->name("listcompany");

    Route::get("/delete/company/{id}",[SuperAdminController::class,'deleteentreprise'])->name("supprimercetentreprise");

});
