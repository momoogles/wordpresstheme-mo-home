<?php get_header("head") ?>

<div id="home">
  <?php get_header() ?>
  <main class="home-inner container-fluid">
    <h1>Hello home!</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="row">
            <div class="article-info-wrap col-md-8 col-10">
              <h2><?php the_title(); ?></h2>
              <?php if (!is_category() && has_category()) : ?>
                <span class="cat-data">
                  <?php
                        $postcat = get_the_category();
                        echo $postcat[0]->name;
                        ?>
                </span>
              <?php endif; ?>
              <div class="text">
                <span class="article-date">
                  <i class="far fa-clock"></i>
                  <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date(); ?>
                  </time>
                </span>
                <span class="article-author">
                  <i class="fas fa-user"></i><?php the_author(); ?>
                </span>
                <?php the_excerpt(); ?>
              </div>
            </div>
            <!-- <div class="article-img-wrap col-md-4 col-2">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : ?>
              <?php endif; ?>
            </div> -->
          </div>
        </a>
    <?php endwhile;
    endif; ?>
  </main>
  <?php get_footer() ?>
</div>

<?php get_footer("script") ?>