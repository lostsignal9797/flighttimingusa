<?php $schema=['@context'=>'https://schema.org','@type'=>'WebSite','name'=>$settings['site_name'],'url'=>rtrim($settings['site_domain'],'/'),'description'=>$settings['site_description']]; ?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=e($pageTitle)?></title><meta name="description" content="<?=e($metaDescription)?>"><link rel="canonical" href="<?=e($canonical)?>">
<meta property="og:type" content="website"><meta property="og:site_name" content="<?=e($settings['site_name'])?>"><meta property="og:title" content="<?=e($pageTitle)?>"><meta property="og:description" content="<?=e($metaDescription)?>"><meta property="og:url" content="<?=e($canonical)?>">
<meta name="twitter:card" content="summary"><meta name="twitter:title" content="<?=e($pageTitle)?>"><meta name="twitter:description" content="<?=e($metaDescription)?>">
<script type="application/ld+json"><?=json_encode($schema,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)?></script><link rel="stylesheet" href="/assets/css/style.css"></head><body>
<header class="site-header"><div class="container nav"><a class="brand" href="/"><?=e($settings['site_name'])?></a><nav><a href="/">Flight Time Calculator</a><a href="/sitemap.xml">Sitemap</a></nav></div></header><main>
