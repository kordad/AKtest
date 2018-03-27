 <div class="container">     
    <div class="row kolumny">
	
		<div class="col-md-4">
		<h3>AKTUALNOŚCI</h3>
			<img src="images/AKTU.png" class="img-fluid">


<?php
	/*---------------------------------------
				pierwsza pętla
	-----------------------------------------*/
		$args = array(
	   	'category_name' => 'praca',
		'tag' => 'pierwszy',
   		'showposts' => 1
	   );
				 
	  $praca = new WP_Query($args);
  
	  while($praca->have_posts()):	$praca->the_post();
	  $duplikat = $post->ID; 
?>
          <div class="col bg-light border border-dark p-2 mx-2">
               <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?> "><?php the_title(); ?></a></h2>
              <center><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?> "><?php the_post_thumbnail( 'thumbnail',array( 'class' => 'obrazek2' ) ); ?></a></center>
              <p><?php echo the_excerpt(); ?></p>
          </div>
   <?php
		endwhile;
		wp_reset_postdata();
	?>





		</div>
		<div class="col-md-4">
		<h3>PRODUKTY</h3>
			<img src="images/PROJEKTY.png" class="img-fluid">
			Ministerstwo Finansów nagrodziło najlepszych 
informatyków i programistów, którzy uczestniczyli 
w prestiżowym konkursie „MinFinTech". Laureaci 
otrzymali do podziału 150 tys. zł oraz tytuły „Vatmanów". 

		</div>
		<div class="col-md-4">
		<h3>PROJEKTY</h3>
			<img src="images/PRACA.png" class="img-fluid">
			Ministerstwo Finansów nagrodziło najlepszych 
informatyków i programistów, którzy uczestniczyli 
w prestiżowym konkursie „MinFinTech". Laureaci 
otrzymali do podziału 150 tys. zł oraz tytuły „Vatmanów". 

		</div>
		
	</div>  
  </div>    
 
