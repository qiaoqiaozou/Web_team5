<?php 
$title = "menu";
$css = "styles-QiaoqiaoZou.css";
include_once 'header.php';?>
<?php
include 'menu_db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM menu WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<div class = container>
<h2> Update your information below: </h2>
    <form name= "form2" method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="picture">id:</label>
                    <input type="number" class="form-control" id="id" placeholder="id" name="id" required value="<?php echo $row['id']; ?>">
                </div>
                <div class="col">
                    <label for="name">picture:</label>
                    <input type="file" class="form-control" id="picture" name="picture" accept=".jpg,.jpeg,.png">
                    <img id="preview" src="file/<?php echo $row["picture"]; ?>" style="width: 50px; margin-bottom: 10px;">
                </div>
                <div class="col">
                    <label for="name">name of menu:</label>
                    <input type="text" class="form-control" id="name_menu" placeholder="name_menu" name="name_menu" minlength="3" maxlength="30" required value="<?php echo $row['name_menu']; ?>" >
                </div>
                <div class="col">
                    <label for="price">price:</label>
                    <input type="number" class="form-control" placeholder="price" name="price" required value="<?php echo $row['price']; ?>">
                </div>
                <div class="col">
                    <label for="type_name">type_name:</label>
                    <select class="form-control" id="type_name" name="type_name" value="<?php echo $row['type_name']; ?>">
                        <option value="coffee">Coffee</option>
                        <option value="dessert">Dessert</option>
                        <option value="bread">Bread</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <div class="row mb-3">
                    <div class="col"><button type="submit" class="btn btn-warning" name="submit">Update This Dish</button></div>
                    <div class="col"><button type="submit" class="btn btn-danger" name="delete">Delete This Dish</button></div>
                </div>
            </div>
       </div>
    </form>
    <div class="col">
        <button type="button" class="btn btn-primary"><a href="menu_add.php" style = "color: white;"> add more menu</a></button>
        <button type="button" class="btn btn-primary"><a href="menu_data.php" style = "color: white;"> go back to the menu list</a></button>
        <button type="button" class="btn btn-primary"><a href="menu.php" style = "color: white;"> go to the menu website</a></button>
    </div>
</div>
<?php 
/* 
The isset() function is used to check if a variable is set and not NULL.
 In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['submit'])){
         
    $name_menu = $_POST['name_menu']; 
    $price = $_POST['price']; 
    $type_name = $_POST['type_name'];
   
    $query = mysqli_query($conn,"UPDATE menu set name_menu='$name_menu', price='$price' where id='$a'");
    if($query){
        echo "<h2>Your information is updated Successfully</h2>";
        // if you want to redirect to update page after updating
    }
    else { echo "Record Not modified";}
    }

    if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM menu where id='$a'");
        if($query){
            echo "Record Deleted with id: $a <br>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not Deleted";}
        }

$conn->close();
?>
<?php include 'footer.php'?>
