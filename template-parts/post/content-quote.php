<article class="post-single">
  <div class="post-info">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h6 class="upper"><span>By</span><?php the_author_link(); ?><span class="dot"></span><span><?php the_time('d F, Y'); ?> at <?php the_time('g:i a'); ?></span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
  </div>
  <div class="post-body">
    <blockquote class="italic">
      <?php the_content(); ?>
    </blockquote>
  </div>
</article>