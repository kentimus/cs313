<div class="row">
    <div class="col-md-6 page-header">
        <p>Username : <?=$_SESSION['user']['username'];?></p>
        <p id="profile-email">Email : <?=$_SESSION['user']['email'];?> <a href="#" id="update-email" class="btn btn-sm btn-primary">Update Email</a></p>
        
        <form id="update-email-form">
            <input type="hidden" id="user_id" value="<?=$_SESSION['user']['id'];?>">
            <p>
                <label for="new-email">Update email address</label>
                <input type="text" class="form-control" id="new-email" value="<?=$_SESSION['user']['email'];?>">
            </p>
            <p>
                <input type="submit" class="btn btn-primary" value="update email">
            </p>
        </form>
    </div>
    <div class="col-md-6 page-header">
        <h2>Quiz History</h2>
        You have taken <?=$quiz_count['quiz_count']; ?> quizzes!

        <table class="table">
        <? 
            $quizname = "";        
            foreach($quiz_history as $qh){ 
                if($qh['name'] != $quizname){
                    $quizname = $qh['name'];
                    echo "<tr><td colspan='2'>$quizname</td></tr>";
                }    
        ?>
            <tr>
                <td><?=$qh['date'];?></td>
                <td><?=$qh['score'];?>%</td>
            </tr>
            <? } // end foreach ?>
        </table>
    </div>
</div>