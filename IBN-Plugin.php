<?php
/*
Plugin Name: IBNads - IDBlogNetwork Ads
Plugin URI: http://wan.web.id/plugins
Description: Plugin Memasang Iklan IDBlogNetwork pada Sidebar Blog Anda, Kunjungi <a href="http://wan.web.id" target="_blank">Website Saya</a> Untuk Penggunaan Lebih Lanjut.
Author: Iswan Febriyanto
Author URI: http://www.wan.web.id
Version: 1
*/

function widget_adsIBN_init() {
	if ( !function_exists('register_sidebar_widget') ) return;
	function widget_adsIBN($args) {
		extract($args);
		$options = get_option('widget_adsIBN');
		echo $before_widget . $before_title . $options['adsIBN-Title'] . $after_title;
		//include($options['banner']  . ".php");
		$model = $options['banner'];
		$blogID = $options['adsIBN-BlogID'];
		switch($model)
		{
			case "ads_ppc_static_120x600":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppa.php?id_blog='.$blogID.'&sz=120x600" width="130px" height="610px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';		
			break;
			
			case "ads_ppa_static_160x600":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppa.php?id_blog='.$blogID.'&sz=160x600" width="170px" height="610px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppa_static_300x250":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppa.php?id_blog='.$blogID.'&sz=300x250" width="310px" height="260px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppa_static_468x60":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppa.php?id_blog='.$blogID.'&sz=468x60" width="478px" height="70px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppc_flash_120x600":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc_flash.php?b='.$blogID.'&sz=120x600" width="130px" height="610px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppc_flash_160x600":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc_flash.php?b='.$blogID.'&sz=160x600" width="170px" height="610px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppc_flash_300x250":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc_flash.php?b='.$blogID.'&sz=300x250" width="310px" height="260px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppc_flash_468x60":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc_flash.php?b='.$blogID.'&sz=468x60" width="478px" height="70px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppc_flash_728x90":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc_flash.php?b='.$blogID.'&sz=728x90" width="738px" height="100px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppc_static_120x600":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc.php?b='.$blogID.'&sz=120x600" width="130px" height="610px" marginwidth=0 marginheight=0 ></iframe>';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppc_static_160x600":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc.php?b='.$blogID.'&sz=160x600" width="170px" height="610px" marginwidth=0 marginheight=0 ></iframe>';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppc_static_300x250":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc.php?b='.$blogID.'&sz=300x250" width="310px" height="260px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppc_static_468x60":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc.php?b='.$blogID.'&sz=468x60" width="478px" height="70px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
			
			case "ads_ppc_static_728x90":
			echo '<table>';
			echo '<tr>';
			echo '<td style="text-align:center">';
			echo '<iframe frameborder="0" src="http://sebar.idblognetwork.com/psg_ppc.php?b='.$blogID.'&sz=728x90" width="738px" height="100px" marginwidth=0 marginheight=0 ></iframe></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td style="text-align:center; font-size:80%"><a href="http://wan.web.id">IBN Sidebar Plugin</a></td>';
			echo '</tr>';
			echo '</table>';
			break;
		}
			
		echo $after_widget;
	}
	function widget_adsIBN_control() {
		$options = get_option('widget_adsIBN');

		if ( !is_array($options) ){
			//set default options
			$options = array ('banner' => "", 'adsIBN-BlogID' => "4453", 'adsIBN-Title' => "adsIBN Sidebar");
		}
		if ( $_POST['adsIBN-submit'] ) {
			    $options['banner'] = htmlspecialchars($_POST['banner']);
			    $options['adsIBN-BlogID'] = htmlspecialchars($_POST['adsIBN-BlogID']);
			    $options['adsIBN-Title'] = htmlspecialchars($_POST['adsIBN-Title']);
				update_option('widget_adsIBN', $options);
		}
		//include("html.php");
		$judul = $options['adsIBN-Title'];
		$blogid = $options['adsIBN-BlogID'];
		
		echo '<p>';
		echo '<label for="adsIBN-Title">Title: </label><br>';
		echo '<input type="text" id="adsIBN-Title" name="adsIBN-Title" value="'.$judul.'" />'; 
		echo '</p>';

		echo '<p>';
		echo '<label for="adsIBN-BlogID">Blog ID: </label><br>';
		echo '<input type="text" id="adsIBN-BlogID" name="adsIBN-BlogID" value="'.$blogid.'" size="10" />';
		echo '<a href="http://idblognetwork.com/myblog.php" target="_blank">Klik Disini Untuk Melihat BlogID Anda</a>';    
		echo '</p>';

		echo '<p>';
		echo '<label for="adsIBN-WidgetBanner">Banner: </label><br>';
		echo '<select name="banner" size="1">';
		echo '<optgroup label="PPC Mode Static Banner">';
		echo '<option value="ads_ppc_static_120x600">120 x 600</option>';
		echo '<option value="ads_ppc_static_160x600">160 x 600</option>';
		echo '<option value="ads_ppc_static_728x90">728 x 90</option>';
		echo '<option value="ads_ppc_static_468x60">468 x 60</option>';
		echo '<option value="ads_ppc_static_300x250">300 x 250</option>';
		echo '</optgroup>';
		echo '<optgroup label="PPC Mode Flash Banner">';
		echo '<option value="ads_ppc_flash_120x600">120 x 600</option>';
		echo '<option value="ads_ppc_flash_160x600">160 x 600</option>';
		echo '<option value="ads_ppc_flash_728x90">728 x 90</option>';
		echo '<option value="ads_ppc_flash_468x60">468 x 60</option>';
		echo '<option value="ads_ppc_flash_300x250">300 x 250</option>';
		echo '</optgroup>';
		echo '<optgroup label="PPA mode Static Banner">';
		echo '<option value="ads_ppa_static_120x600">120 x 600</option>';
		echo '<option value="ads_ppa_static_160x600">160 x 600</option>';
		echo '<option value="ads_ppa_static_468x60">468 x 60</option>';
		echo '<option value="ads_ppa_static_300x250">300 x 250</option>';
		echo '</optgroup>';
		echo '</select>';
		echo '</p>';
		echo '<p><a href="http://wan.web.id" target="_blank">Bantuan</a></p>';

		echo '<input type="hidden" id="adsIBN-submit" name="adsIBN-submit" value="1" />';

	}
	register_sidebar_widget(array('Iklan IBN', 'widgets'), 'widget_adsIBN');
	register_widget_control(array('Iklan IBN', 'widgets'), 'widget_adsIBN_control', 300, 100);
}
add_action('widgets_init', 'widget_adsIBN_init')



?>