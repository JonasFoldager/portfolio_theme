<?php get_header() ?>

<div class="baggrund-farve-om">
     <?php get_template_part("template-parts/top") ?>
          <div class="backgraund-om">
          
               <div class="info-om">
                    <div class="intro-om">
                    <div class="info-teskt-om">
                                   <h1 class="overskift-om"><?php the_field("overskift-om-fold-media") ?></h1>
                                   <p class="beskrivelse-om"><?php the_field("intro-om-fold-media") ?></p>
                                   <div class="kontakt-info">
                                        <p class="kontakt-overskift">Kontakt mig på:</p>
                                        <p class="email"><?php the_field("email") ?></p>
                                        <p class="tlf-nummer"><?php the_field("tlf-nummer") ?></p>
                                   </div>
                                   
                         </div>
                         <div class="profil-om">
                              <img class="billede-om" src="<?php the_field("profilbillede") ?>">
                         </div>
                    </div>
                    <div class="video-cv">
                         <?php 
                              $videoURL="https://www.youtube.com/watch?v=XfWsjpt1dDs";
                              $convertedURL = str_replace("watch?v=", "embed/", $videoURL);
                              ?>
                              <?php get_header() ?>

                              <div class="container">
                              <div class="row"> 
                                   <div class="col-lg-12">
                                        <iframe class="youtube-video" src="<?php echo $convertedURL; ?>" frameborder="0" allow="acceleromter; autoplay; 
                                        clipbord-write; encrypted; gyroscope; picture-in-picture" allowfullscreen></iframe>



                                   </div>

                              
                              </div>
                              </div>
                    </div>
                    <div class="cv">
                         <p class="cv-overskift"><?php the_field("cv-overskift") ?></p>
          
                              <img class="cv-billede1" src="<?php the_field("cv-billede1") ?>" alt="">
                              <img class="cv-billede2" src="<?php the_field("cv-billede2") ?>" alt="">
                         
                    </div>
               </div>
               
          </div>
</div>

<?php get_footer() ?>