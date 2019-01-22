// function search_pop_up(){
//     document.getElementById('fooDog_pop_up').style.display="block";
// }

// document.getElementById('search_button').addEventListener('click', search_pop_up());

$('#searchMenu').click(function(){

    $("#searchform").show();
    // $('#body').css('opacity','0.5');
    // $(".search-widget").css('opacity',"inherit");

});
$('#Exit').click(function(){

$('#searchform').hide();

});