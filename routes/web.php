<?php
// トップページ
// トップ
Route::get('/','ToppageController@top_page');
Route::post('/','ToppageController@top_page');
// サービスについて
Route::get('/about','ToppageController@about');
// お問い合わせフォーム
Route::get('/contact','ToppageController@contact');
// お問合せフォーム（確認）
Route::post('/contact/confirm','ToppageController@confirm');
// お問合せフォーム（送信完了）
Route::post('/contact/confirm/send','ToppageController@send');
// 企業側ページ
// ログイン＆新規ページ
Route::get('/login','CompanyController@company_login');
// 追加情報
Route::get('/login/job_condition','CompanyController@company_condition');
Route::post('/login/job_condition','CompanyController@company_condition');
// 管理画面ページ
Route::post('/login/company_mypage','CompanyController@company_mypage');
// 求人変更ページ
Route::get('/company_mypage/change','CompanyController@company_change');
// 求職者ページ
// メイン
Route::get('/mypage','JobseekerController@job_main');
Route::post('/mypage','JobseekerController@job_main');
// ログアウト
Route::get('/logout','JobseekerController@logout');
// 応募フォーム
Route::get('/apply','JobseekerController@job_apply');
// 応募フォーム（確認）
Route::post('/apply/confirm','JobseekerController@apply_confirm');
// 応募フォーム（完了メール）
Route::post('/apply/confirm/thanks','JobseekerController@apply_thanks');
// プロフィール
Route::get('/mypage/profile','JobseekerController@job_profile');
// プロフィール変更画面
Route::get('/mypage/profile/change','JobseekerController@job_change');