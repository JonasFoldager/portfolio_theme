<?php get_header() ?>

<body>
     
     <div class="baggrund-farve-video">
      <?php get_template_part("template-parts/top") ?>
               <div class="backgraund-video">
                    
                    <div class="info-video">
                         <div class="intro-video">
                              <div class="info-teskt">
                                        <h1><?php the_field("overskrift-video") ?></h1>
                                        <p class="beskrivelse-video"><?php the_field("beskrivelse-video") ?></p>
                                        
                              </div>
                              <div class="info-profil">
                                   <img class="billede-video" src="<?php the_field("billede-video") ?>" alt="">
                              </div>
                         </div>
                         <div class="produkter">
                              <div class="gruppe1">
                                  
                                   <a href="">
                                       
                                        <img class="projekt6-billede" src="<?php the_field("projekt6-billede") ?>">
                                 
                                   <a class="overskift6" href="https://www.youtube.com/watch?v=EUhra2XdW0o">
                                        <p class="projekt6-overskift"><?php the_field("projekt6-overskift") ?></p>
                                        </a>
                              </div>
                              <div class="gruppe2">
                                 <a href="">
                                      <img class="projekt7-billede" src="<?php the_field('projekt7-billede')?>" alt="">
          
                                 </a>
                                 <a class="overskift7" href="https://www.youtube.com/watch?v=2KW9ygHzx2A">
                                      <p class="projekt7-overskift"><?php the_field('projekt7-overskift')?></p>
                                 </a>
                              </div>
                              <div class="gruppe3">
                              <a href="">
                                        <img class="projekt8-billede" src="<?php the_field('projekt8-billede')?>" alt="">
                                        </a>
                                        <a class="overskift8" href="https://www.youtube.com/shorts/e-JZ7V0cr_g">
                                        <p class="projekt8-overskift"><?php the_field('projekt8-overskift')?></p>
                                        </a>
                              </div>
                              <div class="gruppe4">
                              <a href="">
                                        <img class="projekt9-billede" src="<?php the_field('projekt9-billede')?>" alt="">
                                        </a>
                                        <a class="overskift9" href="https://www.youtube.com/watch?v=XfWsjpt1dDs">
                                        <p class="projekt9-overskift"><?php the_field('projekt9-overskift')?></p>
                                        </a>
                              </div>
                              <div class="gruppe5">
                              <a href="">
                                        <img class="projekt10-billede" src="<?php the_field('projekt10-billede')?>" alt="">
                                        </a>
                                        <a class="overskift10" href="https://www.youtube.com/watch?v=Fl-aFPJxSEo">
                                        <p class="projekt10-overskift"><?php the_field('projekt10-overskift')?></p>
                                        </a>
                              </div>
                         </div>
                    </div>

               </div>
     </div>
     

</body>


<?php get_footer() ?>