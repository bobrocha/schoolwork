<?php
require_once "member.class.php";

$dataBase = new Member(array());

$start = isset($_GET["start"])? $_GET["start"] : 0;
$end = 1000;

list($members, $totalCount) = $dataBase->getMembers($start, $end);//assign the returned array elements to indiviadual variables for manupulation
//Declare $members and assign it the array of objects
//Declase $totalRows and assign it athe array of total rows which only contains one element


/* This section takes the $members array of objects and loops through them.
it uses the object methods to display the field values
*/
echo "<table border='1' style='border-collapse:collapse'>
<tr>
<th>Cat_id</th><th>cat_title</th><th>cat_pages</th><th>cat_subcats</th><th>cat_files</th><th>cat_hidden</th>
</tr>";
$count = 0;
foreach($members as $member)//in here $member is an object and array element of the array "$members", with methods and properties
{
	$count++;
?>
<tr <?php if($count % 2 == 0)echo "style='background-color:#CCCCCC'"; ?>>
	<td><?php echo $member->getValue("cat_id") ?></td><td><?php echo $member->getValue("cat_title") ?></td><td><?php echo $member->getValue("cat_pages") ?></td><td><?php echo $member->getValue("cat_subcats") ?></td><td><?php echo $member->getValue("cat_files") ?></td><td><?php echo $member->getValue("cat_hidden") ?></td>
</tr>
<?php
}
echo "</table>";


echo "<pre>";
#print_r($GLOBALS);
echo "</pre>";
/*
This section will be the one where pagianation occurs
*/


?>
<a href="view_members.php?start=<?php echo $start - 1000 ?>">Back</a>
<a href="view_members.php?start=<?php echo $start + 1000 ?>">Next</a>