<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
<style>
    #content{
        width:200px;
        height:200px;
        border:2px solid black;
    }
</style>


</head>
<body>
  <form  action="<?php echo U('userInformationRegistration');?>" method="post"  enctype="multipart/form-data">
        <p>实名：<input type="text" name="real_name"></p>
        <p>昵称：<input type="text" name="nick_name"></p>
      <p>密码：<input type="password" name="password"></p>
      <p>学校：
          <select name="campus_name">
              <option value="1">广东外语外贸大学</option>
              <option value="2">华南理工大学</option>
              <option value="3">广东工业大学</option>
          </select>
      </p>
      <button type="submit">提交</button>
      </form>
      <!--<p>-->
          <!--学院：-->
          <!--<select name="institute_name">-->
              <!--<option >信息科学与技术学院</option>-->
              <!--<option >艺术学院</option>-->
              <!--<option >经济贸易学院</option>-->
          <!--</select>-->
      <!--</p>-->
      <!--<p>-->
          <!--专业：-->
          <!--<select name="major_name">-->
              <!--<option >软件工程</option>-->
              <!--<option >计算机科学与技术</option>-->
              <!--<option >网络工程</option>-->
              <!--<option>电子商务</option>-->
              <!--<option>信息管理</option>-->
          <!--</select>-->
      <!--</p>-->
      <!--<p>-->
          <!--年级：-->
          <!--<input type="text" name="grade">-->
      <!--</p>-->
      <!--<p>-->
          <!--身份：-->
          <!--<input type="text" name="identity">-->
      <!--</p>-->
      <!--<p>-->
          <!--手机号码：-->
          <!--<input type="text"  name="phone">-->
      <!--</p>-->
      <!--<p>-->
          <!--<input type="file" name="filename">-->
      <!--</p>-->
      <!--<input type="submit" value="提交">-->
  <!--</form>-->
  <!--<form  action="<?php echo U('modifyPassword');?>" method="post"  enctype="multipart/form-data">-->
      <!--<p>账号：<input type="text" name="phone"></p>-->
      <!--<p>密码：<input type="password" name="password"></p>-->
      <!--<p>新密码：<input type="password" name="new_password"></p>-->
      <!--<input type="submit" value="提交">-->
      <!--</form>-->
  <!--<form  action="<?php echo U('saveImage');?>" method="post"  enctype="multipart/form-data">-->
      <!--选择文件：  <input  type="file" name="files" >-->
      <!--<p><input type="submit" value="提交"></p>-->
      <!--</form>-->

   <!--发帖-->
  <!--<form  action="<?php echo U('post');?>" method="post"  enctype="multipart/form-data">-->
      <!--<p>手机号：<input type="text" name="phone"></p>-->
      <!--<p> 标题：<input type="text" name="title"></p>-->
      <!--<p> 内容：<textarea name="content"></textarea></p>-->
      <!--<p>学校：-->
      <!--<select name="campus_name">-->
      <!--<option >广东外语外贸大学</option>-->
      <!--<option >华南理工大学</option>-->
      <!--<option >广东工业大学</option>-->
      <!--</select>-->
      <!--</p>-->
      <!--<p>-->
      <!--学院：-->
      <!--<select name="institute_name">-->
          <!--<option >信息科学与技术学院</option>-->
          <!--<option >艺术学院</option>-->
          <!--<option >经济贸易学院</option>-->
      <!--</select>-->
      <!--</p>-->
      <!--<p>-->
          <!--类型：-->
          <!--<select name="type">-->
              <!--<option >学术</option>-->
              <!--<option >生活</option>-->
          <!--</select>-->
      <!--</p>-->
      <!--<p>-->
          <!--发布状态：-->
          <!--<select name="status">-->
              <!--<option >实名</option>-->
              <!--<option >匿名</option>-->
          <!--</select>-->
      <!--</p>-->
      <!--<p>-->
          <!--<input type="submit" value="提交">-->
      <!--</p>-->
      <!--</form>-->

      <!--评论-->
      <!--<form  action="" method="post"  enctype="multipart/form-data">-->
         <!--<p>-->
             <!--<div id="content">sdvswfw</div>-->
         <!--</p>-->
          <!--<p>-->
              <!--发布状态：-->
              <!--<select name="status">-->
                  <!--<option >实名</option>-->
                  <!--<option >匿名</option>-->
              <!--</select>-->
          <!--</p>-->
          <!--<p>-->
              <!--<button onclick="getinfo()">提交</button>-->
          <!--</p>-->
      <!--</form>-->
  <!--<form  action="<?php echo U('validate');?>" method="post"  enctype="multipart/form-data">-->
      <!--<p>用户名：<input type="text" name="phone"></p>-->
      <!--<p>密码：<input type="password"  name="password"></p>-->
      <!--<p><button type="submit">提交</button> </p>-->
      <!--</form>-->
  <!--<form  action="<?php echo U('validate');?>" method="post"  enctype="multipart/form-data">-->
  <!--<input type="file" name="file">-->
      <!--<p><button type="submit">提交</button> </p>-->
      <!--</form>-->
  <!--<form  action="<?php echo U('test');?>" method="post"  enctype="multipart/form-data">-->
      <!--<div id="name">-->
      <!--</div>-->
      <!--<input type="submit">-->
      <!--</form>-->
  <!--<form  action="<?php echo U('pos');?>" method="post"  enctype="multipart/form-data">-->
      <!--<div name="content" >sdfvbws</div>-->
      <!--<button type="submit">提交</button>-->
      <!--</form>-->
</body>
</html>