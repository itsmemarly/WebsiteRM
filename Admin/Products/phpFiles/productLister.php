

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<?php $results = mysqli_query($link, "SELECT * FROM products ORDER BY `id` ASC"); ?>

<table>
	<thead>
		<tr>
            
			<th>Product ID</th>
            <th>Product Name</th>
            <th>Product description</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <!-- <th>Edit Slide</th> -->
            <th>Add Product</th>
            <th>Remove Product</th>
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
        <td><?php echo $row['id']; ?></td>

        <form method="post" name= "test" class="table_content_form">
           
            <td ><div class="changeTopic" ><?php echo $row['productName']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['productDescription']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['productPrice']; ?></div></td>
        
            <td ><div class="changeTopic" ><?php echo $row['productImage']; ?></div></td>

			<!-- <td>
            <a type="submit" href="editProduct.php?id=<?php echo $row['id'];?>" class="btn" id="btnEdit" >Edit Product</a>   
            
        </td> -->
            </form>
            <td>
            <a type="submit" href="addProduct.php" class="btn" id="btnAdd" >Add Product</a>
        </td>
			<td>
            <a type="submit" href="deleteProduct.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure you want to delete?')" class="btn" id="btnDelete" >Delete Product</a>   
			</td>
		</tr>
	<?php } ?>
</table>

<form>
  