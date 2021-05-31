<?php
// トップページ
// トップ
Route::get('/','IndexController@top_page');
// サービスについて
Route::get('/about','IndexController@about');
// お問い合わせフォーム
Route::get('/contact','IndexController@contact');
// お問合せフォーム（確認）
Route::post('/contact/confirm','IndexController@confirm');
// お問合せフォーム（送信完了）
Route::post('/contact/confirm/send','IndexController@send');
// 企業側ページ
// ログイン＆新規ページ
Route::get('/login','IndexController@company_login');
// 追加情報
Route::get('/login/job_condition','IndexController@company_condition');
// 管理画面ページ
Route::get('/company_mypage','IndexController@company_mypage');
// 求人変更ページ
Route::get('/company_mypage/change','IndexController@company_change');

// 求職者ページ
// メイン
Route::get('/mypage','IndexController@job_main');
Route::post('/mypage','IndexController@job_main');
// ログアウト
Route::get('/logout','IndexController@logout');
// 応募フォーム
Route::get('/apply','IndexController@job_apply');
// 応募フォーム（確認）
Route::post('/apply/confirm','IndexController@apply_confirm');
// 応募フォーム（完了メール）
Route::post('/apply/confirm/thanks','IndexController@apply_thanks');
// プロフィール
Route::get('/mypage/profile','IndexController@job_profile');
// プロフィール変更画面
Route::get('/mypage/profile/change','IndexController@job_change');