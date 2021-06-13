<?php 


?>


<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="easyui.css">
    <link rel="stylesheet" type="text/css" href="icon.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.easyui.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table id="dg" title="Users Management" class="easyui-datagrid" url="getData.php" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true" style="width:100%;height:350px;">
    <thead>
        <tr>
            <th field="username" width="50">Username</th>
            <th field="password" width="50">Password</th>
            <th field="email" width="50">Email</th>
            
        </tr>
    </thead>
</table>


<div id="toolbar">
    <div id="tb">
        <input id="term" placeholder="Type keywords...">
        <a href="javascript:void(0);" class="easyui-linkbutton" plain="true" onclick="doSearch()">Search</a>
    </div>
    <div id="tb2" style="">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New User</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove User</a>
    </div>
</div>



<div id="dlg" class="easyui-dialog" style="width:450px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
    <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
        <h3>User Information</h3>
        <div style="margin-bottom:10px">
            <input name="username" class="easyui-textbox" required="true" label="Username:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="password" class="easyui-textbox" required="true" label="Password:" style="width:100%">
        </div>
        <div style="margin-bottom:10px">
            <input name="email" class="easyui-textbox" required="true" validType="email" label="Email:" style="width:100%">
        </div>
       
    </form>
</div>
<div id="dlg-buttons">
    <a href="javascript:void(0);" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px;">Save</a>
    <a href="javascript:void(0);" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close');" style="width:90px;">Cancel</a>
</div>




<script type="text/javascript">
function doSearch(){
    $('#dg').datagrid('load', {
        term: $('#term').val()
    });
}
		
var url;
function newUser(){
    $('#dlg').dialog('open').dialog('center').dialog('setTitle','New User');
    $('#fm').form('clear');
    url = 'addData.php';
}
function editUser(){
    var row = $('#dg').datagrid('getSelected');
    if (row){
        $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit User');
        $('#fm').form('load',row);
        url = 'editData.php?id='+row.id;
    }
}
function saveUser(){
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
function destroyUser(){
    var row = $('#dg').datagrid('getSelected');
    if (row){
        $.messager.confirm('Confirm','Are you sure you want to delete this user?',function(r){
            if (r){
                $.post('deleteData.php', {id:row.id}, function(response){
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