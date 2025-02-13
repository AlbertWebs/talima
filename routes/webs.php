
<?php
Auth::routes();

Route::group(['prefix'=>'admin'], function(){

    // [App\Http\Controllers\AdminsController::class, 'index'])
//Login route



//Testimonial
Route::get('/addTestimonial', [App\Http\Controllers\AdminsController::class, 'addTestimonial']);
Route::post('/add_Testimonial', [App\Http\Controllers\AdminsController::class, 'add_Testimonial']);
Route::get('/testimonials',[App\Http\Controllers\AdminsController::class, 'testimonials']);
Route::get('/editTestimonial/{id}', [App\Http\Controllers\AdminsController::class, 'editTestimonial']);
Route::get('/deleteTestimonial/{id}', [App\Http\Controllers\AdminsController::class, 'deleteTestimonial']);
Route::post('/edit_Testimonial/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Testimonial']);


Route::get('/changecat', [App\Http\Controllers\AdminsController::class, 'changecat']);

//Terms Privacy copyright
//copyright
Route::get('/copyright',[App\Http\Controllers\AdminsController::class, 'copyright']);
Route::post('/edit_copyright', [App\Http\Controllers\AdminsController::class, 'edit_copyright']);
//Privacy
Route::get('/privacy',[App\Http\Controllers\AdminsController::class, 'privacy']);
Route::get('/addPrivacy', [App\Http\Controllers\AdminsController::class, 'addPrivacy']);
Route::get('/editPrivacy/{id}', [App\Http\Controllers\AdminsController::class, 'editPrivacy']);
Route::post('/add_privacy', [App\Http\Controllers\AdminsController::class, 'add_privacy']);
Route::get('/delete_privacy/{id}',[App\Http\Controllers\AdminsController::class, 'delete_privacy']);
Route::post('/edit_privacy/{id}', [App\Http\Controllers\AdminsController::class, 'edit_privacy']);
//Terms
Route::get('/terms',[App\Http\Controllers\AdminsController::class, 'terms']);
Route::get('/addTerms', [App\Http\Controllers\AdminsController::class, 'addTerms']);
Route::get('/editTerm/{id}', [App\Http\Controllers\AdminsController::class, 'editTerm']);
Route::post('/add_term', [App\Http\Controllers\AdminsController::class, 'add_term']);
Route::post('/edit_term/{id}', [App\Http\Controllers\AdminsController::class, 'edit_term']);
Route::get('/delete_term/{id}',[App\Http\Controllers\AdminsController::class, 'delete_term']);
//About
Route::get('/about',[App\Http\Controllers\AdminsController::class, 'about']);
Route::post('/about_save', [App\Http\Controllers\AdminsController::class, 'about_save']);
Route::get('/abouts',[App\Http\Controllers\AdminsController::class, 'abouts']);
Route::post('/abouts_save', [App\Http\Controllers\AdminsController::class, 'abouts_save']);
Route::get('/how',[App\Http\Controllers\AdminsController::class, 'how']);
Route::post('/how_save', [App\Http\Controllers\AdminsController::class, 'how_save']);


//Services
Route::get('/services',[App\Http\Controllers\AdminsController::class, 'services']);
Route::get('/deleteService/{id}',[App\Http\Controllers\AdminsController::class, 'deleteService']);
Route::post('/edit_Services/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Services']);
Route::get('/editServices/{id}', [App\Http\Controllers\AdminsController::class, 'editServices']);
Route::get('/addService', [App\Http\Controllers\AdminsController::class, 'addService']);
Route::post('/add_Service', [App\Http\Controllers\AdminsController::class, 'add_Service']);

//Countries
Route::get('/countries',[App\Http\Controllers\AdminsController::class, 'countries']);
Route::get('/deleteCountries/{id}',[App\Http\Controllers\AdminsController::class, 'deleteCountries']);
Route::post('/edit_Countries/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Countries']);
Route::get('/editCountries/{id}', [App\Http\Controllers\AdminsController::class, 'editCountries']);
Route::get('/addCountries', [App\Http\Controllers\AdminsController::class, 'addCountries']);
Route::post('/add_Countries', [App\Http\Controllers\AdminsController::class, 'add_Countries']);


//Transfers
Route::get('/transfers',[App\Http\Controllers\AdminsController::class, 'transfers']);
Route::get('/deleteTransfer/{id}',[App\Http\Controllers\AdminsController::class, 'deleteTransfer']);
Route::post('/edit_Transfer/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Transfer']);
Route::get('/editTransfer/{id}', [App\Http\Controllers\AdminsController::class, 'editTransfer']);
Route::get('/addTransfer', [App\Http\Controllers\AdminsController::class, 'addTransfer']);
Route::post('/add_Transfer', [App\Http\Controllers\AdminsController::class, 'add_Transfer']);


Route::get('/edit_Experiences',[App\Http\Controllers\AdminsController::class, 'edit_Experiences']);

//Pricing
Route::get('/pricing',[App\Http\Controllers\AdminsController::class, 'pricing']);
Route::get('/deletePricing/{id}',[App\Http\Controllers\AdminsController::class, 'deletePricing']);
Route::post('/edit_Pricing/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Pricing']);
Route::get('/editPricing/{id}', [App\Http\Controllers\AdminsController::class, 'editPricing']);
Route::get('/addPricing', [App\Http\Controllers\AdminsController::class, 'addPricing']);
Route::post('/add_Pricing', [App\Http\Controllers\AdminsController::class, 'add_Pricing']);

//Porfolio
Route::get('/portfolio',[App\Http\Controllers\AdminsController::class, 'portfolio']);
Route::get('/deletePortfolio/{id}',[App\Http\Controllers\AdminsController::class, 'deletePortfolio']);
Route::post('/edit_Portfolio/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Portfolio']);
Route::get('/editPortfolio/{id}', [App\Http\Controllers\AdminsController::class, 'editPortfolio']);
Route::get('/addPortfolio', [App\Http\Controllers\AdminsController::class, 'addPortfolio']);
Route::post('/add_Portfolio', [App\Http\Controllers\AdminsController::class, 'add_Portfolio']);

//Gallery
Route::get('/gallery',[App\Http\Controllers\AdminsController::class, 'gallery']);
Route::get('/editGallery/{id}',[App\Http\Controllers\AdminsController::class, 'editGallery']);
Route::get('/deleteGallery/{id}',[App\Http\Controllers\AdminsController::class, 'deleteGallery']);
Route::post('/save_gallery/{id}', [App\Http\Controllers\AdminsController::class, 'save_gallery']);
Route::get('/addGallery', [App\Http\Controllers\AdminsController::class, 'addGallery']);
Route::get('/galleryList', [App\Http\Controllers\AdminsController::class, 'galleryList']);
Route::post('/add_Gallery', [App\Http\Controllers\AdminsController::class, 'add_Gallery']);

//Slider
Route::get('/slider',[App\Http\Controllers\AdminsController::class, 'slider']);
Route::get('/editSlider/{id}',[App\Http\Controllers\AdminsController::class, 'editSlider']);
Route::get('/deleteSlider/{id}',[App\Http\Controllers\AdminsController::class, 'deleteSlider']);
Route::post('/edit_Slider/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Slider']);
Route::get('/addSlider', [App\Http\Controllers\AdminsController::class, 'addSlider']);
Route::post('/add_Slider', [App\Http\Controllers\AdminsController::class, 'add_Slider']);

//Banner
Route::get('/banner',[App\Http\Controllers\AdminsController::class, 'banners']);
Route::get('/editBanner/{id}',[App\Http\Controllers\AdminsController::class, 'editBanner']);
Route::post('/edit_Banner/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Banner']);

//Pages
Route::get('/pages',[App\Http\Controllers\AdminsController::class, 'pages']);
Route::get('/editPage/{id}',[App\Http\Controllers\AdminsController::class, 'editPage']);
Route::get('/deletePage/{id}',[App\Http\Controllers\AdminsController::class, 'deletePage']);
Route::post('/edit_Page/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Page']);
Route::get('/addPage', [App\Http\Controllers\AdminsController::class, 'addPage']);
Route::post('/add_Page', [App\Http\Controllers\AdminsController::class, 'add_Page']);
Route::post('/set_Page/{name}', [App\Http\Controllers\AdminsController::class, 'set_Page']);
Route::get('/setPage/{name}', [App\Http\Controllers\AdminsController::class, 'setPage']);


//Priducts
Route::get('/products',[App\Http\Controllers\AdminsController::class, 'products']);
Route::get('/editProduct/{id}',[App\Http\Controllers\AdminsController::class, 'editProduct']);
Route::get('/deleteProduct/{id}',[App\Http\Controllers\AdminsController::class, 'deleteProduct']);
Route::post('/edit_Product/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Product']);
Route::get('/addProduct', [App\Http\Controllers\AdminsController::class, 'addProduct']);
Route::post('/add_Product', [App\Http\Controllers\AdminsController::class, 'add_Product']);

// Destinations
Route::get('/destinations',[App\Http\Controllers\AdminsController::class, 'destinations']);
Route::get('/editDestination/{id}',[App\Http\Controllers\AdminsController::class, 'editDestination']);
Route::get('/deleteDestination/{id}',[App\Http\Controllers\AdminsController::class, 'deleteDestination']);
Route::post('/edit_Destination/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Destination']);
Route::get('/addDestination', [App\Http\Controllers\AdminsController::class, 'addDestination']);
Route::post('/add_Destination', [App\Http\Controllers\AdminsController::class, 'add_Destination']);
Route::get('/swapDestination/{id}', [App\Http\Controllers\AdminsController::class, 'swapDestination']);
Route::get('/swapSlider/{id}', [App\Http\Controllers\AdminsController::class, 'swapSlider']);


// Samples
Route::get('/samples',[App\Http\Controllers\AdminsController::class, 'samples']);
Route::get('/editSample/{id}',[App\Http\Controllers\AdminsController::class, 'editSample']);
Route::get('/deleteSample/{id}',[App\Http\Controllers\AdminsController::class, 'deleteSample']);
Route::post('/edit_Sample/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Sample']);
Route::get('/addSample', [App\Http\Controllers\AdminsController::class, 'addSample']);
Route::post('/add_Sample', [App\Http\Controllers\AdminsController::class, 'add_Sample']);
Route::get('/swapSample/{id}', [App\Http\Controllers\AdminsController::class, 'swapSample']);

// Extras
Route::get('/extras',[App\Http\Controllers\AdminsController::class, 'extras']);
Route::get('/editExtra/{id}',[App\Http\Controllers\AdminsController::class, 'editExtra']);
Route::get('/deleteExtra/{id}',[App\Http\Controllers\AdminsController::class, 'deleteExtra']);
Route::post('/edit_Extra/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Extra']);
Route::get('/addExtra', [App\Http\Controllers\AdminsController::class, 'addExtra']);
Route::post('/add_Extra', [App\Http\Controllers\AdminsController::class, 'add_Extra']);
Route::get('/swapExtra/{id}', [App\Http\Controllers\AdminsController::class, 'swapExtra']);

// Booking
Route::get('/bookings',[App\Http\Controllers\AdminsController::class, 'bookings']);
Route::get('/bookings/explore/{id}',[App\Http\Controllers\AdminsController::class, 'bookings_explore']);
Route::get('/swapBooking/{id}', [App\Http\Controllers\AdminsController::class, 'swapBooking']);
Route::get('/deleteBooking/{id}',[App\Http\Controllers\AdminsController::class, 'deleteBooking']);

// Tours or Experiences
Route::get('/experiences',[App\Http\Controllers\AdminsController::class, 'experiences']);
Route::get('/editExperience/{id}',[App\Http\Controllers\AdminsController::class, 'editExperience']);
Route::get('/deleteExperience/{id}',[App\Http\Controllers\AdminsController::class, 'deleteExperience']);
Route::post('/edit_Experience/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Experience']);
Route::get('/addExperience', [App\Http\Controllers\AdminsController::class, 'addExperience']);
Route::post('/add_Experience', [App\Http\Controllers\AdminsController::class, 'add_Experience']);
Route::get('/swapExperience/{id}', [App\Http\Controllers\AdminsController::class, 'swapExperience']);
Route::get('/swapBeach/{id}', [App\Http\Controllers\AdminsController::class, 'swapBeach']);


// Car
Route::get('/cars',[App\Http\Controllers\AdminsController::class, 'cars']);
Route::get('/editCar/{id}',[App\Http\Controllers\AdminsController::class, 'editCar']);
Route::get('/deleteCar/{id}',[App\Http\Controllers\AdminsController::class, 'deleteCar']);
Route::post('/edit_Car/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Car']);
Route::get('/addCar', [App\Http\Controllers\AdminsController::class, 'addCar']);
Route::post('/add_Car', [App\Http\Controllers\AdminsController::class, 'add_Car']);
Route::get('/swapCar/{id}', [App\Http\Controllers\AdminsController::class, 'swapCar']);

// Hotels
Route::get('/hotels',[App\Http\Controllers\AdminsController::class, 'hotels']);
Route::get('/editHotel/{id}',[App\Http\Controllers\AdminsController::class, 'editHotel']);
Route::get('/deleteHotel/{id}',[App\Http\Controllers\AdminsController::class, 'deleteHotel']);
Route::post('/edit_Hotel/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Hotel']);
Route::get('/addHotel', [App\Http\Controllers\AdminsController::class, 'addHotel']);
Route::post('/add_Hotel', [App\Http\Controllers\AdminsController::class, 'add_Hotel']);
Route::get('/swapHotel/{id}', [App\Http\Controllers\AdminsController::class, 'swapHotel']);

// Rooms
Route::get('/rooms',[App\Http\Controllers\AdminsController::class, 'rooms']);
Route::get('/rooms/{id}',[App\Http\Controllers\AdminsController::class, 'room']);
Route::get('/editRoom/{id}',[App\Http\Controllers\AdminsController::class, 'editRoom']);
Route::get('/deleteRoom/{id}',[App\Http\Controllers\AdminsController::class, 'deleteRoom']);
Route::post('/edit_Room/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Room']);
Route::get('/addRoom', [App\Http\Controllers\AdminsController::class, 'addRoom']);
Route::post('/add_Room', [App\Http\Controllers\AdminsController::class, 'add_Room']);
Route::get('/swapRoom/{id}', [App\Http\Controllers\AdminsController::class, 'swapRoom']);

// Guides
Route::get('/guides',[App\Http\Controllers\AdminsController::class, 'guides']);
Route::get('/editGuide/{id}',[App\Http\Controllers\AdminsController::class, 'editGuide']);
Route::get('/deleteGuide/{id}',[App\Http\Controllers\AdminsController::class, 'deleteGuide']);
Route::post('/edit_Guide/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Guide']);
Route::get('/addGuide', [App\Http\Controllers\AdminsController::class, 'addGuide']);
Route::post('/add_Guide', [App\Http\Controllers\AdminsController::class, 'add_Guide']);
Route::get('/swapGuide/{id}', [App\Http\Controllers\AdminsController::class, 'swapGuide']);

// Itineries
Route::get('/itineries',[App\Http\Controllers\AdminsController::class, 'itineries']);
Route::get('/editItinery/{id}',[App\Http\Controllers\AdminsController::class, 'editItinery']);
Route::get('/deleteItinery/{id}',[App\Http\Controllers\AdminsController::class, 'deleteItinery']);
Route::post('/edit_Itinery/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Itinery']);
Route::get('/addItinery/{type}', [App\Http\Controllers\AdminsController::class, 'addItinery']);
Route::post('/add_Itinery', [App\Http\Controllers\AdminsController::class, 'add_Itinery']);


//Events Controls
Route::get('/events',[App\Http\Controllers\AdminsController::class, 'events']);
Route::get('/editEvent/{id}',[App\Http\Controllers\AdminsController::class, 'editEvent']);
Route::get('/delete_Event/{id}',[App\Http\Controllers\AdminsController::class, 'delete_Event']);
Route::post('/edit_Event/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Event']);
Route::get('/addEvent', [App\Http\Controllers\AdminsController::class, 'addEvent']);
Route::post('/add_Event', [App\Http\Controllers\AdminsController::class, 'add_Event']);
Route::get('/swapevent/{id}', [App\Http\Controllers\AdminsController::class, 'swapevent']);

//Admin
Route::get('/admins',[App\Http\Controllers\AdminsController::class, 'admins']);
Route::get('/editAdmin/{id}',[App\Http\Controllers\AdminsController::class, 'editAdmin']);
Route::get('/deleteAdmin/{id}',[App\Http\Controllers\AdminsController::class, 'deleteAdmin']);
Route::post('/edit_Admin/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Admin']);
Route::get('/addAdmin', [App\Http\Controllers\AdminsController::class, 'addAdmin']);
Route::post('/add_Admin', [App\Http\Controllers\AdminsController::class, 'add_Admin']);

//Certificates
Route::get('/certs',[App\Http\Controllers\AdminsController::class, 'certs']);
Route::get('/editCert/{id}',[App\Http\Controllers\AdminsController::class, 'editCert']);
Route::get('/deleteCert/{id}',[App\Http\Controllers\AdminsController::class, 'deleteCert']);
Route::post('/edit_Cert/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Cert']);
Route::get('/addCert', [App\Http\Controllers\AdminsController::class, 'addCert']);
Route::post('/add_Cert', [App\Http\Controllers\AdminsController::class, 'add_Cert']);

//User
Route::get('/users',[App\Http\Controllers\AdminsController::class, 'users']);
Route::get('/editUser/{id}',[App\Http\Controllers\AdminsController::class, 'editUser']);
Route::get('/deleteUser/{id}',[App\Http\Controllers\AdminsController::class, 'deleteUser']);
Route::post('/edit_User/{id}', [App\Http\Controllers\AdminsController::class, 'edit_User']);
Route::get('/addUser', [App\Http\Controllers\AdminsController::class, 'addUser']);
Route::post('/add_User', [App\Http\Controllers\AdminsController::class, 'add_User']);

//Blog Controls
Route::get('/blog',[App\Http\Controllers\AdminsController::class, 'blog']);
Route::get('/editBlog/{id}',[App\Http\Controllers\AdminsController::class, 'editBlog']);
Route::get('/delete_Blog/{id}',[App\Http\Controllers\AdminsController::class, 'delete_Blog']);
Route::post('/edit_Blog/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Blog']);
Route::get('/addBlog', [App\Http\Controllers\AdminsController::class, 'addBlog']);
Route::post('/add_Blog', [App\Http\Controllers\AdminsController::class, 'add_Blog']);

//Categories Control
Route::get('/categories',[App\Http\Controllers\AdminsController::class, 'categories']);
Route::get('/editCategories/{id}',[App\Http\Controllers\AdminsController::class, 'editCategories']);
Route::get('/deleteCategory/{id}',[App\Http\Controllers\AdminsController::class, 'deleteCategory']);
Route::post('/edit_Category/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Category']);
Route::get('/addCategory', [App\Http\Controllers\AdminsController::class, 'addCategory']);
Route::post('/add_Category', [App\Http\Controllers\AdminsController::class, 'add_Category']);

// Car Types
Route::get('/cartypes',[App\Http\Controllers\AdminsController::class, 'cartypes']);
Route::get('/editCarType/{id}',[App\Http\Controllers\AdminsController::class, 'editCarType']);
Route::post('/edit_CarType/{id}', [App\Http\Controllers\AdminsController::class, 'edit_CarType']);



//Instructors Control
Route::get('/teachers',[App\Http\Controllers\AdminsController::class, 'teachers']);
Route::get('/editTeacher/{id}',[App\Http\Controllers\AdminsController::class, 'editTeacher']);
Route::get('/deleteTeacher/{id}',[App\Http\Controllers\AdminsController::class, 'deleteTeacher']);
Route::post('/edit_Teacher/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Teacher']);
Route::get('/addTeacher', [App\Http\Controllers\AdminsController::class, 'addTeacher']);
Route::post('/add_Teacher', [App\Http\Controllers\AdminsController::class, 'add_Teacher']);

//Service Renreded Control
Route::get('/service_rendered',[App\Http\Controllers\AdminsController::class, 'service_rendered']);
Route::get('/editService_rendered/{id}',[App\Http\Controllers\AdminsController::class, 'editService_rendered']);
Route::get('/deleteService_rendered/{id}',[App\Http\Controllers\AdminsController::class, 'deleteService_rendered']);
Route::post('/edit_Service_rendered/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Service_rendered']);
Route::get('/addService_rendered', [App\Http\Controllers\AdminsController::class, 'addService_rendered']);
Route::post('/add_Service_rendered', [App\Http\Controllers\AdminsController::class, 'add_Service_rendered']);

//Daily
Route::get('/daily',[App\Http\Controllers\AdminsController::class, 'daily']);
Route::get('/editDaily/{id}',[App\Http\Controllers\AdminsController::class, 'editDaily']);
Route::get('/deleteDaily/{id}',[App\Http\Controllers\AdminsController::class, 'deleteDaily']);
Route::post('/edit_Daily/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Daily']);
Route::get('/addDaily', [App\Http\Controllers\AdminsController::class, 'addDaily']);
Route::post('/add_Daily', [App\Http\Controllers\AdminsController::class, 'add_Daily']);

//Daily
Route::get('/curriculum',[App\Http\Controllers\AdminsController::class, 'curriculum']);
Route::get('/material',[App\Http\Controllers\AdminsController::class, 'material']);
Route::post('/edit_curriculum/{id}', [App\Http\Controllers\AdminsController::class, 'edit_curriculum']);
Route::post('/edit_material/{id}', [App\Http\Controllers\AdminsController::class, 'edit_material']);
Route::get('/editCurriculum/{id}', [App\Http\Controllers\AdminsController::class, 'editCurriculum']);
Route::get('/editMaterial/{id}', [App\Http\Controllers\AdminsController::class, 'editMaterial']);
Route::get('/addCurriculum', [App\Http\Controllers\AdminsController::class, 'addCurriculum']);
Route::get('/addMaterial', [App\Http\Controllers\AdminsController::class, 'addMaterial']);
Route::post('/add_curriculum', [App\Http\Controllers\AdminsController::class, 'add_curriculum']);
Route::post('/add_material', [App\Http\Controllers\AdminsController::class, 'add_material']);
Route::get('/deleteMaterial/{id}', [App\Http\Controllers\AdminsController::class, 'deleteMaterial']);
Route::get('/deleteCurriculum/{id}', [App\Http\Controllers\AdminsController::class, 'deleteCurriculum']);

// Lessons & Topics
Route::get('/addLessons', [App\Http\Controllers\AdminsController::class, 'addLessons']);
Route::get('/addTopic', [App\Http\Controllers\AdminsController::class, 'addTopic']);
Route::post('/add_Lessons', [App\Http\Controllers\AdminsController::class, 'add_Lessons']);
Route::post('/add_Topic', [App\Http\Controllers\AdminsController::class, 'add_Topic']);
Route::post('/edit_topic/{id}', [App\Http\Controllers\AdminsController::class, 'edit_topic']);
Route::get('/editLesson/{id}', [App\Http\Controllers\AdminsController::class, 'editLesson']);
Route::get('/editTopic/{id}', [App\Http\Controllers\AdminsController::class, 'editTopic']);
Route::post('/edit_lesson/{id}', [App\Http\Controllers\AdminsController::class, 'edit_lesson']);
Route::get('/deleteLesson/{id}', [App\Http\Controllers\AdminsController::class, 'deleteLesson']);
Route::get('/deleteTopics/{id}', [App\Http\Controllers\AdminsController::class, 'deleteTopics']);
Route::get('/lessons',[App\Http\Controllers\AdminsController::class, 'lessons']);
Route::get('/topics',[App\Http\Controllers\AdminsController::class, 'topics']);

//Orders
Route::get('/orders',[App\Http\Controllers\AdminsController::class, 'orders']);
Route::get('/editOrders/{id}',[App\Http\Controllers\AdminsController::class, 'editOrders']);
Route::get('/deleteOrders/{id}',[App\Http\Controllers\AdminsController::class, 'deleteOrders']);
Route::get('/confrimOrder/{id}',[App\Http\Controllers\AdminsController::class, 'confrimOrder']);
Route::get('/swapOrder/{id}',[App\Http\Controllers\AdminsController::class, 'swapOrder']);
Route::post('/edit_Orders/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Orders']);
Route::get('/addOrder', [App\Http\Controllers\AdminsController::class, 'addOrder']);
Route::post('/add_Order', [App\Http\Controllers\AdminsController::class, 'add_Order']);
Route::get('/orders/explore/{id}',[App\Http\Controllers\AdminsController::class, 'order_explore']);

//Sub Categories
Route::get('/subCategories',[App\Http\Controllers\AdminsController::class, 'subCategories']);
Route::get('/editSubCategories/{id}',[App\Http\Controllers\AdminsController::class, 'editSubCategories']);
Route::get('/deleteSubCategory/{id}',[App\Http\Controllers\AdminsController::class, 'deleteSubCategory']);
Route::post('/edit_SubCategory/{id}', [App\Http\Controllers\AdminsController::class, 'edit_SubCategory']);
Route::get('/addSubCategory', [App\Http\Controllers\AdminsController::class, 'addSubCategory']);
Route::post('/add_SubCategory', [App\Http\Controllers\AdminsController::class, 'add_SubCategory']);

//Active Services
Route::get('/traceServices',[App\Http\Controllers\AdminsController::class, 'traceServices']);
Route::get('/editTraceServices/{id}',[App\Http\Controllers\AdminsController::class, 'editTraceServices']);
Route::get('/deleteTraceServices/{id}',[App\Http\Controllers\AdminsController::class, 'deleteTraceServices']);
Route::post('/edit_TraceServices/{id}', [App\Http\Controllers\AdminsController::class, 'edit_TraceServices']);
Route::get('/addTraceServices', [App\Http\Controllers\AdminsController::class, 'addTraceServices']);
Route::post('/add_TraceServices', [App\Http\Controllers\AdminsController::class, 'add_TraceServices']);

// Generic Routes
Route::get('/form',[App\Http\Controllers\AdminsController::class, 'form']);
Route::get('/list',[App\Http\Controllers\AdminsController::class, 'list']);
Route::get('/formfile',[App\Http\Controllers\AdminsController::class, 'formfile']);
Route::get('/formfiletext',[App\Http\Controllers\AdminsController::class, 'formfiletext']);

//Payments
Route::get('/payments',[App\Http\Controllers\AdminsController::class, 'payments']);
Route::get('/approvepay/{id}/{status}',[App\Http\Controllers\AdminsController::class, 'approvepay']);
Route::get('/registrations',[App\Http\Controllers\AdminsController::class, 'registrations']);


//Notifications
Route::get('/notifications',[App\Http\Controllers\AdminsController::class, 'notifications']);
Route::get('/notification/{id}',[App\Http\Controllers\AdminsController::class, 'notification']);

//Service Requests
Route::get('/requests',[App\Http\Controllers\AdminsController::class, 'quoterequeste']);
Route::get('/markRequest/{id}/{status}/{type}',[App\Http\Controllers\AdminsController::class, 'markRequest']);

//Comments
Route::get('/comments',[App\Http\Controllers\AdminsController::class, 'comments']);
Route::get('/approve/{id}',[App\Http\Controllers\AdminsController::class, 'approve']);
Route::get('/decline/{id}',[App\Http\Controllers\AdminsController::class, 'decline']);

// Error Pages
Route::get('/403',[App\Http\Controllers\AdminsController::class, 'error403']);
Route::get('/404',[App\Http\Controllers\AdminsController::class, 'error404']);
Route::get('/405',[App\Http\Controllers\AdminsController::class, 'error405']);
Route::get('/500',[App\Http\Controllers\AdminsController::class, 'error500']);
Route::get('/503',[App\Http\Controllers\AdminsController::class, 'error503']);

//Updates
Route::get('/updates',[App\Http\Controllers\AdminsController::class, 'updates']);
Route::get('/update/{id}',[App\Http\Controllers\AdminsController::class, 'update']);
Route::get('/mark/{id}',[App\Http\Controllers\AdminsController::class, 'mark']);

// Gallery
Route::get('/gallery',[App\Http\Controllers\AdminsController::class, 'gallery']);

//Under Contruction
Route::get('/under_construction',[App\Http\Controllers\AdminsController::class, 'under_construction']);

//Wizard
Route::get('/wizard',[App\Http\Controllers\AdminsController::class, 'wizard']);

//Maps
Route::get('/maps',[App\Http\Controllers\AdminsController::class, 'maps']);
// SiteSettings
Route::get('/sitesettings',[App\Http\Controllers\AdminsController::class, 'sitesettings']);
Route::post('/savesitesettings',[App\Http\Controllers\AdminsController::class, 'savesitesettings']);
//Messages
Route::get('/allMessages', [App\Http\Controllers\AdminsController::class, 'allMessages']);
Route::get('/unread', [App\Http\Controllers\AdminsController::class, 'unread']);
Route::get('/read/{id}', [App\Http\Controllers\AdminsController::class, 'read']);
Route::post('/reply/{id}', [App\Http\Controllers\AdminsController::class, 'reply']);
Route::get('/deleteMessage/{id}', [App\Http\Controllers\AdminsController::class, 'deleteMessage']);

//Subscribers
Route::get('/subscribers', [App\Http\Controllers\AdminsController::class, 'subscribers']);
Route::get('/mailSubscribers/{email}', [App\Http\Controllers\AdminsController::class, 'mailSubscribers']);
Route::get('/mailSubscriber/{email}', [App\Http\Controllers\AdminsController::class, 'mailSubscriber']);
Route::get('/deleteSubscriber/{id}', [App\Http\Controllers\AdminsController::class, 'deleteSubscriber']);

//Exams System
Route::get('/exam', [App\Http\Controllers\AdminsController::class, 'exams']);
Route::get('/questions/{id}', [App\Http\Controllers\AdminsController::class, 'questions']);
Route::get('/editQuestions/{id}', [App\Http\Controllers\AdminsController::class, 'editQuestions']);
Route::post('/edit_Questions/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Questions']);
Route::get('/results', [App\Http\Controllers\AdminsController::class, 'results']);
Route::get('/action/{id}', [App\Http\Controllers\AdminsController::class, 'action']);
Route::get('/addQuestion/{quiz_id}', [App\Http\Controllers\AdminsController::class, 'addQuestion']);
Route::post('/add_Questions', [App\Http\Controllers\AdminsController::class, 'add_Questions']);

// Sessions Monitoring
Route::get('/checkSessions', [App\Http\Controllers\AdminsController::class, 'checkSessions']);

// Delete image
Route::get('/deleteImage/{id}/{image}/{table}', [App\Http\Controllers\AdminsController::class, 'deleteImage']);

});
