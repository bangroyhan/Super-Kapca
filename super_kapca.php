<?php
/*
Plugin Name: Super Kapca BRH
Plugin URI: http://bangroyhan.pasti.in
Description: Super kapca ini ane buat dengan penuh kerendahan hati, mohon untuk update silahkan kunjungi <a href="http://bangroyhan.pasti.in">Bang Roy Han</a>
Version: 1.4
Author: BangRoyHan
Author URI: http://bangroyhan.pasti.in
License: GPLv2
*/

add_action('admin_menu', 'super_kapca_admin');

function super_kapca_admin() {
add_menu_page('Super Kapca By Bang Roy Han', 'Super Kapca', 'administrator', __FILE__, 'super_kapca_info');
}

function super_kapca_info() {
echo "<div class=\"wrap\">
<table>
<tr><td><img src=\"http://bangroyhan.pasti.in/wp-content/uploads/sites/6/2015/02/brh.png\" /></td>
<td><h2>Terimakasih Telah Menggunakan Super Kapca</h2></td></tr>
<tr><td colspan=\"2\"><p>Plugin super kapca ini dibuat oleh <a href=\"http://bangroyhan.pasti.in\" target=\"_blank\">Bang Roy Han</a>, untuk membantu pengguna wordpress dalam memblokir semua spam yang ada.</p>
<p>Terutama memberikan kemudahan pada administrator jaringan situs berbasis wordpress dalam memberikan keamanan dan kenyamanan blog. Tidak memerlukan konfigurasi per akun blog, plugin ini sudah otomatis aktif digunakan pada semua blog multisite wordpress anda. Untuk informasi selengkapnya silahkan kunjungi <a href=\"http://bangroyhan.pasti.in\" target=\"_blank\">Bang Roy Han</a></p>
<p>Kelebihan Plugin Super Kapca:<ol>
    Tidak membutuhkan konfigurasi<br>
    Mudah digunakan & dimodifikasi<br>
    Tidak terjadi benturan terhadap plugin / themes wordpress anda *)<br>
    Ringan & Tidak membutuhkan API<br>
</ol></p>
<p>*) Kecuali jika anda sudah menggunakan plugin captcha yang lain</p>
</td></tr>
<tr><td colspan=\"2\">&nbsp;</td></tr>
<tr><td>&nbsp;</td>
<td><h2>Thank You've Used Super Kapca</h2></td></tr>
<tr><td colspan=\"2\"><p>Super kapca plugin was created by <a href=\"http://bangroyhan.pasti.in\" target=\"_blank\">Bang Roy Han</a>, to help wordpress users in blocking all the spam bot.</p>
<p>Especially given the ease on wordpress-based site network administrator in providing safety and comfort blog. No need configuration per account blog, because this plugin automatically active already in use on all your wordpress multisite blog. For more information please visit <a href=\"http://bangroyhan.pasti.in\" target=\"_blank\">Bang Roy Han</a></p>
<p>Excess Super Kapca Plugin:<ol>
    No Requires configuration<br>
    Easy to use & modified<br>
    Not occur collisions against your wordpress plugins/themes *)<br>
    Light weight & no need API<br>
</ol></p>
<p>*) Unless you are already using another captcha plugin.</p>
</td></tr>
</table>
</div>";
}

if(!defined('ABSPATH')) exit;
global $wp_version;
if(version_compare( $wp_version,'3','>=')) {
add_action('comment_form_after_fields', 'super_proseskomen', 1 );
add_action('comment_form_logged_in_after', 'super_proseskomen', 1 );
}
add_filter('preprocess_comment', 'kapca_super_proses');

function super_proseskomen(){
    $bnr1 = "a".str_replace('=','',base64_encode(date('mdis')));
    $slh1 = "a".str_replace('=','',base64_encode(date('mdsd')));
    echo"
<style type=\"text/css\" media=\"screen\">
#$bnr1{
    background: #348E34;
}
#$slh1{
    background: #D13838;
}
#labelrad{
    text-align: center;
    padding-top: 10px;
    margin-bottom: 0px;
    padding-bottom: 0px;
}
#labelrad p{
    padding-top: 7px;
}
#labelrad p span{
    font-size: 10px;
    background: yellow;
}
#labelrad #orakaton {
    display:none;
}

#labelrad label{
    display: inline;
    margin-right: 5px;
}

#labelrad input[type=\"radio\"] {
    position:absolute;
    filter:alpha(opacity=0);
    -moz-opacity:0;
    -khtml-opacity:0;
    opacity:0;
    cursor:pointer;
    width:24px;
}

#labelrad #$slh1 {
    cursor:pointer;
    border: none;
    padding: 16px 20px 16px 20px;
    background: url('https://abangroyhan.files.wordpress.com/2015/03/brh.png') no-repeat;
    -moz-background-size:100% 100%;
    -webkit-background-size:100% 100%;
    background-size:100% 100%;
}

#labelrad #$bnr1 {
    border: none;
    padding: 16px 20px 16px 20px;
    cursor:pointer;
    background: url('https://abangroyhan.files.wordpress.com/2015/03/brh2.png') no-repeat;
    -moz-background-size:100% 100%;
    -webkit-background-size:100% 100%;
    background-size:100% 100%;
}

#labelrad input[type=\"radio\"]:checked + #$bnr1 {
    background: url('https://abangroyhan.files.wordpress.com/2015/03/brh1.png') no-repeat;
    -moz-background-size:100% 100%;
    -webkit-background-size:100% 100%;
    background-size:100% 100%;
    border: none;
}

#labelrad input[type=\"radio\"]:checked + #$slh1 {
    background: url('https://abangroyhan.files.wordpress.com/2015/03/brh1.png') no-repeat;
    -moz-background-size:100% 100%;
    -webkit-background-size:100% 100%;
    background-size:100% 100%;
    border: none;
}
</style>
<div id=\"labelrad\" title=\"Pilih sidik jari yang tepat\"><span id=\"orakaton\"></span>";
$datem = date('siHd');
$isikapca = array(
'<label><input type="radio" name="kapcASUper_oidar" value="'.$datem.'" id="'.$datem.'"><span id="'.$bnr1.'"></span></label>',
'<label><input type="radio" name="kapcASUper_oidar" value="'.date('Hs').'" id="'.date('Hs').'"><span id="'.$slh1.'"></span></label>',
'<label><input type="radio" name="kapcASUper_oidar" value="'.date('iHs').'" id="'.date('iHs').'"><span id="'.$slh1.'"></span></label>',
'<label><input type="radio" name="kapcASUper_oidar" value="'.date('HsY').'" id="'.date('HsY').'"><span id="'.$slh1.'"></span></label>',
'<label><input type="radio" name="kapcASUper_oidar" value="'.date('Hs').'" id="'.date('Hsd').'"><span id="'.$slh1.'"></span></label>',
'<label><input type="radio" name="kapcASUper_oidar" value="'.date('iHs').'" id="'.date('iHs').'"><span id="'.$slh1.'"></span></label>',
'<label><input type="radio" name="kapcASUper_oidar" value="'.date('HsY').'" id="'.date('HsmY').'"><span id="'.$slh1.'"></span></label>');
shuffle($isikapca);
foreach($isikapca as $kiye)
{
  echo "$kiye";
}
echo"<div style=\"clear:both;margin-top:2px;\"></div><p><span>*) Pilih sidik jari yang tepat</span></p></div><div style=\"clear:both;\"></div>";
$hidenkapca = array(
'<input type="hidden" value="'. esc_attr(base64_encode($datem)) .'" name="capcay_super" />',
'<input type="hidden" value="'. esc_attr(base64_encode(date('iHs'))) .'" name="sk_brh" />',
'<input type="hidden" value="'. esc_attr(base64_encode(date('HsY'))) .'" name="KCps" />',
'<input type="hidden" value="'. esc_attr(base64_encode(date('HsY'))) .'" name="kapcASUper" />',
'<input type="hidden" value="'. esc_attr(base64_encode($datem)) .'" name="AAAsuperKAPCA" />',
'<input type="hidden" value="'. esc_attr(base64_encode(date('Hs'))) .'" name="A_SU_per_kapca" />');
shuffle($hidenkapca);
foreach($hidenkapca as $capcay)
{
  echo "$capcay";
}

}

function kapca_super_proses($isikomen){

if(isset( $_REQUEST['action'] ) && $_REQUEST['action'] == 'replyto-comment') {
return $isikomen;
}

if($isikomen['comment_type'] != '' && $isikomen['comment_type'] != 'comment') {
 return $isikomen;
}

if(!isset($_REQUEST['kapcASUper_oidar'])) {
wp_die( __('<table><tr><td valign="top"><h1>PERINGATAN.!</h1>Anda tidak melakukan verifikasi apakah anda manusia, silahkan kembali.<br><br><h1>WARNING.!</h1>You did not verify whether you are a human, please return.</td><td><img src="http://romil.in/wp-content/uploads/Google_thats_all_we_know_error.png" style="float:right;padding:10px;" alt="Peringatan"></td></tr></table>', 'buffercode_captcha'));
}

if($_REQUEST['kapcASUper_oidar']==esc_attr(base64_decode($_REQUEST['AAAsuperKAPCA']))) {
return($isikomen);
}
else {
wp_die( __('<table><tr><td valign="top"><h1>GAGAL.!</h1> Anda salah memilih jawaban verifikasi, silahkan kembali.<br><br><h1>ERROR.!</h1> You choose the wrong answer verification, please return.</td><td><img src="http://romil.in/wp-content/uploads/Google_thats_all_we_know_error.png" style="float:right;padding:10px;" alt="Peringatan"></td></tr></table>', 'buffercode_captcha'));
}
}

?>
