<?php $length = 0 ?>
    <div class="about_slider"> 
      <?php foreach ( self::$model->get_list() as $item ): $length++ ?>
        <div class="about_slider-item">
            <figure>
                <a rel="lightbox" class="glightbox" href="<?= self::$model->get_image_attachment_filepath($item->image_attachment_id) ?>">
                    <img loading="lazy" rel="lightbox" class="about_slider-img" src="<?= self::$model->get_image_attachment_filepath($item->image_attachment_id) ?>" alt="<?= $item->alt ?>" title="<?= $item->title ?>"> 
                </a>   
            </figure> 
        </div>
	  <?php endforeach ?>
    </div>