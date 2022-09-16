(function ($j) {
    switch_style = {
        onReady: function () {      
            this.switch_style_click();
        },

        switch_style_click: function(){
            $(".color").click(function(e){
                var id = $(this).attr("id");
                $("#switch-style").attr("href", "assets/css/" + id + ".css");
                $('.switch-style').removeClass('active');
                e.preventDefault();
            });
        }
    };

    $j().ready(function () {
        switch_style.onReady();
    });
})(jQuery);

$(document).ready(function(){
    var $switchStyle = $('.switch-style');
    $('.switch-style-toggle').click(function(){
        $switchStyle.toggleClass('active');
    });
});