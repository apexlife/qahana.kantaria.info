jQuery(function($){
    $('#true_loadmore').click(function(){
        $(this).text('Loading...'); // izmenyaem tekst knopki ili stavim preloader
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        $.ajax({
            url:ajaxurl, // obrabotchik
            data:data, // dannie
            type:'POST', // tip zaprosa
            success:function(data){
                if( data ) {
                    $('#true_loadmore').text('Load More').before(data); // vstavlyaem novie posti
                    current_page++; // uvelichivaem nomer stranici na edinicu vniz
                    if (current_page == max_pages) $("#true_loadmore").remove(); // esli poslednyaya stranica udalyaem knopku
                } else {
                    $('#true_loadmore').remove(); // esli mi doshli do poslednee stranicu postov skroem knopku
                }
            }
        });
    });
});