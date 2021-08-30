<?php get_header();?>

<div class="section-5 wf-section">
    <?php $recent_posts = wp_get_recent_posts();?>
    <div data-w-id="eef947c3-c032-56f0-480e-62c172b9eab1" class="blog-container spotlight">
        <div class="div-block-34">
            <?php
            $recent = $recent_posts[0];
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent["ID"] ), 'single-post-thumbnail' );
            $date = date_create($recent["post_date"]);
            $category_detail=get_the_category( $recent["ID"]);
            $cat = "";
            foreach($category_detail as $cd){
                $cat = $cat . $cd->cat_name . " ";
            }
            ?>
            <!-- error_log(json_encode($recent)); -->
            <a href = <?php echo get_post_permalink($recent["ID"]);?> target="_blank">
            <div class="hding-dat">
                <div class="hading-ctnr">
                    <h4 class="spotlight card"> <?php echo $cat ?> </h4>
                    <h1 class="blog heading-5 blog"><?php echo $recent["post_title"] ?> <br></h1>
                </div>
                <h4 class="dat"> <?php echo date_format($date, "d F Y"); ?></h4>
            </div>
            </a>
        </div>
        <div id="w-node-eef947c3-c032-56f0-480e-62c172b9eabc-be615afa" class="div-block-35"  style="background-image: url( <?php echo $image[0] ?> );"></div>
        
    </div>
    <div class="div-block-36">
    <?php
        for($ctr=1; $ctr < sizeof($recent_posts); $ctr++){
            $recent = $recent_posts[$ctr];
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent["ID"] ), 'single-post-thumbnail' );
            $date = date_format(date_create($recent["post_date"]), "d F Y");
            $category_detail=get_the_category( $recent["ID"]);
            $cat = "";
            foreach($category_detail as $cd){
                $cat = $cat . $cd->cat_name . " ";
            }
            echo '<a href =' . get_post_permalink($recent["ID"]) . 'target="_blank"> <div data-w-id="eef947c3-c032-56f0-480e-62c172b9eabe" class="div-block-38">
                <img src='. $image[0] . ' loading="lazy" sizes="(max-width: 767px) 85vw, (max-width: 991px) 83vw, 462px"  alt="" class="image-8">
                <h4 class="heading-6">' . $cat . '</h4>
                <h1 class="blog heading-5 blog small">' . $recent["post_title"] . '</h1>
                <h4 class="dat small">' . $date . '</h4>
            </div></a>';
        }
        ?>
    </div>
</div>

<?php get_footer();?>