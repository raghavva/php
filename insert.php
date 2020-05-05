<?php
$bookid=$_POST['bookid'];
$bookname=$_POST['bookname'];
$subject=$_POST['subject'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'library');
$q="insert into bookinfo(bookid,bookname,subject)
values($bookid,'$bookname','$subject')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
