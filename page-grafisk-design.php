<?php get_header() ?>


<div class="backgraund-color">
     <?php get_template_part("template-parts/top") ?>

     <div class="backgraund-design">

     <div class="info-design">
               <div class="intro-design">
                    <div class="info-teskt-design">
                              <h1><?php the_field("overskift-grafisk-design") ?></h1>
                              <p class="beskrivelse-design"><?php the_field("beskrivelse-grafisk-design") ?></p>
                              
                    </div>
                    <div class="info-billede">
                         <img class="billede-design" src="<?php the_field("billede") ?>">
                    </div>
               </div>
          <div class="produkter">
                         
                         <div class="produkt1">
                              <div class="billede1-produkt">
                                   <img class="projekt1-billede" src="<?php the_field("projekt1-billede") ?>" alt="">
                              </div>

                              <div class="beskrivelse1-produkt">
                                   <h1 class="projekt1-overskift"><?php the_field("projekt1-overskift")?></h1>
                                   <p class="projekt1-brodtekst"><?php the_field("projekt1-brodtekst") ?></p>
                              </div>

                         </div>

                         <div class="produkt2">
                              <div class="billede2-produkt">
                                        <img class="projekt2-billede" src="<?php the_field("projekt2-billede") ?>" alt="">
                                   </div>

                                   <div class="beskrivelse2-produkt">
                                        <h1 class="projekt2-overskift"><?php the_field("projekt2-overskift")?></h1>
                                        <p class="projekt2-brodtekst"><?php the_field("projekt2-brodtekst") ?></p>
                                   </div>
                              </div>

                         <div class="produkt3">
                              <div class="billede3-produkt">
                                        <img class="projekt3-billede" src="<?php the_field("projekt3-billede") ?>" alt="">
                                   </div>

                                   <div class="beskrivelse3-produkt">
                                        <h1 class="projekt3-overskift"><?php the_field("projekt3-overskift")?></h1>
                                        <p class="projekt3-brodtekst"><?php the_field("projekt3-brodtekst") ?></p>
                                   </div>
                         </div>

                         <div class="produkt4">
                              <div class="billede4-produkt">
                                        <img class="projekt4-billede" src="<?php the_field("projekt4-billede") ?>" alt="">
                                   </div>

                                   <div class="beskrivelse4-produkt">
                                        <h1 class="projekt4-overskift"><?php the_field("projekt4-overskift")?></h1>
                                        <p class="projekt4-brodtekst"><?php the_field("projekt4-brodtekst") ?></p>
                                   </div>
                         </div>
                         
          </div>
          </div>

     </div>
</div>

<?php get_footer() ?>