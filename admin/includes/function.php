

<?php
include "db.php";
function add_post(){
    global $connection;

    if (isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = date("l d F Y");
        $views = 0;
        $comments = 0;

        if (isset($_FILES['image'])){
            $dir = "../images/";
            $target_file = $dir.basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
                echo "successfull";
            }else{
                echo "not";
            }
        }
        $query = "INSERT INTO posts (title, description, image, date, comments, views)
        VALUE('$title', '$description', '$target_file', '$date', '$comments', '$views')";
            $result = mysqli_query($connection, $query);
            if (!$result){
                die("posts not send" . mysqli_error($query));
                header("Location: ../add_post.php");
            }else{
                header("Location: ../posts.php?Post_added");
            }
    }
}

add_post();

function add_comment(){
    global $connection;

    if (isset($_POST['comment'])){
        $name = $_POST['name'];
        $message = $_POST['message'];
        $post_id = $_POST['post_id'];
        $date = date("l d F Y");
        $status = $_POST['status'];

        $query = "INSERT INTO comment (name, message, post_id, date, status)
        VALUE('$name', '$message', '$post_id', '$date','$status')";
            $result = mysqli_query($connection, $query);
            if (!$result){
                die("comment not send" . mysqli_error($query));
                header("Location: ../../readmore.php");
            }else{
                header("Location: ../../readmore.php?post=$post_id");
            }
    }
}

add_comment();

function show_posts(){
    global $connection;
    $query = "SELECT * FROM posts";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)){
        $title = $row['title'];
        $description = $row['description'];
        $image = $row['image'];
        $date = $row['date'];
        $views = $row['views'];
        $comments = $row['comments'];

        echo "<tr>";
        echo "<td>{$title}</td>";
        echo "<td>{$description}</td>";
        echo "<td>{$date}</td>";
        echo "<td><img src='images/{$image}' width='100px'></td>";   
        echo "<td>{$views}</td>";
        echo "<td>{$comments}</td>";
        echo "<td>
        <button type='button' class='btn btn-danger'>Delete</button>
        <button type='button' class='btn btn-info'>edit</button>
        </td>";
        echo "</tr>";
    }
}
function show_comment(){
    global $connection;
    $query = "SELECT * FROM comment WHERE status=0";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $message = $row['message'];
        $date = $row['date'];
        $post_id = $row['post_id'];

        echo "<tr>";
        echo "<td>{$name}</td>";
        echo "<td>{$message}</td>";
        echo "<td>{$date}</td>";
        echo "<td>
        <button type='button' class='btn btn-danger'>delete</button>
        <button type='button' class='btn btn-info'>verify</button>
        </td>";
        echo "</tr>";
    }
}
?>
