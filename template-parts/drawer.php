<!-- ===============================================================  
  drawer
================================================================ -->

    <!-- drawer -->
    <div class="l-drawer js-drawer">
        <div class="l-drawer__body">
            <nav class="l-drawer__nav" aria-label="グローバルナビゲーション">
                <ul class="l-drawer__list">
                    <li class="l-drawer__item js-drawer__item" data-item="feature">
                        <a href="<?php echo esc_url(home_url('/feature/')); ?>" class="l-drawer__link">
                            青山会計事務所の強み
                        </a>
                    </li>
                    <li class="l-drawer__item js-drawer__item" data-item="service">
                        <a href="<?php echo esc_url(home_url('/service/')); ?>" class="l-drawer__link">
                            サービス内容
                        </a>

                        <ul class="l-drawer__child-list">

                            <li class="l-drawer__child-item">
                                <a href="<?php echo esc_url(home_url('/service/#tax')); ?>" class="l-drawer__child-link u-nav__link-child">
                                    税務・会計
                                </a>
                            </li>

                            <li class="l-drawer__child-item">
                                <a href="<?php echo esc_url(home_url('/service/#capital')); ?>" class="l-drawer__child-link u-nav__link-child">
                                    相続・贈与・譲渡所得
                                </a>
                            </li>

                            <li class="l-drawer__child-item">
                                <a href="<?php echo esc_url(home_url('/service/#support')); ?>" class="l-drawer__child-link u-nav__link-child">
                                    設立・開業支援
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="l-drawer__item js-drawer__item" data-item="about">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="l-drawer__link">
                            事務所案内
                        </a>

                        <ul class="l-drawer__child-list">

                            <li class="l-drawer__child-item">
                                <a href="<?php echo esc_url(home_url('/about/#message')); ?>" class="l-drawer__child-link u-nav__link-child">
                                    代表挨拶
                                </a>
                            </li>

                            <li class="l-drawer__child-item">
                                <a href="<?php echo esc_url(home_url('/about/#values')); ?>" class="l-drawer__child-link u-nav__link-child">
                                    経営理念
                                </a>
                            </li>

                            <li class="l-drawer__child-item">
                                <a href="<?php echo esc_url(home_url('/about/#company')); ?>" class="l-drawer__child-link u-nav__link-child">
                                    事務所概要
                                </a>
                            </li>
                            <li class="l-drawer__child-item">
                                <a href="<?php echo esc_url(home_url('/about/#access')); ?>" class="l-drawer__child-link u-nav__link-child">
                                    アクセス
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="l-drawer__item js-drawer__item" data-item="voice">
                        <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="l-drawer__link">
                            お客様の声
                        </a>
                    </li>
                    <li class="l-drawer__item js-drawer__item" data-item="news">
                        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="l-drawer__link">
                            お知らせ
                        </a>
                    </li>
                    <li class="l-drawer__item js-drawer__item" data-item="contact">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="l-drawer__link">
                            お問い合わせ
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="l-drawer__visual sp-hidden">
                <div class="l-drawer__img js-drawer__img is-active" data-img="feature">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/drawer01.jpg" width="720" height="806" alt="会計相談の打ち合わせ風景">
                </div>
                <div class="l-drawer__img js-drawer__img" data-img="service">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/drawer02.jpg" width="720" height="806" alt="業務を行うスタッフ">
                </div>
                <div class="l-drawer__img js-drawer__img" data-img="about">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/drawer03.jpg" width="720" height="806" alt="事務所内のオフィス風景">
                </div>
                <div class="l-drawer__img js-drawer__img" data-img="voice">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/drawer04.jpg" width="720" height="806" alt="スマートフォンで問い合わせを行う様子">
                </div>
                <div class="l-drawer__img js-drawer__img" data-img="news">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/drawer05.jpg" width="720" height="806" alt="税務・会計に関する資料">
                </div>
                <div class="l-drawer__img js-drawer__img" data-img="contact">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/drawer06.jpg" width="720" height="806" alt="資料を持つスタッフ">
                </div>
            </div>

            <!-- marquee -->
            <div class="c-marquee l-drawer__marquee sp-hidden">

                <div class="c-marquee-track">

                    <span class="c-marquee-text">
                        Numbers Expert Numbers Expert Numbers Expert
                    </span>

                    <span class="c-marquee-text">
                        Numbers Expert Numbers Expert Numbers Expert
                    </span>

                </div>

            </div>
        </div>
    </div>