$(document).ready(function(){
    $('nav').onePageNav({changeHash: true});
    $('#pictures a').click(function(){
        $('#slider').remove();
        target = $(this).attr('href');
        slider = $('<div>').attr('id', 'slider');
        $(slider).load(target, function(){
            $('footer').after(slider);
            $('#sider').toggle('slow')
            $('#slider a').fancybox();
            $('#slider a:first').click();
        });
        return false;
    })
})
