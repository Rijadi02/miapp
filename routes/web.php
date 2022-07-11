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


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/artikuj', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
Route::get('/artikulli/{slug}', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
// Route::get('/bizneset', [App\Http\Controllers\HomeController::class, 'ads'])->name('ads');
Route::get('/bizneset/{slug}', [App\Http\Controllers\HomeController::class, 'ad'])->name('ad');
Route::get('/derse/{city}', [App\Http\Controllers\HomeController::class, 'lectures'])->name('lectures');
Route::get('/dersi/{id}', [App\Http\Controllers\HomeController::class, 'lecture'])->name('lecture');
Route::get('/mburoja', [App\Http\Controllers\HomeController::class, 'shield'])->name('shield');
Route::get('/{book}/kapitujt', [App\Http\Controllers\HomeController::class, 'chapters'])->name('chapters');
Route::get('/{chapter}/duatë', [App\Http\Controllers\HomeController::class, 'content'])->name('content');
Route::get('/recitime', [App\Http\Controllers\HomeController::class, 'recitations'])->name('recitations');
Route::get('/recitime/{id}', [App\Http\Controllers\HomeController::class, 'recitations_show'])->name('recitations.show');
Route::get('/recitues/{slug}', [App\Http\Controllers\HomeController::class, 'reciter'])->name('reciter');
// Route::get('/bizneset_e_filturara', [App\Http\Controllers\HomeController::class, 'search_ads'])->name('search_ads');
Route::get('/akademia', [App\Http\Controllers\HomeController::class, 'academy'])->name('academy');
Route::get('/donacionet', [App\Http\Controllers\HomeController::class, 'donations'])->name('donations');
Route::post('applications/store', [App\Http\Controllers\AcademyController::class, 'store'])->name('applications.store');
Route::get('/privacy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/biznes', [App\Http\Controllers\HomeController::class, 'poll'])->name('poll');

Route::get('/app/privacy', [App\Http\Controllers\AppController::class, 'privacy'])->name('app_privacy');
Route::get('/app/terms', [App\Http\Controllers\AppController::class, 'terms'])->name('app_terms');

Route::get('/times/{country}', [App\Http\Controllers\HomeController::class, 'times'])->name('times');

Route::get("/app", function () {
    return redirect('http://onelink.to/muslimani-ideal');
})->name("app");

Route::get("/ether", function () {
    return redirect('https://www.youtube.com/channel/UCHCyPhsKU-TRbR7cFWvv89w');
})->name("ether");

Route::get('/playlists', [App\Http\Controllers\HomeController::class, 'playlists'])->name('playlists');


Route::get('/dhuro', [App\Http\Controllers\HomeController::class, 'dhuro'])->name('dhuro');
Route::get('/kids', [App\Http\Controllers\HomeController::class, 'kids'])->name('kids');


Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function () {

    Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
    Route::post('categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::delete('categories/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');
    Route::patch('categories/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::get('categories/{category}/edit',  [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');


    Route::get('category/{category}/books', [App\Http\Controllers\BookController::class, 'index'])->name('category.books');
    Route::post('book/{category}/store', [App\Http\Controllers\BookController::class, 'store'])->name('category.books.store');
    Route::delete('books/{book}', [App\Http\Controllers\BookController::class, 'destroy'])->name('category.books.destroy');
    Route::patch('books/{book}/update', [App\Http\Controllers\BookController::class, 'update'])->name('category.books.update');
    Route::get('books/{book}/edit',  [App\Http\Controllers\BookController::class, 'edit'])->name('category.books.edit');

    Route::get('book/{book}/chapters', [App\Http\Controllers\ChapterController::class, 'index'])->name('book.chapters');
    Route::post('chapter/{book}/store', [App\Http\Controllers\ChapterController::class, 'store'])->name('book.chapters.store');
    Route::delete('chapters/{chapter}', [App\Http\Controllers\ChapterController::class, 'destroy'])->name('book.chapters.destroy');
    Route::patch('chapters/{chapter}/update', [App\Http\Controllers\ChapterController::class, 'update'])->name('book.chapters.update');
    Route::get('chapters/{chapter}/edit',  [App\Http\Controllers\ChapterController::class, 'edit'])->name('book.chapters.edit');

    Route::get('chapter/{chapter}/contents', [App\Http\Controllers\ContentController::class, 'index'])->name('chapter.contents');
    Route::post('contents/{chapter}/store', [App\Http\Controllers\ContentController::class, 'store'])->name('chapter.contents.store');
    Route::delete('contents/{content}', [App\Http\Controllers\ContentController::class, 'destroy'])->name('chapter.contents.destroy');
    Route::patch('contents/{content}/update', [App\Http\Controllers\ContentController::class, 'update'])->name('chapter.contents.update');
    Route::get('contents/{content}/edit',  [App\Http\Controllers\ContentController::class, 'edit'])->name('chapter.contents.edit');

    Route::get('videos', [App\Http\Controllers\VideoController::class, 'index'])->name('video.index');
    Route::post('videos/store', [App\Http\Controllers\VideoController::class, 'store'])->name('video.store');
    Route::delete('videos/{video}', [App\Http\Controllers\VideoController::class, 'destroy'])->name('video.destroy');
    Route::patch('videos/{video}/update', [App\Http\Controllers\VideoController::class, 'update'])->name('video.update');
    Route::get('videos/{video}/edit',  [App\Http\Controllers\VideoController::class, 'edit'])->name('video.edit');

    Route::get('reciters', [App\Http\Controllers\ReciterController::class, 'index'])->name('reciter.index');
    Route::post('reciters/store', [App\Http\Controllers\ReciterController::class, 'store'])->name('reciter.store');
    Route::delete('reciters/{reciter}', [App\Http\Controllers\ReciterController::class, 'destroy'])->name('reciter.destroy');
    Route::patch('reciters/{reciter}/update', [App\Http\Controllers\ReciterController::class, 'update'])->name('reciter.update');
    Route::get('reciters/{reciter}/edit',  [App\Http\Controllers\ReciterController::class, 'edit'])->name('reciter.edit');

    Route::get('reciter/{reciter}/recitations', [App\Http\Controllers\RecitationController::class, 'index'])->name('reciter.recitations');
    Route::post('recitation/{reciter}/store', [App\Http\Controllers\RecitationController::class, 'store'])->name('reciter.recitations.store');
    Route::delete('recitations/{recitation}', [App\Http\Controllers\RecitationController::class, 'destroy'])->name('reciter.recitations.destroy');
    Route::patch('recitations/{recitation}/update', [App\Http\Controllers\RecitationController::class, 'update'])->name('reciter.recitations.update');
    Route::get('recitations/{recitation}/edit',  [App\Http\Controllers\RecitationController::class, 'edit'])->name('reciter.recitations.edit');


    Route::get('lecturers', [App\Http\Controllers\LecturerController::class, 'index'])->name('lecturer.index');
    Route::post('lecturers/store', [App\Http\Controllers\LecturerController::class, 'store'])->name('lecturer.store');
    Route::delete('lecturers/{lecturer}', [App\Http\Controllers\LecturerController::class, 'destroy'])->name('lecturer.destroy');
    Route::patch('lecturers/{lecturer}/update', [App\Http\Controllers\LecturerController::class, 'update'])->name('lecturer.update');
    Route::get('lecturers/{lecturer}/edit',  [App\Http\Controllers\LecturerController::class, 'edit'])->name('lecturer.edit');

    Route::get('lecturer/{lecturer}/lectures', [App\Http\Controllers\LectureController::class, 'index'])->name('lecturer.lectures');
    Route::post('lecture/{lecturer}/store', [App\Http\Controllers\LectureController::class, 'store'])->name('lecturer.lectures.store');
    Route::delete('lectures/{lecture}', [App\Http\Controllers\LectureController::class, 'destroy'])->name('lecturer.lectures.destroy');
    Route::patch('lectures/{lecture}/update', [App\Http\Controllers\LectureController::class, 'update'])->name('lecturer.lectures.update');
    Route::get('lectures/{lecture}/edit',  [App\Http\Controllers\LectureController::class, 'edit'])->name('lecturer.lectures.edit');

    Route::get('ads', [App\Http\Controllers\AdController::class, 'index'])->name('ad.index');
    Route::post('ads/store', [App\Http\Controllers\AdController::class, 'store'])->name('ad.store');
    Route::delete('ads/{ad}', [App\Http\Controllers\AdController::class, 'destroy'])->name('ad.destroy');
    Route::patch('ads/{ad}/update', [App\Http\Controllers\AdController::class, 'update'])->name('ad.update');
    Route::get('ads/{ad}/edit',  [App\Http\Controllers\AdController::class, 'edit'])->name('ad.edit');

    Route::get('blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
    Route::post('blogs/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
    Route::delete('blogs/{blog}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.destroy');
    Route::patch('blogs/{blog}/update', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
    Route::get('blogs/{blog}/edit',  [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');

    Route::get('posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::post('posts/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::delete('posts/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
    Route::patch('posts/{post}/update', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    Route::get('posts/{post}/edit',  [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');

    Route::get('medias', [App\Http\Controllers\MediaController::class, 'index'])->name('media.index');
    Route::post('medias/store', [App\Http\Controllers\MediaController::class, 'store'])->name('media.store');
    Route::delete('medias/{media}', [App\Http\Controllers\MediaController::class, 'destroy'])->name('media.destroy');
    Route::patch('medias/{media}/update', [App\Http\Controllers\MediaController::class, 'update'])->name('media.update');
    Route::get('medias/{media}/edit',  [App\Http\Controllers\MediaController::class, 'edit'])->name('media.edit');

    Route::get('types', [App\Http\Controllers\TypeController::class, 'index'])->name('type.index');
    Route::post('types/store', [App\Http\Controllers\TypeController::class, 'store'])->name('type.store');
    Route::delete('types/{type}', [App\Http\Controllers\TypeController::class, 'destroy'])->name('type.destroy');
    Route::patch('types/{type}/update', [App\Http\Controllers\TypeController::class, 'update'])->name('type.update');
    Route::get('types/{type}/edit',  [App\Http\Controllers\TypeController::class, 'edit'])->name('type.edit');

    Route::get('promotions', [App\Http\Controllers\PromotionController::class, 'index'])->name('promotion.index');
    Route::post('promotions/store', [App\Http\Controllers\PromotionController::class, 'store'])->name('promotion.store');
    Route::delete('promotions/{promotion}', [App\Http\Controllers\PromotionController::class, 'destroy'])->name('promotion.destroy');
    Route::patch('promotions/{promotion}/update', [App\Http\Controllers\PromotionController::class, 'update'])->name('promotion.update');
    Route::get('promotions/{promotion}/edit',  [App\Http\Controllers\PromotionController::class, 'edit'])->name('promotion.edit');

    Route::get('applications', [App\Http\Controllers\AcademyController::class, 'index'])->name('applications.index');
    Route::delete('applications/{application}', [App\Http\Controllers\AcademyController::class, 'destroy'])->name('applications.destroy');

});
