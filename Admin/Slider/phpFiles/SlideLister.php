

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<?php $results = mysqli_query($link, "SELECT * FROM slides"); ?>

<table>
	<thead>
		<tr>
            
			<th>Slider ID</th>
            <th>Slide Name</th>
            <th>Slide description</th>
            <th>Slide Image</th>
            <th>Edit Slide</th>
            <th>Add Slide</th>
            <th>Remove Slide</th>
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
        <td><?php echo $row['id']; ?></td>

        <form method="post" name= "test" class="table_content_form">
           
            <td ><div class="changeTopic" ><?php echo $row['slideName']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['slideDescription']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['slideImage']; ?></div></td>
        
			<td>
            <a type="submit" href="editSlide.php?id=<?php echo $row['id'];?>" class="btn" id="btnEdit" >Edit Slide</a>   
            
        </td>
            </form>
            <td>
            <a type="submit" href="addSlide.php" class="btn" id="btnAdd" >Add Slide</a>
        </td>
			<td>
            <a type="submit" href="deleteSlide.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure you want to delete?')" class="btn" id="btnDelete" >Delete Slide</a>   
			</td>
		</tr>
	<?php } ?>
</table>

<form>
  