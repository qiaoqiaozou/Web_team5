<?php
$title = "add the menu";
include 'menu_header.php'; 
?>
<div class = container>
<h2>add a new menu:</h2>
<form  name="form1" method="post" action="process_menu.php" enctype="multipart/form-data">
    <div class="form-group">
        <div class="row">
            <!--<div class="col">
                <label for="id">id:</label>
                <input type="number" class="form-control" id="id" placeholder="id" name="id" required>
            </div>-->
            <div class="col">
                <label for="picture">picture:</label>
                <input type="file" class="form-control" id="picture"  placeholder="picture" accept=".jpg,.jpeg,.png" name="picture" required>
            </div>
            <div class="col">
                <label for="name">name of menu:</label>
                <input type="text" class="form-control" id="name_menu" placeholder="name_menu" name="name_menu" minlength="3" maxlength="30" required>
                <span id = "name_menuError"></span>
            </div>
            <div class="col">
                <label for="price">price:</label>
                <input type="number"  step="0.01" class="form-control" id="price" placeholder="price" name="price" required>
            </div>
            <div class="col">
                <label for="type_name">type_name:</label>
                <select class="form-control" id="type_name" name="type_name">
                    <option value="coffee">Coffee</option>
                    <option value="dessert">Dessert</option>
                    <option value="bread">Bread</option>
                    <option value="others">Others</option>
                </select>
            </div>
      </div>
            <div class="col">
                 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
           </div>
       
  </div>
</form>

</br>
    <button type="button" class="btn btn-primary"><a href="menu_data.php"style="color: white;" >go to the menu list</a></button>

</div>
<script>
//function to validate name_menu
function validateName(){
const name_menu = document.getElementById("name_menu").value;
const name_menuError = document.getElementById("name_menuError");
if (name_menu.length < 3||name_menu.length>30){
name_menuError.innerHTML= "Menu_name must be between 3&30 characters";
return false;
}
else{
    name_menuError.innerHTML= "";
    return true;
}
}


document.getElementById("menu_name").addEventListener("input",validateName);
</script>
<?php include 'footer.php';?>