//This file includes all the javascript for editing, and updating an editable element

var editButton = "<a href='#!'contenteditable='false' class='editButton'><div ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></div></a>";
var submit = "<a href='#!'contenteditable='false' class='submitButton'><div ><i class='fa fa-check' aria-hidden='true'></i></div></a>";
function addEditButton(elem)
{
    elem.prepend(editButton);
    elem.children('.editButton').click(function(){
        editWindow($("#"+elem[0].id));
    });
}
/*creates a text area where you can update the content on the page with new content*/
function editWindow(elem)
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
            elem.attr('contenteditable', 'true');
            elem.attr('spellcheck', 'true');
            elem.focus();
            var myElem = elem;
            elem.on('keyup',function(e){
                if(e.which == 8 || e.which ==46){
                    if(this.innerHTML == '<a href="#!" contenteditable="false" class="submitButton"><div><i class="fa fa-check" aria-hidden="true"></i></div></a>')
                    {
                        myElem.append("&nbsp;");
                        var range = document.createRange();
                        range.selectNodeContents(this);
                        range.collapse(false);
                        var sel = window.getSelection();
                        sel.removeAllRanges();
                        sel.addRange(range);

                    }
                }
            });
            elem.find('.editButton').replaceWith(submit);
            elem.find( ".submitButton" ).click(function(){
                updateData(elem);
            });
        },
        error: function(e) {
            console.log("oops")
        }
    });
}
/*upates the data on the database*/
function updateData(elem)
{
    elem.attr('contenteditable', 'false');
    elem.attr('spellcheck', 'false');
    var str = elem[0].innerHTML;
    str = str.replace(/"/g, "'")
    $.ajax({
        url: './php/updateContent.php',
        type: 'GET',
        data: {
            "id": ''+elem[0].id+'',
            "content": str
        },
        success: function(data) {
            console.log("success")
            getContent(elem);
        },
        error: function(e) {
            console.log("oops");
        }
    });
}
