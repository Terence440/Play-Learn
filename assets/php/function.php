<?php
function check_login($conn)
{
    // Checking whether userID is exist
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE id = '$id' LIMIT 1";

        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            // Save the data into an array
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    // redirect to login
    header("Location: loginPage.php");
    die;
}

function random_num($length)
{
    $text = "";
    if ($length < 5) {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {
        # code...

        $text .= rand(0, 9);
    }

    return $text;
}

function check_forum($con)
{
    $query = "SELECT * FROM forum ORDER BY forum_id DESC";
    $resultForum = mysqli_query($con, $query);

    if ($resultForum && mysqli_num_rows($resultForum) > 0) {
        $forum_data = mysqli_fetch_assoc($resultForum);
        return $forum_data;
    }
}


