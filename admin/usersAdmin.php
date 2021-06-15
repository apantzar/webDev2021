<?php 


    /*
        For users managment:
            Includes function for insert, delete, edit, search.
        Menu is included!

    */
  

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
    <title>User Management</title>
</head>
<body>

<div class="container">
        <div class="navigation">
         <ul>
            <li>
              <a href="#">
                <span class="icon"><img src="https://img.icons8.com/ios-filled/50/ffffff/seal.png"/></span>
                <span class="title">SeaThePollution</span>
              </a>

            </li>

            <li>
                <a href="adminPage.php" id="dash" >
                    <span class="icon"><img src="https://img.icons8.com/material/24/ffffff/dashboard-layout.png"/></span>
                    <span class="title">DashBoard</span>
                </a>

            </li>


            
            <li>
                <a href="usersAdmin.php" id="users">
                    <span class="icon"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/group.png"/></span>
                    <span class="title">Users</span>
                </a>

            </li>


    
            
            <li>
                <a href="info.php" id="info" >
                    <span class="icon"><img src="https://img.icons8.com/material-sharp/24/ffffff/info.png"/></span>
                    <span class="title">Information</span>
               </a>

            </li>

            
            <li>
                <a href="SignOut.php">
                    <span class="icon"><img src="https://img.icons8.com/metro/26/ffffff/logout-rounded.png"/></span>
                    <span class="title">SignOut</span>
              </a>
            </li>
        

        
         </ul>
        
        </div>



        <!-- For slide menu -->
        <div class="main" id="mainId">
            <div class="topbar" >
                <div class="toggle" onclick="toggleMenu();"></div>
                 
                         <div class="user">
                                <img src="admin.png">
                         </div>          

            </div> 


<!-- Menu's animation(Slide in/out) -->

    <script>
        function toggleMenu(){
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');


        }

    </script>





<table id="dg" title="Users Management" class="easyui-datagrid" url="getData.php" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true" style="height:350px;margin-left:300px;">
    <thead>
        <tr>
        <!-- For the DataGridView -->
            <th field="username" width="50">Username</th>
            <th field="password" width="50">Password</th>
            <th field="email" width="50">Email</th>
            
        </tr>
    </thead>
</table>



<!-- Search section -->
<div id="toolbar">
    <div id="tb">
        <input id="term" placeholder="Type keywords...">
        <a href="javascript:void(0);" class="easyui-linkbutton" plain="true" onclick="doSearch()">Search</a>
    </div>
    <div id="tb2" style="">

        <!-- Control buttons (New, Edit, Remove) -->
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New User</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove User</a>
    </div>
</div>



<!-- For pop-up box to insert, edit -->

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





<!-- In order to insert, remove, save this file has those function

            1)newUser:     function to add new user
            2)editUser:    function to edit user 
            3)saveUser:    collaboration with add, edit in order to save new user/ modifications
            4)destroyUser: function to remove user from db
 -->



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

</div>
</div>




</body>
</html>