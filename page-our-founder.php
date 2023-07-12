<?php
get_header();
?>

<div data-barba="container" class="home bg-black" data-barba-namespace="home" data-header-color="light">


    <div class="founder-starter pt7 container">
        <h1 class="main-color f0 mb5">Our Founder</h1>
        <div class="flex column-mobile justify-between relative pb7">
            <div class="w-30-ns sticky h-max top-0" style="top: 100px;">
                <img src="<?php the_post_thumbnail_url('full'); ?>" />
            </div>

            <div class="w-50-ns wording">
                <h2 class="white f2 mb2">Shia Fishman</h2>
                <p class="lh-copy f4 fw1">founder of Capital Stack Advisors began The Company with one goal in mind: satisfying the goals and needs of the client. Rather than sell pre-made products, Shia spearheads the team at Capital Stack Advisors with the desire to work with clients to help them grow their firm. Through dedication, hard work and a network of knowledge, Shia transforms trust, confidence and industry insight into creative solutions and options that are best for the client. With an extensive background in business and customer service, Shia focuses on the relationships built with each client, pays close attention to detail and strives to treat each client’s business like his own.
                Before the creation of Capital Stack Advisors, Shia specialized in the origination of Bridge, FHA, HUD, Fannie Mae/Freddie Mac, and Mezzanine loans for a variety of properties including multi-family, skilled-nursing and assisted-living facility loans with Greystone Funding Corp.
                Throughout his career, Shia has embodied true entrepreneurial spirit by acting as CEO and co-founder of Karatedepot.com, the largest national website specializing in martial arts equipment sales. Under his leadership, Karatedepot.com and Boxingdepot.com exponentially grew in the first years of its creation from a modest 400 sq. foot garage, to a technologically advanced sales and service facility and distribution center.</p>

                <h3 class="main-color pv4 f2 fw3">
                Shia transforms trust, confidence and industry insight into creative solutions and options that are best for the client. 
                </h3>

                <p class="lh-copy f4 fw1">Shia also founded The Intigris Group, a revenue strategy firm that partners with large and small for-profit and non-profit organizations to expand professional and economic potential and impact. The Intigris Group team coaches and trains organizational management teams, sales teams, and customer service forces to create improved bottom line results while maintaining a spirit of creativity and excellence.
                During his free time, Shia volunteers with the Community Security Service, a non-profit organization that protects the people, institutions and events of the American Jewish community by providing physical security and raising public awareness about safety issues. Having achieved Shodan as a first-degree black belt in Karate, Shia is now studying the Filipino martial art, Kali. Shia also enjoys spending his time cooking.</p>

            </div>
        </div>
        
    </div>

<style>
html {
    margin-top: 0px !important;
}

.wording p {
    line-height: 2.1
}
</style>


</div> <!-- End Barba Container -->
<?php get_footer(); ?>

