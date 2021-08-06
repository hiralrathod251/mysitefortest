<?php
    $customlink = ex_teampress_customlink(get_the_ID());
    global $number_excerpt;
    $image = get_post_meta( get_the_ID(), 'extp_image', true );
    $img_size = apply_filters('extp_image_size','full');
?>
<figure class="tpstyle-2 tppost-<?php the_ID();?>">
  <div class="tpstyle-2-image <?php if($image!='') {echo "second_img_config";}?>"  >
    <a href="<?php echo $customlink; ?>">
      <?php the_post_thumbnail($img_size); ?>
      <?php if($image!=''){?>
        <img class="second-img second-cus" src="<?php echo esc_url($image); ?>">
        <?php }
      ?>
    </a>
  </div>
  <figcaption>
    <h3><a href="<?php echo $customlink; ?>"><?php the_title(); ?></a></h3>
    <?php $position = get_post_meta( get_the_ID(), 'extp_position', true ); 
      if($position!=''){ ?>
        <h5><?php echo $position; ?></h5>
    <?php }?>
    <?php 
	if($number_excerpt =='full'){?>
        <p><?php echo get_the_excerpt(); ?></p>
        <?php
    }else if($number_excerpt > 0){?>
        <p><?php echo wp_trim_words(get_the_excerpt(),$number_excerpt,'...'); ?></p>
	<?php }?>
    <?php echo ex_teampress_social(get_the_ID());?>
  </figcaption>
  <?php extp_custom_single_color(2);?>
</figure>