<?php
/**
 *  定数:定数はここに全部書いてください
 *  定数名は単語毎「_」区切りで全て大文字にすること
 *  使用方法のコメントを必ず残すこと
 */

/** TOPページの投稿取得件数 */
//define("TOP_POST_LIMIT", "999");

// home url
define( 'HOME_URL', home_url() . '/' );

// テーマディレクトリまでのパス
define( 'ITEM_URL', get_stylesheet_directory_uri() . '/' );

// ノーイメージパス
define( 'NOIMAGE', ITEM_URL . 'assets/images/noimage.png' );

