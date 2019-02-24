<?php
include 'connection.php';
?>
<h1 align="center">Add Crop Detail</h1>
<?php
if(isset($_POST['frm']))
{
    $CropId=$_POST['CropId'];
    $Classification=$_POST['Classification'];
    $SeedingTime=$_POST['SeedingTime'];
    $RipenTime=$_POST['RipenTime'];
    $ClassificationDetail=$_POST['ClassificationDetail'];
    $Charistics=$_POST['Charistics'];
    $LifeTime=$_POST['LifeTime'];
    $Production=$_POST['Production'];
    $FarmingMethod=$_POST['FarmingMethod'];
    $Degiges=$_POST['Degiges'];
    $AvoidDegiges=$_POST['AvoidDegiges'];
    $Picture=$_POST['Picture'];
    $q=mysqli_query($connection,"INSERT INTO `cropdetail` (`CropId`, `Classification`, `SeedingTime`, `RipenTime`, `ClassificationDetail`, `Charistics`, `LifeTime`, `Production`, `FarmingMethod`, `Degiges`, `AvoidDegiges`, `Picture`) VALUES ('".$CropId."', '".$Classification."', '".$SeedingTime."', '".$RipenTime."', '".$ClassificationDetail."', '".$Charistics."', '".$LifeTime."', '".$Production."', '".$FarmingMethod."', '".$Degiges."', '".$AvoidDegiges."', '".$Picture."')");
    if($q)
    {
        echo '<h3 align="center">Add Crop Classification Success !</h3>';
    }
    else
    {
        echo '<h3 align="center">Add Crop Classification Failed !</h3>';
    }
}

?>
<form action="AddCropDetail.php" method="post">
    <table align="center">
    <input type="hidden" name="frm" value="true" />
        <tr>
            <td>Name of Crop</td>
            <td>
                <select name="CropId">
                    <?php
                    $qs=mysqli_query($connection,"SELECT * FROM `crop`");
                    while($rr=mysqli_fetch_array($qs))
                    {
                        echo '<option value="'.$rr['Id'].'">'.$rr['Name'].'</option>';
                    }
                    ?>
                </select>
            </td></tr>  
        <tr><td>Crop Classification</td><td><input type="text" name="Classification" /></td></tr>
        <tr><td>Seeding Time</td><td><input type="text" name="SeedingTime" /></td></tr>
        <tr><td>Ripen Time</td><td><input type="text" name="RipenTime" /></td></tr>
        <tr><td>Classification Detail</td><td><textarea name="ClassificationDetail"></textarea></td></tr>
        <tr><td>Charesteic</td><td><input type="text" name="Charistics" /></td></tr>
        <tr><td>Life Time</td><td><input type="text" name="LifeTime" /></td></tr>
        <tr><td>Production</td><td><textarea name="Production"></textarea></td></tr>
        <tr><td>Farming Method</td><td><textarea name="FarmingMethod"></textarea></td></tr>
        <tr><td>Diseases</td><td><textarea name="Degiges"></textarea></td></tr>
        <tr><td>Avoid Diseases</td><td><textarea name="AvoidDegiges"></textarea></td></tr>
        <tr><td>Picture</td><td><input type="text" name="Picture" /></td></tr>
        <tr><td></td><td align="right"><input type="reset" value="Clear" /><input type="submit" value="Submit" /></td></tr>
    </table>
</form>