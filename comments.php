  <?php 
     if(comments_open() ){
         
        ?>
         <div class="comments">
            <div class="comments-area">
                            
                <?php
                if(have_comments()){
                    echo '<h3>All comments</h3>';
                }
                foreach($comments as $comment){
                       echo ' <div class="comment row">';
                           echo '<span class="name col-sm-3">';
                           comment_author();
                            echo '</span>';
                            echo '<span class="content col-sm-9">';
                            comment_text();
                            echo '</span>';
                        echo '</div>';

                }

                 ?>
     
             </div>
        </div>
        <div class="comments">
            <div class="write-comment">
                
        <?php
         $comsform_args = array(
             
             'fields' => array(
                 'author' => '<div class="form-group"><label>Name</label><input type="text" name="author" class="form-control"  placeholder="Write your name"></div>',
                 'email' => '<div class="form-group"><label>email</label><input  type="text" name="email"  class="form-control"  placeholder="name@example.com">
            </div>'
             ),
             'comment_field' => '<textarea class="form-control"  rows="3" name="comment" id="comment"></textarea>',
              'label_submit' => 'Save comment',
              'title_reply'  => '<h3>Leave  a comment:</h3>',
              'class_submit' => 'btn btn-primary'
         );

         
         comment_form($comsform_args);
        ?>
         </div></div>
        <?php
        }else{
            echo 'Sorry comments are Disabled.';
        }