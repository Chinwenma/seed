<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";
require_once DOT . "/_public/user.php";

//Home page//
$Route->add('/seed/', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Home");

    $Template->render("home");

}, 'GET');
$Route->add('/seed/about', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Home");

    $Template->render("pages.about");

}, 'GET');
$Route->add('/seed/plan', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Investment Plan");

    $Template->render("pages.plan");

}, 'GET');
$Route->add('/seed/contact', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Home");

    $Template->render("pages.contact");

}, 'GET');
$Route->add('/seed/login', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," Login");

    $Template->render("pages.login");

}, 'GET');
$Route->add('/seed/registration', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("pages.registration");

}, 'GET');
$Route->add('/seed/registration/seed/{user}', function ($user) {
    
    $Template = new Apps\Template;
    $Core = new Apps\Core;
    //seed/ $Core->debug((int)$Core->GetUserInfoUserName($user));
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
$Route->add('/seed/user-deposit', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-deposit");

}, 'GET');
$Route->add('/seed/user-info', function () {
    
    $Template = new Apps\Template(auth_url);
    $Core = new Apps\Core;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-info");

}, 'GET');
$Route->add('/seed/user-invest', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-invest");

}, 'GET');
$Route->add('/seed/user-notification', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-notification");

}, 'GET');
$Route->add('/seed/user-panel', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-panel");

}, 'GET');
$Route->add('/seed/user-transaction', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-transaction");

}, 'GET');
$Route->add('/seed/user-withdraw', function () {
    
    $Template = new Apps\Template;
    $Template->addheader("dashboard/seed/layout.header");
    $Template->addfooter("dashboard/seed/layout.footer");
    $Template->assign("title"," SignUp");

    $Template->render("dashboard.user-withdraw");

}, 'GET');




//seed/Home page/seed//seed/











//seed/Logout Sessions/seed//seed/
$Route->add(
    '/seed/auth/seed/logout',
    function () {
        $Template = new Apps\Template;
        $Template->expire();
        $Template->cleanAll(session_delete_timout);
        $Template->redirect(auth_url);
    },
    'GET'
);
//seed/Logout Sessions/seed//seed/



$Route->run('/seed/');
