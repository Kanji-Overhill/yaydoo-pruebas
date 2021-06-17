<?php
/* Template Name: Home */

get_header();
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        <li class="glide__slide">
                            <img src="<?php the_field("slider_1") ?>" alt="">
                        </li>
                        <li class="glide__slide">
                            <img src="<?php the_field("slider_2") ?>" alt="">
                        </li>
                        <li class="glide__slide">
                            <img src="<?php the_field("slider_3") ?>" alt="">
                        </li>
                        </ul>
                    </div>
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                        <button class="glide__bullet" data-glide-dir="=0"></button>
                        <button class="glide__bullet" data-glide-dir="=1"></button>
                        <button class="glide__bullet" data-glide-dir="=2"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
