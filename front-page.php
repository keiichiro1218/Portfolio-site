<?php get_header( ); ?>
<main class="l-mainContent">
  <div class="l-main__content">
    <div class="l-main__post">
      <?php
        $args = [
          'post_type' => 'work', // カスタム投稿名
          'posts_per_page' => 5, // 表示する数
        ];
        $my_query = new WP_Query($args); ?>
      
      <?php if ($my_query->have_posts()): // 投稿がある場合 ?>  
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
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
                  <?php
                  $terms = get_the_terms($post->ID, 'genre');
                  if ( $terms ) {
                    echo '<div class="p-post__tag-wrapper"> ';
                    foreach ( $terms as $term ) {
                      echo '<div class="c-tag p-post__tag">'.$term->name.'</div>';
                    }
                    echo '</div>';
                  }
                  ?>
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
        <?php endwhile; ?>
      <?php else: ?>
        <p>まだ投稿がありません。</p>
      <?php endif; wp_reset_postdata(); ?>  
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