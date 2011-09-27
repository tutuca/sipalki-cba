$(document).ready(function(){
    $('nav a').click(function(){
        target = $(this).attr('href');
        $.scrollTo(target, {duration:500, axis:'y'});
        return false;
    })
})
