<?php
/**
 * KREJT QKA KA NQIT FILE JON CLASAT E OBJEKTEVE QE KORRESPONDOJN ME TABELAT N DATABAZ
 * METODDAT GET NA VYJN QITU PER MI MARR VLERAT PER MI POST SE ATRIBUTET JON PRIVATE
 */

# KLASA E PRODUKTEVE
class Products {
    private $pid;
    private $productName;
    private $reference_code;
    private $img_url;
    private $dimensions;
    private $price;
    private $details_id;
    function __construct($pid, $productName, $img_url, $dimensions, $price, $details_id) {
        $this->pid=$pid;
        $this->productName=$productName;
        $this->img_url=$img_url;
        $this->dimensions=$dimensions;
        $this->price=$price;
        $this->details_id=$details_id;
    }
    function getPid(){return $this->pid;}
    function getProductName(){return $this->productName;}
    function getImgUrl(){return $this->img_url;}
    function getDimensions(){return $this->dimensions;}
    function getPrice(){return $this->price;}
    function getDetailsId(){return $this->details_id;}
    
    #function setPid($pid){$this->pid=$pid;}
    #function setProductName($productName){$this->productName=$productName;}
    #function setImgUrl($img_url){$this->img_url=$img_url;}
    #function setDimensions($dimensions){$this->dimensions=$dimensions;}
    #function setPrice($price){$this->price=$price;}
    #function setDetailsId($details_id){$this->details_id=$details_id;}
}