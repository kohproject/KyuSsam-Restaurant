(function ($) {
  const mObj = window.$menuObj || {};

  function isMobile(){
    return (window.innerWidth < 600) ? true : false; 
  }

  function showPhoto(bool) {
    bool ? $("#modal").addClass("sho") : $("#modal").removeClass("sho");
    if(bool)  window.scrollTo(0,0);
  }
  function resetActive() {
    if ($(".box-photo.active")) $(".box-photo.active").removeClass("active");
    return true;
  }
  function displayDesc() {
    $("#photo_display").removeClass().addClass("photo-display");
    setTimeout(function () {
      $("#photo_display").addClass("sho-desc");
    }, 300);
  }

  function displayModalPhoto(bool, n) {
    if (bool) showPhoto(bool);
    if (resetActive()) {
      var $box = $(".box-photo.box-photo" + n);
        $box.addClass("active");
        $("#head__title").text($box.data().title);
        $("#txt__desc").text($box.data().desc);
        $("#img_display").attr("src", "imgs/photos/photo" + n + ".png");
        $("#sect_photos").data("activenum", n);
      displayDesc();
    }
  }

  $(".box-photo").on("click", (e) => {
    var $this = $(e.currentTarget);
    var $num = $this.data("photo");
    var isModal = !$this.closest("ul").hasClass("list__from-modal");

    displayModalPhoto(isModal, $num);
    return false;
  });

  $(".link__photo").on("click", (e) => {
    e.preventDefault();
    var $this = $(e.currentTarget);
    var $endNum = $("#sect_photos").find(".box-photo").length - 1;
    var $activeNum = parseInt($("#sect_photos").data("activenum"));
    if ($this.hasClass("photo-clip-prev")) {
      $activeNum--;
    } else {
      $activeNum++;
    }

    if ($activeNum > $endNum) $activeNum = 0;
    if ($activeNum < 0) $activeNum = $endNum;

    displayModalPhoto(false, $activeNum);
  });

  $("button#btn_menu").on("click", (e) => {
    e.preventDefault();
    location = "menu.php";
    return false;
  });
  
  $(".link__close-modal").on("click", (e) => {
    e.preventDefault();
    if (resetActive()) showPhoto(false);
    return false;
  });


  if(isMobile()){
    var $footer = $('footer');
    $(window).scroll(function(){
      (window.pageYOffset > 90) 
      ? $footer.addClass('hide') : $footer.removeClass('hide')
    });
  }

  
})(jQuery);
