        <div class="explanation">
          <br>
          <small>
            <?php
              $default_error_message = "An internal server error has occurred. If the error persists please contact the development team.";
            ?>
            {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
         </small>
       </div>
