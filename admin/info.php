<?php 

  include 'menu.php';
  date_default_timezone_set('Europe/Athens');

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="easyui.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="icon.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.easyui.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information [root] </title>
</head>
<body>
<table id="dg" title="Comments Management" class="easyui-datagrid" url="getComments.php" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true" style="height:350px;margin-left:300px;">
    <thead>
        <tr>
            <th field="UserID" width="50">User</th>
            <th field="Date" width="50">Date</th>
            <th field="message" width="50">Comment</th>
            
        </tr>
    </thead>
</table>


<div id="toolbar">
    <div id="tb">
        <input id="term" placeholder="Type keywords...">
        <a href="javascript:void(0);" class="easyui-linkbutton" plain="true" onclick="doSearch()">Search</a>
    </div>
    <div id="tb2" style="">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newComment()">New Comment</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editComment()">Edit Comment</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="deleteComment()">Remove Comment</a>
    </div>
</div>



<div id="dlg" class="easyui-dialog" style="width:450px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
    <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
        <h3>Comments Information</h3>
        <div style="margin-bottom:10px">
            <input name="UserID" class="easyui-textbox" required="true" label="User:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="Date" class="easyui-textbox" required="true" validType="datetime" text="date-time"  label="Date:" id="date-time" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="message" class="easyui-textbox" required="true" validType="text" label="Comment:" style="width:100%">
        </div>
       
    </form>
</div>
<div id="dlg-buttons">
    <a href="javascript:void(0);" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveComment()" style="width:90px;">Save</a>
    <a href="javascript:void(0);" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close');" style="width:90px;">Cancel</a>
</div>






<script type="text/javascript">



var datetime = new Date();
document.getElementById('date-time').innerHTML=datetime;



function doSearch(){
    $('#dg').datagrid('load', {
        term: $('#term').val()
    });
}
		
var url;
function newComment(){

    
    
    $('#dlg').dialog('open').dialog('center').dialog('setTitle','New Comment');
    $('#fm').form('clear');
    url = 'addComment.php';
 
    
}
function editComment(){
    var row = $('#dg').datagrid('getSelected');
    if (row){
        $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit Comment');
        $('#fm').form('load',row);
        url = 'editComment.php?CommentID='+row.CommentID;
    }
}
function saveComment(){
    $('#fm').form('submit',{
        url: url,
        onSubmit: function(){
            return $(this).form('validate');
        },
        success: function(response){
            
            var respData = $.parseJSON(response);
            
            if(respData.status == 0){
                $.messager.show({
                    title: 'Error',
                    msg: respData.msg
                });
            }else{
                $('#dlg').dialog('close');
                $('#dg').datagrid('reload');
            }
        }
    });
}
function deleteComment(){
    var row = $('#dg').datagrid('getSelected');
    if (row){
        $.messager.confirm('Confirm','Are you sure you want to delete this comment?',function(r){
            if (r){
                $.post('deleteComment.php', {CommentID:row.CommentID}, function(response){
                    if(response.status == 1){
                        $('#dg').datagrid('reload');
                    }else{
                        $.messager.show({
                            title: 'Error',
                            msg: respData.msg
                        });
                    }
                },'json');
            }
        });
    }
}
</script>




</body>
</html>