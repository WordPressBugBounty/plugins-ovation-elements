<?php
 $is_premium_user = get_option('ovation_slider_is_premium', false); 
?>
<div class="wrap container-custom">
    <div class="heading-container">
        <div class="">
            <h1>Select a Template</h1>
        </div>
        <div class="type-dropdown">
            <select id="category" name="category">
                <option value="category1">All Types</option>
                <option value="category2">Category</option>
            </select>
        </div>
    </div>
    <div class="container-custom">
        <div class="row">
            <?php
            $templates = array(
                array('id' => 1, 'title' => 'Business Slider Template', 'image' => OVA_ELEMS_URL . 'assets/images/template-1.png'),
                array('id' => 2, 'title' => 'Travel Slider Template', 'image' => OVA_ELEMS_URL . 'assets/images/template-2.png'),
                array('id' => 3, 'title' => 'Ecommerce Slider Template', 'image' => OVA_ELEMS_URL . 'assets/images/template-3.png'),
                array('id' => 4, 'title' => 'News Slider Template', 'image' => OVA_ELEMS_URL . 'assets/images/template-4.png'),
                array('id' => 5, 'title' => 'Food Slider Template', 'image' => OVA_ELEMS_URL . 'assets/images/template-5.png'),
                array('id' => 6, 'title' => 'Restaurant Slider Template', 'image' => OVA_ELEMS_URL . 'assets/images/template-6.png'),
                array('id' => 7, 'title' => 'Travel2 Slider Template', 'image' => OVA_ELEMS_URL . 'assets/images/template-7.png'),
                array('id' => 8, 'title' => 'Education Slider Template', 'image' => OVA_ELEMS_URL . 'assets/images/template-8.png'),
            );

            foreach ($templates as $template) {
                $is_pro_template = in_array($template['id'], [6, 7, 8]); // Mark templates 6, 7, 8 as Pro only
                ?>
                <div class="col-md-4 col-lg-4 col-12 mb-4">
                    <div class="slider-card" style="">
                        <div class="slider-image">
                            <img class="card-img-top" src="<?php echo esc_url($template['image']); ?>"
                                alt="<?php echo esc_attr($template['title']); ?>">
                        </div>
                        <div class="heading-wrapper mt-2">
                            <h5 class="card-title"><?php echo esc_html($template['title']); ?></h5>
                            <?php if ($is_premium_user || !$is_pro_template) { ?>
                                <!-- Allow premium users or free templates -->
                                <a href="<?php echo esc_url(admin_url('admin-post.php?action=create_ova_elems&template_id=' . $template['id'])); ?>"
                                    class="btn btn-primary">Select Template</a>
                            <?php } else { ?>
                                <!-- Restrict Pro templates -->
                                <button class="btn btn-secondary" disabled>Pro Only</button>
                                <p class="mt-2">
                                    <a href="https://www.ovationthemes.com/products/ovation-elements-pro" target="_blank" class="btn btn-link">
                                        Upgrade to Pro
                                    </a>
                                </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
