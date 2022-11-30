<div class="modal-container" id="modal" >
    <div class="modal-content">
    <h2>KyuSsam Specialties</h2>
        <section id="sect_photos" class="flex" data-activeNum="0">
          
            <div class="wrapper__photo-display">
                <div class="photo-display" id="photo_display">
                    <img id="img_display" src="imgs/photos/photo1.png">
                    <div class="photo-desc">
                        <div class="inner">
                        <h3 id="head__title"></h3>
                        <p id="txt__desc"></p>
                        </div>
                    </div>
                </div>
                <ol>
                    <li><a href="javascript:void(0)" class="link__photo photo-clip-prev">prev<em></em></a></li>
                    <li><a href="javascript:void(0)" class="link__photo photo-clip-next">next<em></em></a></li>
                </ol>
            </div>
            <div class="wrapper__photo-icons mo-hid">
                <ul class="flex flex-wrap list__from-modal">
                   <?php include('foodPhotos.php') ?>
                </ul>
            </div>


        </section>
        <a href="javascript:void(0)" class="link__close-modal"></a>
    </div>
    
</div>