(function(){
    var ua = navigator.userAgent;
  
    var sp = ua.indexOf('iPhone') > -1 ||
      (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1);
  
    var tab = !sp && (
      ua.indexOf('iPad') > -1 ||
      (ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
      ua.indexOf('Android') > -1
    );
  
    new ViewportExtra(tab ? 960 : 375);
})();

jQuery( '#your-zip' ).keyup( function() {
  AjaxZip3.zip2addr( this, '', 'your-prefecture', 'your-address' );
});


//レスポンシブ時に画像の切り替えを行う
$(function () {
    var $elem = $(".js-imageChange");
    var sp = "-smp.";
    var pc = "-pc.";
    var replaceWidth = 769;

    function imageSwitch() {
      var windowWidth = parseInt($(window).width());
      $elem.each(function () {
        var $this = $(this);
        if (windowWidth >= replaceWidth) {
          if ($this.attr("src")) {
            $this.attr("src", $this.attr("src").replace(sp, pc));
          } else {
            $this.attr("data-src", $this.attr("data-src").replace(sp, pc));
          }
        } else {
          if ($this.attr("src")) {
            $this.attr("src", $this.attr("src").replace(pc, sp));
          } else {
            $this.attr("data-src", $this.attr("data-src").replace(pc, sp));
          }
        }
      });
    }
    imageSwitch();
    var resizeTimer;
    $(window).on("resize", function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        imageSwitch();
      }, 200);
    });

    let mySwiper = new Swiper ('.swiper-container', {
        // 以下にオプションを設定
        loop: true, //最後に達したら先頭に戻る
        slidesPerView: 4,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        speed: 500,
        effect: "slide",
        centeredSlides: true,
        paginationClickable: true,
        slidesPerView: "auto",
        spaceBetween: 10,
        initialSlide: 1,
        preloadImages: true,
        lazy: false,
        autoplay: {
            delay: 3e3
        },
           
        //ページネーション表示の設定
        pagination: { 
          el: '.swiper-pagination', //ページネーションの要素
          type: 'bullets', //ページネーションの種類
          clickable: true, //クリックに反応させる
        },
       
        //ナビゲーションボタン（矢印）表示の設定
        // navigation: { 
        //   nextEl: '.swiper-button-next', //「次へボタン」要素の指定
        //   prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
        // },
       
        //スクロールバー表示の設定
        // scrollbar: { 
        //   el: '.swiper-scrollbar', //要素の指定
        // },

        // ブレークポイント指定
        breakpoints: {
            375: {
                slidesPerView: 1.2,
                spaceBetween: 5
            },
            480: {
                slidesPerView: 1.5,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 1.5,
                spaceBetween: 10
            },
            960: {
                slidesPerView: 5,
                spaceBetween: 10
            }
        }
    
      })
    

  });

  function hashlink(e) {
    location.href = e
}! function() {
    const e = document.getElementById("fixed"),
        i = 85;
    let n = 0,
        s = 0,
        t = !1;
    window.addEventListener("scroll", (function(a) {
        s = window.scrollY, t || (window.requestAnimationFrame((function() {
            s > i && (s > n ? e.style.display= "block" : e.style.display= "none", n = s), t = !1;
        })), t = !0)
    }))
}();