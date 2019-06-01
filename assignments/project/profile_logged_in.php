<div class="row">
    <div class="col-md-6">
        <p>Username : <?=$_SESSION['user']['username'];?></p>
        <p>Email : <?=$_SESSION['user']['email'];?></p>
    </div>
    <div class="col-md-6">
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