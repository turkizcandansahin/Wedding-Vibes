<?php


include "master/dbMaster.php";
$resultText = "";
if (isset($_GET["searchkey"])){

    $searchKey = $_GET["searchkey"];

    $query = $db->prepare('SELECT * FROM serviceproviders WHERE vendor_name LIKE ?');
    $query->execute(array($searchKey."%"));

    while ($results = $query->fetch())
    {
        $resultText .= "<div class=\"col-lg-12\">
                                                        <div class=\"product-wrapper mb-30 single-product-list product-list-right-pr mb-60\">
                                                            <div class=\"product-img list-img-width\">
                                                                <a href=\"productDetails.php?id=".$results["id"]."\">
                                                                    <img src=\"".$results["photoUrl"]."\" alt=\"\">
                                                                </a>
                                                                <div class=\"product-action-list-style\">
                                                                    <a class=\"animate-right\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#exampleModal\" href=\"#\">
                                                                        <i class=\"pe-7s-look\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class=\"product-content-list\">
                                                                <div class=\"product-list-info\">
                                                                    <h4><a href=\"productDetails.php?id=".$results["id"]."\">".$results["vendor_name"]."</a></h4>

                                                                    <p>".$results["description"]."</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>";
    }


    echo $resultText;
}

if (isset($_GET["searchCat"])){

    $searchCat = $_GET["searchCat"];

    $query = $db->prepare('SELECT * FROM serviceproviders WHERE category_id=?');
    $query->execute(array($searchCat));

    while ($results = $query->fetch())
    {
        $resultText .= "<div class=\"col-lg-12\">
                                                        <div class=\"product-wrapper mb-30 single-product-list product-list-right-pr mb-60\">
                                                            <div class=\"product-img list-img-width\">
                                                            <a href=\"productDetails.php?id=".$results["id"]."\">
                                                                    <img src=\"".$results["photoUrl"]."\" alt=\"\">
                                                                </a>
                                                                <div class=\"product-action-list-style\">
                                                                    <a class=\"animate-right\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#exampleModal\" href=\"#\">
                                                                        <i class=\"pe-7s-look\"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class=\"product-content-list\">
                                                                <div class=\"product-list-info\">
                                                                <h4><a href=\"productDetails.php?id=".$results["id"]."\">".$results["vendor_name"]."</a></h4>

                                                                    <p>".$results["description"]."</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>";
    }


    echo $resultText;
}