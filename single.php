<?php get_header("head") ?>

<div id="single">
  <?php get_header() ?>
  <?php if (have_posts()) : the_post(); ?>
    <div class="single-inner container-fluid">
      <article <?php post_class('article-content'); ?>>
        <div class="row">
          <div class="article-cat-wrap col-md-8 col-6">
            <?php if (has_category()) : ?>
              <span class="article-cat">
                <!-- cateoryページが必要 -->
                <?php echo get_the_category_list(''); ?>
              </span>
            <?php endif; ?>
          </div>
          <div class="article-info col-md-4 col-6">
            <span class="article-date">
              <i class="far fa-clock"></i>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date(); ?>
              </time>
            </span>
            <span class="article-author">
              <i class="fas fa-user"></i><?php the_author(); ?>
            </span>
          </div>
        </div>
        <div>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <!-- <div class="article-img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
          </div> -->
        </div>
      </article>
    </div>
  <?php endif; ?>
  <?php get_footer() ?>
</div>

<?php get_footer("script") ?>