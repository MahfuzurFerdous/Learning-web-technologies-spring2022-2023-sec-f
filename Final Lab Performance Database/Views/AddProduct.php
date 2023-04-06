<html>
<head>
  <title>Add Product</title>
</head>
<body>

<form method="post" action="../Controllers/AddProductCheck.php">
<fieldset>
    <legend>Edit Product</legend>
    <label for="name">Name</label><br>
    <input type="text" id="name"><br><br>
    <label for="buyingPrice">Buying Price</label><br>
    <input type="number" id="buyingPrice" ><br><br>
    <label for="sellingPrice">Selling Price</label><br>
    <input type="number" id="sellingPrice"><br><br> 
    <input type="checkbox" id="Yes">
    <label for="display">Display</label><br> <br> 
    <input type="submit" name="save" value="save">
</fieldset>
  </form>
</body>
</html>