

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<?php $results = mysqli_query($link, "SELECT * FROM artists"); ?>

<table>
	<thead>
		<tr>
            
			<th>Artist ID</th>
            <th>Artist Name</th>
            <th>Artist Channel</th>
            <th>Artist Image</th>
            <!-- <th>Edit Artist</th> -->
            <th>Add Artist</th>
            <th>Remove Artist</th>
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
        <td><?php echo $row['id']; ?></td>

        <form method="post" name= "test" class="table_content_form">
           
            <td ><div class="changeTopic" ><?php echo $row['artistName']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['artistChannel']; ?></div></td>

            <td ><div class="changeTopic" ><?php echo $row['artistImage']; ?></div></td>
        
		
            </form>
            <td>
            <a type="submit" href="addArtist.php" class="btn" id="btnAdd" >Add Artist</a>
        </td>
			<td>
            <a type="submit" href="deleteArtist.php?id=<?php echo $row['id'];?>" onClick="return confirm('Are you sure you want to delete?')" class="btn" id="btnDelete" >Delete Slide</a>   
			</td>
		</tr>
	<?php } ?>
</table>

<form>
  