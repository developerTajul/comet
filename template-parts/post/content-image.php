<article class="post-single">
  <div class="post-info">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <h6 class="upper"><span>By </span><?php the_author_link(); ?><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
  </div>
  <div class="post-media"><a href="#"><?php the_post_thumbnail(); ?></a></div>
  <div class="post-body">
    <?php the_content(); ?>
    <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a></p>
  </div>
</article>