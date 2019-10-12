<?php get_header("head") ?>

<div id="home">
  <?php get_header() ?>
  <main class="home-inner container-fluid">
    <h1>Hello home!</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="row">
            <div class="article-content col-md-8 col-10">
              <h2 class="title"><?php the_title(); ?></h2>
              <div class="article-info">
                <div class="category-wrap">
                  <?php if (!is_category() && has_category()) : ?>
                    <span class="category">
                      <?php
                            $postcat = get_the_category();
                            echo $postcat[0]->name;
                            ?>
                    </span>
                  <?php endif; ?>
                </div>
                <div class="date-wrap author-wrap">
                  <span class="date">
                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                      <?php echo get_the_date(); ?>
                    </time>
                  </span>
                  <span class="author">
                    <?php the_author(); ?>
                  </span>
                </div>
                <p class="simple-text"><?php the_excerpt(); ?></p>
              </div>
            </div>
          </div>
          <!-- <div class="article-img-wrap col-md-4 col-2">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : ?>
              <?php endif; ?>
            </div> -->
        </a>
    <?php endwhile;
    endif; ?>
  </main>
  <?php get_footer() ?>
</div>

<?php get_footer("script") ?>