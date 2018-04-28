<?php
use \App\Test; 
use App\User;

/* User Authentication */
    Route::get('/users/login', 'Auth\AuthController@getLogin');
    Route::post('/users/login', 'Auth\AuthController@postLogin');
    Route::get('/users/logout', 'Auth\AuthController@getLogout');
    Route::get('/users/register', 'Auth\AuthController@getRegister');
    Route::post('/users/register', 'Auth\AuthController@postRegister');
    Route::any('expert/fileentry/get/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get']);
    Route::get('/password/email','Auth\PasswordController@getEmail');
    Route::post('/password/email','Auth\PasswordController@postEmail');
    Route::get('/password/reset/{token}','Auth\PasswordController@getReset');
    Route::post('/password/reset','Auth\PasswordController@postReset');
    Route::get('/next-page','AssignmentController@postplaceform');

    /* SocialLogin */
    Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

    Route::get('/sitemap.xml',function()
    {
    return view('sitemap');
    });

    Route::get('/checkt',function()
    {
    dd('Hio this is good');
    });

    /*Route::get('/password/email', function()
    {
    return View('users.forget-password');
    });

    Route::post('/retrive-forgotten-password','UserController@retrieveForgottenPassword');*/

/*  **End User Authentication**  */ 

    Route::get('/malaysia',function()
    {
    return view('main-site-pages.services-in-country.services-in-malaysia');     
    });
    Route::get('/UnitedKingdom',function()
    {
    return view('main-site-pages.services-in-country.services-in-uk');     
    });
    Route::get('/UnitedStatesAmerica',function()
    {
    return view('main-site-pages.services-in-country.services-in-us');     
    });
    Route::get('/NewZealand',function()
    {
    return view('main-site-pages.services-in-country.services-in-nz');     
    });
    Route::get('/canada',function()
    {
    return view('main-site-pages.services-in-country.services-in-canada');     
    });
    Route::get('/singapore',function()
    {
    return view('main-site-pages.services-in-country.services-in-singapore');     
    });
    Route::get('/world',function()
    {
    return view('main-site-pages.services-in-country.services-in-world');     
    });
    Route::get('/australia',function()
    {
    return view('main-site-pages.services-in-country.services-in-aus');     
    });
    Route::get('/UnitedArabEmirates',function()
    {
    return view('main-site-pages.services-in-country.services-in-uae');     
    });
    Route::any('/test',function()
    {
    return view('testing');     
    });

    Route::get('/samples','AdminControllers\SampleController@getSampleData');
    Route::get('/samples/{id}','AdminControllers\SampleController@getWholeSampleData');

    Route::get('/competiton-act',function()
    {
    return view('main-site-pages.samples.sample-pages.competiton-act');     
    });
    Route::get('/introduction-to-law',function()
    {
    return view('main-site-pages.samples.sample-pages.introduction-to-law');     
    });
    Route::get('/sustainable-development',function()
    {
    return view('main-site-pages.samples.sample-pages.sustainable-development');     
    }); 
    Route::get('/business-environment',function()
    {
    return view('main-site-pages.samples.sample-pages.business-environment');     
    });
    Route::get('/btec-bussiness-module',function()
    {
    return view('main-site-pages.samples.sample-pages.btec-bussiness-module');     
    });

    /*Route::get('/btec-bussiness-module',function()
    {
           return view('main-site-pages.samples.sample-pages.btec-bussiness-module');     
    });
    Route::get('/btec-bussiness-module',function()
    {
           return view('main-site-pages.samples.sample-pages.btec-bussiness-module');     
    });
    Route::get('/btec-bussiness-module',function()
    {
           return view('main-site-pages.samples.sample-pages.btec-bussiness-module');     
    });*/

    Route::get('/', function() 
    {
    return View('/welcome');
    });

    Route::get('/email-subscriber','MainSitePageController@emailSubscriber');
    Route::post('/query-email-sent-onpage','MainSitePageController@queryEmailFromFooterSitePage');
    //  Route::get('/query-email-sent-oninner','MainSitePageController@queryEmailFromRightsidebarSitePage');

/* Service Url on dashboard */
    Route::get('/project-management-help', function () {
    return view('/main-site-pages.services.project-management-help');
    });
    Route::get('/market-analysis-assignment-help', function () {
    return view('/main-site-pages.services.market-analysis-assignment-help');
    });
    Route::get('/market-research-assignment-help', function () {
    return view('/main-site-pages.services.market-research-assignment-help');
    });
    Route::get('/management-assignment-help', function () {
    return view('/main-site-pages.services.management-assignment-help');
    });
    Route::get('/hospitality-management', function () {
    return view('/main-site-pages.services.hospitality-management');
    });
    Route::get('/computer-assignment', function () {
    return view('/main-site-pages.services.computer-assignment');
    });
    Route::get('/assignment-writing-help', function () {
    return view('/main-site-pages.services.assignment-writing-help');
    });               
    Route::get('/make-my-assignments', function () {
    return view('/main-site-pages.services.make-my-assignments');
    });            
    Route::get('/write-assignment-for-me', function () {
    return view('/main-site-pages.services.write-assignment-for-me');
    });                     
    Route::get('/computer-programming-help', function () {
    return view('/main-site-pages.services.computer-programming-help');
    });
    Route::get('/data-base-management-system', function () {
    return view('/main-site-pages.services.data-base-management-system');
    });
    Route::get('/information-system', function () {
    return view('/main-site-pages.services.information-system');
    });
    Route::get('/content-management-system', function () {
    return view('/main-site-pages.services.content-management-system');
    });
    Route::get('/dbms', function () {
    return view('/main-site-pages.services.dbms');
    });
    Route::get('/email-marketing', function () {
    return view('/main-site-pages.services.email-marketing');
    });
    Route::get('/compaign-management', function () {
    return view('/main-site-pages.services.compaign-management');
    });
    Route::get('/press-release', function () {
    return view('/main-site-pages.services.press-release');
    });
    Route::get('/social-media-marketing', function () {
    return view('/main-site-pages.services.social-media-marketing');
    });
    Route::get('/search-engine-optimization', function () {
    return view('/main-site-pages.services.search-engine-optimization');
    });
    Route::get('/road-show-marketing', function () {
    return view('/main-site-pages.services.road-show-marketing');
    });
    Route::get('/intro-to-datastructure', function () {
    return view('/main-site-pages.services.intro-to-datastructure');
    });
    Route::get('/intro-to-php', function () {
    return view('/main-site-pages.services.intro-to-php');
    });
    Route::get('/project-management-help', function () {
    return view('/main-site-pages.services.project-management-help');
    });
    Route::get('/intro-to-js', function () {
    return view('/main-site-pages.services.intro-to-js');
    });
    Route::get('/intro-to-dotnet', function () {
    return view('/main-site-pages.services.intro-to-dotnet');
    });
    Route::get('/intro-to-C-programming', function () {
    return view('/main-site-pages.services.intro-to-c-programming');
    });
    Route::get('/manual-testing-vs-automation-testing', function () {
    return view('/main-site-pages.services.manual-testing-vs-automation-testing');
    });
    Route::get('/performance-testing', function () {
    return view('/main-site-pages.services.performance-testing');
    });
    Route::get('/blackbox-vs-whitebox-testing', function () {
    return view('/main-site-pages.services.blackbox-vs-whitebox-testing');
    });
    Route::get('/functional-testing', function () {
    return view('/main-site-pages.services.functional-testing');
    });
    Route::get('/regression-testing', function () {
    return view('/main-site-pages.services.regression-testing');
    });
    Route::get('/academic-writing-services', function () {
    return view('/main-site-pages.services.academic-writing-services');
    });
    Route::get('/cheap-assignment-writing-services', function () {
    return view('/main-site-pages.services.cheap-assignment-writing-services');
    });
    Route::get('/best-assignment-writing-services', function () {
    return view('/main-site-pages.services.best-assignment-writing-services');
    });
    Route::get('/technical-writing-services', function () {
    return view('/main-site-pages.services.technical-writing-services');
    });
    Route::get('/best-assignment-help', function () {
    return view('/main-site-pages.services.best-assignment-help');
    });
    Route::get('/article-writing-help', function () {
    return view('/main-site-pages.services.article-writing-help');
    });
    Route::get('/best-writing-experts', function () {
    return view('/main-site-pages.services.best-writing-experts');
    });  
    Route::get('/article-writing-services', function () {
    return view('/main-site-pages.services.article-writing-services');
    });
    Route::get('/assignment-help', function () {
    return view('/main-site-pages.services.assignment-help');
    });
    Route::get('/dissertation-help', function () {
    return view('/main-site-pages.services.dissertation-help');
    });
    Route::get('/dissertation-writing-services', function () {
    return view('/main-site-pages.services.dissertation-writing-services');
    });
    Route::get('/economics', function () {
    return view('/main-site-pages.services.economics');
    });
    Route::get('/essay-help', function () {
    return view('/main-site-pages.services.essay-help');
    });
    Route::get('/essay-writing-services', function () {
    return view('/main-site-pages.services.essay-writing-services');
    });
    Route::get('/finance', function () {
    return view('/main-site-pages.services.finance');
    });
    Route::get('/thesis-writing-services', function () {
    return view('/main-site-pages.services.thesis-writing-services');
    });
    Route::get('/management', function () {
    return view('/main-site-pages.services.management-studies');
    });
    Route::get('/computer-engineering', function () {
    return view('/main-site-pages.services.computer-engineering');
    });
    Route::get('/software-testing', function () {
    return view('/main-site-pages.services.software-testing');
    });
    Route::get('/academic-assignment-writing-services', function () {
    return view('/main-site-pages.services.academic-assignment-writing-services');
    });
    Route::get('/assignment-expert', function () {
    return view('/main-site-pages.services.assignment-expert');
    });
    Route::get('/assignment-writing-services', function () {
    return view('/main-site-pages.services.assignment-writing-services');
    });
    Route::get('/business-case-study-help', function () {
    return view('/main-site-pages.services.business-case-study-help');
    });
    Route::get('/business-development-assignment-help', function () {
    return view('/main-site-pages.services.business-development-assignment-help');
    });
    Route::get('/case-study-assignment-help', function () {
    return view('/main-site-pages.services.case-study-assignment-help');
    });
    Route::get('/case-study-help', function () {
    return view('/main-site-pages.services.case-study-help');
    });
    Route::get('/classification-essay', function () {
    return view('/main-site-pages.services.classification-essay');
    });
    Route::get('/collage-case-study-help', function () {
    return view('/main-site-pages.services.collage-case-study-help');
    });
    Route::get('/collage-essay-help', function () {
    return view('/main-site-pages.services.collage-essay-help');
    });
    Route::get('/computer-programming-assignment-help', function () {
    return view('/main-site-pages.services.computer-programming-assignment-help');
    });
    Route::get('/custom-essay-writing-help', function () {
    return view('/main-site-pages.services.custom-essay-writing-help');
    });
    Route::get('/database-management-assignment-help', function () {
    return view('/main-site-pages.services.database-management-assignment-help');
    });
    Route::get('/data-structure-assignment-help', function () {
    return view('/main-site-pages.services.data-structure-assignment-help');
    });
    Route::get('/deductive-essay', function () {
    return view('/main-site-pages.services.deductive-essay');
    });
    Route::get('/essay-type', function () {
    return view('/main-site-pages.services.essay-type');
    });
    Route::get('/essay-writers', function () {
    return view('/main-site-pages.services.essay-writers');
    });
    Route::get('/essay-writing-A-to-Z', function () {
    return view('/main-site-pages.services.essay-writing-A-to-Z');
    });
    Route::get('/essay-writing-tips', function () {
    return view('/main-site-pages.services.essay-writing-tips');
    });
    Route::get('/evaluative-essay', function () {
    return view('/main-site-pages.services.evaluative-essay');
    });
    Route::get('/format-for-writing-academic-essays', function () {
    return view('/main-site-pages.services.format-for-writing-academic-essays');
    });
    Route::get('/format-of-case-study-analysis', function () {
    return view('/main-site-pages.services.format-of-case-study-analysis');
    });
    Route::get('/guidelines-for-writing-proper-assignment-answers', function () {
    return view('/main-site-pages.services.guidelines-for-writing-proper-assignment-answers');
    });
    Route::get('/academic-essays', function () {
    return view('/main-site-pages.services.academic-essays');
    });
    Route::get('/human-resource-management-assignment-help', function () {
    return view('/main-site-pages.services.human-resource-management-assignment-help');
    });
    Route::get('/informal-essay', function () {
    return view('/main-site-pages.services.informal-essay');
    });
    Route::get('/information-technology-assignment-writing-help', function () {
    return view('/main-site-pages.services.information-technology-assignment-writing-help');
    });
    Route::get('/law', function () {
    return view('/main-site-pages.services.law-case-study-help');
    });
    Route::get('/literature-essay', function () {
    return view('/main-site-pages.services.literature-essay');
    });
    Route::get('/management-studies-help', function () {
    return view('/main-site-pages.services.management-studies-help');
    });
    Route::get('/market-analysis-assignment-writing-help', function () {
    return view('/main-site-pages.services.market-analysis-assignment-writing-help');
    });
    Route::get('/marketing-assignment-writing-help', function () {
    return view('/main-site-pages.services.marketing-assignment-writing-help');
    });
    Route::get('/operations-management-assignment-help', function () {
    return view('/main-site-pages.services.operations-management-assignment-help');
    });
    Route::get('/organisational-behavioural-case-study-help', function () {
    return view('/main-site-pages.services.organisational-behavioural-case-study-help');
    });
    Route::get('/organization-behavioural-assignment-help', function () {
    return view('/main-site-pages.services.organization-behavioural-assignment-help');
    });
    Route::get('/persuasive-essay', function () {
    return view('/main-site-pages.services.persuasive-essay');
    });
    Route::get('/programming', function () {
    return view('/main-site-pages.services.programming-language-assignment-help');
    });
    Route::get('/assignment-help', function () {
    return view('/main-site-pages.services.assignment-help');
    });
    Route::get('/public-relations-management-assignment-help', function () {
    return view('/main-site-pages.services.public-relations-management-assignment-help');
    });
    Route::get('/technical-assignment-writing-services', function () {
    return view('/main-site-pages.services.technical-assignment-writing-services');
    });
    Route::get('/three-layers-of-essay-writing', function () {
    return view('/main-site-pages.services.three-layers-of-essay-writing');
    }); 
    Route::get('/essay-help-writing', function () {
    return view('/main-site-pages.services.essay-help-writing');
    });
    Route::get('/other-services', function () {
    return view('/main-site-pages.services.other-services');
    });
    Route::get('/types-of-essay', function () {
    return view('/main-site-pages.services.types-of-essay');
    });
/* End of Services Url */

/* * **Header Urls****** */
    Route::get('/contact-us', function () {
    return view('/main-site-pages.contact-us.contact-us');
    });
    Route::get('/about-us', function () {
    return view('/main-site-pages.about-us.about-us');
    });
    Route::get('/subjects', function () {
    return view('/main-site-pages.subjects.subjects');
    });
    Route::get('/faq', function () {
    return view('/main-site-pages.faq.faq');
    });
    Route::get('/privacy-policy', function () {
    return view('/main-site-pages.privacy-policy.privacy-policy');
    });
    Route::get('/revision-and-refund-policy', function () {
    return view('/main-site-pages.revision-and-refund-policy.revision-and-refund-policy');
    });
    Route::get('/terms-of-use', function () {
    return view('/main-site-pages.terms-of-use.terms-of-use');
    });
    Route::get('/offers', function () {
    return view('/main-site-pages.offers.offers');
    });
    Route::get('/blogs', function () {
    return view('/main-site-pages.blogs.blogs');
    });
    Route::get('/place-order', function () {
    return view('/main-site-pages.place-order.place-order');
    });
/*  **End  Headers Urls** */

    Route::get('/403-forbidden/oops-not-autorized', function () {
    return view('errors.403');
    });

/* Blog pages */
    Route::get('/significance-of-HRM-for-an-organization-success', function () {
    return view('/main-site-pages.blogs.blog-pages.significance-of-HRM-for-an-organization-success');
    });
    Route::get('/work-life-balance', function () {
    return view('/main-site-pages.blogs.blog-pages.work-life-balance');
    });
    Route::get('/effects-of-brexit-on-the-UK-especially-the-nestle', function () {
    return view('/main-site-pages.blogs.blog-pages.effects-of-brexit-on-the-UK-especially-the-nestle');
    });
    Route::get('/effect-of-globalisation-on-organizations-value-chains', function () {
    return view('/main-site-pages.blogs.blog-pages.effect-of-globalisation-on-organizations-value-chains');
    });
    Route::get('/academic-help-blogs', function () {
    return view('/main-site-pages.blogs.blog-pages.academic-help-blogs');
    });
    Route::get('/assignment-help-blogs', function () {
    return view('/main-site-pages.blogs.blog-pages.assignment-help-blogs');
    });
    Route::get('/dissertation-help-blogs', function () {
    return view('/main-site-pages.blogs.blog-pages.dissertation-help-blogs');
    });
    Route::get('/essay-help-blogs', function () {
    return view('/main-site-pages.blogs.blog-pages.essay-help-blogs');
    });
/* end Blog pages */

/* Start ASSIGNMENT BY CITIES Url */
    Route::get('/canberra',function(){
    return view('main-site-pages.services-in-cities.services-in-canberra');     
    });
    Route::get('/adelaide',function(){
    return view('main-site-pages.services-in-cities.services-in-adelaide');     
    });
    Route::get('/brisbane',function(){
    return view('main-site-pages.services-in-cities.services-in-brisbane ');     
    });
    Route::get('/melbourne',function(){
    return view('main-site-pages.services-in-cities.services-in-melbourne');     
    });
    Route::get('/sydney',function(){
    return view('main-site-pages.services-in-cities.services-in-sydney');     
    });
    Route::get('/darwin',function(){
    return view('main-site-pages.services-in-cities.services-in-darwin');     
    });
    Route::get('/gold-coast',function(){
    return view('main-site-pages.services-in-cities.services-in-gold-coast');     
    });
    Route::get('/perth',function(){
    return view('main-site-pages.services-in-cities.services-in-perth');     
    });
    Route::get('/toowoomba',function(){
    return view('main-site-pages.services-in-cities.services-in-toowoomba');     
    });
    Route::get('/manchester',function(){
    return view('main-site-pages.services-in-cities.services-in-manchester');     
    });
    Route::get('/croydon',function(){
    return view('main-site-pages.services-in-cities.services-in-croydon');     
    });
    Route::get('/newcastle',function(){
    return view('main-site-pages.services-in-cities.services-in-newcastle');     
    });
    Route::get('/wollongong',function(){
    return view('main-site-pages.services-in-cities.services-in-wollongong');     
    });
    Route::get('/london',function(){
    return view('main-site-pages.services-in-cities.services-in-london');     
    });
    Route::get('/birmingham',function(){
    return view('main-site-pages.services-in-cities.services-in-birmingham');     
    });
    Route::get('/liverpool',function(){
    return view('main-site-pages.services-in-cities.services-in-liverpool');     
    });
    Route::get('/leeds',function(){
    return view('main-site-pages.services-in-cities.services-in-leeds');     
    });
    Route::get('/sheffield',function(){
    return view('main-site-pages.services-in-cities.services-in-sheffield');     
    });
    Route::get('/los-angeles',function(){
    return view('main-site-pages.services-in-cities.services-in-los-angeles');     
    });
    Route::get('/luton',function(){
    return view('main-site-pages.services-in-cities.services-in-luton');     
    });
    Route::get('/washington',function(){
    return view('main-site-pages.services-in-cities.services-in-washington');     
    });
    Route::get('/leicester',function(){
    return view('main-site-pages.services-in-cities.services-in-leicester');     
    });
    Route::get('/houston',function(){
    return view('main-site-pages.services-in-cities.services-in-houston');     
    });
    Route::get('/new-york',function(){
    return view('main-site-pages.services-in-cities.services-in-new-york');     
    });
    Route::get('/chicago',function(){
    return view('main-site-pages.services-in-cities.services-in-chicago');     
    });
    Route::get('/lawton',function(){
    return view('main-site-pages.services-in-cities.services-in-lawton');     
    });
    Route::get('/sharjah',function(){
    return view('main-site-pages.services-in-cities.services-in-sharjah');     
    });
    Route::get('/al-ain',function(){
    return view('main-site-pages.services-in-cities.services-in-al-ain');     
    });
    Route::get('/fujairah',function(){
    return view('main-site-pages.services-in-cities.services-in-fujairah');     
    });
    Route::get('/abu-dhabi',function(){
    return view('main-site-pages.services-in-cities.services-in-abu-dhabi');     
    });
    Route::get('/dubai',function(){
    return view('main-site-pages.services-in-cities.services-in-dubai');     
    });
    Route::get('/toronto',function(){
    return view('main-site-pages.services-in-cities.services-in-toronto');     
    });
    Route::get('/auckland',function(){
    return view('main-site-pages.services-in-cities.services-in-auckland');     
    });
    Route::get('/kuala-lumpur',function(){
    return view('main-site-pages.services-in-cities.services-in-kuala-lumpur');     
    });
/* End ASSIGNMENT BY CITIES Url */   

/* **Authenticated User MiddleWare** */
    Route::any('add','FileEntryController@add');

    Route::group(['middleware' => 'auth'], function() 
    {
    Route::get('403-forbidden/are-you-authorize??', function () 
    {
    return view('errors.403');
    });

    Route::get('/users/dashboard', 'DashboardController@dashboardController');
    Route::get('/add-assignment', 'AssignmentController@addAssignment');
    Route::get('/my-assignment', 'AssignmentController@showAssignment');
    Route::get('/my-referral', 'ReferralController@getReferral');
    Route::any('/successful-payment', 'Amount\OrderController@onSuccessfulPayment');

    Route::any('/failed-payment', function()
    {
    return view('dashboard.payment-fail');
    });

    Route::any('/paypal-wallet-amount-success', 'Amount\WalletController@addAmountInWalletViaPaypal');
    Route::any('/paypal-wallet-amount-cancel', 'Amount\WalletController@cancelAmountInWalletViaPaypal');
    Route::post('/put/assignment/data', 'AssignmentController@putAssignmetData');
    ///Route::post('/submit-assignment-data', 'ReferralController@getReferral');    
    Route::get('/my-wallet', 'Amount\WalletController@showWalletPage');
    Route::get('/my-profile', 'UserController@myProfile');
    Route::post('/update-profile', 'UserController@updateProfile');
    Route::any('/pay-now', 'Amount\OrderController@paypalPayment');
    Route::any('/payment-order-submission/paynow', 'Amount\CheckoutController@onCheckoutPage');
    Route::get('/assignment-details/{id}', 'AssignmentController@showAssignmentDetails');
    Route::get('/assingment-details-for-admin/{id}', 'AdminControllers\AssignmentController@showAssignmentDetailsOnAdminSide');
    Route::post('/changecontact', 'AdminControllers\AssignmentController@changecontact'); 
    Route::get('/messages', 'AdminControllers\AssignmentController@commentdata');
    Route::get('/my-orders', 'Amount\OrderController@orderDetailsPageOnStudentSide');
    Route::get('/pending-assignments', 'AdminControllers\AssignmentController@showPendingAssignment');
    Route::get('/send-quick-mail', 'DashboardController@sendSmipleMail');
    Route::post('/newmodel', 'AdminControllers\AssignmentController@shownewmodel');
    Route::get('fileentry', 'FileEntryController@index');
    Route::get('fileentry/get/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get']);
    Route::get('fileentry/get1/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get1']);
    Route::get('fileentry/get_plagi/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get_plagi']);
    Route::get('fileentry/get_plagi1/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get_plagi1']);

    Route::get('/generate-token', 'BitSixAuthTokenController@generateTokenForBit6Authentication');
    Route::any('/check-order', 'SendResponseController@getAssignmentAsOrderId');
    Route::any('/check-order1', 'SendResponseController@getOrderId');
    Route::any('/return-successful-payment', 'Amount\OrderController@returnUrlOnSuccessfulPayment');
    Route::any('/return-cancel-payment', 'Amount\OrderController@returnUrlOnCancelPayment');

    /**Search **/
        Route::get('/search-order-id',      'SearchUserController@searchOrderId');
        //Route::get('/searach-assignment-id', 'SearchUserController@searchAssignmentId');
        Route::post('/comment-sent', 'CommentController@storeTextMessage');
    /**Search**/

    /*Authenticated User Web Service*/
        Route::any('/chekout-data-response', 'WebServices\CheckOutController@checkOutPageLoadFirstTime');
        Route::any('/chekout-data-response-onclick', 'WebServices\CheckOutController@checkOutPageafterFirstTime');
        Route::post('/get-currency-on-calculator', 'WebServices\CurrencyDataController@getCurrencyDataForCalculator');
        Route::any('/change/currency', 'WebServices\CheckOutController@changeCurrency');
    /* End of Authenticated User Web Service*/

    /* ****Admin Access Routes****  */
        Route::group(['middleware' => 'roleCheck'], function() 
        {
            // Route::get('/updateMoney', 'AdminControllers\UserController@updatemoney');
            Route::get('/currency-calculator', 'Amount\OrderController@getDataForCurrencyCalculation');
            Route::post('/send-mail-by-admin', 'NotificationController@sendMailForFastContact');
            Route::get('/get-token', 'Amount\PayPalToken@process_payment');
            Route::get('/plan-with-currency', 'AdminControllers\CurrencyController@getplanData');
            Route::post('/plan-with-currency', 'AdminControllers\CurrencyController@postPlanData');
            Route::any('/admin-check', 'AdminControllers\AdminDashboardController@getDashboardData');
            Route::any('/create-coupon', 'AdminControllers\CouponController@createCoupons');
            Route::post('/update-description', 'AdminControllers\AssignmentController@description');
            Route::get('/order-details-for-admin', 'Amount\OrderController@orderDetailsPageOnAdminSide');
            Route::get('/show-assignment-details/{id}', 'AdminControllers\AssignmentController@showAssignmentDetailsOnAdminSide');
            Route::get('/updateMoney', 'AdminControllers\UserController@updatemoney');
            Route::post('/sticky-note', 'AdminControllers\AssignmentController@stickyNote');
            Route::get('/complete-assignment', 'AdminControllers\AssignmentController@completeAssignment');
            Route::any('/show-students', 'AdminControllers\StudentController@showStudents');
            Route::any('/showtotal/{id}', 'AdminControllers\StudentController@ShowTotalAssignment');
            Route::any('/show-experts', 'AdminControllers\ExpertController@showExperts');
            Route::any('/show-completed-assignments', 'AdminControllers\AssignmentController@showCompletedAssignment');
            Route::any('/show', 'AdminControllers\AssignmentController@handle');
              Route::post('/send-mail-to-students', 'NotificationController@sendMailForstudentContact');
             Route::post('/refund', 'AdminControllers\AssignmentController@refundmoney');       

            Route::any('/plagi-show', 'AdminControllers\AssignmentController@plagiHandle');
            
            Route::any('/show-priority-assignments', 'AdminControllers\AssignmentController@showPriorityAssignment');
            Route::get('/assignment-request', 'AdminControllers\AssignmentController@showAssignmentRequest');
            Route::post('/DeleteSolution','AdminControllers\AssignmentController@DeleteSolution');
            Route::get('/expired-assignments', 'AdminControllers\AssignmentController@showExpiredAssignment');
            Route::post('/handleUploadadminside','AdminControllers\AssignmentController@handleUploadadminside');

            Route::get('/plagi-assignments', 'AdminControllers\AssignmentController@showPlagiAssignment');
            Route::post('/deletesolution',      'AdminControllers\AssignmentController@deletesolution');
    Route::get('/email-sub','AdminControllers\CallbackController@subs');
    Route::post('/delete-sub','AdminControllers\CallbackController@deletesubs');

            Route::get('/partial', 'AdminControllers\AssignmentController@partialAssignment');
            Route::get('/full', 'AdminControllers\AssignmentController@fullAssignment');
            Route::get('/clarification', 'AdminControllers\AssignmentController@clarificationAssignment');
            Route::get('/rework', 'AdminControllers\AssignmentController@reworkAssignment');
            Route::get('/failed', 'AdminControllers\AssignmentController@failedAssignment');
            Route::get('/paypal-link-generator', 'AdminControllers\PaypalController@generatepaypalLink');
            Route::post('/paypal-link', 'AdminControllers\PaypalController@postgeneratepaypalLink');

            Route::any('/delete-student', 'AdminControllers\StudentController@deleteStudent');
            Route::any('/block-student', 'AdminControllers\StudentController@blockStudent');
            Route::any('/unblock-student', 'AdminControllers\StudentController@unblockStudent');
            Route::get('/student-profile/{id}', 'AdminControllers\StudentController@showStudentProfile');
            Route::get('/test1', 'AdminControllers\StudentController@showAssignment');
            //Route::any('/delete-assignment/{id}', 'AdminControllers\AssignmentController@deleteAssignment');
            Route::any('/delete-assignments', 'AdminControllers\AssignmentController@deleteAssignments');
            Route::post('/student-profile/{id}', 'AdminControllers\StudentController@updateStudent');
            Route::get('/expert-profile/{id}', 'AdminControllers\ExpertController@showExpertProfile');
            Route::post('/test2', 'AdminControllers\StudentController@ShowAssignmentByDate');
            Route::post('/expert-profile/{id}', 'AdminControllers\ExpertController@updateExpert');
            Route::get('/on-my-profile/{id}', 'AdminControllers\UserController@showAdminProfile');
            Route::post('/on-my-profile/{id}', 'AdminControllers\UserController@updateAdmin');
            Route::any('/delete-expert', 'AdminControllers\ExpertController@deleteExpert');
            Route::any('/block-expert', 'AdminControllers\ExpertController@blockExpert');
            Route::any('/update-expert', 'AdminControllers\ExpertController@updateExpert');
            Route::any('/unblock-expert', 'AdminControllers\ExpertController@unblockExpert');
            Route::get('/create-user', 'AdminControllers\UserController@createUser');
            Route::post('/create-user', 'AdminControllers\UserController@createUserPostData');
            Route::any('/delete-callback', 'AdminControllers\AssignmentController@deletecallback');

            /*Remove This url as we need to call  a function only*/
                Route::any('/get-list-of-available-experts',     'AdminControllers\ExpertController@getListOfAvailableExperts');
                Route::any('/assign-assignment-manually',        'AdminControllers\ExpertController@assignAssignmentManually');
                Route::any('/post-coupon-data',   'AdminControllers\CouponController@postCouponData');
                Route::any('/show-coupons',   'AdminControllers\CouponController@showCoupons');
                Route::any('/edit-coupons/{id}',   'AdminControllers\CouponController@editCoupons');
                Route::any('/update-coupon-data',   'AdminControllers\CouponController@updateCouponData');
                Route::any('/delete-coupons/{id}',   'AdminControllers\CouponController@deleteCoupons');

                /**For Expert*/
                    Route::any('/submit-assignment-with-solution',   'AdminControllers\ExpertController@AsubmitAssignmentWithSolution');
                    //Route::any('/assignmnet-acceptance',) ;
                /* end for Expert */

                Route::any('/assign-expert-manually', 'AdminControllers\AssignExpertController@assignExpertManually');
                Route::get('/check', 'Amount\CurrencyValueController@convertCurrency');
                Route::post('/add-amount-in-user-wallet','AdminControllers\StudentController@addAmountInUserWallet');
            /**end remove This url as we need to call  a function only**/

            /* Searched Data*/
                Route::get('/search-admin-student-by-id', 'AdminControllers\SearchAdminController@searchStudentById');
                Route::get('/search-admin-expert', 'AdminControllers\SearchAdminController@searchExperts');
                Route::get('/search-admin-student-all', 'AdminControllers\SearchAdminController@searchStudentByAllParameters');
                Route::get('/search-order','AdminControllers\SearchAdminController@searchOrders');
                Route::any('/send-rework-request/{id}', 'AdminControllers\AssignmentController@sendReworkRequest');
            /**end Searched Data**/

            Route::post('/fresh-assignment',      'AdminControllers\AssignmentController@freshassignment');
            Route::post('/solution_recived',      'AdminControllers\AssignmentController@solutionrecived');
            Route::post('/rework',      'AdminControllers\AssignmentController@rework');
            Route::post('/clarification',      'AdminControllers\AssignmentController@clarification');
            Route::post('/paid',      'AdminControllers\AssignmentController@paid');
            
            Route::post('/plagi', 'AdminControllers\AssignmentController@plagihandle');
            Route::get('/callback', 'AdminControllers\CallbackController@callback');

            Route::any('/expert-rework-assignments', 'AdminControllers\AssignmentController@expertReworkRequest');
            Route::any('/create-samples', 'AdminControllers\SampleController@createSample');
            Route::any('/api/create/sample', 'AdminControllers\SampleController@insertSample'); 
            Route::any('/delete/{id}', 'AdminControllers\SampleController@deleteSample'); 
            Route::any('/show-only-completed-assignments', 'AdminControllers\AssignmentController@showonlyCompletedAssignment');
            Route::get('/all-pending-reviews', 'AdminControllers\ReviewController@showPendingReviews');
            Route::get('/all-publish-reviews', 'AdminControllers\ReviewController@showPublishReviews');
            Route::get('/all-unpublish-reviews', 'AdminControllers\ReviewController@showUnpublishReviews');
            Route::get('/delete-review/{id}', 'AdminControllers\ReviewController@DeleteReview');
            Route::get('/unpublish-review/{id}', 'AdminControllers\ReviewController@UnpublishReview');
            Route::get('/publish-review/{id}', 'AdminControllers\ReviewController@publishReview');
        });
    /* ****End of Admin Acess Routes*** */
    });
/* **End of Authenticated UserMiddleware**  */

/*  **Web Services without Authentication** */
    Route::post('/place-order/check/user', 'WebServices\PlaceOrderController@checkUser');
    Route::get('/search-admin-student-id', 'AdminControllers\SearchAdminController@serachStudentById');
    Route::post('/create-user-from-place-order-page', 'WebServices\PlaceOrderController@createUserAndRedirectToDashboard');  
    Route::get('/send/push', 'WebServices\PlaceOrderController@sendPush');
    Route::get('/send/msg', 'WebServices\PlaceOrderController@sendMessage');
    Route::get('/send/msg', 'WebServices\PlaceOrderController@sendMessage');
    Route::any('/send', 'NotificationController@sendMailForOtherSite');
/*  **End of Web Service without Authentication**  */    
Route::post('/baeexperts', 'BAExpertsController@AddAssignment');
Route::post('/getdata', 'MainSitePageController@getdata');
Route::post('/getmyassignmentdata', 'MainSitePageController@getmydata');
Route::post('/sendcallbackmail', 'MainSitePageController@getemail');
Route::get('/my-chat', 'ChatController@myConverstation');
Route::get('/partialassignment', 'AdminControllers\AssignmentController@partial');
Route::get('/failassignment', 'AdminControllers\AssignmentController@fail');
Route::post('/handleUpload','filecontroller@handleUpload');
Route::post('/deleteUpload','filecontroller@deleteUpload');
Route::post('/handle-plagi-upload','filecontroller@handlePlagiUpload');
Route::post('/delete-plagi-upload','filecontroller@deletePlagiUpload');

Route::any('/send/mail/to/site', 'NotificationController@sendMailForOtherSite');
Route::get('/reg', 'UserController@getTest');
Route::any('/add-reviews', 'ReviewController@createReview');
Route::any('/view-all-reviews', 'ReviewController@showReview');
Route::any('/find-reviews', 'ReviewController@findReview'); 

Route::get('/plagi', 'UserController@getplagi');
Route::POST('/getplagi', 'UserController@getplagidata');
Route::get('/pay', 'UserController@getpay');
Route::get('/p', 'UserController@getp');

Route::get('/test',function()
{
return view('users.login-new');
});

/*all new content url*/
    /*new content 35-63*/
        Route::get('/assignment-help-online', function () {
        return view('/main-site-pages.services.assignment-help-online');
        });
        Route::get('/make-my-assignment', function () {
        return view('/main-site-pages.services.make-my-assignment');
        });
        Route::get('/assignment-help-australia', function () {
        return view('/main-site-pages.services.assignment-help-australia');
        }); 
        Route::get('/do-my-assignment', function () {
        return view('/main-site-pages.services.do-my-assignment');
        });
       
        Route::get('/university-assignments-help', function () {
        return view('/main-site-pages.services.university-assignments-help');
        });
        Route::get('/buy-assignment-online', function () {
        return view('/main-site-pages.services.buy-assignment-online');
        });
        Route::get('/help-on-assignments', function () {
        return view('/main-site-pages.services.help-on-assignments');
        });
        Route::get('/best-assignment-helper', function () {
        return view('/main-site-pages.services.best-assignment-helper');
        });
        Route::get('/assignment-paper-help', function () {
        return view('/main-site-pages.services.assignment-paper-help');
        });
        Route::get('/college-assignment', function () {
        return view('/main-site-pages.services.college-assignment');
        });    
        Route::get('/help-with-assignments-online', function () {
        return view('/main-site-pages.services.help-with-assignments-online');
        });
        Route::get('/all-assignment-help', function () {
        return view('/main-site-pages.services.all-assignment-help');
        });
        Route::get('/academic-assignment-help', function () {
        return view('/main-site-pages.services.academic-assignment-help');
        });
        Route::get('/get-assignment-help', function () {
        return view('/main-site-pages.services.get-assignment-help');
        });
        Route::get('/homework-and-assignment-help', function () {
        return view('/main-site-pages.services.homework-and-assignment-help');
        });
        Route::get('/online-assignment-writers', function () {
        return view('/main-site-pages.services.online-assignment-writers');
        });
        Route::get('/cheap-assignment-help', function () {
        return view('/main-site-pages.services.cheap-assignment-help');
        });
        Route::get('/best-assignment-help-tutors', function () {
        return view('/main-site-pages.services.best-assignment-help-tutors');
        });
        Route::get('/assignment-assistance', function () {
        return view('/main-site-pages.services.assignment-assistance');
        });
        Route::get('/student-assignment-help', function () {
        return view('/main-site-pages.services.student-assignment-help');
        });
        Route::get('/last-minute-assignment', function () {
        return view('/main-site-pages.services.last-minute-assignment');
        });
        Route::get('/urgent-assignment-help', function () {
        return view('/main-site-pages.services.urgent-assignment-help');
        });
        Route::get('/the-best-assignment-provider', function () {
        return view('/main-site-pages.services.the-best-assignment-provider');
        });
        Route::get('/solve-my-assignment', function () {
        return view('/main-site-pages.services.solve-my-assignment');
        });
        Route::get('/custom-assignment-writing-services', function () {
        return view('/main-site-pages.services.custom-assignment-writing-services');
        });
        Route::get('/best-quality-assignment-help', function () {
        return view('/main-site-pages.services.best-quality-assignment-help');
        });
        Route::get('/write-my-assignment-for-me', function () {
        return view('/main-site-pages.services.write-my-assignment-for-me');
        });
        Route::get('/assignment-writing-tips', function () {
        return view('/main-site-pages.services.assignment-writing-tips');
        });
    /*end new content 35-63 */

    /* new content 64-143 */
        Route::get('/academic-writing-service', function () {
        return view('/main-site-pages.services.academic-writing-service');
        });
        Route::get('/world-no1-assignment', function () {
        return view('/main-site-pages.services.world-no1-assignment');
        });
        Route::get('/visa-guide', function () {
        return view('/main-site-pages.services.visa-guide');
        });
        Route::get('/pay-for-assignment', function () {
        return view('/main-site-pages.services.pay-for-assignment');
        });
        Route::get('/do-assignment', function () {
        return view('/main-site-pages.services.do-assignment');
        });
        Route::get('/financial-accounting-assignment', function () {
        return view('/main-site-pages.services.financial-accounting-assignment');
        });
        Route::get('/economics-assignment', function () {
        return view('/main-site-pages.services.economics-assignment');
        });
        Route::get('/business-accounting-assignment', function () {
        return view('/main-site-pages.services.business-accounting-assignment');
        });
        Route::get('/cost-accouting-assignments', function () {
        return view('/main-site-pages.services.cost-accouting-assignments');
        });
        Route::get('/managerial-accounting-assignment-help', function () {
        return view('/main-site-pages.services.managerial-accounting-assignment-help');
        });
        Route::get('/activity-based-costing-assignment-online-help', function () {
        return view('/main-site-pages.services.activity-based-costing-assignment-online-help');
        });
        Route::get('/solve-my-accounting-paper-online', function () {
        return view('/main-site-pages.services.solve-my-accounting-paper-online');
        });
        Route::get('/computer-network-assignment-help', function () {
        return view('/main-site-pages.services.computer-network-assignment-help'); //override
        });
        Route::get('/operating-system-assignment-help-online', function () {
        return view('/main-site-pages.services.operating-system-assignment-help-online');
        });
        Route::get('/it-management-assignment', function () {
        return view('/main-site-pages.services.it-management-assignment');
        });
        Route::get('/information-technology-assignment-help', function () {
        return view('/main-site-pages.services.information-technology-assignment-help'); //override
        });
        Route::get('/consumer-and-competition-law-assignment', function () {
        return view('/main-site-pages.services.consumer-and-competition-law-assignment'); 
        });
        Route::get('/corporate-governance-law-assignment', function () {
        return view('/main-site-pages.services.corporate-governance-law-assignment');
        });
        Route::get('/constitutional-law-assignment-help', function () {
        return view('/main-site-pages.services.constitutional-law-assignment-help');
        });
        Route::get('/contracts-law-assignment-help', function () {
        return view('/main-site-pages.services.contracts-law-assignment-help');
        });
        Route::get('/commercial-law-assignment-help', function () {
        return view('/main-site-pages.services.commercial-law-assignment-help');
        });
        Route::get('/company-law-assignment-help', function () {
        return view('/main-site-pages.services.company-law-assignment-help');
        });
        Route::get('/employment-law-assignment-help', function () {
        return view('/main-site-pages.services.employment-law-assignment-help');
        });
        Route::get('/business-intelligence-assignment-help', function () {
        return view('/main-site-pages.services.business-intelligence-assignment-help');
        });
        Route::get('/business-assignment-help', function () {
        return view('/main-site-pages.services.business-assignment-help');
        });
        Route::get('/law-assignment-help-services', function () {
        return view('/main-site-pages.services.law-assignment-help-services');
        });
        Route::get('/business-law-assignment-help', function () {
        return view('/main-site-pages.services.business-law-assignment-help');
        });
        Route::get('/taxation-law-assignment', function () {
        return view('/main-site-pages.services.taxation-law-assignment');
        });
        Route::get('/taxation-law-assignment-essay-help', function () {
        return view('/main-site-pages.services.taxation-law-assignment-essay-help');
        });
        Route::get('/criminology-assignment-help', function () {
        return view('/main-site-pages.services.criminology-assignment-help');
        });
        Route::get('/criminal-law-assignment-essay-help', function () {
        return view('/main-site-pages.services.criminal-law-assignment-essay-help');
        });
        Route::get('/law-assignment-help', function () {
        return view('/main-site-pages.services.law-assignment-help');
        });
        Route::get('/marketing-management-assignment', function () {                
        return view('/main-site-pages.services.marketing-management-assignment');
        });
        Route::get('/marketing-assignment-help', function () {
        return view('/main-site-pages.services.marketing-assignment-help'); //no content
        });
        Route::get('/strategic-management-assignment', function () {   //done.........files
        return view('/main-site-pages.services.strategic-management-assignment');
        });
        Route::get('/conflict-management-assignment-help', function () {
        return view('/main-site-pages.services.conflict-management-assignment-help');
        });
        Route::get('/change-management-assignment-help', function () {
        return view('/main-site-pages.services.change-management-assignment-help');
        });
        Route::get('/online-assignment-help-on-operation-management', function () {
        return view('/main-site-pages.services.online-assignment-help-on-operation-management');
        });
        Route::get('/corporate-strategy-assignment', function () {
        return view('/main-site-pages.services.corporate-strategy-assignment');
        });
        Route::get('/strategy-assignment', function () {
        return view('/main-site-pages.services.strategy-assignment');
        });
        Route::get('/pricing-strategy', function () {
        return view('/main-site-pages.services.pricing-strategy');
        });
        Route::get('/strategic-marketing-assignment', function () {
        return view('/main-site-pages.services.strategic-marketing-assignment');
        });
        Route::get('/business-development-assignment', function () {
        return view('/main-site-pages.services.business-development-assignment');
        });
        Route::get('/4p-of-marketing-help', function () {
        return view('/main-site-pages.services.4p-of-marketing-help');
        });
        Route::get('/project-management-assignment', function () {
        return view('/main-site-pages.services.project-management-assignment');
        });
        Route::get('/consumer-behavior-analysis', function () {
        return view('/main-site-pages.services.consumer-behavior-analysis');
        });
        Route::get('/bios-informatics-assignment-help', function () {
        return view('/main-site-pages.services.bios-informatics-assignment-help');
        });
        Route::get('/biochemistry-assignment-help', function () {
        return view('/main-site-pages.services.biochemistry-assignment-help');
        });
        Route::get('/biotechnology-assignment-help', function () {
        return view('/main-site-pages.services.biotechnology-assignment-help');
        });
        Route::get('/biology-assignment-help-online', function () {
        return view('/main-site-pages.services.biology-assignment-help-online');
        });
        Route::get('/anthropology-assignment-help', function () {
        return view('/main-site-pages.services.anthropology-assignment-help');
        });
        Route::get('/palaeontology-assignment-help', function () {
        return view('/main-site-pages.services.palaeontology-assignment-help');
        });
        Route::get('/physics-assignment-help-online', function () {
        return view('/main-site-pages.services.physics-assignment-help-online');
        });
        Route::get('/chemical-engineering-assignment-help', function () {
        return view('/main-site-pages.services.chemical-engineering-assignment-help');
        });
        Route::get('/science-assignment-help', function () {
        return view('/main-site-pages.services.science-assignment-help');
        });
        Route::get('/chemistry-assignment-help-online', function () {
        return view('/main-site-pages.services.chemistry-assignment-help-online');
        });
        Route::get('/environmental-science-and-law-assignment-essay-help-online', function () {
        return view('/main-site-pages.services.environmental-science-and-law-assignment-essay-help-online');
        });
        Route::get('/sports-science-assignment-help', function () {
        return view('/main-site-pages.services.sports-science-assignment-help');
        });
        Route::get('/online-political-assignment-help', function () {
        return view('/main-site-pages.services.online-political-assignment-help');
        });
        Route::get('/mathematics-assignment-help', function () {
        return view('/main-site-pages.services.mathematics-assignment-help');
        });
        Route::get('/geometry-assignment-help', function () {
        return view('/main-site-pages.services.geometry-assignment-help');
        });
        Route::get('/arithmetic-assignment-service', function () {
        return view('/main-site-pages.services.arithmetic-assignment-service');
        });
        Route::get('/trigonometry-assignment-help', function () {
        return view('/main-site-pages.services.trigonometry-assignment-help');
        });
        Route::get('/nursing-assignment-help', function () {
        return view('/main-site-pages.services.nursing-assignment-help');
        });
        Route::get('/nursing', function () {
        return view('/main-site-pages.services.nursing');
        });
        Route::get('/pharmacology-course-help-online', function () {
        return view('/main-site-pages.services.pharmacology-course-help-online');
        });
        Route::get('/statistics-assignment-help', function () {
        return view('/main-site-pages.services.statistics-assignment-help');
        });
        Route::get('/mechanical-assignment-help', function () {
        return view('/main-site-pages.services.mechanical-assignment-help');
        });
        Route::get('/electrical-assignment-help', function () {
        return view('/main-site-pages.services.electrical-assignment-help');
        });
        Route::get('/civil-engineering-assignment-help', function () {
        return view('/main-site-pages.services.civil-engineering-assignment-help');
        });
        Route::get('/psychology-assignment-help', function () {
        return view('/main-site-pages.services.psychology-assignment-help');
        });
        Route::get('/social-science-assignment-help-online', function () {
        return view('/main-site-pages.services.social-science-assignment-help-online');
        });
        /*Route::get('/public-relations-assignment-help', function () {
        return view('/main-site-pages.services.public-relations-assignment-help');
        });*/
        Route::get('/humanities-assignment-help', function () {
        return view('/main-site-pages.services.humanities-assignment-help');
        });
        Route::get('/human-resource-assignment-help', function () {
        return view('/main-site-pages.services.human-resource-assignment-help'); //override
        });
        Route::get('/geography-assignment-help', function () {
        return view('/main-site-pages.services.geography-assignment-help');
        });
        Route::get('/agroecology-assignment-help', function () {
        return view('/main-site-pages.services.agroecology-assignment-help');
        });
        Route::get('/philosophy-assignment-help', function () {
        return view('/main-site-pages.services.philosophy-assignment-help');
        });
        Route::get('/history-assignment-help', function () {
        return view('/main-site-pages.services.history-assignment-help');
        });
        Route::get('/english-assignment-help', function () {
        return view('/main-site-pages.services.english-assignment-help');
        });
    /* end new content 64-143 */

    /* new content 144-154 */
        Route::get('/finance-assignment-help', function () {
        return view('/main-site-pages.services.finance-assignment-help');
        });
        Route::get('/financial-services-assignment-help', function () {
        return view('/main-site-pages.services.financial-services-assignment-help');
        });
        Route::get('/finance-planning-assignment', function () {
        return view('/main-site-pages.services.finance-planning-assignment');
        });
        Route::get('/capital-budgeting-assignment-help', function () {
        return view('/main-site-pages.services.capital-budgeting-assignment-help');
        });
        Route::get('/financial-statement-analysis-assignment', function () {
        return view('/main-site-pages.services.financial-statement-analysis-assignment');
        });
        Route::get('/forex-assignment-help', function () {
        return view('/main-site-pages.services.forex-assignment-help');
        });
        Route::get('/corporate-finance-assignment', function () {
        return view('/main-site-pages.services.corporate-finance-assignment');
        });
        Route::get('/behavioral-finance-online-assignment', function () {
        return view('/main-site-pages.services.behavioral-finance-online-assignment');
        });
        Route::get('/auditing-assignment-help', function () {
        return view('/main-site-pages.services.auditing-assignment-help');
        });
        Route::get('/arts-&-architechture', function () {
        return view('/main-site-pages.services.arts-and-architechture');
        });
        Route::get('/arts-assignment-help-services-online', function () {
        return view('/main-site-pages.services.arts-assignment-help-services-online');
        });
    /* end new content 144-154 */

    /* new content 155-190 */
    Route::get('/do-essay-online', function () {
        return view('/main-site-pages.services.do-essay-online');
        });
    Route::get('/essay-outline', function () {
        return view('/main-site-pages.services.essay-outline');
        });
    Route::get('/history-essay-help', function () {
        return view('/main-site-pages.services.history-essay-help');
        });
    Route::get('/research-essay', function () {      //override
    return view('/main-site-pages.services.research-essay');
    });
    Route::get('/essay-help-in-sydney', function () {
        return view('/main-site-pages.services.essay-help-from-the-expert-writers-in-sydney');
        });
    Route::get('/essay-assignment-help', function () {
        return view('/main-site-pages.services.essay-assignment-help');
        });
    Route::get('/cheap-essay-writing-services', function () {    //override
    return view('/main-site-pages.services.cheap-essay-writing-services');
    });
    Route::get('/cheap-essay-writer', function () {    //override
    return view('/main-site-pages.services.cheap-essay-writer');
    });
    Route::get('/do-my-essay', function () {       //override
    return view('/main-site-pages.services.do-my-essay');
    });
    Route::get('/admission-essay', function () {     //override
    return view('/main-site-pages.services.admission-essay');
    });
    Route::get('/best-essay-writing-service', function () {    
    return view('/main-site-pages.services.best-essay-writing-service');
    });
    Route::get('/urgent-essay', function () {    
    return view('/main-site-pages.services.urgent-essay');
    });
    Route::get('/fast-essay-writing-service', function () {    
    return view('/main-site-pages.services.fast-essay-writing-service');
    });
    Route::get('/college-application-essay', function () {    
    return view('/main-site-pages.services.college-application-essay');
    });
    Route::get('/college-essay-writing-service', function () {    
    return view('/main-site-pages.services.college-essay-writing-service');
    });
    Route::get('/top-essay-writing-companies', function () {    
    return view('/main-site-pages.services.top-essay-writing-companies');
    });
    Route::get('/top-quality-essays', function () {    
    return view('/main-site-pages.services.top-quality-essays');
    });
    Route::get('/essay-written-for-you', function () {    
    return view('/main-site-pages.services.essay-written-for-you');
    });
    Route::get('/scholarship-essay-sample-and-examples', function () {    
    return view('/main-site-pages.services.scholarship-essay-sample-and-examples');
    });
    Route::get('/write-an-essay-online', function () {    
    return view('/main-site-pages.services.write-an-essay-online');
    });
    Route::get('/evaluative-essay-writing-help', function () {    
    return view('/main-site-pages.services.evaluative-essay-writing-help');
    });
    Route::get('/response-essay', function () {    
    return view('/main-site-pages.services.response-essay');
    });
    Route::get('/illustration-essay', function () {    
    return view('/main-site-pages.services.illustration-essay');
    });
    Route::get('/essay-writing-help', function () {    
    return view('/main-site-pages.services.essay-writing-help');
    });
    Route::get('/plagiarism-free-essays', function () {      //override
    return view('/main-site-pages.services.plagiarism-free-essays');
    });
    Route::get('/custom-essay-help', function () {    
    return view('/main-site-pages.services.custom-essay-help');
    });
    Route::get('/essay-help-online', function () {    
    return view('/main-site-pages.services.essay-help-online');
    });
    Route::get('/professional-essay-writer', function () {    
    return view('/main-site-pages.services.professional-essay-writer');
    });
    Route::get('/essay-writers-online', function () {    
    return view('/main-site-pages.services.essay-writers-online');
    });  
    Route::get('/write-my-essay', function () {       //override
    return view('/main-site-pages.services.write-my-essay');
    });
    Route::get('/writing-essay-papers', function () {     
    return view('/main-site-pages.services.writing-essay-papers');
    });
    Route::get('/college-scholarship-application', function () {     
    return view('/main-site-pages.services.college-scholarship-application');
    });
    Route::get('/need-help-writing', function () {     
    return view('/main-site-pages.services.need-help-writing');
    });
    Route::get('/essay-homework-help', function () {     
    return view('/main-site-pages.services.essay-homework-help');
    });
    Route::get('/online-custom-essay-help', function () {     
    return view('/main-site-pages.services.online-custom-essay-help');
    });
     Route::get('/write-my-assignment', function () {     
    return view('/main-site-pages.services.write-my-assignment');
    });
    Route::get('/descriptive-essay', function () {      //override
    return view('/main-site-pages.services.descriptive-essay');
    });

     /* end new content 155-190 */

/*end all new content url */
