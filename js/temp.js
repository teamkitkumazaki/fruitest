function backGroundSlider(target) {
    var obj = $('#slideShow');
    var objLi = $('#slideShow li');
    var objSelect;
    var timeId;
    var duration = 2000;
    var interval = 2000;
    var current = 1;
    var objBox = [];
    var btnList = [];

    function change() {
      if (current !== 1) {
        current++;
      } else {
        current = 0;
      }
      slideChange(current)
    }

    function startAuto() {
      timeId = setTimeout(change, interval);
    }

    function stopAuto() {
      clearTimeout(timeId)
    }

    function complete() {
      startAuto();
    }

    function slideChange(e) {
      $('.active').removeClass('active');
      btnList[e].addClass('active');
      objLi.stop().animate({
        'opacity': 0
      }, duration);
      objBox[e].stop().animate({
        'opacity': 1
      }, duration, function() {
        complete();
        current = e;
      });
    };

    function clickTn(num) {
      if (current != num) {
        slideChange(num)
        stopAuto();
      }
    }

    function init() {
      target.find('li').each(function(index) {
        console.log(index);
        btnList[index] = $(this);
        $($(this).find('a')).on({
          'click': function() {
            clickTn(index);
          }
        });
      });

      obj.find('li').each(function(i) {
        objBox[i] = $(this);
      });

    };

    init();
    startAuto();

  };
  if (document.getElementById('index')) {

  }
