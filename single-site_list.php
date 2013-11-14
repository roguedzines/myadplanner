<?php 
/*
* Template for single page

*/
global $data;
global $post;

?>
<?php get_header(); ?>
<div id="content">
<div id="content-inner">
<div class="masonry-home-grid">
		<div class="masonry-home-inside">
				<div id="primary-content">
			
				<?php if($data['sidebar_options']=='sidebar-left'){ ?>
						<div class="singlepostwrapper-alt">
						<?php } else { ?>
								<div class="singlepostwrapper">
						<?php } ?>
								<div class="single-post-wrap">
									<?php if($data['share_option']==1){?>
								<div class="singlepost-share-wrap">
								<div class="share-single-contain">
							<?php if(!empty($data['share_custom_text'])){ ?>
<span class="share-text"><?php  _e($data['share_custom_text'],'saxonTheme');?></span>
<?php } else { ?>
<span class="share-text">Share this post</span>

<?php } ?>

							 <?php include get_template_directory().'/includes/share-single.php';?>
								
							
								</div>
								</div>
								<?php 	}?>
										<div class="single-post-contain">
						
												<?php  
												
				
												if(have_posts()): 
						while (have_posts()) : the_post(); 

										$slider_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(),'single-slider-image');
									$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(),'single-image');
									$large_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full-size');
									$blog_video = get_post_meta($post->ID,'saxonTheme_blog_video',true);
									$thumbnail_gallery = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-image');
									$site_list_url = get_post_meta($post->ID,'saxonTheme_site_list_url',true);
									
										$jan_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_jan',true);
										$feb_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_feb',true);
										$march_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_march',true);
										$april_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_april',true);
										$may_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_may',true);
										$june_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_june',true);
										$july_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_july',true);
										$august_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_august',true);
										$september_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_september',true);
										$october_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_october',true);
										$november_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_november',true);
										$december_pageviews = get_post_meta($post->ID,'saxonTheme_site_list_pageviews_december',true);
										
										
										
										
										$jan_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_jan',true);
										$feb_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_feb',true);
										$march_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_march',true);
										$april_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_april',true);
										$may_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_may',true);
										$june_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_june',true);
										$july_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_july',true);
										$august_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_august',true);
										$september_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_september',true);
										$october_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_october',true);
										$november_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_november',true);
										$december_uniques = get_post_meta($post->ID,'saxonTheme_site_list_uniques_december',true);
										
										
														$jan_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_jan',true);
										$feb_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_feb',true);
										$march_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_march',true);
										$april_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_april',true);
										$may_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_may',true);
										$june_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_june',true);
										$july_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_july',true);
										$august_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_august',true);
										$september_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_september',true);
										$october_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_october',true);
										$november_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_november',true);
										$december_timespent = get_post_meta($post->ID,'saxonTheme_site_list_timespent_december',true);
									?>
					<h3><?php the_title();?> site detail page</h3>

												<div class="singlepostentry">
										

<?php 
#start total page views


$page_view_total = array(
'january'=>$jan_pageviews,'february'=>$feb_pageviews,'march'=>$march_pageviews, 'april'=>$april_pageviews, 'may'=>$may_pageviews, 'june'=>$june_pageviews, 'july'=>$july_pageviews, 'august'=>$august_pageviews, 'september'=>$september_pageviews, 'october'=>$october_pageviews, 'november'=>$november_pageviews, 'december'=>$december_pageviews
);

$unique_page_view_total = array(
'january'=>$jan_uniques,'february'=>$feb_uniques,'march'=>$march_uniques, 'april'=>$april_uniques, 'may'=>$may_uniques, 'june'=>$june_uniques, 'july'=>$july_uniques, 'august'=>$august_uniques, 'september'=>$september_uniques, 'october'=>$october_uniques, 'november'=>$november_uniques, 'december'=>$december_uniques
);

$timespent_total = array(
'january'=>$jan_timespent,'february'=>$feb_timespent,'march'=>$march_timespent, 'april'=>$april_timespent, 'may'=>$may_timespent, 'june'=>$june_timespent, 'july'=>$july_timespent, 'august'=>$august_timespent, 'september'=>$september_timespent, 'october'=>$october_timespent, 'november'=>$november_timespent, 'december'=>$december_timespent
);

?>


<?

// gather up custom taxonomies			
$taxonomies = array( 
                        "type"=>"Type: ",
                         //"gender"=>"Gender: " ,
																									 "adspec"=>"Ad Spec: " ,
																										"age"=>"Ages: " ,
																											"language"=>"Language: " 
                  );
																		foreach ($taxonomies as $tax => $taxname) {     
        $out .= "<li>";
        $out .= $taxname;
								
        // get the terms related to post
        $terms = get_the_terms( $post->ID, $tax );
        if ( !empty( $terms ) ) {
            foreach ( $terms as $term )
                $out .= '<a href="' .get_term_link($term->slug, $tax) .'">' .$term->name. '</a> ';
        }
																		}
echo $out .'</li>';

?>




<?
#start chart for page views 
?>
<div class="title-holder">

<h5>Monthly Page Views for <?php the_title();?></h5>
</div>
<div class="single-site-details-wrap">
<div class="single-site-details-container">
		<canvas id="canvas" height="450" width="700"></canvas>
	<script>

		var lineChartData = {
			labels : [
			<?php foreach ($page_view_total as $month=>$key) {?>
		'<?php echo ucfirst($month);?>',<? } ?>],
			datasets : [
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
						data : [<?php foreach ($page_view_total as $month=>$key) { if ($key == NULL) { $key = 0;}?>'<?php echo $key;?>',
						<? }?>
						]
						}
						,]	}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
	
	</script>
<div class="clearfix"></div>
</div><!-- end single-site-details-container-->
</div><!-- end single-site-details-wrap-->
					<?
					
		
$sum_pg = array_sum($page_view_total);
$avg_pg = count($page_view_total);
$mean_time = count($timespent_total);

$sum_uniques = array_sum($unique_page_view_total);
$avg_uniques = count($unique_page_view_total);



// time spent on site 

$total = '0:00:00';
foreach ($timespent_total as $time_key){

$timetotal = strtotime($time_key);
$total += $timetotal;
}

# output values
?>
<div class="single-details-wrapper">
<div class="single-details-results">
<?


//page views
echo '<li><em>Total Page Views</em> <span class="bignumber">' .number_format($sum_pg). '</span></li>'; 

echo '<li><em>Average Page Views</em> <span class="bignumber">'  .number_format($sum_pg/$avg_pg) .'</span></li>';


?>
</div>
</div>
<?

#start uniques 
?>
<div class="title-holder">
<h5>Monthly Unique Page Views for <?php the_title();?></h5>
</div>
<div class="single-site-details-wrap">
<div class="single-site-details-container">
<canvas id="canvas-unique" height="450" width="700"></canvas>
	<script>

		var lineChartData = {
			labels : [
			<?php foreach ($unique_page_view_total as $month=>$key_u) {?>
		'<?php echo ucfirst($month);?>',<? } ?>],
			datasets : [
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
						data : [<?php foreach ($unique_page_view_total as $month=>$key_u) { if ($key_u == NULL) { $key_u = 0;}?>'<?php echo $key_u;?>',
						<? }?>
						]
						}
						,]	}

	var myLine = new Chart(document.getElementById("canvas-unique").getContext("2d")).Line(lineChartData);
	
	</script>
<div class="clearfix"></div>
</div><!-- end single-site-details-container-->
</div><!-- end single-site-details-wrap-->
<div class="single-details-results">
<?

//unique page views
echo '<li><em>Total Unique Page Views</em> <span class="bignumber">' .number_format($sum_uniques).'</span></li>'; 
echo '<li><em>Average Unique Page Views</em><span class="bignumber">'  .number_format($sum_uniques/$avg_uniques).'</span></li>';

?>
</div>
<?

#start average time on site
?>






<?

#start table chart - collapse this
?>
<div class="title-holder">
<h5>Monthly Page Views <?php the_title();?></h5>
</div>
<div class="single-site-details-wrap">
<div class="single-site-details-container">
 <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['table']});
      google.setOnLoadCallback(drawTable);
      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', 'PageViews');
        data.addRows([ <?					 
													foreach ($page_view_total as $index=>$pageview) {
																				if ($pageview == NULL) {
																				$pageview = 0;
																																						} 
													?>
          ['<?php echo ucfirst($index);?>',  {v: 10000, f: '<?php echo number_format($pageview);?>'}],
											<? }?>
        ]);
        var table = new google.visualization.Table(document.getElementById('pv_table_div'));
        table.draw(data, {showRowNumber: true});
      }
    </script>
				 <div id="pv_table_div"></div>
					</div><!-- end single-site-details-container-->
</div><!-- end single-site-details-wrap-->
					<?

#end chart
?>
<div class="single-details-results">
<?php
echo '<li><em>Total Page Views</em> <span class="bignumber">' .number_format($sum_pg).'</span><li>'; 
echo '<li><em> Average Page Views</em> <span class="bignumber">' .number_format($sum_pg/$avg_pg).'</span></li>';
?>
</div>

<?

#start table chart - collapse this
?>
<div class="title-holder">
<h5>Table View Monthly Unique Page Views <?php the_title();?></h5>
</div>
<div class="single-site-details-wrap">
<div class="single-site-details-container">
 <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['table']});
      google.setOnLoadCallback(drawTable);
      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', 'PageViews');
        data.addRows([ <?					 
													foreach ($unique_page_view_total as $index=>$pageview) {
																				if ($pageview == NULL) {
																				$pageview = 0;
																																						} 
													?>
          ['<?php echo ucfirst($index);?>',  {v: 10000, f: '<?php echo number_format($pageview);?>'}],
											<? }?>
        ]);
        var table = new google.visualization.Table(document.getElementById('unique_table_div'));
        table.draw(data, {showRowNumber: true});
      }
    </script>
				 <div id="unique_table_div"></div>
					</div><!-- end single-site-details-container-->
</div><!-- end single-site-details-wrap-->
					<?

#end chart
?>
<div class="single-details-results">
<?php

echo '<li><em>Total Unique Page Views</em> <span class="bignumber">' .number_format($sum_uniques).'</span></li>'; 
echo '<li><em>Average Unique Page Views</em> <span class="bignumber">'  .number_format($sum_uniques/$avg_uniques).'</span></li>';
?>

</div>
<?

#start time chart
?>
<div class="title-holder">
<h5>Table View Average Time Spent <?php the_title();?></h5>
</div>
<div class="single-site-details-wrap">
<div class="single-site-details-container">

 <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['table']});
      google.setOnLoadCallback(drawTable);
      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', 'Time Spent');
        data.addRows([ <?					 
													foreach ($timespent_total as $index=>$time_spent) {
																				if ($time_spent == NULL) {
																				$time_spent = '00:00:00';
																																						} 
																																						$timetotal = strtotime($time_spent);
													?>
          ['<?php echo ucfirst($index);?>',  {v: 10000, f: '<?php echo date('H:i:s',$timetotal);?>'}],
											<? }?>
        ]);
        var table = new google.visualization.Table(document.getElementById('time_table_div'));
        table.draw(data, {showRowNumber: true});
      }
    </script>
				 <div id="time_table_div"></div>
										</div><!-- end single-site-details-container-->
</div><!-- end single-site-details-wrap-->
<div class="single-details-results">
					<?
//total time spent
echo '<li><em>Total Time Spent</em> <span class="bignumber">' .date('H:i:s',$total).'</span></li>';
echo '<li><em>Average Time Spent</em> <span class="bignumber">'  .date('H:i:s',$total/$mean_time).'</span></li>';
#end chart

?>
</div>
<?
#start content
?>
<?
					the_content(); 
				?>
				<div class="clearfix"></div>
				
				<h3> Related Sites</h3>
				<div class="related-sites">
				<? // get related sites 
				
				if ( 'site_list' == get_post_type() ) {
$taxs = wp_get_post_terms( $post->ID, 'type','age','language' );
    if ( $taxs ) {
        $tax_ids = array();
        foreach( $taxs as $individual_tax ) $tax_ids[] = $individual_tax->term_id;
         
     $args = array(
    'tax_query' => array(
        array(
            'taxonomy'  => 'type',
            'terms'     => $tax_ids,
            'operator'  => 'IN'
        )
    ),
    'post__not_in'          => array( $post->ID ),
    'posts_per_page'        => 3,
    'ignore_sticky_posts'   => 1
);
        $my_query = new wp_query( $args );
         
        if( $my_query->have_posts() ) {
 
            ?>
												
												<ul>
												<? 
            while ( $my_query->have_posts() ) :
                $my_query->the_post();
                 
               ?>
															<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
															
															<?
 
            endwhile;
 
           ?>
											</ul>
											<?
 
        }
       wp_reset_query();  
       //reset query 
         
    }

				} 
				// end related posts 
				
				
				//list all the terms 
				?>
				</div>
				
		

				

												<?php previous_post_link('%link', '<span class="button white">Previous Post</span>'); ?>
														<?php next_post_link('%link', '<span class="button white">Next Post</span>'); ?>
														<div class="clearfix"></div>
														<!-- end article footer -->
																								<div class="next-post">
																								
										
												</div>		
														<div class="article-footer">
													<?php the_tags('Tags: ', ', ');?>

						
														
																<div class="clearfix"></div>
																<?php // comments_template(); // uncomment if you want to use them ?>
										
													<?php if ( comments_open() ) : ?>
																<div class="commentswrap">
																		<div class="comments-link">
													
																				<?php comments_template(); ?>
																		</div>
																		<!-- .comments-link --> 
																</div>
																<!-- .commentswrap -->

																<?php endif; // comments_open() 
																
																
																?>
										
														</div>
														<?php endwhile;  ?>
														
														<?php
  
?>
												</div>
												<!-- end #main -->
												
												<article class="entry-meta">
														<?php edit_post_link( __( 'Edit this entry', 'saxonTheme' ), '<span class="edit-link">', '</span>' ); ?>
												</article>
												<!-- .entry-meta -->
												
										</div>
										<?php endif; ?>
										<?php if ($data['toggle_author_box']==1){ ?>
												<div class="singlepost-author-wrap">
								<div class="author-single-contain">
															
<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '100' ); }?>
<div class="authorinfo">
<h3>About <?php the_author_posts_link(); ?></h3>

<p><?php the_author_description(); ?></p>
<?php if ($data['author_additional_text']!=''){ 
_e($data['author_additional_text'],'saxonTheme');

?>
<?php } ?>
</div>
<!-- .authorarea -->
								</div>
								</div>
								<?php } ?>
							
								</div>
						</div>
						<!-- end singlepostwrap -->
								<?php if($data['sidebar_options']=='sidebar-left'){ ?>
						<div class="sidebar-wrapper-alt">
						<?php } else { ?>
								<div class="sidebar-wrapper">
						<?php } ?>
						
								<div class="sidebar-contain">
										<?php if ( is_active_sidebar( 'sidebar_widget_1' ) ) : ?>
										<div class="sidebar-widget-container">
												<?php dynamic_sidebar('sidebar_widget_1');?>
										</div>
										<?php endif; ?>
								</div>
						</div>
				</div>
				<!-- END #primary-content--> 
		</div>
</div>
</div>
</div>


<?php get_footer(); ?>
