<?php get_header(); ?>

<!-- 記事全体 -->
  <div class="container">
    <!-- レイアウト一段目 -->
    <div class="contents">

      <?php   if(have_posts()): while(have_posts()): the_post(); ?>

      <!-- 1つの記事 -->
      <article <?php post_class(); ?>>
        <!-- 記事のタイトル表示 -->
        <?php if( is_single() ): ?>
          <h1><?php the_title(); ?></h1>
        <?php else: ?>
          <h1><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?></a></h1>
        <?php endif; ?>

        <!-- 記事の投稿日を表示 -->
        <time datetime="<?php echo get_the_date( 'Y-m-d' ) ?>">
          <i class="fas fa-pencil-alt"></i><?php echo get_the_date(); ?>
        </time>

        <!-- 記事のカテゴリーを表示 -->
        <span class="postcat">
          <?php the_category( ' ' ); ?>
        </span>

        <!-- 本文を表示 -->
        <?php if( is_single() ): ?>
          <?php the_content(); ?>

        <?php else: ?>

          <div class="excerpt">
            <?php if ( has_post_thumbnail() ): ?>
              <p><?php the_post_thumbnail( 'medium' ) ?></p>
            <?php endif; ?>
            <?php the_excerpt(); ?>
            <p class="more"><a href="<?php the_permalink(); ?>">続きを読む <i class="fa fa-chevron-right"></i></a></p>   
          </div>

        <?php endif; ?>

      </article>

      <?php   endwhile; endif; ?>

      <!-- 「WP-PageNavi」プラグインを使用し、ページナビゲーションを追加 -->
      <?php if( !is_single() ): ?>
        <?php wp_pagenavi(); ?>
      <?php endif; ?>

    </div><!-- contents -->

    <!-- ウィジェットを使用してメニューを表示する -->
    <div class="blogmenu">
      <ul>
        <?php dynamic_sidebar(); ?>
      </ul>
    </div>

  </div> <!-- container -->

<?php get_footer(); ?>