<?php
@header("content-type:text/html;charset=UTF-8");
error_reporting(E_ALL ^ E_DEPRECATED);

  $var_conn = mysql_connect("bdm249622333.my3w.com","bdm249622333","xwx719295");  //链接名称  用户  密码
  mysql_select_db("bdm249622333_db",$var_conn);//通过链接到达指定的数据库中去  
$var_username=$_GET["username"];
$var_pwd = $_GET["pwd"];
  
//$var_username='li';
//$var_pwd = '123';
  
//$var_sql = "INSERT into userinfo(username,pwd) VALUES('$var_username','$var_pwd')";  //执行的sql语句
//$var_result = mysql_query($var_sql);
//$var_id = mysql_insert_id();
  if(checkusername($var_username)){
  	$var_sql3="SELECT pwd from userinfo WHERE username='$var_username'";
	$var_result3=mysql_query($var_sql3);
   	$var_list = mysql_fetch_row($var_result3);
//		echo $var_list["0"];
//	foreach($var_list  as $value){
//		echo $value."<br>";
//	}
	  if($var_list["0"]==$var_pwd){
	  	echo "1";
	  }else{
	  	echo "2";
	  }
  }else{
  	echo "3";
  }
  

   function checkusername($var_username){
   	$var_sql2="SELECT * from userinfo WHERE username='$var_username'";
	$var_result2 = mysql_query($var_sql2);
     if(mysql_fetch_row($var_result2)){
    return  TRUE;
 	 }else{
    return  FALSE;
 	 };
   }
	
//  if(mysql_num_rows($result) == 0)
//  {
//  return false;
//  }else{
//  return true;
//  }

?>
