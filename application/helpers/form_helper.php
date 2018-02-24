<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function fInputPlaceholder($placeholder,$name,$type = 'text',$value = '')
{
	echo "<div class='form-group'>
		        <input class='form-control' placeholder='$placeholder' name='$name' type='$type' value='$value'>
		    </div>";
}

function fButton($title,$css = 'primary',$value = '',$type = 'submit')
{
	echo "<button type='$type' class='btn btn-$css' value='$value'>$title</button>";
}

function fSelect()
{
	
}



/* End of file formHelper.php */
/* Location: ./application/helpers/formHelper.php */