<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";
require_once DOT . "/_public/user.php";

//Home page//
$Route->add('/', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Home");

    $Template->render("home");

}, 'GET');
$Route->add('/about', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Home");

    $Template->render("pages.about");

}, 'GET');
$Route->add('/plan', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Investment Plan");

    $Template->render("pages.plan");

}, 'GET');
$Route->add('/contact', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Home");

    $Template->render("pages.contact");

}, 'GET');
$Route->add('/login', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Login");

    $Template->render("pages.login");

}, 'GET');
$Route->add('/registration', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("pages.registration");

}, 'GET');
$Route->add('/registration/{user}', function ($user) {
    
    $Template = new Apps\Template;
    $Core = new Apps\Core;
    // $Core->debug((int)$Core->GetUserInfoUserName($user));
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title","SignUp");
    if($Core->GetUserInfoUserName($user)){
        $Template->assign("referer",$user);
    }else{

        $Template->assign("referer",null);
    }

    $Template->render("pages.registration");

}, 'GET');
$Route->add('/user-deposit', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-deposit");

}, 'GET');
$Route->add('/user-info', function () {
    
    $Template = new Apps\Template(auth_url);
    $Core = new Apps\Core;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-info");

}, 'GET');
$Route->add('/user-invest', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-invest");

}, 'GET');
$Route->add('/user-notification', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-notification");

}, 'GET');
$Route->add('/user-panel', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-panel");

}, 'GET');
$Route->add('/user-transaction', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-transaction");

}, 'GET');
$Route->add('/user-withdraw', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("dashboard/layout.header");
    $Template->addfooter("dashboard/layout.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-withdraw");

}, 'GET');





//Home page//











//Logout Sessions//
$Route->add(
    '/auth/logout',
    function () {
        $Template = new Apps\Template;
        $Template->expire();
        $Template->cleanAll(session_delete_timout);
        $Template->redirect(auth_url);
    },
    'GET'
);
//Logout Sessions//



$Route->run('/');
