<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
    <?php
        $connection = new mysqli("localhost","timohh97_admin1","449060data","timohh97_phpdata");
        
        $query = "SELECT * FROM posts ORDER BY id DESC";
        
        $result = mysqli_query($connection,$query);
        
        while($row= mysqli_fetch_row($result))
        {
            echo "<div id='post'>
                    <div id='date'>".$row[2]."</div>
                    <div id='textOfPost'>".$row[1]."</div>
                    <form action='delete.php' method='post'>
                    <input type='hidden' value='".$row[0]."' name='id'>
                    <button type='submit'>Delete</button>
                    </form>
                  </div>";
            
        }
        
        ?>
        
    <form id="inputForm" method="post" action="post.php">
        <textarea name="postInput" placeholder="Write something....." minlength="2"></textarea>
        <br>
        <button type="submit">Post</button>
    </form>
    </body>
</html>