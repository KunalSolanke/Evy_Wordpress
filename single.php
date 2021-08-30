<?php get_header();?>
<?php
    $post_id = the_ID();
    $category_detail= get_the_category($post_id);
    $cat = "";
    foreach($category_detail as $cd){
        $cat = $cat . $cd->cat_name . " ";
    };
    $ref_date = the_modified_date();
    $date = date_create($ref_date);
?>
<div class="section-6 wf-section">
    <div class="div-block-41">
      <div data-w-id="02805d21-2b0c-a862-e25b-3c7afc5aa207"  class="div-block-40">
        <h4 class="spotlight card"><?php echo $cat;?></h4>
        <h4 class="dat"><?php echo date_format($date, "d F Y");?></h4>
      </div>
      <h1 data-w-id="5dc8ab00-9dcc-3760-967f-4c00d46fcdaa"  class="blog heading-5 blog hading"><?php the_title();?><br></h1>
    </div>
    <div data-w-id="7d2cad67-74d5-b101-f833-76c918493f4a"  class="buttoncontainer">
      <div class="div-block-43"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" loading="lazy" width="24" alt="">
        <div class="html-embed-2 w-embed"></div>
      </div>
      <div class="div-block-43"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" loading="lazy" width="24" alt="" class="image-11">
        <div class="html-embed-2 w-embed"></div>
      </div>
      <div class="div-block-43"><img src="<?php echo get_template_directory_uri(); ?>/images/mail.svg" loading="lazy" width="24" alt="">
        <div class="html-embed-2 w-embed"></div>
      </div>
      <div class="div-block-43"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" loading="lazy" width="24" alt="">
        <div class="html-embed-2 w-embed"></div>
      </div>
    </div>
    <div class="blog-img-ctnr"><img  src="<?php the_post_thumbnail_url( 'largest' );?>" loading="lazy" alt="" class="image-9"></div>
</div>
<?php 
$author_id = get_post_field( 'post_author', $post_id );
$author_name = get_the_author_meta( 'display_name', $author_id );
?>
<div class="conntent-wrprr wf-section">
    <?php the_content();?>
    <div class="div-block-44">
      <h4 class="heading-7">Compiled By <?php echo  " " . $author_name; ?></h4>
      <div class="div-block-45">
        <h4 class="heading-7 hiddn">share</h4>
        <div class="buttoncontainer">
          <div class="div-block-43"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" loading="lazy" width="24" alt="">
            <div class="html-embed-2 w-embed"></div>
          </div>
          <div class="div-block-43"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" loading="lazy" width="24" alt="" class="image-11">
            <div class="html-embed-2 w-embed"></div>
          </div>
          <div class="div-block-43"><img src="<?php echo get_template_directory_uri(); ?>/images/mail.svg" loading="lazy" width="24" alt="">
            <div class="html-embed-2 w-embed"></div>
          </div>
          <div class="div-block-43"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" loading="lazy" width="24" alt="">
            <div class="html-embed-2 w-embed"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>