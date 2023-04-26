<?php
require("Connect.php");

function getAll()
{
    $sql = "SELECT * FROM sanpham";
    $result = (new Connnect())->select($sql);
    $row = mysqli_fetch_array($result);
    return $row;
}
function getCategory()
{
    $sql_danhmuc = "SELECT * FROM loaisanpham ORDER BY MaLoaiSP ASC";
    $query_danhmuc = (new Connnect())->select($sql_danhmuc);
    return $query_danhmuc;
}
function getCategoryall()
{
    $sql_danhmuc = "SELECT * FROM loaisanpham ORDER BY MaLoaiSP ASC";
    $query_danhmuc = (new Connnect())->select($sql_danhmuc);
    $array_danhmuc = mysqli_fetch_array($query_danhmuc);
}
function getcodearrayproduct()
{
    $sql_sanpham_dienthoai = "SELECT * FROM sanpham,loaisanpham WHERE loaisanpham.MaLoaiSP=sanpham.MaLoaiSP  ORDER BY loaisanpham.MaLoaiSP ASC";
    $query_sanpham_dienthoai = (new Connnect())->select($sql_sanpham_dienthoai);
    return $query_sanpham_dienthoai;
}
function getcodeproduct()
{
    $sql_sanpham_dienthoai = "SELECT * FROM sanpham,loaisanpham WHERE loaisanpham.MaLoaiSP=sanpham.MaLoaiSP  ORDER BY loaisanpham.MaLoaiSP ASC";
    $query_sanpham_dienthoai = (new Connnect())->select($sql_sanpham_dienthoai);
    $array_sanpham_dienthoai = mysqli_fetch_array($query_sanpham_dienthoai);
    return $array_sanpham_dienthoai;
}
function getnamecodeproduct($namecode)
{
    $sql_sanpham_dienthoai = "SELECT * FROM sanpham,loaisanpham WHERE loaisanpham.MaLoaiSP=sanpham.MaLoaiSP and sanpham.MaLoaiSP ='$namecode'  ORDER BY loaisanpham.MaLoaiSP ASC";
    $query_sanpham_dienthoai = (new Connnect())->select($sql_sanpham_dienthoai);
    return $query_sanpham_dienthoai;
}
function getproductwithid($id, $page)
{
    $codepage = (($page - 1) * 4);
    $sql = "SELECT * FROM sanpham WHERE sanpham.MaLoaiSP ='$id' ORDER BY sanpham.MaLoaiSP LIMIT 4 OFFSET $codepage";
    $query = (new Connnect())->select($sql);
    return $query;

}
function getproductwithidall($id)
{
    $sql = "SELECT * FROM sanpham WHERE sanpham.MaLoaiSP ='$id' ORDER BY sanpham.MaLoaiSP";
    $query = (new Connnect())->select($sql);
    return $query;

}
function getcodeproductwith($id)
{
    $sql = "SELECT * FROM loaisanpham WHERE  loaisanpham.MaLoaiSP ='$id' LIMIT 1";
    $query = (new Connnect())->select($sql);
    $array = mysqli_fetch_array($query);
    return $array;

}
function getproductwithidsearch($search, $page)
{
    $codepage = (($page - 1) * 4);
    $sql = "SELECT * FROM sanpham WHERE `TenSP` LIKE '%" . $search . "%' LIMIT 4 OFFSET  $codepage";
    $query = (new Connnect())->select($sql);
    return $query;

}
function getproductwithidsearchall($search)
{
    $sql = "SELECT * FROM sanpham WHERE `TenSP` LIKE '%" . $search . "%' ";
    $query = (new Connnect())->select($sql);
    return $query;

}
// $sql_pro = "SELECT * FROM sanpham WHERE sanpham.MaLoaiSP ='$_GET[id]' ORDER BY sanpham.MaLoaiSP ASC LIMIT $item_per_page OFFSET $offset ";
// $sql_cate = "SELECT * FROM loaisanpham WHERE  loaisanpham.MaLoaiSP ='$_GET[id]' LIMIT 1";
function getchitiet($id)
{
    $sql = "SELECT * FROM sanpham,loaisanpham WHERE sanpham.MaLoaiSP =loaisanpham.MaLoaiSP AND sanpham.MaSP='$_GET[id]' LIMIT 1";
    $query = (new Connnect())->select($sql);
    return $query;
}
?>