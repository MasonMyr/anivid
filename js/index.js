$(document).ready(function(){
    var hash = location.hash;
    $('#mytabs a[href="'+hash+'"]').tab('show'); 
})