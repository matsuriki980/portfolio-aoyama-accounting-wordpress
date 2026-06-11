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