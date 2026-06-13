      <aside class="l-sidebar js-header-trigger">

          <?php if (is_single()) : ?> <!-- 詳細ページのみ「News」を表示 -->
              <h2 class="news-detail__sidebar-title">news</h2>
          <?php endif; ?>

          <section class="l-sidebar__section news-detail__sidebar__section">
              <h2 class="l-sidebar__title">Category</h2>

              <!-- 全カテゴリーの合計件数を取得し反映する -->
              <?php
                $post_count = wp_count_posts('post'); // 通常投稿全ての件数を取得
                $published_count = $post_count->publish; // 公開済の投稿のみ取得する
                ?>

              <ul class="l-sidebar__list">
                  <li class="l-sidebar__item">
                      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="l-sidebar__link">
                          <span class="l-sidebar__label">すべて</span>
                          <span class="l-sidebar__count">(<?php echo esc_html($published_count); ?>)</span>
                      </a>
                  </li>

                  <!-- 各カテゴリーの「カテゴリー名」「件数」を取得し反映する -->
                  <?php
                    $categories = get_categories();
                    ?>

                  <?php foreach ($categories as $category) : ?>
                      <li class="l-sidebar__item">
                          <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="l-sidebar__link">
                              <span class="l-sidebar__label"><?php echo esc_html($category->name); ?></span>
                              <span class="l-sidebar__count">(<?php echo esc_html($category->count); ?>)</span>
                          </a>
                      </li>
                  <?php endforeach; ?>
              </ul>
          </section>

                  <!-- 投稿が0の時は[Archive]を非表示 --> 
          <?php if (have_posts()) : ?>
              <section class="l-sidebar__section">
                  <h2 class="l-sidebar__title">Archive</h2>


                  <ul class="l-sidebar__list">
                      <?php
                        global $wpdb; // WordPressのデータベースを使う準備

                        $years = $wpdb->get_results("
                      SELECT
                        YEAR(post_date) AS year, -- 投稿日から年だけを取得して year という名前にする
                        COUNT(ID) AS post_count -- その年の記事数を数えて post_count という名前にする
                      FROM {$wpdb->posts} -- WordPressの記事データが入っているテーブル
                      WHERE post_type = 'post' -- 投稿タイプが通常の投稿だけを対象にする
                        AND post_status = 'publish' -- 公開済みの記事だけを対象にする
                      GROUP BY YEAR(post_date) -- 年ごとにまとめる
                      ORDER BY year DESC -- 新しい年から順番に並べる
                    ");

                        if ($years) : // 年別データがあれば
                            foreach ($years as $year_data) :

                                $year = (int) $year_data->year; // 1年分のデータから「年」を取得して数値に変換
                                $post_count = (int) $year_data->post_count; // その年の投稿件数を取得して数値に変換
                                $year_url = get_year_link($year); // その年の年別アーカイブページURLを取得
                        ?>
                              <li class="l-sidebar__item">
                                  <a href="<?php echo esc_url($year_url); ?>" class="l-sidebar__link">
                                      <span class="l-sidebar__label"><?php echo esc_html($year); ?>年</span> <!-- 投稿年を反映 -->
                                      <span class="l-sidebar__count">
                                          (<?php echo esc_html($post_count); ?>) <!-- 年別投稿件数を反映 -->
                                      </span>
                                  </a>
                              </li>
                      <?php
                            endforeach;
                        endif;
                        ?>
                  </ul>
              </section>
          <?php endif; ?>
      </aside>