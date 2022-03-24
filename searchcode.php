<?php
// searchcode.php
// connect dbconnection file
require_once("connection.php");
// hear we search term exist then process the below lines of code
if(!empty($_POST["searchterm"])) 
{
    // the query responsible for fetch matched data
    $sql_query ="SELECT * FROM product WHERE pname like '" . $_POST["searchterm"] . "%' ORDER BY pname";
    $get_result = mysqli_query($dbconnection,$sql_query);
 
        if(!empty($get_result)) {
            // prepare the list for append
        ?>
                <ul id="name-list">
                <?php
                while($name_val = mysqli_fetch_array($get_result))
				{
                ?>
					<li onClick="selectname('<?php echo $name_val["pname"]; ?>');"
                    ><?php echo $name_val["pname"]; ?></li>
                <?php 
				} 
				?>
                </ul>
        <?php } 
} 
?>