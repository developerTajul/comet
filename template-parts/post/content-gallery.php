<article class="post-single">
  <div class="post-info">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h6 class="upper"><span>By</span><a href="<?php the_author_meta('user_url'); ?>"> <?php the_author_meta('user_firstname'); ?> <?php  the_author_meta('user_lastname'); ?></a><span class="dot"></span><span><?php the_time('d F, Y'); ?></span>
    <span class="dot"></span>
    <a href="#" class="post-tag">Startups</a></h6>
  </div>

  <div class="post-media">
    <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">
      <ul class="slides">
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/1.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/2.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/3.jpg" alt=""></li>
      </ul>
    </div>
  </div>

  <div class="post-body">
    <?php the_content(); ?>
    <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a></p>
  </div>
</article> 