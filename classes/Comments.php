<?php

class Comments{
    private $all = array();
    public $approved = array();
    private $pending = array();

    function __construct(){
        $commentPaths = scandir(COMMENTS_FOLDER);
        
        foreach($commentPaths as $path){
            if(strlen($path) !== 18)
                continue;

            $pathSlice = substr($path, -5);
                if($pathSlice === ".json"){
                    $commentFile = file_get_contents(COMMENTS_FOLDER.$path);
                    $comment = json_decode($commentFile);
                    array_push($this->all, $comment);

                    if($comment->status == "approved"){
                        array_push($this->approved, $comment);
                    }else {
                        array_push($this->pending, $comment);
                    }
                }
        }
    }

    function renderApproved(){
        $counter = 0;
        foreach($this->approved as $comment){
            $counter++;
            if($counter > 8)
                break;
            
               
            echo '        
                    <div class="card" style="max-width: 90%; margin: auto">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="images/product4.jpg" class="img-fluid comment-profile" alt="..." style="max-height: 120px; margin: 0.5em;">
                            </div>
                            <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">'.$comment->name.'</h5>
                                <p class="card-text">'.$comment->content.'</p>
                                <p class="card-text"><small class="text-muted">Posted on: '.$comment->date.'</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
            
                ';
        }

    }
}

?>