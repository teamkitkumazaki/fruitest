<?php
  $post_id = get_the_id();
  $title = get_the_title($post_id);
  $permalink = get_permalink($post_id);
  $thumbnail_id = get_post_thumbnail_id($post_id);
  $image = wp_get_attachment_image_src( $thumbnail_id, 'medium' );
  $src = $image[0];
  $content = $post->post_content;
  $tags = get_the_tags($post_id);
?>

<div class="journal_item">
  <div class="img_wrap">
    <a href="<?php echo $permalink; ?>" style="background-image:url(<?php echo $src; ?>)"></a>
  </div>
  <div class="txt_wrap">
    <a class="title" href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
    <div class="tag_wrap">
      <?php foreach($tags as $key => $tag): ?>
      <a href="?tag=<?php echo $tag->term_id; ?>">#<?php echo $tag->name; ?></a>
      <?php endforeach; ?>
    </div>
    <div class="link_wrap">
      <a class="prod_link" href="<?php echo $permalink; ?>"><span>記事を読む</span></a>
    </div>
  </div>
</div><!-- journal_item -->
