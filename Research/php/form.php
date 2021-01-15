<?php
include '../db.php';
$db = new db();
?>

<?php
if($_POST['id'] == "insert") {

    $date = $_POST['date'];
    $name = $_POST['name'];
    $in_time = $_POST['in_time'];
    $out_time = $_POST['out_time'];

    $query = "INSERT INTO user (date ,name ,in_time,out_time )
                VALUES ('$date', '$name', '$in_time', '$out_time')";

    $db->IUD($query);
}
?>
<?php
if($_POST['id'] == "load"){
    $output = "";

    $output.= "
        <table class=\"table table-bordered table-sm\" >
        <thead>
        <tr>
            <th>Date</th>
            <th>Name</th>
            <th>In Time</th>
            <th>Out Time</th>
        </tr>
        </thead>
        <tbody>
    
    ";



    $query = "SELECT * FROM user order by date";
    $rs = $db->Search($query);
    while($row = $rs->fetch(2)) {
        $date = $row['date'];
        $name = $row['name'];
        $it = $row['in_time'];
        $ot = $row['out_time'];

        $output.= "
            <tr>
                <td>$date</td>
                <td>$name</td>
                <td>$it</td>
                <td>$ot</td>
            </tr>
        ";
    }

    $output.= "
        </tbody>
    </table>
    ";

    echo $output;

}
http_response_code(200);
?>
