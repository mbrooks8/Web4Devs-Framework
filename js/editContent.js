//This file includes all the javascript for editing, and updating an editable element

var editButton = "<a href='#'contenteditable='true' class='editButton'><div ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></div></a>";
var submit = "<a href='#'contenteditable='true' class='submitButton'><div ><i class='fa fa-check' aria-hidden='true'></i></div></a>";
/*adds the edit wrapper, as well as the edit button*/
function addEditButton(elem)
{
    /*    var w = elem.width();
    var h = elem.height();
    elem.wrap( "<div class='editWrapper'></div>" );
    elem.parent( ".editWrapper" ).height(h+"px");
    elem.parent( ".editWrapper" ).width(w+"px");
    console.log("pWidth: "+elem.parent( ".editWrapper" ).width());
    console.log("cWidth: "+elem.width());*/


    elem.prepend(editButton);
    elem.children('.editButton').click(function(){
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
            elem.attr('contenteditable', 'true');
            elem.on('keydown',function(e){
                if(e.which == 8 || e.which ==46){

                    if(this.innerHTML.slice( 0,-1) == '<a href="#" contenteditable="true" class="submitButton"><div><i class="fa fa-check" aria-hidden="true"></i></div></a>')
                    {
                        //e.preventDefault();
                        text = '+';
                        sel = window.getSelection();
                        range = sel.getRangeAt(0).cloneRange();
                        //console.log(range.endOffset);
                        range.deleteContents();
                        textNode = document.createTextNode(text);
                        range.insertNode(textNode);
                        range = sel.getRangeAt(0).cloneRange();

                        // Move caret to the end of the newly inserted text node
                        sel.removeAllRanges();
                        sel.addRange(range);
                        range.setStart(textNode, textNode.length);
                        range.setEnd(textNode, textNode.length);
                        var temp = this;
                        setTimeout(function(){
                            var range = document.createRange();
                            range.selectNodeContents(temp);
                            range.collapse(false);
                            var sel = window.getSelection();
                            sel.removeAllRanges();
                            sel.addRange(range);
                        },1)






                    }
                }
                console.log(this.innerHTML);
            })
            elem.find('.editButton').replaceWith(submit);
            /*elem.find( ".submitArea" ).val(data);*/
            elem.find( ".submitButton" ).click(function(){
                updateData($("#"+elem[0].id));
                elem.html("")
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
    console.log("update data recieving: ")
    console.log(elem[0]);
    var str = elem[0].innerHTML;
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
    var str = elem[0].innerHTML;
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
            elem.attr('contenteditable', 'false');
            elem.prepend(editButton);
            elem.children('.editButton').click(function(){
                editWindow($("#"+elem[0].id));
            });
        },
        error: function(e) {
            alert("oops");
        }
    });

}
