//This file includes all the javascript for editing, and updating an editable element

var editButton = "<a href='#' class='editButton'><div ><i style='margin-left:7px;margin-top:5px;' class='fa fa-pencil-square-o' aria-hidden='true'></i></div></a>";
/*adds the edit wrapper, as well as the edit button*/
function addEditButton(elem)
{
    elem.wrap( "<div class='editWrapper'></div>" );
    elem.parent( ".editWrapper" ).prepend(editButton);
    elem.parent( ".editWrapper" ).children('.editButton').click(function(){
        editWindow($("#"+elem[0].id));
    });
}
/*creates a text area where you can update the content on the page with new content*/
function editWindow(elem)
{
    var str = elem[0].innerHTML;
    console.log("str is:" + str);
    str = str.replace(/"/g, "'");
    $.ajax({
        url: './php/getRawContent.php',
        type: 'GET',
        data: {
            "id": '"'+elem[0].id+'"',
            "content": '"'+str+'"'
        },
        success: function(data) {
            var content = '<textarea  class="submitArea" style="width:100%"></textarea><a href="#" class="submitButton">submit</a>';
            elem[0].innerHTML = content;
            elem.find( ".submitArea" ).val(data);
            elem.find( ".submitButton" ).click(function(){
                updateData($("#"+elem[0].id));
            });
        },
        error: function(e) {
            alert("oops")
        }
    });
}
/*upates the data on the database*/
function updateData(elem)
{

    var str = elem.find( ".submitArea" ).val();
    str = str.replace(/"/g, "'")
    console.log("updateData: "+str);
    $.ajax({
        url: './php/updateContent.php',
        type: 'GET',
        data: {
            "id": ''+elem[0].id+'',
            "content": str
        },
        success: function(data) {
            console.log("success")
            refreshContent(elem);
        },
        error: function(e) {
            alert("oops");
        }
    });
}
function getContentContent(elem)
{
    var str = elem[0].innerHTML;
    console.log("str is:" + str);
    str = str.replace(/"/g, "'");
    $.ajax({
        url: './php/getContent.php',
        type: 'GET',
        data: {
            "id": '"'+elem[0].id+'"',
            "content": '"'+str+'"'
        },
        success: function(data) {
            console.log(data);
            return data;
        },
        error: function(e) {
            return "could not get information";
        }
    });
}
/*refreshes the content from the database after it is updated*/
function refreshContent(elem)
{
    var str = elem.find( ".submitArea" ).val();
    str = str.replace(/"/g, "'");
    $.ajax({
        url: './php/getContent.php',
        type: 'GET',
        data: {
            "id": '"'+elem[0].id+'"',
            "content": '"'+str+'"'
        },
        success: function(data) {
            console.log(data);
            elem[0].innerHTML = data;
        },
        error: function(e) {
            alert("oops");
        }
    });
}
