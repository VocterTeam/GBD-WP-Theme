  <footer class="footer">
    <div class="footer__content">
      <div class="container">

        <div class="footer__content-left">
          <div class="footer__title"><?php the_field('title_block1_footer', 'option'); ?></div>

          <?php wp_nav_menu( array(
            'theme_location'  => 'footer',
            'fallback_cb'     => '__return_empty_string',
            'container'       => '', 
            'menu_class'      => 'footer__menu', 
            'menu_id'         => '', 
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          ) );  ?>

        </div>

        <div class="footer__content-center">
          <div class="footer__title"><?php the_field('title_block2_footer', 'option'); ?></div>

          <?php if( have_rows('repeater_footer', 'option') ): ?>
            <ul class="footer__address">
            <?php while ( have_rows('repeater_footer', 'option') ) : the_row(); ?>
          
                <li><?php the_sub_field('item_repeater_footer', 'option'); ?></li>

            <?php endwhile; ?>
            </ul>
          <?php endif; ?>

        </div>

        <a href="<?php echo get_site_url(); ?>" class="footer__logo">
          <?php echo file_get_contents( get_field('logo_footer', 'option') ); ?>
        </a>

      </div>
    </div>

    <div class="footer__bottom">
      <div class="container">
        <div class="footer__bottom-copyright"><?php the_field('text_left_copyright', 'option'); ?> <?php echo date('Y'); ?></div>
        <div class="footer__bottom-author">
          <?php the_field('text_right_copyright', 'option'); ?>
          <a href="<?php the_field('link_copyright', 'option'); ?>" class="footer__bottom-name"><?php the_field('text_link_copyright', 'option'); ?></a>
        </div>
      </div>
    </div>

  </footer>

  <?php wp_footer(); ?>

</body>
</html>