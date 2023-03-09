<?php

define("Gia", 23000);

function formatVND($gia)
{
    return number_format($gia * Gia, 0, ",", ".") . " VNĐ";
}
