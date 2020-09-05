<?php 
namespace ibauthor\Polodev_WP_Companion;
extract( $settings );
$celeb_talks_formatted = [];
foreach ($celeb_talks as $celeb_talk) {
  $celeb_talks_formatted[] = [
    'name' => $celeb_talk['name'],
    'photo' => $celeb_talk['photo']['url'],
    'thumbnail' => $celeb_talk['thumbnail']['url'],
    'profession' => $celeb_talk['profession'],
    'comment' => $celeb_talk['comment'],
  ];
}

?>

<section class="container-fluid no-gutters celebrity-talk-box" data-celeb_talks="<?php echo esc_html( json_encode( $celeb_talks_formatted ) ); ?>">
  <div class="container">
      <div class="row">
          <div class="col-12 text-center">
              <h5 class="text-orange mt-0 mt-md-5"><?php echo esc_html( $title ); ?></h5>
              <h1 class="about-title mb-5"><?php echo esc_html( $subtitle ); ?></h1>
          </div>
      </div>
      <div class="row mb-5">
          <div class="col-12 col-lg-6">
              <div class="row">
                  <div class="col-12 col-sm-6 celeb-image-wrap">
                    <?php if (isset($celeb_talks[0])): ?>
                      <img class="img-fluid" src="<?php echo esc_html( $celeb_talks[0]['photo']['url'] ); ?>" style="z-index: 4; position: absolute; left: 0px; top: 0px;" id="celeb-talk-photo">
                    <?php endif ?>
                      <div class="celeb-photo-box-red d-none d-xl-block"></div>
                      <div class="celeb-photo-box-blue d-none d-xl-block"></div>
                      <div class="celeb-photo-box-orange d-none d-xl-block"></div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <?php if ( isset($celeb_talks[0]) ): ?>
                      <h4 class="about-title mt-3" id="celeb-talk-name"><?php echo esc_html( $celeb_talks[0]['name'] ); ?></h4>
                      <h4 class="about-title mt-4" style="font-weight: 400" id="celeb-talk-profession"><?php echo esc_html( $celeb_talks[0]['profession'] ); ?></h4>
                      <div class="card card-pink mt-4">
                          <div class="card-body p-4">
                              <p class="p-0 m-0" id="celeb-talk-comment">
                                <?php echo wp_kses_post( $celeb_talks[0]['comment'] ); ?>
                              </p>
                          </div>
                      </div>
                      <div class="mt-5 pl-4">
                          <button class="link-black" id="c-left"><i class="fa fa-2x fa-long-arrow-left"></i></button> &nbsp;&nbsp;&nbsp; <button class="link-black" id="c-right"><i class="fa fa-2x fa-long-arrow-right"></i></button>
                      </div>
                    <?php endif ?>
                  </div>
              </div>
          </div>
          <div class="col-12 col-lg-6 d-none d-lg-block">
              <div  id="celeb-talk-anim">
                <?php foreach ($celeb_talks as $index => $celeb_talk): ?>
                  <?php 
                    $serial =$index + 1; 
                    $pos_class = 'celeb-anim-pos-'.$serial;
                  ?>
                  <img class="img-celeb-anim <?php echo esc_html( $pos_class ); ?>" data-key="<?php echo esc_html( $serial ); ?>" src="<?php echo esc_html( $celeb_talk['thumbnail']['url'] ); ?>">
                <?php endforeach ?>
              </div>
          </div>
      </div>
  </div>
</section>
