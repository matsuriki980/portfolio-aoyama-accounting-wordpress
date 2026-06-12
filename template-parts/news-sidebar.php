      <aside class="l-sidebar js-header-trigger">

          <h2 class="news-detail__sidebar-title">news</h2>

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

          <section class="l-sidebar__section">
              <h2 class="l-sidebar__title">Archive</h2>

              <ul class="l-sidebar__list">
                  <li class="l-sidebar__item">
                      <a href="#" class="l-sidebar__link">
                          <span class="l-sidebar__label">2026年</span>
                          <span class="l-sidebar__count">(10)</span>
                      </a>
                  </li>
              </ul>
          </section>
      </aside>