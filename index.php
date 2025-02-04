<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Book Library Management System</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<div class="container mt-5">
		<h1 class="text-center">Book Library Management System</h1>
		<div class="row">
			<div class="col-md-6">
				<h3>Add New Book</h3>
				<form id="bookForm">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" required>
					</div>
					<div class="form-group">
						<label for="author">Author</label>
						<input type="text" class="form-control" id="author" required>
					</div>
					<button type="submit" class="btn btn-primary">Add Book</button>
				</form>
			</div>
			<div class="col-md-6">
				<h3>Book List</h3>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Title</th>
							<th>Author</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="bookList">
						<!-- Book list will be appended here -->
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#bookForm').on('submit', function(e) {
				e.preventDefault();
				let title = $('#title').val();
				let author = $('#author').val();
				if (title && author) {
					let bookRow = `<tr>
						<td>${title}</td>
						<td>${author}</td>
						<td><button class="btn btn-danger btn-sm deleteBtn">Delete</button></td>
					</tr>`;
					$('#bookList').append(bookRow);
					$('#title').val('');
					$('#author').val('');
				}
			});

			$(document).on('click', '.deleteBtn', function() {
				$(this).closest('tr').remove();
			});
		});
	</script>
</body>
</html>