

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<?php $results = mysqli_query($link, "SELECT * FROM orders ORDER BY `id` ASC"); ?>

<table>
	<thead>
		<tr>
            
            <th>Order ID</th>
            <th>Pieces</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Country</th>
            <th>Email</th>
            <th>Order Date & Time</th>
            <!-- <th>Edit Slide</th> -->
           
            <th>Remove Order</th>
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
        <td><?php echo $row['id']; ?></td>

        <form method="post" name= "test" class="table_content_form">
           
            <td ><div class="changeTopic" ><?php echo $row['amount']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['firstName']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['lastName']; ?></div></td>
        
            <td ><div class="changeTopic" ><?php echo $row['street']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['city']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['state']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['zip']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['country']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['email']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['timestamp']; ?></div></td>

			<!-- <td>
            <a type="submit" href="editProduct.php?id=<?php echo $row['id'];?>" class="btn" id="btnEdit" >Edit Product</a>   
            
        </td> -->
            </form>
           
			<td>
            <a type="submit" href="deleteOrder.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure you want to delete?')" class="btn" id="btnDelete" >Delete Order</a>   
			</td>
		</tr>
	<?php } ?>
</table>

<form>
  