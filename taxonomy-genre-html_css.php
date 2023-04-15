  <?php get_header( ); ?>
  <main class="l-mainContent">
    <div class="l-main__content">
      <div class="l-main__pagetitle">
        <h1 class="c-pageTitle">
          <?php echo get_the_terms(get_the_ID(), 'genre')[0]->name ?>
        </h1>
      </div>
      <!-- /.l-main__pagetitle -->
      <div class="l-main__post">
        <?php query_posts( array(
          'post_type' => 'work', //カスタム投稿名
          'taxonomy' => 'genre',
          'term' => 'html_css',
          'posts_per_page' => 5 //表示件数（ -1 = 全件 ）
        )); ?>
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <div class="p-post">
            <div class="p-post__inner">
              <figure class="p-post__figure">
                <a href="<?php the_permalink() ?>">
                  <?php 
                  if ( has_post_thumbnail() ) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
                    the_post_thumbnail( 'post-thumb' );
                  } 
                  ?>
                </a>
              </figure>
              <div class="p-post__header">
                <div class="p-post__tag c-tag">
                  <?php echo get_the_terms(get_the_ID(), 'genre')[0]->name ?>
                </div>
                <!-- /.p-post__tag .c-tag -->
                <h2 class="p-post__title">
                  <a href=""><?php the_title(); ?></a>
                </h2>
              </div>
              <!-- /.p-post__header -->
              <div class="p-post__excerpt">
                <?php the_excerpt(); ?>
              </div>
              <!-- /.p-post__excerpt -->
            </div>
            <!-- /.p-post__inner -->
          </div>
          <!-- /.p-post -->
        <?php endwhile; else: ?>
          <div class="">まだ投稿がございません</div>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
      <!-- /.l-main__post -->
    </div>
    <!-- /.l-main__content -->
  </main>
</div>
<!-- /.l-main -->
<?php wp_footer(); ?> 
</body>
</html>