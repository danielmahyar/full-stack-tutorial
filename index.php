<?php
	include "./server/classes.php";

	//$teacher = new Teacher("August", "Mahyar", 22, 1, "Matematik", Array("3A", "4B"));
	//$student = new Student("Daniel", "Mahyar", 22, 1, "3A");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/style.css">
	<title>Document</title>
</head>
<body>
	<header>
		<p>Test Applikation</p>
	</header>
	<main>
		<section class="teacher">
			<h1>Teachers</h1>
			<table class="table">
				<thead>
					<tr>
						<td>Name</td>
						<td>Subjects</td>
						<td>Classes</td>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach(Teacher::getAll() as $teacher){
							$NAME = $teacher["USER_NAME"];
							echo
							("
								<tr>
									<td>${NAME}</td>
									<td>${NAME}</td>
									<td>${NAME}</td>
								</tr>	
							");
						}

					?>

				</tbody>
			</table>
		</section>
		<section class="student">
			<h1>Students</h1>
			<table class="table">
				<thead>
					<tr>
						<td>Name</td>
						<td>Subjects</td>
						<td>Classes</td>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach(Student::getAll() as $student){
							$NAME = $student["USER_NAME"];
							echo
							("
								<tr>
									<td>${NAME}</td>
									<td>${NAME}</td>
									<td>${NAME}</td>
								</tr>	
							");
						}

					?>

				</tbody>
			</table>
		</section>
		<section class="all">
			<h1>All Users</h1>
			<table class="table">
				<thead>
					<tr>
						<td>Name</td>
						<td>Subjects</td>
						<td>Classes</td>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach(Person::getAll() as $person){
							$NAME = $person["USER_NAME"];
							$ROLE = $person["ROLE"];
							echo
							("
								<tr>
									<td>${NAME}</td>
									<td>${NAME}</td>
									<td>${ROLE}</td>
								</tr>	
							");
						}

					?>

				</tbody>
			</table>
		</section>
	</main>
</body>
</html>