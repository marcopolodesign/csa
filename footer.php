<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CSA
 */

?>

</div> <!-- End Barba Container -->


	<footer id="colophon" class="site-footer pa5 bg-white flex jic column-mobile">
		<?php get_template_part('template-parts/content/logo');?>

		<div class="footer-col">
			<h4 class="fw4 black">Contact Info</h4>
			<p class="black fw3">Capital Stack Advisors<br>
			2 University PlazaSuite<br>
			100 Hackensack, NJ 07601</p>
		</div>

		<div class="footer-col flex flex-column">
			<a href="mailto:info@capitalstackadvisors.com" class="fw3 black no-deco">info@capitalstackadvisors.com</a>
			<a href="phone:8452633300" class="fw3 black no-deco">845-263-3300</a>
			<p class="black fw3">Capital Stack LLC <?php $date = date('Y'); ?></p>
			<a href="https://marcopolo.agency" target="_blank" class="fw3 black no-deco">Made by Marco Polo</a>
		</div>

		<div class="footer-col flex flex-column jic footer-social">
			<a href=""><?php get_template_part('template-parts/content/insta');?></a>
			<a href=""><?php get_template_part('template-parts/content/linkedin');?></a>
			<a href=""><?php get_template_part('template-parts/content/twitter');?></a>

		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="https://unpkg.com/@barba/core"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/CustomEase.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
