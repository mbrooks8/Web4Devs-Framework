/*Select all editable elements, and refresh the content from the database*/
//console.log("making edits");

function userExecute(myfunction)
{
    jQuery.ajax({
        type: "GET",
        url: './php/getUser.php',
        success: function (data) {
            if(data == 1 )
            {
                myfunction()
            }else
            {
                return;
            }
        },error: function(e){
            return 0;
        }
    });
}
function loadUserFunctions(){
    $.getScript("./js/editContent.js");
}
loadUserFunctions();





var editables = $("ul.editable,ol.editable,h1.editable,h2.editable,h3.editable,h4.editable,h5.editable,h6.editable,p.editable,div.editable");
editables.each(function(){
    getContent($(this));
});
function getContent(elem)
{
    //console.log("getContent: "+elem[0].innerHTML);
    var url = window.location.pathname;
    url = url.substring(url.lastIndexOf('/')+1);
    console.log(url);
    $.ajax({
        url: './php/getContent.php',
        type: 'GET',
        data: {
            "id": '"'+elem[0].id+'"',
            "content": '"'+elem[0].innerHTML+'"',
            "url": '"'+ url+window.location.hash+ '"'
        },
        success: function(data) {
            var out = data;
            elem[0].innerHTML = out;
            elem.find('.submitButton').remove();
            userExecute(function(){addEditButton(elem)} );
        },
        error: function(e) {
            console.log("oops");
        }
    });
}
