<?php
/**
 * Templating engine.
 *
 * @var $info Object The template of a single book info
 *
 * Some intresting templating variables are:
 *  - $item->volumeInfo->authors[0]
 *  - $item->volumeInfo->title
 *  - $item->volumeInfo->subtitle
 *  - $item->volumeInfo->imageLinks->thumbnail
 */

if (!defined('DIRECT_ACCESS'))
    die();
$item           = json_decode($info)->items[0];
$description    = substr($item->volumeInfo->description, 0, 200);

echo <<<EOT

<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center is-style-default" style="grid-template-columns:auto 16%"><figure class="wp-block-media-text__media"><img src="{$item->volumeInfo->imageLinks->thumbnail}" alt=""/></figure><div class="wp-block-media-text__content">

        <h2 class="has-text-color" style="color:#000000"><strong>{$item->volumeInfo->authors[0]} - {$item->volumeInfo->title}</strong></h2>
        <p class="has-text-color" style="color:#636363">{$description}</p>

    </div></div>

EOT;

