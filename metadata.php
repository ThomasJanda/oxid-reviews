<?php
$sMetadataVersion = '2.0';

$aModule = array(
    'id'          => 'rs-reviews',
    'title'       => '*RS Reviews',
    'description' => 'Allow display reviews in other languages',
    'thumbnail'   => '',
    'version'     => '0.0.1',
    'author'      => '',
    'url'         => '',
    'email'       => '',
    'extend'      => array(
        \OxidEsales\Eshop\Application\Controller\ArticleDetailsController::class => \rs\reviews\Application\Controller\ArticleDetailsController::class,
        \OxidEsales\Eshop\Application\Model\Article::class => \rs\reviews\Application\Model\Article::class,
        \OxidEsales\Eshop\Application\Component\Widget\ArticleDetails::class => \rs\reviews\Application\Component\Widget\ArticleDetails::class
    ),
    'controllers' => array(

    ),
    'templates'   => array(
        'rs/reviews/views/tpl/widget/reviews/reviews.tpl' => 'rs/reviews/views/tpl/widget/reviews/reviews.tpl',
    ),
    'blocks'      => array(
        array(
            'template' => 'page/details/inc/fullproductinfo.tpl',
            'block'    => 'rs_reviews',
            'file'     => '/views/block/page/details/inc/fullproductinfo__rs_reviews.tpl',
        ),
    ),
    'settings'    => array(
       
    ),
);
