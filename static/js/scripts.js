$(document).ready(function(){
    $('nav ul').onePageNav();
    $('#pictures a').click(function(){
        $('#slider').remove();
        target = $(this).attr('href');
        slider = $('<div>').attr('id', 'slider');
        $(slider).load(target, function(){
            $('footer').after(slider);
            $('#sider').toggle('slow');
            $('#slider a').fancybox();
            $('#slider a:first').click();
        });
        return false;
    })
})
