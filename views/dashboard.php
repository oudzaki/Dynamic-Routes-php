<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('template/header.php'); ?>
	<title>Dashboard</title>
</head>
<body>
	<?php include_once('template/navigation.php'); ?>
	<div class="container">
		<h1> This is user dashboard!</h1>
		<table class=" table table-light">
			<thead class="" >
				<tr>
					<th>Name</th>
					<th>qt</th>
					<th>price</th>
				</tr>
			</thead>
			<tbody>
    <?php if (!empty($items)): ?>
        <?php foreach($items as $item): ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['qt']; ?></td>
                <td><?php echo $item['price']; ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3">No items found.</td>
        </tr>
    <?php endif; ?>
</tbody>
		</table>
	</div>
	<?php include_once('template/footer.php'); ?>
</body>
</html>