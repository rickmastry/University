<?php 

get_header(); 
pageBanner(array(
  'title' => 'All Programs',
  'subtitle' => 'There is something for everyone. Take a look around.',
  'photo'    => 'https://www.ox.ac.uk/sites/files/oxford/styles/ow_large_feature/public/field/field_image_main/b_AllSoulsquad.jpg?itok=N1GzQbrQ'
 
 ));


?>

   <div class="container container--narrow page-section">
     <ul class="link-list min-list"> 
     <?php 
       while(have_posts()){
        the_post(); ?>
          <li><a href="<?php the_permalink(); ?> "><?php the_title(); ?> </a></li>

       <?php }
          echo paginate_links(); 
      ?>
    </ul> 
        
   </div>

<?php get_footer(); ?>




