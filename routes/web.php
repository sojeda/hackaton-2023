<?php

use Illuminate\Support\Facades\Route;
use OpenAI\Laravel\Facades\OpenAI;

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


Route::get('imagen', function () {

    $image = OpenAI::images()->create([
        'model' => 'dall-e-2',
        'prompt' => "Please generate an image depicting a psychedelic effect using the 'Liquid Light' technique, infused with vibrant hues of red. The images should evoke an abstract, flowing, and ethereal feel that characterizes the 'Liquid Light' concept, which involves organic interactions of color and light patterns, primarily associated with visual displays from the psychedelic era of the 1960s. That reflects this emotion: Love, Romantic, Affectionate feelings",
        'size' => '256x256'
    ]);

    $url = $image->data[0]->url;

    return view('image')->with('url', $url);
});

Route::get('{unknown}', fn () => view('app  '))->where('unknown', '^(?!api).*$');

