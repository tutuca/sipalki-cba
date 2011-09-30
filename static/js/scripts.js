$(document).ready(function(){
    $('nav').onePageNav({changeHash: true});
    $('#pictures a').click(function(){
        $('#slider').remove();
        target = $(this).attr('href');
        slider = $('<div>').attr('id', 'slider');
        $(slider).load(target);
        $('#pictures').after(slider);
        $('#slider').lightbox();
        $('#slider a:first').click();
        return false;
    })
})
