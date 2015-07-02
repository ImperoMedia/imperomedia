<?php
/**
 * The template used for displaying page content in home-hero.php
 * Used to call text and button content. Image called in header.php
 *
 * @package Impero Media 2015
 */
?>
<section id="project">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-5 col-med-4 col-lg-4">

				<!-- Portfolio Single Meta Information-->
				<div class="project_meta">
					<h3><span class="project_meta_title">Client:</span> <span class="project_meta_field"><?php the_field('client_project_name'); ?></span></h3>

					<h3><span class="project_meta_title">Work Done:</span> <span class="project_meta_field"><?php the_field('project_work_done'); ?></span></h3>

					<h3><a href="<?php the_field('project_details'); ?>">Project Page</a></h3>

					<?php if(get_field('case_study_link') ): ?>
						<h3><a href="<?php the_field('case_study_link'); ?>">Case Study</a></h3>
					<?php endif; ?>
				</div>

			</div>

			<!-- Portfolio Image-->
			<div class="col-xs-12 col-sm-7 col-med-8 col-lg-8">
				<div class="project_img">
					<img src="<?php the_field('project_image'); ?>" />
				</div>
			</div>

		</div>

	</div>
</section>