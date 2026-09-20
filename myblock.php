<?php
/**
 * Plugin name: My Block
 * Plugin URI: https://gutenberg.test/
 * Description: Gutenberg block
 * Version: 1.0.0
 * Author: Mikhail Zhitkov
 * Author URI: https://mzhitkov.net 
 */

//  function msiebel_myblock_init(){
//     register_block_type_from_metadata( __DIR__ );
//  }
 function msiebel_myblock_init(){
    register_block_type_from_metadata( __DIR__ );
 }
//  add_action('init','genius_myblock_init'); //хук говорит wordpress, нужно выполнить 
 add_action('init','msiebel_myblock_init'); //хук говорит wordpress, нужно выполнить 
 //функцию msiebel_myblock_init при инициализации, - 
 // перейти в блок block.json и зарегистрировать блок