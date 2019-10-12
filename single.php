<?php get_header("head") ?>

<div id="single">
  <?php get_header() ?>
  <?php if (have_posts()) : the_post(); ?>
    <div class="single-inner container-fluid">
      <article <?php post_class('article-content'); ?>>
        <div class="article-info row">
          <div class="category-wrap col-md-8 col-6">
            <!-- <?php if (has_category()) : ?>
              <span class="category">
                cateoryページが必要
                <?php echo get_the_category_list(''); ?>
              </span>
            <?php endif; ?> -->
          </div>
          <div class="date-wrap author-wrap col-md-4 col-6">
            <span class="date">
              <time datetime=<?php echo get_the_date('Y-m-d'); ?>>
                <?php echo get_the_date(); ?>
              </time>
            </span>
            <span class="author">
              <?php the_author(); ?>
            </span>
          </div>
        </div>
        <div class="article-content">
          <h2 class="title"><?php the_title(); ?></h2>
          <p class="text"><?php the_content(); ?></p>
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

<a href="https://www.freepik.com/free-photos-vectors/logo">Logo vector created by freepik - www.freepik.com</a>