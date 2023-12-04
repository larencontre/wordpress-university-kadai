<?php get_header(); ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <div>Courses</div>
            <div>コース</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Courses -->

    <div class="courses">
      <div class="footer_row">
        <div class="row">
          <div class="col-lg-12">
            <p class="title">コース</p>
            <div class="courses_container">
              <div class="row courses_row">
                <!-- Course -->
                <!-- ここからループ -->
                <div class="col-lg-4 course_col">
                  <div class="course">
                    <div class="course_image">
                      <img src="<?php the_post_thumbnail(); ?>" alt="" />
                    </div>
                    <div class="course_body">
                      <h3 class="course_title">
                        <a href="courses_detail.html">教育学部</a>
                      </h3>
                      <div class="course_text">
                        <p>
                          広い視野と総合力を持つ世界に通用する、教育者・指導者を育成
                        </p>
                      </div>
                    </div>
                    <div class="course_footer">
                      <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                        <div class="course_price ml-auto">詳細を見る</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ここまでループ -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
