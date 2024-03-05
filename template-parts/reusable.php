<div class="reusable-content">


<?php
if( have_rows('reusable') ): while ( have_rows('reusable') ) : the_row();
      
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

<?php elseif(get_row_layout() == 'intro_section') : 

    $margin = get_sub_field('margins');
    $padding = get_sub_field('padding');
    ?>

    <div class="intro-section flex column-mobile jic <?php echo $padding .' '; echo $margin; ?>">
        <div class="intro-video bg-red mb5 w-50-ns" style="background-image: url(<?php the_sub_field('intro_image');?>);"></div>
        <div class="intro-text w-40-ns pl6-ns">
            <p class="lh-copy white mb4"><?php the_sub_field('intro_text');?></p>

            <a class="main-cta main-color-bg">Get in touch</a>
        </div>

        <div class="intro-img relative w-10-ns mt5-ns">
            <div class="absolute-cover cover bg-center" style="background-image: url(<?php the_sub_field('intro_bg');?>);"></div>
        </div>
    </div>



<?php elseif(get_row_layout() == 'starter_secondary_page') : 
    
    $margin = get_sub_field('margins');
    $padding = get_sub_field('padding');
    ?>

    <div class="starter-secondary-page container pv5 <?php echo $padding .' '; echo $margin; ?>">
        <div class="starter-title flex jic pb5">
            <h2 class="main-color w-40-ns f1">Healthcare & Senior Housing.</h2>
            <p class="lh-copy w-50-ns fw1 f3">Communities is a complex process made easier by our specially trained staff.</p>
        </div>
        <div class="heading-line"></div>
    </div>


    <div class="flex justify-between starter-bis container pv5">
            <div class="starter-bg-img w-20-ns">
                <img src="/wp-content/uploads/2023/06/Group-4.jpg">
            </div>

            <div class="flex flex-column jic w-50-ns">
                <!-- Start reusable -->
                <?php if( have_rows('category_cases') ): while ( have_rows('category_cases') ): the_row(); if (get_sub_field('title')): ?>
                    <div class="category-info">
                        <div class="faq-item pv4" area-expanded="false">
                            <div class="flex jic mb3">
                                <h2 class="white fw3 faq-question f3 smooth-t"><?php the_sub_field('title'); ?></h2>
                                <div class="faq-arrow flex">
                                    <svg class="m-auto smooth-t" width="16" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.35083 0.396667L6.35083 14.6404" stroke="#B6FD87" stroke-width="0.954451"/>
                                    <path d="M0.861572 9.15112L6.35077 14.6403L11.84 9.15112" stroke="#B6FD87" stroke-width="0.954451"/>
                                    </svg>
                                </div>
                            </div>
                        
                            <div class="faq-answer lh-copy">
                            <?php the_sub_field('text'); ?>
                            </div>  
                        </div>
                    </div>
                    <div class="heading-line"></div>
                <?php endif; endwhile; endif; ?>
            </div>
        </div>



<?php elseif(get_row_layout() == 'expertise') : 

$margin = get_sub_field('margins');
$padding = get_sub_field('padding');
?>

<div class="expertise-container container <?php echo $padding .' '; echo $margin; ?>">
    <p class="main-color ttu f6 mb5">Main areas of expertise</p>

    <?php if( have_rows('expertise_area') ): while ( have_rows('expertise_area') ): the_row(); ?>
    <a href=<?php the_sub_field('expertise_link');?> class="expertise flex smooth-t not-active relative white no-deco">
        <span class="main-color-bg db smooth-t"></span>
        <div class="expertise-content pl5 smooth-t relative z-2">
            <?php the_sub_field('content');?>
            <div class="ttu mt4 white no-deco flex items-center smooth-t">
                <p class="mr2">Learn more</p>
                <?php get_template_part('template-parts/content/arrow');?>
            </div>
        </div>

        <div class="absolute expertise-bg smooth-t bg-center cover" style="background-image: url(<?php the_sub_field('expertise_image');?>);"></div>
    </a>

    <?php endwhile; endif; ?>
</div>


<?php elseif(get_row_layout() == 'heading_text') : 

$margin = get_sub_field('margins');
$padding = get_sub_field('padding');
?>


<div class="heading-text container mt7">
    <div class="flex jic">
        <h2 class="main-color mr5 f1"><?php the_sub_field('title');?></h2>
        <div class="heading-line"></div>
    </div>

    <div class="pv4 flex jic">
       <?php the_sub_field('content');?>
    </div>
</div>

<?php elseif(get_row_layout() == 'carrousel') : 

$margin = get_sub_field('margins');
$padding = get_sub_field('padding');
?>

<div class="case-study-uses w-100  pv5 <?php echo $padding .' '; echo $margin; ?>">
    <h2 class="main-color f1 mb3 container-left"><?php the_sub_field('title');?></h2>
    <p class="lh-copy f5 container-left measure-wide fw1"><?php the_sub_field('text');?></p>

    <div class="w-100 overflow-x-scroll">
        <div class="flex w-max container-left mt4">
        <?php if( have_rows('carrousel_content') ): while ( have_rows('carrousel_content') ): the_row(); ?>
                <div class="case-use flex flex-column mr5">
                    <div class="case-img relative">
                        <img class="relative z-2" src="/wp-content/uploads/2023/06/pexels-taro-5595352-1.jpg">
                        <div class="<?php the_sub_field('gradient_bg');?> gradient absolute-cover"></div>
                    </div>

                    <?php the_sub_field('content');?>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
 
</div>


<?php elseif(get_row_layout() == 'testimonials') : 

$margin = get_sub_field('margins');
$padding = get_sub_field('padding');
?>



<div class="testimonials-container secondary-gradient-bg pv6 mt5 <?php echo $padding .' '; echo $margin; ?>">
    <h2 class="f1 black tc"><?php the_sub_field('title_section');?></h2>

    <div class="w-100 overflow-x-scroll mt5">
            <div class="flex w-max container">

            <?php if( have_rows('testimonial_content') ): while ( have_rows('testimonial_content') ): the_row(); ?>
                <div class="testimonial flex flex-column mr5">
                    <div class="testimonial-text mv4 pr5 pb4 black measure-wide lh-copy">
                       <?php the_sub_field('testimonial');?>
                    </div>

                    <div class="overflow-hidden">
                        <p class="main-color tc testimonial-author bg-black inline-flex"><?php the_sub_field('author');?></p>
                    </div>
                </div>
        <?php endwhile; endif; ?>
            </div>
    </div>
    
</div>


<?php elseif(get_row_layout() == 'numbers') : 

$margin = get_sub_field('margins');
$padding = get_sub_field('padding');
?>

<div class="container">
    <div class="heading-line"></div>
</div>

<div class="numbers container <?php echo $padding .' '; echo $margin; ?>">
    <div class="numbers-inner flex justify-between pv4">
        <div class="w-40-ns big-n flex flex-column justify-center">
            <h2 class="main-color f0 animate-number"><?php the_sub_field('big_number');?></h2>
            <p class="tc f3"><?php the_sub_field('big_number_caption');?></p>
        </div>


        <div class="w-50-ns  flex flex-column justify-around">

        <?php if( have_rows('small_numbers') ): while ( have_rows('small_numbers') ): the_row(); ?>

            <div class="flex items-center small-n">
                <h3 class="main-color f0 fw4 animate-number"><?php the_sub_field('small_number');?></h3>
                <p class="f2 lh1 pl3"><?php the_sub_field('small_number_caption');?></p>
            </div>

            <div class="heading-line desktop"></div>

        <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="heading-line"></div>
</div>


<?php elseif(get_row_layout() == 'numbers_grid') : 

$margin = get_sub_field('margins');
$padding = get_sub_field('padding');
?>


<div class="numbers-grid container <?php echo $padding .' '; echo $margin; ?> w-100">
    <div class="heading-line"></div>
    <div class="numbers-inner flex justify-between pv4-ns">   
        <?php if( have_rows('grid_content') ): while ( have_rows('grid_content') ): the_row(); ?>
            <div class="flex flex-column items-center small-n mh3">
                <h3 class="main-color f0 fw4 animate-number"><?php the_sub_field('number');?></h3>
                <p class="f3 fw3 lh1 tc"><?php the_sub_field('number_caption');?></p>
            </div>
        <?php endwhile; endif; ?>
    </div>
    <div class="heading-line"></div>
</div>


<?php endif;endwhile;  endif; ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<h2 class="white f2 mb4 tc mt6">US tresuries rates</h2>
<div id="table-container" class="container-xl flex jic pb5"></div>

</div>


<div id="rss-feed"></div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const rssFeedUrl = "https://zapier.com/engine/rss/12675401/M3Shorts";

    fetch(rssFeedUrl)
        .then(response => response.text())
        .then(xmlText => {
            console.log(xmlText);
            const parser = new DOMParser();
            const xmlDoc = parser.parseFromString(xmlText, "text/xml");
            const items = xmlDoc.querySelectorAll("item");

            const jsonData = [];

            items.forEach(item => {
                const title = item.querySelector("title").textContent;
                const link = item.querySelector("link").textContent;
                const description = item.querySelector("description").textContent;

                jsonData.push({
                    title: title,
                    link: link,
                    description: description
                });
            });

            // console.log(JSON.stringify(jsonData));

            const rssFeedDiv = document.getElementById("rss-feed");

            const ul = document.createElement("ul");
            items.forEach(item => {
                console.log(item)
                const title = item.querySelector("title").textContent;
                const link = item.querySelector("link").textContent;
                const description = item.querySelector("description").textContent;

                const li = document.createElement("li");
                const a = document.createElement("a");
                a.href = link;
                a.textContent = title;
                a.target = "_blank";
                li.appendChild(a);
                const p = document.createElement("p");
                p.textContent = description;
                li.appendChild(p);
                ul.appendChild(li);
            });

            rssFeedDiv.appendChild(ul);
        })
        .catch(error => {
            console.error("Error fetching RSS feed:", error);
        });
});

</script>



<script>

function formatDate(date) {
  const formattedDate = `${date.getMonth() + 1}/${date.getDate()}/${date.getFullYear()}`;
  return formattedDate;
}

// Fetch and process XML data
fetch('https://home.treasury.gov/resource-center/data-chart-center/interest-rates/pages/xml?data=daily_treasury_yield_curve&field_tdr_date_value_month=202307')
  .then(response => response.text())
  .then(xmlData => {
    const parser = new DOMParser();
    const xmlDoc = parser.parseFromString(xmlData, 'application/xml');

    // Get all entry elements from the XML
    const entries = xmlDoc.querySelectorAll('entry');
    // console.log(entries);

    const padding = '20px';


    let tableHtml = `<table style="border-collapse: collapse; width: 100%; text-align: center;">`;
    tableHtml += `<tr style="border-bottom: 1px solid #ccc; color: var(--mainColor);" class="table-header"><th style="padding: ${padding};">Date</th><th style="padding: ${padding};">1 YR</th><th style="padding: ${padding};">2 YR</th><th style="padding: ${padding};">3 YR</th><th style="padding: ${padding};">5 YR</th><th style="padding: ${padding};">7 YR</th><th style="padding: ${padding};">10 YR</th><th style="padding: ${padding};">20 YR</th><th style="padding: ${padding};">30 YR</th></tr>`;


    // Get today's date, tomorrow's date, and 30 days ago
    const today = new Date();
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    const thirtyDaysAgo = new Date();
    thirtyDaysAgo.setDate(thirtyDaysAgo.getDate() - 30);

    // Extract data from each entry
    entries.forEach((entry, index) => {
    // console.log(entry)
      const properties = entry.getElementsByTagName('m:properties')[0];
      const date = new Date(properties.getElementsByTagName('d:NEW_DATE')[0].textContent);


      // only showcase today's date 

    //   console.log(date , today);
      
        const formattedDate = formatDate(date); // Format the date

        const oneYearRate = parseFloat(properties.getElementsByTagName('d:BC_1YEAR')[0].textContent);
        const twoYearRate = parseFloat(properties.getElementsByTagName('d:BC_2YEAR')[0].textContent);
        const threeYearRate = parseFloat(properties.getElementsByTagName('d:BC_3YEAR')[0].textContent);
        const fiveYearRate = parseFloat(properties.getElementsByTagName('d:BC_5YEAR')[0].textContent);
        const sevenYearRate = parseFloat(properties.getElementsByTagName('d:BC_7YEAR')[0].textContent);
        const tenYearRate = parseFloat(properties.getElementsByTagName('d:BC_10YEAR')[0].textContent);
        const twentynYearRate = parseFloat(properties.getElementsByTagName('d:BC_20YEAR')[0].textContent);
        const thirtyYearRate = parseFloat(properties.getElementsByTagName('d:BC_30YEAR')[0].textContent);



        tableHtml += `<tr style="border-bottom: 1px solid #ccc;"><td style="padding: ${padding};">${formattedDate}</td><td style="padding: ${padding};">${oneYearRate}%</td><td style="padding: ${padding};">${twoYearRate}%</td><td style="padding: ${padding};">${threeYearRate}%</td><td style="padding: ${padding};">${fiveYearRate}%</td><td style="padding: ${padding};">${sevenYearRate}%</td><td style="padding: ${padding};">${tenYearRate}%</td><td style="padding: ${padding};">${twentynYearRate}%</td><td style="padding: ${padding};">${thirtyYearRate}%</td></tr>`;

    });

    tableHtml += '</table>';
    const container = document.getElementById('table-container');
    container.innerHTML = tableHtml;

  })
  .catch(error => {
    console.error('Error fetching XML data:', error);
  });




  function createChart(dates, rates) {
  const ctx = document.getElementById('chart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: dates,
      datasets: [{
        label: 'US Treasuries Interest Rates',
        data: rates,
        borderColor: 'blue',
        fill: false
      }]
    },
    options: {
      responsive: true,
      scales: {
        x: {
          display: true,
          title: {
            display: true,
            text: 'Date'
          }
        },
        y: {
          display: true,
          title: {
            display: true,
            text: 'Interest Rate'
          }
        }
      }
    }
  });
}

</script>


<style>
    /* Reusable */
    /* Case Study info */


    .case-use {
        width: 30vw;
    }
    .case-img .gradient {
        transform: translate(4%, 3.75%);
    }

    /* Intro Section  Desktop*/

    .intro-video {
        height: 60vh;
    }

    .intro-img {
        height: 40vh;
        transform: translateY(60%);
    }

    /* Secondary Intro Desktop */

    .starter-bg-img {
        transform: translateX(-15vw);
    }

    .starter-bis .heading-line {
        /* transform: scaleX(1); */
        transform-origin: left;
        width: 100%;
        flex: initial;
    }

    .faq-arrow {
        border-radius: 100px;
        border: 1px solid var(--mainColor);
        width: 44px;
        height: 44px;
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

    .expertise.not-active .expertise-content svg{
        opacity: 0;
        max-height: 0;
    }

    .expertise.not-active span {
        transform: scaleY(0);
        transform-origin: top;

    }

    /* Heading Text Desktop */

    .heading-text > div:last-child{
        /* border-bottom: 1px solid #fff; */
    }

    .heading-line {
        height: 1px;
        flex: 1 0 0;
        background-color: #fff;
        transform: scaleX(0);
        transition: var(--smooth);
        transform-origin: left;
        transition-delay: 0.4s
    }

    .in-view .heading-line { 
        transform: scaleX(1);
    }


    .numbers-inner .heading-line:last-child {
        display: none;
    }


    /* Numbers Desktop */

    .numbers-inner {
        /* border-bottom: 1px solid #fff; */
    }

    .numbers .heading-line {
        flex: initial;
    }

    .big-n .f0 {
        font-size: 18rem;
    }

    .animate-number {
        text-align: center
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


    @media (max-width:1200px) {
        .small-n {
            flex-direction: column
        }

        .small-n p {
            text-align: center;
            padding-left: 0px;
        }

        .big-n .f0 {
            font-size: 12rem;
        }

        .small-n {
            margin: 20px auto;
            padding: 10px;
        }

        .small-n .f0 {
            font-size: 4rem;
        }

        /* Start Intro text mid size */

        .intro-text {
            padding: 0px 30px;
        }

        .intro-img {
            display: none;
        }

    }

    @media (max-width: 820px) {

        .container-xl {
            padding: 0px 60px;
        }

        .reusable-content > div {
            margin: 0px 0px 40px;
        }

        .numbers-inner {
            flex-direction: column;
            justify-content: center;
        }

        .numbers-inner > div {
            width: 100%;
            text-align: center
        }

        .expertise.not-active {
            max-width: 100%;
            width: 100%;
            flex-direction: column;
        }

        .expertise > div {
            width: 100%;
        }

        .not-active .expertise > span {
            display: none;
        }

        .not-active .expertise-content {
            padding-left: 0px !important;
        }

        .expertise.not-active .expertise-content p, .expertise.not-active .expertise-content a {
            opacity: 1;
            max-height: unset; 
        }

        .expertise.not-active .expertise-bg {
            position: relative;
            clip-path: inset(0) !important;
            top: 0;
            right: 0;
            margin-top: 30px
        }

        .heading-text {
            display: flex;
            flex-direction: column;
        }

        .heading-text > div:last-child {
            flex-direction: column;
        }

        .heading-text > div:last-child > * {
            width: 100%;
        }

        .heading-text p {
            padding-left: 0px;
            margin-top: 10px;
        }

    }

    @media (max-width: 580px) {

        header.container-xs {
            padding: 20px;
        }

        .reusable-content > div {
            margin: 0px 0px 60px;
        }


        .page-starter {
            height: 50vh;
            display: flex
        }

        .page-starter > div.container {
            margin: auto;
            margin-bottom: 0px;
            margin-left: 0;
        }

        .page-starter h1.f0 {
            font-size: 2.8rem;
        }

        .starter-arrow svg {
            width: 50px; height: auto
        }
        
        .f0, h1.f0, h2.f0, h3.f0, h4.f0, h5.f0, h6.f0 {
            font-size: 2.8rem;
        }

        .big-n .f0 {
        font-size: 4rem;
        }

        .big-n {
            margin: 20px auto;
        }

        .big-n p.f2 {
        font-size: 1.5rem;
            }
        .testimonials-container > h2 {
            text-align: left;
            padding-left: 20px;
        }

        .testimonial {
        max-width: 80vw;
        border-top: 0px;
        margin-right: 30px;
        }

        .testimonial-text{
            padding-right: 20px;
        }

        .testimonial-author {
        padding: 10px;
        }

        #table-container {
            padding: 60px 20px;
            padding-top: 0px;
            width: 100%;
            overflow: scroll;
        }

        .heading-text p {
        display: none;
        }

        .heading-text > div:last-child {
            border-bottom: 0px;
            padding-bottom: 0px;
        }

        .starter-secondary-page {
            margin-top: 100px !important;
        }

        .starter-secondary-page > div {
            flex-direction: column;
        }

        .starter-secondary-page  p {
            margin-top: 10px;
        }

        .starter-bg-img {
            display: none;
        }

        .case-use {
            max-width: 75vw;
            margin-right: 3rem;
            width: unset;
        }
    }


</style>

