<?php  ?>

<!--Slider-->
<!-- <section id="slider">
  <img src="assets/images/sliderimages/silder.gif" alt="hip-hop-albums"/>
     
</section> -->

<!--main text-->
<section id="main_text" role="main" >
<h1>MANNERING MUSIC FEATURED ALBUMS</h1>
    
    <!--Hip Hop Section-->
    <section class="album_section">
        <?php foreach ($rapalbums as $rapalbum) : ?>
                <div class="flex-wrapper">

                    <figure class="grid_1_of_5 ">
                    <a href="/singleresult?artistid=<?=$rapalbum->artistId ?? ''?>&albumid=<?=$rapalbum->id ?? ''?>">
                        <img class="images_1_of_5" src="/assets/databasepics/<?=$rapalbum->image?>" alt="HipHopMusicAlbum">
                    </a>
                        <figcaption class="cap_1_of_5">
                            <h3><?=$rapalbum->getArtistId()->artist_name?></h3>
                                <p><?=$rapalbum->genre?></p>
                            <!-- commented out for now.-->
                            
                        </figcaption>
                    
                    </figure>

                </div>
        <?php endforeach; ?>
    </section>
    <div class="clearfix"></div>

    <!--Country Section-->
    <section class="album_section ">
        <?php foreach ($countryalbums as $countryalbum) : ?>
            <div class="flex-wrapper">
                <figure class="grid_1_of_5">
                <a href="/singleresult?artistid=<?=$countryalbum->artistId ?? ''?>&albumid=<?=$countryalbum->id ?? ''?>">
                    <img class="images_1_of_5" src="/assets/databasepics/<?=$countryalbum->image?>" alt="CountryMusicAlbum"> </a>

                    <figcaption class="cap_1_of_5">
                        <h3><?=$countryalbum->getArtistId()->artist_name?></h3>
                        <p><?=$countryalbum->genre?></p>
                    </figcaption>
                </figure>

            </div>
        <?php endforeach; ?>
    </section>
    <div class="clearfix"></div>

    <!--Jazz Section-->
    <section class="album_section">
        <?php foreach ($jazzalbums as $jazzalbum) : ?>
            <div class="flex-wrapper">
                <figure class="grid_1_of_5">
                <a href="/singleresult?artistid=<?=$jazzalbum->artistId ?? ''?>&albumid=<?=$jazzalbum->id ?? ''?>">
                    <img class="images_1_of_5" src="/assets/databasepics/<?=$jazzalbum->image?>" alt="JazzMusicAlbum">
                </a>
                    <figcaption class="cap_1_of_5">
                        <h3><?=$jazzalbum->getArtistId()->artist_name?></h3>
                        <p><?=$jazzalbum->genre?></p>
                    </figcaption>

                </figure>
            </div>
        <?php endforeach; ?>
    </section>
    <div class="clearfix"></div>


    <br/>

</section>
<!--main_text End-->

<?php require __DIR__ . '/../includes/jquery.inc.php'; ?>

<script>
    
    $(document).ready(function(){

        $(".grid_1_of_5").on('mouseenter', function () {
                        
            $(this).find('figcaption.cap_1_of_5 form#frontform').css('opacity' , '1').slideDown('100', 'swing');
    
        });
        
        $(".grid_1_of_5").on('mouseleave', function () {
            
            $(this).find('figcaption.cap_1_of_5 form#frontform').css('opacity' , '1').slideUp('100', 'swing');
            
        });

    });
</script>