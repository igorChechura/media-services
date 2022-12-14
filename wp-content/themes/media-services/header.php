<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>    
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <?php
            $logo = get_field('logo_image', 'option');
            if(!empty( $logo ) || get_field('logo_text', 'option')):
            ?>
            <div class="header__logo logo">
                <a href="#" class="logo__link">
                    <div class="logo__wrapper">
                        <?php if( !empty( $logo ) ): ?>
                        <img class="logo__image" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                        <?php endif; ?>
                        <?php if( get_field('logo_text', 'option') ): ?>
                        <div class="logo__text"><?php the_field('logo_text', 'option'); ?></div>
                        <?php endif; ?>
                    </div>                    
                </a>
            </div>
            <?php endif; ?>
            <nav class="header__nav menu">
                <ul class="menu__list">
                    <li class="menu__item">Subscriptions</li>
                    <li class="menu__item">FAQ</li>
                    <li class="menu__item">Support</li>
                    <li class="menu__item">About</li>
                </ul>
            </nav>
            <div class="header__right">
                <?php if( have_rows('header_social', 'option') ): ?>
                <div class="header__social social">
                    <ul class="social__list">
                    <?php
                    while( have_rows('header_social', 'option') ): the_row();
                        $icon = get_sub_field('icon');
                    ?>
                        <li class="social__item">
                            <a href="<?php the_sub_field('link'); ?>" class="social__link">
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" class="social__icon">
                            </a>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>
                <div class="header__lang">

                </div>
                <a href="#" class="header__login button">Log in</a href="#">
            </div>            
        </div>
    </div>    
</header>