<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <?php wp_head(); ?>
</head>

<body>
    <nav>
        <h1 class="logo">LOGO</h1>
        <div>
            <div><a href="<?php echo site_url('home/') ?>"><p>Home</p></a></div>
            <div><a href="<?php echo site_url('home/#skills') ?>"><p>Skills</p></a></div>
            <div><a href="<?php echo site_url('about-me') ?>">About</a></div>
            <div class="reviews">
                <a href="<?php echo site_url('home/#reviews') ?>"><span>Reviews</span></a>
                <i class="bi bi-chevron-down"></i>
            </div>
            <div><a href=""><p>How to order</p></a></div>
            <div><a href=""><button>Talk to Patrick</button></a></div>
        </div>
    </nav>
    