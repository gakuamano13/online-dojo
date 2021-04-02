$('.activate').on('click touch', function(e) {
    var self = $(this);
    if(!self.hasClass('loading')) {
        self.addClass('loading');
        setTimeout(function() {
            self.addClass('done');
            setTimeout(function() {
                self.removeClass('loading done');
            }, 1600);
        }, 3200);
    }
});

$('.loading-effect').on('click',function(event){
    event.preventDefault();
    var linkUrl = $(this).attr('href');

    // ここにリンク先への遷移直前に実行する内容を記述

    function action() {
      location.href = linkUrl;

      // ここにリンク先への移動直後に実行する内容を記述
        // （ページ内アンカーリンクなど画面が遷移しない場合に）
    }
    setTimeout(action,4000);
  });
