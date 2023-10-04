<?php

ob_start();

session_start();



if ($_SESSION['userid'] == '') {
    header("Location: index.php");
    exit;
}

$modName = $_REQUEST['module']; //echo 'here'.$userObj->getSession('admin_profilePic');die();

?>

<!--**********************************

            Sidebar start

        ***********************************-->





<div class="nk-sidebar">

    <div class="nk-nav-scroll">

        <ul class="metismenu" id="menu">

            <li>

                <a class="has-arrow" href="dashboard.php" aria-expanded="false">

                    <i class="fa fa-calendar"></i><span class="nav-text">Dashboard</span>

                </a>

            </li>

           
			<li class="mega-menu mega-menu-sm">

                <a class="has-arrow" href="list_assets.php" aria-expanded="false">

                    <i class="fa fa-tachometer"></i> <span class="nav-text">Author</span>

                </a>

                <ul aria-expanded="false" class="<?= ($modName == "author_list") ? "collapse in" : "" ?>">

                    <li><a href="author_list.php">Author List</a></li>
                    <li><a href="add_author.php">Add Author</a></li>
            
                </ul>

            </li>
			
			<li class="mega-menu mega-menu-sm">

                <a class="has-arrow" href="list_assets.php" aria-expanded="false">

                    <i class="fa fa-tachometer"></i> <span class="nav-text">Books</span>

                </a>

                <ul aria-expanded="false" class="<?= ($modName == "book_list") ? "collapse in" : "" ?>">

                <li><a href="add_book.php">Add Book</a></li>    
                

                </ul>

            </li>
			
			

        </ul>

    </div>

</div>

<!--**********************************

            Sidebar end

***********************************-->