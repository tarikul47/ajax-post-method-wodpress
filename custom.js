;(function($){
    $(document).ready(function(){
        $("#send-message").on('click',function(){

            $.post(frontend_ajax_object.ajaxurl,{
                action:'contact',
                cn:$('#contact').val(),
                name:$('#cname').val(),
                email:$('#cemail').val(),
                phone:$('#cphone').val(),
                message:$('#cmessage').val(),
            },function(data){
                alert(data);
            });

            console.log('Clicked');
            return false;
        })
    });
})(jQuery);