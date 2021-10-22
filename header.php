<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'description' );bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?=<?php echo time()?>">
</head>
<body>
<div class="container md:w-3/5 border border-red-800 mx-auto px-5 py-10 flex justify-between items-center">
        <div>
            <span class="text-6xl"><a href='/'><?php bloginfo( 'name' ); ?></a></span>
            <span class="text-xl"><?php bloginfo( 'description' ); ?></span>
        </div>
        <div><a href="/wp-login.php">登陆</a></div>
</div>
