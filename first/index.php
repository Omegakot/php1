<?

$menu = template("main");
echo template("layout",$menu);

function template($page,$content = ""){
    ob_start();
    include $page.".php";
    return ob_get_clean();
}
