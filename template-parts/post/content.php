<article class="post-single">
  <div class="post-info" style="margin-bottom:0px">
    <h2><a href="#"><?php the_title(); ?></a></h2>
    <h6 class="upper"><span>By</span><a href="#"> <?php the_author(); ?></a><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
  </div>

  <div class="post-body">
    <?php the_content(); ?>
    <p><a href="<?php the_permalink(); ?>" class="btn btn-color btn-sm">Read More</a></p>
  </div>
</article>