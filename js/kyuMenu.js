(function($){

    window.$menuObj ={};

    $.ajax({
        url:"./js/kyuMenu.json", 
        dataType: "json",
        async:false,
        success:function(data) {
            window.$menuObj = data.menu;
        }
    });
 
    function getCreateMenu(num){
        var $str ="";
        var mObj = window.$menuObj[num];

        $.each(mObj.block, (i,obj) =>{
            $str += "<li data-type='"+obj.type+"' class='marker marker__"+obj.type+"'><h3>"+obj.type+"</h3><ul>";
            $.each(obj.list,(j,itm) =>{
                $str +='<li><span><dt>'+itm.name+'</dt><dd>'+itm.desc+'</dd></span>';
                $str +='<span class="sp__price">'+itm.price+'</span></li>';
            })
            $str += "</ul></li>";
        });
        return $str;
    }

    var $menuSet = "menu_full1";

    function setNavActive(link,cl){
        $('.nav-bottom  ol >li a.active').removeClass('active');
        $(link).addClass('active');

        if(cl !== $menuSet){
            $menuSet = cl;
            gotosection($menuSet)
        } 
    }

    function gotosection(cl){
       var $top= ($('.'+cl).offset().top - 50);
        $("html, body").animate({ scrollTop: $top }, 300);
        $('header').toggleClass('open');
    }
    

    $('#menu_full').empty().html(getCreateMenu(0));
    $('#menu_full2').empty().html(getCreateMenu(1));
    $('#menu_full3').empty().html(getCreateMenu(2));

    $('.nav-bottom  ol >li a').on('click', (evt) =>{
        evt.preventDefault();
        var $this = $(evt.currentTarget);
        if($this.hasClass('active')) return false;
     
        setNavActive($this,$this.data('go'));
     
        return false;
    });

    function setObservers(){
        /* ===== OBSERVE ++ SECTION BY SCROLL =====*/
		var callback = (entries, observer) => {
			entries.forEach(entry => {
				if (entry.intersectionRatio > 0) {
                    console.log(entry);
					if (entry.isIntersecting) {
						var $type = entry.target.getAttribute('data-type');
                      
							document.getElementsByTagName('body')[0].className = $type;
					}
				}
			});

		};

		let options = {
			//root: document.querySelector('.full-container'),
			root: null,
			rootMargin: '0px',
			threshold: 1.0
		};

		let observer = new IntersectionObserver(callback, options);
		let targs = document.querySelectorAll('.marker');

         $.each(targs,function(i,targ){
        
            targ => observer.observe(targ)
        });
    }

    $('#hamburger').on('click', (evt) =>{
        evt.preventDefault();
        $('header').toggleClass('open');
        return false;
    });

    setObservers();

}(jQuery))