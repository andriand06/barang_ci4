<?php 

if ($isi == 'Auth/index' OR $isi == 'Auth/registration')
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