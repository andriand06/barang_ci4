<?php 

if ($isi == 'Login/index' OR $isi == 'Registration/index')
{
    echo view('layout/v_head.php');
    echo view('layout/v_content.php');
    
    
}
 else
{
    echo view('layout/v_head.php');
    echo view('layout/v_header.php');
    echo view('layout/v_nav.php');
    echo view('layout/v_content.php');
    echo view('layout/v_footer.php');

}



?>