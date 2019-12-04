$(function() {

  // ローディングアニメーション
  function loadingAnimation() {

     var imgPreloader = new Image();
     var img = $('#firstView');
     var originSrc = img.attr('src');
     img.attr('src', "");
     console.log(originSrc);

     img.on({
       'load': function() {
         $('header').addClass('top');
         setTimeout(function() {
           $('body').addClass('loaded');

           setTimeout(function() {
             $('header').addClass('top').addClass('loaded');
             setTimeout(function() {
               $('#mainVisual').addClass('loaded');
             }, 900);
           }, 600);
         }, 1700);
       }
     })

     img.attr('src', originSrc);

   }

    if (document.getElementById('index')) {
      loadingAnimation();
    }

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
        'load': function() {
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

  //商品一覧のフィルタリング機能
  function filterProduct(target) {
   var dropdown = document.getElementById("cat");
   var optionVal = [];

   function onCatChange() {
     var u = dropdown.value;
     var url = 'https://www.fruitest.jp/' + u + '#productList';
     if (u !== 'undefined') {
       location.href = url;
     }
   }

   function init() {
     var urlHash = location.hash;
     if (0 < urlHash.length) {
       var scroll = $(urlHash).offset().top;
       var h = $(window).width();

       if (h > 1100) {
         var adScroll = scroll - 100;
       } else {
         var adScroll = scroll - 100;
       }

       $("html, body").animate({
         scrollTop: adScroll
       }, 0);
     }

     var search = location.search;
     $.each(target.find('.option-1'), function(index) {
       optionVal[index] = $(this).attr('value');
       if (optionVal[index] = search) {
         target.val(optionVal[index]);
       }
     });

     target.change(function() {
       onCatChange();
     });
   }

   init();

 }

 if (document.getElementById('itemList')) {
   filterProduct($('#cat'));
 }

 // 商品一覧ページで「0円から未定」にテキストを差し替える
 /*function txtFreeToMitei(target) {
   console.log('txtFreeToMitei');
   var priceTxt = [];
   $.each(target.find('li'), function(index) {
     var priceTag = $(this).find('span.price');
     priceTxt[index] = priceTag.text();
     console.log(priceTxt[index] == '0円(税抜)');
     if ( priceTxt[index] == '0円(税抜)') {
       console.log(priceTxt[index]);
       priceTag.text('発売前');
     } else if (priceTxt[index] == '') {
       console.log('index:' + priceTxt[index]);
       $(this).remove();
     }
   });
 }

 if (document.getElementById('itemList')) {
   txtFreeToMitei($('#product'));
 }
 */


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
        } else {
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

      if (w > 750) {
        $("html, body").stop().animate({
          scrollTop: scrollHeight - 150
        }, 500);
        return false;
      } else {
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

  // 商品ページのサムネイルスライダー

  function slideItemThumb(target) {
    var currentSlide = 1;
    var slideList = [];
    var targetSlide;
    var slideNum = target.find('li').length - 1;
    var slideNextButton = target.find('.slide_next');
    var slidePrevButton = target.find('.slide_prev');

    function slideChange() {
      console.log(currentSlide);
      targetSlide = target.find('.slide' + currentSlide);
      target.find('.active_slide').removeClass('active_slide');
      targetSlide.addClass('active_slide');
      target.find('.current').text(currentSlide);
    };

    function slideNext(){
      if (currentSlide < slideNum - 0.1) {
        currentSlide = currentSlide + 1;
      } else {
        currentSlide = 1;
      }
      slideChange();
    };

    function slidePrev(){
      if (currentSlide == 1) {
        currentSlide = slideNum;
      } else {
        currentSlide = currentSlide - 1;
      }
      slideChange();
    };

    function tabTouch(){
      if(startTouchX - endTouchX > 50){
        slideNext();
      }else if(startTouchX - endTouchX < - 50){
        slidePrev();
      }
    };

    function windowDrag() {
      if (startDragX - endDragX > 100) {
        slideNext();
      } else if (startDragX - endDragX < -100) {
        slidePrev();
      }
    };

    function init() {
      target.find('.all').text(slideNum);
      target.find('li').each(function(index) {
        $(this).addClass('slide'+ index);
        slideList[index] = $(this);
      });

      $('.slide0').remove();
      $('.slide1').addClass('active_slide')

      slideNextButton.on({
        'click': function() {
          slideNext();
        }
      });

      slidePrevButton.on({
        'click': function() {
          slidePrev();
        }
      });

      target.find('ul').on({
        'dragstart': function(e) {
          startDragX = event.pageX;
        },
        'dragend': function(e) {
          endDragX = event.pageX;
          windowDrag();
        }
      });

      target.on({
        'touchstart' : function(e){
          startTouchX = event.changedTouches[0].pageX;
        },
        'touchmove' : function(e){
          /*
          movingTouchX = event.changedTouches[0].pageX;
          var movingX = movingTouchX - startTouchX;
          var sliderPosition = parseInt($('#top_slide ul').css('left'));
          Position = sliderPosition + movingX;
          console.log(Position);
          $('#top_slide ul').css({'left': Position + 'px'});
          */
        },
        'touchend' : function(e){
          endTouchX = event.changedTouches[0].pageX;
          tabTouch();
        }
      });
    };

    init();

  };

  if (document.getElementById('itemDetail')) {
    slideItemThumb($('#itemThumb01'));
    slideItemThumb($('#itemThumb02'));
  }


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

  $('#relatedSlider').slick({
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
        'click': function() {
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
