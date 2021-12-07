<?php
session_start();
include 'config.php';

function create_table_cell($html = '', $attributes = array()){
    $attributes_str = '';
    foreach($attributes as $key => $value){
        $attributes_str .= ' ' . $key . '="' . $value . '"';
    }
    return '<td' . $attributes_str . '>' . $html . '</td>';
}

function create_image_html($name, $path){
    $path = $path . strtolower($name) . '.png';
    return "<img src='$path' alt='A picture of $name' />";
}

function create_table_row($row_content){
    $path = 'images/';
    $result = '<tr>';
    $result.= create_table_cell(create_image_html($row_content['name'], $path), ['class' => 'image']) .'';
    $result.= create_table_cell($row_content['name'], ['class' => 'name']).'';
    $result.= create_table_cell($row_content['description'], ['class' => 'description']).'';
    $result.= create_table_cell(create_image_html($row_content['framework'], $path), ['class' => 'framework']).'';
    $result.= '</tr>'.'';
    return $result;
}

function create_table_header(){
    $result = '<tr>';
    $result .=  '<th>Image</th>';
    $result .=  '<th>Name</th>';
    $result .=  '<th>Description</th>';
    $result .=  '<th>Framework</th>';
    $result .=  '</tr>';
    return $result;
}

if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = 'You  must login first';
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

 if(isset($_SESSION['success'])) {
    unset($_SESSION['success']);
}
if(isset($_SESSION['username'])) : 
    

$sql = "SELECT * FROM languages";
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

include 'includes/header.php';

//show table
if(mysqli_num_rows($result) > 0)
{//show records
    echo '<table>';
    
    // header row
    echo create_table_header();

    //create table rows
    while ($row = mysqli_fetch_assoc($result))
    {
        echo create_table_row($row);
    }
    echo '</table>';
}
?>

<?php
mysqli_free_result($result);
mysqli_close($iConn);
endif;
include 'includes/footer.php';
?>
