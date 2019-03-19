$(function() {

  // ローディングアニメーション
/*  function loadingAnimation() {
    $(window).on({
      'load': function() {
        setTimeout(function() {
          $('#main').addClass('loading');
          $('.main_inner .ttl_wrap').addClass('loading');

          setTimeout(function() {
            $('#main').addClass('loaded');
            $('.main_inner .ttl_wrap').addClass('loaded');

            setTimeout(function() {
              $('.main_inner nav').addClass('loaded');
              $('#spHeader').addClass('loaded');
            }, 100);
          }, 1500);

        }, 100);

      }
    })
  }

  if (document.getElementById('index')) {
    loadingAnimation();
  }
*/

  //ハンバーガーメニュー
  function humMenuToggle(target) {
    var humButton = target.find('a');
    var closeBtn = $('#closeBtn');
    var menuBg = $('#menuBg');
    var menuState = 0;
    var current_scrollY;

    function humMenuShift() {
      if (menuState == 0) {
        $('#slideMenu').addClass('open');
        menuState = 1;
      } else {
        $('#slideMenu').removeClass('open');
        menuState = 0;
      }
    }

    function init() {
      humButton.on({
        'click': function() {
          humMenuShift();
        }
      });
      menuBg.on({
        'click': function() {
          humMenuShift();
        }
      });
      closeBtn.on({
        'click': function() {
            humMenuShift();
        }
      });
    }

    init()

  };

    humMenuToggle($('#hummenu'));

  //スクロールイベントに関する諸々
  function scrollJudge(target) {
    var scrollSwitch = 0;

    function afterScroll() {
      $('header').addClass('rolled');
      scrollSwitch = 1;
    };


    function beforeScroll() {
      $('header').removeClass('rolled');
      scrollSwitch = 0;
    };

    function init() {
      var timer = false;
      $(window).on({
        'load': function(){
          var scroll = $(window).scrollTop();
          if (scroll > 10) {
            if (scrollSwitch == 0) {
              afterScroll();
            }
          } else {
            if (scrollSwitch == 1) {
              beforeScroll();
            }
          }
        },
        'scroll': function() {
          /*
          $(".effect").each(function(index) {
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var imgPos = $(this).offset().top;
            if (scroll > imgPos - windowHeight + 50) {
              $(this).addClass('animated');
            };
          });
          */
          if (timer !== false) {
            clearTimeout(timer);
          }
          timer = setTimeout(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 10) {
              if (scrollSwitch == 0) {
                afterScroll();
              }
            } else {
              if (scrollSwitch == 1) {
                beforeScroll();
              }
            }
            /*
            $("section").each(function(index) {
              var sectionimgPos = $(this).offset().top;
              var sectionscroll = $(window).scrollTop();
              var windowHeight = $(window).height();
              if (sectionscroll > sectionimgPos - windowHeight + windowHeight / 2) {
                var setTarget = $(this).attr('button');
                $('.selected').removeClass('selected');
                $(setTarget).addClass('selected');
              };
            });
            */
          }, 10);
        }
      });
    };

    init();

  };

    scrollJudge($('body'));

  //アンカーリンクで追従ヘッダー分をパディングする
  function scrollToLink() {
    $('a[href^="#"]').click(function() {
      var href = $(this).attr("href");
      return scrollToHref(href);
    });
  }
  
  //商品詳細のリード説明文を上部に移動
  function readTxtMove(target) {
    var strInnerHTML = target.html();
    $('#excerpt').prepend(strInnerHTML);
    target.remove();
  }

  if (document.getElementById('itemDetail')) {
    readTxtMove($('#leadTxt'));
  }



  //よくある質問
  function faqToggle(target) {
  var toggleItem = [];
  var toggleButton = [];
  var toggleContents = [];
  var toggleState = [];

  function toggleMove(e) {
  if (toggleState[e] == -1 || toggleState[e] == 0) {
    toggleButton[e].addClass('active');
    var targetHeight = toggleContents[e].height();
    if (w > 750) {
      toggleItem[e].css({
        'height': targetHeight + 'px'
      });
    }else{
      toggleItem[e].css({
        'height': 80 + targetHeight + 'px'
      });
    }
    toggleState[e] = 1;
  } else {
    toggleButton[e].removeClass('active');
    var w = $(window).width();
    if (w > 750) {
      toggleItem[e].css({
        'height': 45 + 'px'
      });
    } else if (toggleButton[e].parent('div').hasClass('row2')) {
      toggleItem[e].css({
        'height': 77 + 'px'
      });
    } else {
      toggleItem[e].css({
        'height': 52 + 'px'
      });
    }

    toggleState[e] = 0;
  }
}

  function init() {
    $.each(target.find('.toggle_item'), function(index) {
      toggleItem[index] = $(this);
      toggleButton[index] = $(this).find('.toggle_button');
      toggleContents[index] = $(this).find('.toggle_contents');
      toggleState[index] = -1;
      toggleButton[index].on({
        'click': function() {
          toggleMove(index);
        }
      });
    });
  }

  init();

}

if (document.getElementById('faq')) {
  faqToggle($('article'));
}
if (document.getElementById('gift')) {
  faqToggle($('article'));
}

// よくある質問のスクロール処理

function faqScroll(target) {
  console.log('faqScroll');
   var scrollObj = [];

   function windowMove(e) {
     var w = $(window).width();
     console.log(scrollObj[e]);
     var scrollHeight = $(scrollObj[e]).offset().top;
     if (w > 1100) {
       var adScroll = scrollHeight;
     } else {
       var adScroll = scrollHeight;
     }
     $("html, body").animate({
       scrollTop: adScroll
     }, 500);
     return false;
   }

   function init() {
     $.each(target.find('a'), function(index) {
       $(this).attr('href', 'javascript:void(0);');
       scrollObj[index] = $(this).attr("jump");
       $(this).on({
         'click': function() {
           windowMove(index);
         }
       });
     });
   }

   init();

 }

 if (document.getElementById('faq')) {
   faqScroll($('.guide_nav'));
   faqScroll($('#guideNav'));
 }



  //ページスクロールの処理
  function smoothScroll(target) {
    var button = [];
    var scrollObj = [];
    var selectorName = [];
    var w = $(window).width();

    function windowMove(e) {
      if (e < 0) {
        var scrollHeight = 0;
      } else {
        var scrollHeight = $(scrollObj[e]).offset().top;
      }

      if( w > 750){
        $("html, body").stop().animate({
          scrollTop: scrollHeight - 150
        }, 500);
        return false;
      }else{
        $("html, body").stop().animate({
          scrollTop: scrollHeight - 100
        }, 500);
        return false;
      }


    }

    function init() {
      $.each(target.find('a'), function(index) {
        button[index] = $(this);
        scrollObj[index] = $(this).attr("jump");
        $(this).on({
          'click': function() {
            windowMove(index);
          }
        });
      });
      $('#scrollTop').on({
        click: function() {
          windowMove(-1);
        }
      });
      $('#scrollDown').on({
        click: function() {
          windowMove(0);
        }
      });

    }

    init();

  };

    smoothScroll($('.scroll_button'));


    $('#slickSlider').slick({
      accessibility: false,
      infinite: false,
      dots: true,
      slidesToShow: 3,
      centerMode: true,
      autoplay: false,
      responsive: [{
        breakpoint: 750,
        settings: {
          slidesToShow: 1,
          centerPadding: '5%',
          centerMode: false,
        }
      }]
    });


  $('#slickSlider2').slick({
    accessibility: false,
    infinite: true,
    dots: false,
    slidesToShow: 3,
    centerMode: false,
    autoplay: false,
    responsive: [{
        breakpoint: 1100,
        settings: {
          slidesToShow: 1,
        }
      },
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 1,
          centerPadding: '0',
          centerMode: true,
        }
      }
    ]
  });

  function scrollTop() {

    function init() {
      $('#scrollTop').on({
        'click': function(){
          $("html, body").stop().animate({
            scrollTop: 0
          }, 500);
        }
      })
    }

    init();
  }

  scrollTop();



});
