<?php

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

Route::get('/', function () {
    $comics = config('comics');

    $navLinks = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ];

    $footerColumns = array(
        array(
            'title' => 'DC COMICS',
            'links' => array(
                'Characters',
                'Comics',
                'Movies',
                'TV',
                'Games',
                'Videos',
                'News'
            )
        ),
        array(
            'title' => 'SHOP',
            'links' => array(
                'Shop DC',
                'Shop DC Collectibles'
            )
        ),
        array(
            'title' => 'DC',
            'links' => array(
                'Terms of Use',
                'Provacy Policy (New)',
                'Ad Choices',
                'Advertising',
                'Jobs',
                'Subscriptions',
                'Talent Workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop Help',
                'Contact Us'
            )
        ),
        array(
            'title' => 'SITES',
            'links' => array(
                'DC',
                'MAD Magazine',
                'DC Kids',
                'DC Universe',
                'DC Power Visa'
            )
        )
    );

    $socials = [
        'resources/img/footer-facebook.png',
        'resources/img/footer-twitter.png',
        'resources/img/footer-youtube.png',
        'resources/img/footer-pinterest.png',
        'resources/img/footer-periscope.png',
    ];

    $mainLinks = array(
        array(
            'image' => 'resources/img/buy-comics-digital-comics.png',
            'name' => 'DIGITAL COMICS',
        ),
        array(
            'image' => 'resources/img/buy-comics-merchandise.png',
            'name' => 'DC MERCHANDISE',
        ),
        array(
            'image' => 'resources/img/buy-comics-subscriptions.png',
            'name' => 'SUBSCRIPTION',
        ),
        array(
            'image' => 'resources/img/buy-comics-shop-locator.png',
            'name' => 'COMIC SHOPO LOCATOR',
        ),
        array(
            'image' => 'resources/img/buy-dc-power-visa.svg',
            'name' => 'DC POWER VISA',
        )
    );


    return view('home', compact('comics', 'navLinks', 'footerColumns', 'socials', 'mainLinks'));
});
