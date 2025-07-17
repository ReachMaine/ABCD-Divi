
(function($) {
    $(document).ready(function() {
        // put title over image on blog module
        $(".rmm-blog-toi .et_pb_post").each(function() {
            $(this).find(".entry-title, .post-meta, .post-content ").wrapAll('<div class="rmm-blog-toi-text"></div>');
        });
        //Do the same for ajax
        $(document).bind('ready ajaxComplete', function() {
            $(".rmm-blog-toi .et_pb_post").each(function() {
                $(this).find(".entry-title, .post-meta, .post-content ").wrapAll('<div class="rmm-blog-toi-text"></div>');
            });
        });
    });
})(jQuery); 


// change read more to learn more by class on blog module

(function ($) {
    $(document).on("ready ajaxComplete", function () {
      $(".rmm-learn-more-text .et_pb_post a.more-link").html("Read life story");
    });
  })(jQuery);
