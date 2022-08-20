<?php /* Template Name: Anasayfa */ get_header(); ?>

<section class="first-section">
            <div class="konten">
                <div class="first-section-left">
                    <div class="first-section-title">
                        Prof. Dr. Serdar Baki Albayrak
                    </div>
                    <div class="first-section-title2">
                        <?php pll_e('Brain and Nerve Surgery Specialist'); ?>
                    </div>
                    <div class="first-section-text">
                    <?php dynamic_sidebar('widget-area-1'); ?>
                    </div>
                    <div class="first-section-button">
                        <a href="<?php pll_e('/contact'); ?>"><?php pll_e('Appointment'); ?></a>
                    </div>
                </div>
                <div class="first-section-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/serdar-baki.png" alt="">
                </div>
            </div>
</section>
<section class="second-section">
            <div class="konten">
                <div class="resume-title-wrap">
                    <div class="resume-title"><?php pll_e('Resume'); ?></div>
                    <div class="resume-button">
                        <a href="<?php pll_e('/about'); ?>"><?php pll_e('Details'); ?></a>
                    </div>
                </div>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                </div>
                <!-- /article -->

                <?php endwhile; ?>

                <?php else: ?>
                <?php endif; ?>
                <div class="about-wrapper">
                    <div class="about-item">
                        <div class="about-title">
                        <?php pll_e('Schools/Trainings'); ?>
                        </div>
                        <ul>
                            <li>
                            <?php pll_e("Istanbul Marmara University Faculty of Medicine – Faculty of Medicine (Bachelor's Degree), 1991 – 1998"); ?></li>
                            <li>
                            <?php pll_e("Istanbul University Istanbul Faculty of Medicine - Specialty training (Neurosurgery
                            master's degree), 1998 – 2004"); ?></li>
                            <li>
                            <?php pll_e("Harvard University School of Medicine - 1 Year Clinical Fellow-Scholarship Holder, 2007 – 2008"); ?></li>
                            <li>
                            <?php pll_e("University of Helsinki - Clinical Fellowship for 1 Year, 2006 - 2007"); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="about-item">
                        <div class="about-title">
                         <?php pll_e('Experiences'); ?> 
                        </div>
                        <ul>
                            <li>
                            <?php pll_e("University of Helsinki Toolo Hospital, Clinical Fellowship - I received postgraduate training in the treatment of brain aneurysms (bubbles), AVMs (brain vascular anomalies) and complex brain tumors and participated in surgeries."); ?>
                            </li>
                            <li>
                            <?php pll_e("I became a neurosurgeon at Harvard University Medical School Brigham and Women's Hospital, Clinical Fellow-on–scholarship - also working as a doctor of surgery in this program on the treatment of brain tumors."); ?>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
</section>
<section class="third-section lazy">
            <div class="konten">
            <?php dynamic_sidebar('parallax-cumle'); ?>  
            </div>
</section>
<div class="off-page-title">
            <div class="konten">
                <div class="resume-title-wrap">
                    <div class="resume-title">
                        <?php pll_e('Specialties'); ?> 
                    </div>
                    <div class="resume-button">
                        <a href="<?php pll_e('/specialties'); ?> "><?php pll_e('All'); ?></a>
                    </div>
                </div>
            </div>
</div>
<section class="fourth-section">
            <div class="konten">
                <div class="fourth-section-inner">
                <?php dynamic_sidebar('anasayfa-card'); ?>       
                </div>
            </div>
</section>
<section class="fifth-section">
            <div class="swiper">
                <div class="swiper-wrapper">
                <?php dynamic_sidebar('anasayfa-slider'); ?>     
          
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
</section>
<section class="sixth-section">
            <div class="sixth-section-bg"></div>
            <div class="sixth-section-overlay"></div>
            <div class="konten">
                <div class="sixth-section-title"><?php pll_e('Media'); ?></div>
                <div class="sixth-section-inner">
                   <?php dynamic_sidebar('widget-area-2'); ?> 
                   
                </div>
            </div>
</section>

<?php get_footer(); ?>

