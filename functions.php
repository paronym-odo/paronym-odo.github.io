<?php

// wp-head情報削除（バージョン情報）
remove_action('wp_head', 'wp_generator');


// js
function cv_script() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js');
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'cv_script');


// S3 URL（creator）
function cv_s3url_creator() {
	return 'https://item-product.paronym.jp/creator';
}
add_shortcode('sc_s3url_creator', 'cv_s3url_creator');


// S3 URL（contents）
function cv_s3url_contents() {
	return 'https://item-product.paronym.jp/contents';
}
add_shortcode('sc_s3url_contents', 'cv_s3url_contents');


// MW WP Form（タイムスタンプ）
function cv_mwwpform_date($value, $key, $insert_contact_data_id) {
	if ($key === 'cv_mwwpform_date') {
		return date_i18n('Y年m月d日 H時i分');
	}
	return $value;
}
add_filter('mwform_custom_mail_tag_mw-wp-form-16', 'cv_mwwpform_date', 10, 3);
add_filter('mwform_custom_mail_tag_mw-wp-form-17', 'cv_mwwpform_date', 10, 3);


// MW WP Form（Salesforce連携　Tig Creater　お問い合わせ）
function cv_mwwpform_salesforce_tigcreater_inquiry($content, $Data) {
	//MW WP Formで取得するデータ
	$sf_companyname = $Data->get('companyname');
	$sf_personname = $Data->get('personname');
	$sf_emailaddress = $Data->get('emailaddress');
	$sf_phonenumber = $Data->get('phonenumber');
	$sf_businessscale = $Data->get('businessscale');
	$sf_howknow = $Data->get('howknow'); // AAA,BBB,CCC
	$sf_inquirypurpose = $Data->get('inquirypurpose');
	$sf_content = $Data->get('content');

	// 知ったきっかけを配列にする
	$sf_howknow_arr = explode(",", $sf_howknow);

	//POSTで送りたいデータ
	$query = array(
		'company' => $sf_companyname, //貴社名
		'last_name' => $sf_personname, //ご担当者氏名
		'email' => $sf_emailaddress, //会社用メールアドレス
		'phone' => $sf_phonenumber, //電話番号
		'00NBL000000Pf1k' => $sf_businessscale, //事業規模
		'00NBL000000Pg3D' => $sf_howknow_arr, //Tig Creatorを知ったきっかけ
		'00NBL000000Pf24' => $sf_inquirypurpose, //お問い合わせ目的
		'00NBL000000Pe3B' => $sf_content, //お問い合わせ内容
		'lead_source' => 'WebSite',
		'00NBL000000Pe15' => "Tig Creator LP お問い合わせ",
		'oid' => "00D5h0000011Qyf",
	);

	//URLエンコードされたクエリ文字列を生成
	$ct = http_build_query($query, '', '&');
	$ct = preg_replace('/00NBL000000Pg3D%5B\d+%5D/', '00NBL000000Pg3D', $ct);

	//ヘッダ設定
	$header = array(
		'Content-Type: application/x-www-form-urlencoded', //form送信の際、クライアントがWebサーバーに送信するコンテンツタイプ
		'Content-Length: ' . strlen($ct), //メッセージ本文の長さ
	);

	//ストリームコンテキスト設定
	$context = array(
		'http' => array(
			'ignore_errors' => true, //ステータスコードが失敗を意味する場合でもコンテンツを取得
			'method' => 'POST', //メソッド。デフォルトはGET
			'header' => implode("\r\n", $header), //ヘッダ設定
			'content' => $ct, //送信したいデータ
		),
	);

	//送信先URL
	$url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
	$res = file_get_contents($url, false, stream_context_create($context));

	return $content; // コンテンツはそのまま返す
}
add_filter('mwform_complete_content_mw-wp-form-16', 'cv_mwwpform_salesforce_tigcreater_inquiry', 10, 3);


// MW WP Form（Salesforce連携　ダウンロード　Tig Creater）
function cv_mwwpform_salesforce_download_tigcreater($content, $Data) {
	//MW WP Formで取得するデータ
	$sf_companyname = $Data->get('companyname');
	$sf_personname = $Data->get('personname');
	$sf_department = $Data->get('department');
	$sf_emailaddress = $Data->get('emailaddress');
	$sf_phonenumber = $Data->get('phonenumber');

	//POSTで送りたいデータ
	$query = array(
		'company' => $sf_companyname,
		'last_name' => $sf_personname,
		'00NBL000000Pf2E' => $sf_department,
		'email' => $sf_emailaddress,
		'phone' => $sf_phonenumber,
		'lead_source' => 'WebSite',
		'00NBL000000Pe15' => "Tig Creator LP 資料ダウンロード",
		'oid' => "00D5h0000011Qyf",
	);

	//URLエンコードされたクエリ文字列を生成
	$ct = http_build_query($query, '', '&');

	//ヘッダ設定
	$header = array(
		'Content-Type: application/x-www-form-urlencoded', //form送信の際、クライアントがWebサーバーに送信するコンテンツタイプ
		'Content-Length: ' . strlen($ct), //メッセージ本文の長さ
	);

	//ストリームコンテキスト設定
	$context = array(
		'http' => array(
			'ignore_errors' => true, //ステータスコードが失敗を意味する場合でもコンテンツを取得
			'method' => 'POST', //メソッド。デフォルトはGET
			'header' => implode("\r\n", $header), //ヘッダ設定
			'content' => $ct, //送信したいデータ
		),
	);
	
	//送信先URL
	$url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
	$res = file_get_contents($url, false, stream_context_create($context));

	return $content; // コンテンツはそのまま返す
}
add_filter('mwform_complete_content_mw-wp-form-17', 'cv_mwwpform_salesforce_download_tigcreater', 10, 3);

?>