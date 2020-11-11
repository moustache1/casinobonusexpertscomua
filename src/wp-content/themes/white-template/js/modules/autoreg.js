$('span[data-link]').click(function(){
    var link = $(this).data('link');
    window.open('/' + atob(link));
});