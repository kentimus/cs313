<? 
session_start();
include("db_connect.php");
$db = get_db();

$vocab_list_id = $_GET['id'];

include("db/vocab_words.php");
include("db/vocab_lists.php");

$listname = getVocabListName($vocab_list_id);
$vocab_words = getVocab_words($vocab_list_id);


?>
<? include("header.php"); ?>

<div class="container">
      
  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
      <div class="flippable appcon ac-bicycle">
        <div class="front">
          <span>B</span>
          <i class="fa fa-bicycle"></i>
        </div>
        <div class="back">
          Bicycle
        </div>
      </div>
  </div>
  
<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
      <div class="flippable appcon ac-car">
        <div class="front">
          <span>C</span>
          <i class="fa fa-car"></i>
        </div>
        <div class="back">
          Car
        </div>
      </div>
  </div>
      
    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
      <div class="flippable appcon ac-truck">
        <div class="front">
          <span>T</span>
          <i class="fa fa-truck"></i>
        </div>
        <div class="back">
          Truck
        </div>
      </div>
  </div>
  
  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
      <div class="flippable appcon ac-umbrella">
        <div class="front">
          <span>U</span>
          <i class="fa fa-umbrella"></i>
        </div>
        <div class="back">
          umbrella
        </div>
      </div>
  </div>
    
<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
      <div class="flippable appcon ac-plane">
        <div class="front">
          <span>P</span>
          <i class="fa fa-plane"></i>
        </div>
        <div class="back">
          Plane
        </div>
      </div>
  </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?=$listname;?></h1>
            
            <table class="table table-striped">
                <thead>
                    
                </thead>
                <tbody>
                <? foreach($vocab_words as $vw){ ?>
                    <tr>
                        <td><?=$vw['word'];?></td>
                        <td><?=$vw['english_word'];?></td>
                    </tr>
                <? } ?>  
                </tbody>
            </table>
            
        </div>
    </div>
</div>

<? include("footer.php"); ?>