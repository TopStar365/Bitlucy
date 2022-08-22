<?php

use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

Route::get('/avatar/{hash}', function($hash) {
    $size = 100;
    $icon = new \Jdenticon\Identicon();
    $icon->setValue($hash);
    $icon->setSize($size);

    $style = new \Jdenticon\IdenticonStyle();
    $style->setBackgroundColor('#21232a');
    $icon->setStyle($style);

    $icon->displayImage('png');
    return response('')->header('Content-Type', 'image/png');
});

Route::get('/lang/{locale}', function($locale) {
    $languages = ['en', 'ru'];

    if(in_array($locale, $languages)) {
        Cookie::queue(Cookie::make('lang', $locale, '20160'));
        return back();
    } else {
        App::setLocale(App::getLocale());
        return back();
    }
});

Route::get('/{page?}/{data?}', function($page = 'index', $data = null) {
    if(!view()->exists($page)) return response()->view('errors.404', [], 404);

    if(!auth()->guest()) {
        if((auth()->user()->email_notified ?? false) == false) {
            auth()->user()->notify(new EmailNotification());
            auth()->user()->update(['email_notified' => true]);
        }
    }

    $page = str_replace('/', '.', $page);
    $view = view($page)->with('data', $data);
    if(!request()->pjax() && !request()->ajax() && !($page == 'no_js' || $page == 'invalid_browser')) $view = view('layouts.app')->with('page', $view);
    return $view;
});
