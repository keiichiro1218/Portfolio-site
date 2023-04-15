<?php get_header( ); ?>
    <main class="l-mainContent">
      <div class="p-single">
        <article class="p-single__article">
          <figure class="p-single__figure">
            <?php the_post_thumbnail() ?>
          </figure>
          <div class="p-single__inner">
            <div class="p-single__title">
              <div class="p-post__tag c-tag">
                <?php echo get_the_terms(get_the_ID(), 'genre')[0]->name ?>
              </div>
              <h1 class="c-postTitle">
                <?php the_title(); ?>
              </h1>
            </div>
            <!-- /.p-single__title -->
            <div class="p-single__content">
              <?php the_content( ); ?>
            </div>
          </div>
          <!-- /.p-single__inner -->
        </article>
      </div>
      <!-- /.l-singleContent__inner -->
    </main>
    <?php wp_footer(); ?> 
  </body>
</html>