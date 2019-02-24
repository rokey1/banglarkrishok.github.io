<?php
include 'connection.php';
?>
<h1 align="center">Add Crop</h1>
<?php
if(isset($_POST['frm']))
{
    $Name=$_POST['Name'];
    $Picture_heiding=$_POST['Picture_heiding'];
    $Picture_side=$_POST['Picture_side'];
    $Header_text=$_POST['Header_text'];
    $Table_heiding=$_POST['Table_heiding'];
    $Detail_text=$_POST['Detail_text'];
    $q=mysqli_query($connection,"INSERT INTO `Crop` (`Name`, `Picture_heiding`, `Picture_side`, `Header_text`, `Table_heiding`, `Detail_text`) VALUES ('".$Name."', '".$Picture_heiding."', '".$Picture_side."', '".$Header_text."', '".$Table_heiding."', '".$Detail_text."')");
    if($q)
    {
        echo '<h3 align="center">Add Crop Success !</h3>';
    }
    else
    {
        echo '<h3 align="center">Add Crop Failed !</h3>';
    }
}
?>
<form action="AddCrop.php" method="post">
    <table align="center">
    <input type="hidden" name="frm" value="true" />
        <tr><td>Name of Crop</td><td><input type="text" name="Name" /></td></tr>
        <tr><td>Picture Heiding</td><td><input type="text" name="Picture_heiding" /></td></tr>
        <tr><td>Side Picture</td><td><input type="text" name="Picture_side" /></td></tr>
        <tr><td>Header Text</td><td><input type="text" name="Header_text" /></td></tr>
        <tr><td>Table Heiding</td><td><input type="text" name="Table_heiding" /></td></tr>
        <tr><td>Detail Text</td><td><textarea name="Detail_text"></textarea></td></tr>
        <tr><td></td><td align="right"><input type="reset" value="Clear" /><input type="submit" value="Submit" /></td></tr>
    </table>
</form>