<div class="kl-block-grid">
    <?php $i = 1; if( have_rows('galerie_image_model_02') ): ?>
        <?php while( have_rows('galerie_image_model_02') ): the_row() ?>
            <div class="kl-grid-img kl-parent-<?= $i ?>">
                <?php $rows = get_sub_field('list_image_model_02'); ?>
                
                <?php if( isset($rows[0]) || isset($rows[1]) ): ?>
                    <div class="kl-grid-item kl-w-mob-100 kl-grid-item-w-684">
                        <div class="d-flex flex-column h-100">
                            <?php if( isset($rows[0]) ):?>
                                <div class="kl-flex-grow-1 kl-height-33 kl-height-auto kl-pb-10">
                                    <img src="<?= $rows[0]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                            <?php if( isset($rows[1]) ):?>
                                <div class="kl-height-66 kl-height-auto kl-pt-10">
                                    <img src="<?= $rows[1]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endif ?>

                <?php if( isset($rows[2]) || isset($rows[3]) ): ?>
                    <div class="kl-grid-item kl-w-mob-100 kl-grid-item-w-772">
                        <div class="d-flex flex-column h-100">
                            <?php if( isset($rows[2]) ):?>
                                <div class="kl-height-50 kl-height-auto kl-pb-10">
                                    <img src="<?= $rows[2]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                            <?php if( isset($rows[3]) ):?>
                                <div class="kl-height-50 kl-height-auto kl-pt-10">
                                    <img src="<?= $rows[3]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endif ?>

                <?php if( isset($rows[4]) ):?>
                    <div class="kl-grid-item kl-w-mob-100 kl-grid-item-w-772">
                        <img src="<?= $rows[4]['image_item_grid_model_02'] ?>" alt="">
                    </div>
                <?php endif ?>

                <?php if( isset($rows[5]) || isset($rows[6]) ): ?>
                    <div class="kl-grid-item kl-w-mob-100 kl-grid-item-w-772">
                        <div class="d-flex flex-column h-100">
                            <?php if( isset($rows[5]) ):?>
                                <div class="kl-height-50 kl-height-auto kl-pb-10">
                                    <img src="<?= $rows[5]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                            <?php if( isset($rows[6]) ):?>
                                <div class="kl-height-50 kl-height-auto kl-pt-10">
                                    <img src="<?= $rows[6]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endif ?>

                <?php if( isset($rows[7]) || isset($rows[8]) ): ?>
                    <div class="kl-grid-item kl-w-mob-100 kl-grid-item-w-684">
                        <div class="d-flex flex-column h-100">
                            <?php if( isset($rows[7]) ):?>
                                <div class="kl-height-66 kl-height-auto kl-pb-10">
                                    <img src="<?= $rows[7]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                            <?php if( isset($rows[8]) ):?>
                                <div class="kl-flex-grow-1 kl-height-33 kl-height-auto kl-pt-10">
                                    <img src="<?= $rows[8]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endif ?>

                <?php if( isset($rows[9]) || isset($rows[10]) || isset($rows[11]) ): ?>
                    <div class="kl-grid-item kl-w-mob-100 kl-grid-item-w-772">
                        <div class="d-flex flex-column h-100">
                            <?php if( isset($rows[9]) ):?>
                                <div class="kl-height-33 kl-height-auto kl-pb-10">
                                    <img src="<?= $rows[9]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                            <?php if( isset($rows[10]) ):?>
                                <div class="kl-height-33 kl-height-auto kl-pt-10 kl-pb-10">
                                    <img src="<?= $rows[10]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                            <?php if( isset($rows[11]) ):?>
                                <div class="kl-height-33 kl-height-auto kl-pt-10">
                                    <img src="<?= $rows[11]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endif ?>

                <?php if( isset($rows[12]) || isset($rows[13]) ): ?>
                    <div class="kl-grid-item kl-w-mob-100 kl-grid-item-w-772">
                        <div class="d-flex flex-column h-100">
                            <?php if( isset($rows[12]) ):?>
                                <div class="kl-height-50 kl-height-auto kl-pb-10">
                                    <img src="<?= $rows[12]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                            <?php if( isset($rows[13]) ):?>
                                <div class="kl-height-50 kl-height-auto kl-pt-10">
                                    <img src="<?= $rows[13]['image_item_grid_model_02'] ?>" alt="">
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endif ?>
                
            </div>
            <?php $i++ ?>
        <?php endwhile ?>
    <?php endif ?>
</div>