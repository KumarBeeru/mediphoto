<?php


namespace App\Helpers;


class Constants
{
    public static $EVENT_DOCUMENT = 'EVENT/';
    public static $PATH_PUBLIC = 'public/';
    public static $PATH_STORAGE = 'storage/';

    //role and permission
    public static $ROLE_LIST = array("super-admin","admin","user");
    public static $PERMISSION_LIST = array("update super admin","update admin","update user","add admin","delete admin",
        "add user","delete user", "add photo","update photo","delete photo");

    //assign permission
    public static $ROLE_PERMISSION = array(
        array("role" => "admin", "permission" => array("update admin","update user","add user","delete user", "add photo",
            "update photo","delete photo")),
        array("role" => "user", "permission" => array("update admin","update user","add user","delete user", "add photo",
            "update photo","delete photo")));

    //All Local Language
    public static  $ALL_LOCAL = array('en'=>'en', 'fr'=>'fr','de'=>'de','pt'=>'pt');

    //paginate row
    public static  $PAGINATE = array(5,10,50,100);

}
