        <!-- トップページ以外の場合 -->
        <?php if (!is_front_page()) : ?>

            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>

                    <li class="news__item">
                        <article class="c-news__item">
                            <a href="<?php the_permalink(); ?>" class="c-news__link" aria-label="詳細ページへ">

                                <!-- img -->
                                <div class="c-news__img">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail(
                                            'medium_large',
                                            array(
                                                'width'  => 315,
                                                'height' => 210,
                                                'alt'    => get_the_title(),
                                            )
                                        );
                                    }
                                    ?>
                                </div>

                                <!-- content -->
                                <div class="c-news__content">
                                    <div class="c-news__info">
                                        <span class="c-news__category">
                                            <?php
                                            $category = get_the_category();
                                            if (! empty($category)) {
                                                echo esc_html($category[0]->name);
                                            }
                                            ?>
                                        </span>

                                        <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="c-news__date">
                                            <?php echo get_the_date('Y.m.d'); ?>
                                        </time>
                                    </div>

                                    <h3 class="c-news__title">
                                        <?php the_title(); ?>
                                    </h3>
                                </div>

                            </a>
                        </article>
                    </li>
                <?php
                endwhile;
            else :
                ?>
                <li class="news__item c-news-item-not-post">
                    <p>投稿がありません。</p>
                </li>
            <?php
            endif;
            ?>

            <!-- トップページの場合 -->
        <?php else : ?>

            <!-- 通常投稿のデータを取得し反映 -->
            <?php
            $news_query = new WP_Query(
                array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                )
            );

            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) :
                    $news_query->the_post();
            ?>

                    <li class="top__news-item">
                        <article class="c-news__item">
                            <a href="<?php the_permalink(); ?>" class="c-news__link" aria-label="詳細ページへ">

                                <!-- img -->
                                <div class="c-news__img">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail(
                                            'medium_large',
                                            array(
                                                'width'  => 315,
                                                'height' => 210,
                                                'alt'    => get_the_title(),
                                            )
                                        );
                                    }
                                    ?>
                                </div>

                                <!-- content -->
                                <div class="c-news__content">
                                    <div class="c-news__info">
                                        <span class="c-news__category">
                                            <?php
                                            $category = get_the_category();
                                            if (! empty($category)) {
                                                echo esc_html($category[0]->name);
                                            }
                                            ?>
                                        </span>

                                        <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="c-news__date">
                                            <?php echo get_the_date('Y.m.d'); ?>
                                        </time>
                                    </div>

                                    <h3 class="c-news__title">
                                        <?php the_title(); ?>
                                    </h3>
                                </div>

                            </a>
                        </article>
                    </li>

                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <li class="news__item c-news-item-not-post">
                    <p>投稿がありません。</p>
                </li>
            <?php
            endif;
            ?>
        <?php endif; ?>