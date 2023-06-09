<?php
if( have_rows('itnova_blocks') ): while ( have_rows('itnova_blocks') ) : the_row();
      
if( get_row_layout() == 'texto_&_imagen' ):
    $layout = get_sub_field('layout');
    $margin = get_sub_field('margins');
    $padding = get_sub_field('padding');

    $textWidth = get_sub_field('text_width');
    $textMargin = get_sub_field('title_margin');
    $textPadding = get_sub_field('title_padding');
    $imageWidth = get_sub_field('image_width');
    $imageMargin = get_sub_field('image_margin');
    $imagePadding = get_sub_field('image_padding');

    $text = get_sub_field('title');
    $image = get_sub_field('image');
     ?>

    <div class="text-image container jic <?php echo $layout .' '; echo $padding .' '; echo $margin; ?>">
        <div class="t-i-text <?php echo $textPadding .' '; echo $textMargin .' ';  echo $textWidth; ?> ">
            <?php echo $text;?>
        </div>
        <div class="t-i-image  <?php echo $imagetPadding .' '; echo $imageMargin .' '; echo $imageWidth; ?> "">
            <img src=<?php echo $image;?>>
        </div>
    </div>

<?php elseif( get_row_layout() == 'item_timeline' ): 
    $margin = get_sub_field('margins');
    $padding = get_sub_field('padding'); 
    $title = get_sub_field('title');



    $textMargin = get_sub_field('text_margin');
    $textPadding = get_sub_field('text_padding');?>


    <div class="items-timeline container flex flex-column <?php echo $padding .' '; echo $margin; ?>">
        <h2 class="items-timeline-text fw6 tc <?php echo $textPadding .' '; echo $textMargin .' ';?> ">
            <?php echo $title;?>
        </h2>

        <div class="items-timeline-content flex column-mobile justify-between items-start">
            <?php if( have_rows('items') ): while ( have_rows('items') ) : the_row(); ?>
                <div class="item flex flex-column justify-center items-center mh5-ns">
                    <img src=<?php the_sub_field('image');?> >
                    <h3 class="white mt4 fw4 ttu tc f5"><?php the_sub_field('title');?></h3>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>


<?php elseif( get_row_layout() == 'featured_faqs' ):?>

    <div class="faq-featured-extract faq-container mt5 mb3 container">
        <h2 class="tc white f2 mv4">Intro al mundo Crypto</h2>
        <div class="featured-faq-container flex flex-column justify-between items-start">
        <?php  if( have_rows('main_faq', 18) ): while ( have_rows('main_faq', 18) ) 
        : the_row(); if (get_sub_field('question')):?>
            <div class="faq-item pa4 mb4 w-70-ns center" area-expanded="false">
            <h2 class="white fw3 faq-question f5"><?php the_sub_field('question'); ?></h2>
            <div class="faq-answer">
                <?php the_sub_field('answer'); ?>
            </div>  
            </div>
        <?php endif; endwhile; endif;?>
        </div> 
    </div>


    <style>
        .faq-item {
            border: 1px solid var(--mainColor);
            border-radius: 8px;
        }
    </style>


<?php elseif(get_row_layout() == 'card_items') :
    
    $margin = get_sub_field('margins');
    $padding = get_sub_field('padding'); 
    
    ?>

    <div class="card-items-container <?php echo $padding .' '; echo $margin; ?>">
        <h2 class="white tc mv3 f2 fw6"><?php the_sub_field('title');?></h2>
            <div class="card-filter ph4 flex jic mt4 mb5">
                <?php if( have_rows('card_filter') ): while ( have_rows('card_filter') ) : the_row();?>
                    <h2 id="<?php the_sub_field('filter_name');?>" class="white f4 main-font inline-flex w-max pointer tc m-auto pv3 ph5 bg-dark-grey"><?php the_sub_field('filter_name'); ?></h2>
                <?php endwhile; endif; ?>
            </div>

            <div class="container center card-content pl4">
                <div class="card-category-container">
                    <?php if( have_rows('card_content') ): while ( have_rows('card_content') ) : the_row();
                    ?>
                    <div class="card-category flex column-mobile justify-between items-start" card-cat="<?php the_sub_field('card_cat');?>">
                        <?php if( have_rows('card') ): while ( have_rows('card') ) 
                        : the_row();?>
                  
                        <div class="card border-radius-min bg-dark-grey pa3 mh4-ns flex flex-column items-center">
                            <img src=<?php the_sub_field('icon');?>>
                            <?php the_sub_field('content');?>
                        </div>
                        
                        <?php endwhile; endif;?>
                    </div>
                    <?php  endwhile; endif; ?>
                </div>
        </div>
    </div>

<?php endif;endwhile;  endif; ?>


<div class="intro-section flex column-mobile jic <?php echo $padding .' '; echo $margin; ?>">
    <div class="intro-video bg-red mb5 w-50-ns" style="background-image: url('/wp-content/uploads/2023/06/pexels-taro-5595352-1.jpg');"></div>
    <div class="intro-text w-40-ns pl6-ns">
        <p class="lh-copy white mb4">CSA operates with the mindset of the property owner. Our actions and thought process along the way are more reflective of the operator, with the ultimate goal of securing financing for the project.</p>

        <a class="main-cta main-color-bg">Get in touch</a>
    </div>

    <div class="intro-img relative w-10-ns mt5-ns">
        <div class="absolute-cover cover bg-center" style="background-image: url('/wp-content/uploads/2023/06/Group-4.jpg');"></div>
    </div>
</div>

<div class="expertise-container container <?php echo $padding .' '; echo $margin; ?>">
    <p class="main-color ttu f6 mb5">Main areas of expertise</p>

    <div class="expertise flex smooth-t not-active relative">
        <span class="main-color-bg db smooth-t"></span>
        <div class="expertise-content pl5 smooth-t relative z-2">
            <h2 class="main-color f0 mb4">Healthcare industry</h2>
            <p class="f4 fw3 lh-copy measure-wide smooth-t">Acquiring loans for Skilled Nursing, Assisted or Independent Living, Memory Care or Continuing Care Retirement Communities is a complex process made easier by our specially trained staff.</p>
            <a href="#" class="ttu mt4 white no-deco flex items-center smooth-t"><p class="mr2">Learn more</p> <?php get_template_part('template-parts/content/arrow');?></a>
        </div>

        <div class="absolute expertise-bg smooth-t" style="background-image: url('/wp-content/uploads/2023/06/pexels-taro-5595352-1.jpg');"></div>


    </div>

    <div class="expertise flex not-active smooth-t relative mt4">
        <span class="main-color-bg db smooth-t"></span>
        <div class="expertise-content pl5 smooth-t relative z-2">
            <h2 class="main-color f0 mb4">Commercial Real Estate</h2>
            <p class="f4 fw3 lh-copy measure-wide smooth-t">Acquiring loans for Skilled Nursing, Assisted or Independent Living, Memory Care or Continuing Care Retirement Communities is a complex process made easier by our specially trained staff.</p>
            <a href="#" class="ttu mt4 white no-deco flex items-center smooth-t"><p class="mr2">Learn more</p> <?php get_template_part('template-parts/content/arrow');?></a>
        </div>

        <div class="absolute expertise-bg smooth-t" style="background-image: url('/wp-content/uploads/2023/06/pexels-taro-5595352-1.jpg');"></div>
    </div>
</div>

<div class="heading-text container mt7">
    <div class="flex jic">
        <h2 class="main-color mr5 f1">About Us</h2>
        <div class="heading-line"></div>
    </div>

    <div class="pv4 flex jic">
        <h3 class="f2 w-50-ns fw3">Capital Stack Advisors is a full service, boutique firm dealing in commercial real estate finance and equity.</h3>
        <p class="w-50-ns pl5-ns fw3">Our advisors are skilled in the art of closing the deal. We work hand-in-hand with all parties involved to ensure that your vision becomes a reality. From appraisal to underwriting to loan committee and closing, we are there, making the process as seamless as possible.Our highly trained and creative staff has but one goal, to help our clients achieve success. We partner with you to bring innovative financial solutions to help you succeed at all your financing endeavors.</p>
    </div>
</div>

<div class="numbers container <?php echo $padding .' '; echo $margin; ?>">
    <div class="numbers-inner flex justify-between pv4">
        <div class="w-40-ns big-n flex flex-column justify-center">
            <h2 class="main-color f0">+10</h2>
            <p class="tc f3">years of experience</p>
        </div>

        <div class="w-50-ns  flex flex-column justify-around">
            <div class="flex items-center small-n">
                <h3 class="main-color f0 fw4">+2.3M</h3>
                <p class="f2 lh1 pl3">Dairy problems solved*</p>
            </div>

            <div class="heading-line"></div>

            <div class="flex items-center small-n">
                <h3 class="main-color f0 fw4">+70</h3>
                <p class="f2 lh1 pl3">Projects founded</p>
            </div>
        </div>
    </div>
    
</div>

<div class="testimonials-container secondary-gradient-bg pv6 mt5 <?php echo $padding .' '; echo $margin; ?>">
    <h2 class="f1 black tc">Testimonials</h2>

    <div class="w-100 overflow-x-scroll mt5">
            <div class="flex w-max container">

            <?php for ($i=0; $i < 3; $i++) { ?>
                <div class="testimonial flex flex-column mr5">
                    <div class="testimonial-text mv4 pr5 pb4 black measure-wide lh-copy">
                        Navigating financing in the Healthcare industry can be tricky. Capital Stack gave us more guidance and help than we knew we needed. Their prompt friendly, but yet businesslike approach was refreshing. Our Advisor understood our goals and more importantly helped us achieve them. They are our go-to firm going forward.
                    </div>

                    <div class="overflow-hidden">
                        <p class="main-color tc testimonial-author bg-black inline-flex">C.M. CEO, Paramount</p>
                    </div>
                </div>
        <?php } ?>
            </div>
    </div>
    
</div>



<style>
/* Reusable */

/* Intro Section  Desktop*/

.intro-video {
    height: 60vh;
}

.intro-img {
    height: 40vh;
    transform: translateY(60%);
}

/* Expertise */

.expertise {
    max-width: 50vw; 
    margin-bottom: 50px;
}


.expertise span {
    width: 7px;
    transform: scaleY(1);
    transform-origin: top;
}

.expertise. .expertise-content p{
    /* opacity: 0; */
    max-height: unset;
}

.expertise-bg {
    z-index: 1;
    width: 35vw;
    height: 35vw;
    right: -50%;
    top: -40%;
    clip-path: inset(0);
}

.expertise.not-active .expertise-bg {
    clip-path: inset(100% 0 0 0);
  transition: var(--smooth);
}


.expertise.not-active .expertise-content {
    padding-left: 0px;
}

.expertise.not-active .expertise-content h2{
 color: #fff;
}


.expertise.not-active .expertise-content p{
    opacity: 0;
    max-height: 0;
}

.expertise.not-active .expertise-content a{
    opacity: 0;
    max-height: 0;
}

.expertise.not-active span {
    transform: scaleY(0);
    transform-origin: top;

}

/* Heading Text Desktop */

.heading-text > div:last-child{
    border-bottom: 1px solid #fff;
}

.heading-line {
    height: 1px;
    flex: 1 0 0;
    background-color: #fff;
}


/* Numbers Desktop */

.numbers-inner {
    border-bottom: 1px solid #fff;
}

.numbers .heading-line {
    flex: initial;
}

.big-n .f0 {
    font-size: 18rem;
}

.small-n:nth-child(even) {
    /* border-top: 1px solid #fff; */
}

/* Testimonials Desktop*/

.testimonial {
    min-width: 35vw;
}

.testimonial {
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
}

.testimonial-text {
    border-right: 1px solid #000;
}

.testimonial-author {
    padding: 14px 65px;
}

</style>