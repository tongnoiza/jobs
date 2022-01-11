<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=register", $username, $password);
$conn->exec("SET CHARACTER SET utf8");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM `name_list`";
?>
<!DOCTYPE html>
<html lang="th">
<head>
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
	<script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>หน้าหลัก</title>
</head>
<body>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-5"></div>
			<div class="col-md-3"><input type="text" id="myInput" class="form-control" placeholder="ค้นหาชื่อ" id="myInput" onkeyup="myFunction()"></div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-8">
				<br>
				<a href="add.php" class="btn btn-primary">เพิ่มข้อมูล</a> &nbsp;
				<br><br>
				<table class="table table-bordered table-sm" id="myTable2" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th scope="col" onclick="sortTable(0)" class="th-sm">ลำดับ</th>
							<th scope="col" onclick="sortTable(1)"class="th-sm">ชื่อ</th>
							<th scope="col" onclick="sortTable(2)" class="th-sm">รหัสที่ผ่านการแฮชแล้ว</th>
							<th scope="col" onclick="sortTable(3)" class="th-sm">ที่อยู่</th>
							<th scope="col" class="th-sm">ฟังชั่น</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($conn->query($sql) as $row) {
							$del = $row['id'];
							echo "<tr>
        <td >" . $row['id'] . "</td>
        <td>" . $row['name'] . "</td>
        <td>" . $row['password'] . "</td>
        <td>" . $row['address'] . "</td>
        <td><a href='del.php?del=$del' class='btn btn-danger'>ลบ</a> <a href='edit.php?editdata=$del' class='btn btn-primary'> แก้ไขข้อมูล</a></td>
      </tr>";
						}?> </tbody>
				</table>
			</div>
		</div>
	</div>

	</div>
	<script>
		
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable2");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

		function myFunction() {
			// Declare variables
			var input, filter, table, tr, td, i, txtValue, txtValue1;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTable2");
			tr = table.getElementsByTagName("tr");

			// Loop through all table rows, and hide those who don't match the search query
			for (i = 0; i < tr.length; i++) {

				td = tr[i].getElementsByTagName("td")[1];
				if (td) {
					txtValue = td.textContent || td.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}



			}
		}
	</script>

</body>

</html>