<?php
Auth::routes();

// 3) Admin 認証不要
Route::group(['prefix' => 'company'], function() {
  Route::get('/',function () { return redirect('/company/login'); });
  Route::get('register','Admin\RegisterController@showRegisterForm')->name('company.register');
  Route::post('register','Admin\RegisterController@register');
  Route::get('login','Admin\LoginController@showLoginForm')->name('company.login');
  Route::post('login','Admin\LoginController@login');
});
// 4) Admin ログイン後
Route::group(['prefix' => 'company', 'middleware' => 'auth:company'], function() {
  Route::post('logout','Admin\LoginController@logout')->name('company.logout');
  Route::get('home','Admin\HomeController@index')->name('company.home');
});
// トップページ
// トップ
Route::get('/', 'ToppageController@top_page');
Route::post('/','ToppageController@post_top_page');
// サービスについて
Route::get('/about','ToppageController@about');
// お問い合わせフォーム
Route::get('contact','ContactController@input')->name('contact');
// お問合せフォーム（確認）
Route::post('contact/confirm','ContactController@confirm')->name('confirm');
// お問合せフォーム（送信完了）
Route::post('contact/send','ContactController@send')->name('send');

// 企業側ページ
// ログイン＆新規ページ
// 管理画面ページ
Route::get('/company/company_mypage','CompanyController@company_mypage');
Route::post('/company/company_mypage','CompanyController@company_mypage');
// 新規作成情報
Route::get('/company/job_condition','CompanyController@offer_add');
Route::post('/company/job_condition','CompanyController@offer_create');
// 求人変更ページ
Route::get('/company/change','CompanyController@change_add');
Route::post('/company/change','CompanyController@change_update');

// 求職者ページ
// メイン
Route::get('/mypage','JobseekerController@job_main');
Route::post('/mypage','JobseekerController@job_main');
// プロフィール変更画面
Route::get('/mypage/profile_confirm','JobseekerController@user_edit');
Route::post('/mypage/profile_confirm','JobseekerController@user_update');
// ログアウト
Route::get('/logout','JobseekerController@logout');
// 応募フォーム
Route::get('/apply','JobseekerController@apply')->name('apply');
// 応募フォーム（確認）
Route::post('/apply/confirm','JobseekerController@apply_confirm')->name('apply_confirm');
// 応募フォーム（完了メール）
Route::post('/apply/thanks','JobseekerController@apply_thanks')->name('apply_confirm');

Route::get('/home', 'HomeController@index')->name('home');
