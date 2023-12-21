<?php
/*
Template Name: イベント投稿ページ
Template Post Type: post
*/
?>

<!-- ヘッダーを読み込む -->
<?php get_header(); ?>

<!-- ループのコード。
have_posts=投稿があるかどうかを確認　
投稿が存在する場合にループに入り、投稿がある限りループ内の処理が続く -->
<?php if(have_posts()) :?>
  <?php while (have_posts()) : the_post() ; ?>
  
  
  <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
          <?php
            $cat = get_the_category();
            $catslug = $cat[0]->slug;
            $catname = $cat[0]->cat_name;
          ?>
            <div><?php echo $catslug; ?></div>
            <div><?php echo $catname; ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Post 部分 -->
    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
              <div class="tab_panel_title"><?php echo $catname; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <!--カスタムフィールド（Custom Field）から 'month' という名前の値を取得して表示するもの -->
                            <div class="calendar_month"><?php echo post_custom('month'); ?></div>
                              <div class="calendar_day">
                              <!--カスタムフィールド（Custom Field）から 'day' という名前の値を取得して表示するもの -->
                              <span><?php echo post_custom('day'); ?></span><span>日</span>
                              </div>
                            </div>
                          </div>
                          <!--カスタムフィールド（Custom Field）から 'time' という名前の値を取得して表示するもの -->
                          <div class="calendar_hour"><?php echo post_custom('time'); ?></div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_header">
                        <!-- 現在のテーマのディレクトリURIを取得+/images/tags-solid.png で画像を表示。php〜uriに変換すると、ドメインが変わっても適応される-->
                        <img src="<?php echo get_template_directory_uri( );?>/images/tags-solid.png" alt="" /> <?php echo $catname; ?>
                          </div>
                          <div class="news_detail_title">
                            <!-- タイトルを取得して表示 -->
                          <?php the_title(); ?>
                          
                          </div>
                          <div class="news_time">
                            <div>
                            <!--  現在のテーマのディレクトリURIを取得+/images/clock-regular.png で画像を表示。-->
                            <img src="<?php echo get_template_directory_uri();?>/images/clock-regular.png" alt="" />
                              <span>日付：<?php echo post_custom('date'); ?> </span>
                            </div>
                            <div>
                              <!--  現在のテーマのディレクトリURIを取得+/images/yen-sign-solid.png で画像を表示。-->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/yen-sign-solid.png" alt="" />
                            <span>参加費：<?php 
                                      if(post_custom('fee') == 0) {
                                        echo '無料';
                                      } else {
                                        echo '¥' . number_format(post_custom('fee'));
                                      }
                                    ?></span>
                            </div>
                          </div>
                          <div class="news_post_meta">
                            <!-- 投稿詳細ページのテキスト部分を表示させる。画像とかも入れると画像も表示される -->
                          <?php the_content(); ?>
                          </div>
                          <hr />
                          <div class="social_share">

                          <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt=""/>
                          <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>

        <!--  Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
        <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>