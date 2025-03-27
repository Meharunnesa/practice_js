<?php
/*
 * Plugin Name:       My Plugin
 * Description:       This a basic plugin
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Bristy
 * Text Domain:       my-basics-plugin
*/

function wm_styles(){

    wp_enqueue_script( 'custom-script', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), '1.0.0', true );
    
 }
 
 
 add_action('admin_enqueue_scripts', 'wm_styles');

 ?>




<P id="demo">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</P>

<button type="button" onclick="document.getElementById('demo').innerHTML = 'LOREM iPSUM' " >Click Here</button>

<button type="button" onclick="document.getElementById('demo').style.fontSize = '40px' " >Change font size</button>

<button type="button" onclick="document.getElementById('demo').style.display = 'none' " >Display None</button>

<button type="button" onclick="document.getElementById('demo').style.display = 'block' " >Display Show</button>

<br>

<button onclick="document.getElementById('light').src='pic_bulbon.gif'">Turn on light</button>

<img id="light" src="pic_bulboff.gif" alt="light" style="width:100px">

<button onclick="document.getElementById('light').src='pic_bulboff.gif'">Turn off light</button>

<button onclick="document.getElementById('light').src='pic_bulbon.gif'">Turn on light</button>

<img id="light" src="pic_bulboff.gif" alt="light" style="width:100px">

<button onclick="document.getElementById('light').src='pic_bulboff.gif'">Turn off light</button>



