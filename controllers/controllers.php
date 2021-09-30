<?php
class Templatectr {
    public static function getPageNames() {
        if (isset($_GET["path"])) {
			
            switch ($_GET["path"]) {
                default:
                   $GLOBALS["Page-Location"] = "pages/home.php";
            }
        } else {
            $GLOBALS["Page-Location"] = "pages/home.php";
        }
    }
}

?>