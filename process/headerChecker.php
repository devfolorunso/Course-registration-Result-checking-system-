<?php
  if (input::get('semester') || input::get('session'))
  {
    
  }else{
    redirect::to('404.html');
  }
?>