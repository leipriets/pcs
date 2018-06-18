<?php
/** 
* User: Leo
* @copyright 2018
*/

defined('BASEPATH') OR exit('No direct script access allowed');


class helper
{
    public function __construct()
    {

    }

    /**
     * @method converts array to html->select->option tag.
     * @param $listArray array to be converted. format: array([0]=>array['value']['desc']))
     * @param bool $addCaption add caption if true
     * @param $caption caption will be displayed if add caption is true
     * @param $customAttribute additional attribute. format: array([0]=>array['attr']['value']))
     * @return returns list of HTML option tag
     */
    public function arrayToHTMLOption($listArray, $selectedValue = '', $addCaption = false, $caption = "", $captionValue = "", $customAttribute = array())
    {
        $string = "";
        if ($addCaption) $string = "<option value='$captionValue'>" . $caption . "</option>";
        for ($i = 0; $i <= count($listArray); $i++) {
            $string .= "<option value='{$listArray[$i]['value']}' " . (is_array($customAttribute) && !empty($customAttribute) ? "${$customAttribute[$i]['attr']}='{$customAttribute[$i]['value']}' " : "") . ($listArray[$i] == $selectedValue ? "SELECTED" : "") . ">{$listArray[$i]['desc']}</option>";
        }
        return $string;
    }

    /**
     * @method converts array to html->select->option tag by key.
     * @param $listArray array to be converted. format: array([0]=>array['value']['desc']))
     * @param bool $addCaption add caption if true
     * @param $caption caption will be displayed if add caption is true
     * @param $customAttribute additional attribute. format: array([0]=>array['attr']['value']))
     * @return returns list of HTML option tag
     */
    public function arrayToHTMLOptionByKey($listArray, $selectedValue = '', $addCaption = false, $caption = "", $captionValue = "", $customAttribute = array())
    {
        $string = "";
        if ($addCaption) $string = "<option value='$captionValue'>" . $caption . "</option>";
        foreach($listArray as $k => $v){
            $string .= "<option value='{$k}' " . ($k == $selectedValue ? "SELECTED" : "") . ">$v</option>";
        }
        return $string;
    }

    /**
     * @method checks who can access the specified file, checks user log in first before checking user access
     * @param $allowedUserList list of users that can access format: array(usertype,usertype)....
     * @param $currentUser current user
     * @param $checkIfLoggedIn checks if session has a user logged in
     * @return returns boolean true if all conditions are met, else returns false
     */
    public function checkUserAccess($IsUserLoggedIn, $allowedUserList = array(), $currentUser)
    {
        $condition = false;
        if (!$IsUserLoggedIn) {
            header('HTTP/1.0 403 Forbidden');
            echo "Please Log In First";
            die;
        }
        /**foreach ($allowedUserList as $k) {
            ($k == $currentUser ? $condition = true : "");
        }*/
        if( in_array($currentUser,$allowedUserList)) $condition = true ;
        if (!$condition) {
            header('HTTP/1.0 403 Forbidden');
            echo 'Access Forbidden!<br> Please Login or Contact Your Administrator';
            die();
            exit;
        }
    }

    /**
     * @param $studNo student number to gather information
     * @param $currentUser current session user
     * @param $userType check user type
     */
    public function limitStudentAccess($studNo, $currentUser, $userType)
    {
        if ($userType == 0) {
            if ($studNo !== $currentUser) {
                header('HTTP/1.0 403 Forbidden');
                echo 'Limited Access!<br> Please Login or Contact Your Administrator';
                die();
            }
        }
    }


    /**
     * @param $date date to format
     * @param string $format date format
     * @param string $return what to return if the date is empty
     * @return string return clause
     */
    public function formatDate($date, $format = "m-d-Y", $return = ""){
        if(!empty($date) && $date != "0000-00-00" && $date != "0000-00-00 00:00:00"){
            if(!$this->isValidTimeStamp($date)) $date = strtotime($date);
            return date($format,$date);
        }else{
            return $return;
        }
    }

    /**
     * @param $timestamp
     * @return bool
     */
    private function isValidTimeStamp($timestamp){
        return ((string) (int) $timestamp === $timestamp)
        && ($timestamp <= PHP_INT_MAX)
        && ($timestamp >= ~PHP_INT_MAX);
    }




    /**
     * @param $request request method. e.g. $_POST, $_GET
     * @return $request with sanitized value
     */
    public function escapeSet($request){
        $return = array();
        if (version_compare(phpversion(), '5.4', '<')) {
            $return = $request;
        }else{
            foreach($request as $k => $v){
                if(is_array($v)){
                    #$return[$k] = array_map('mysql_real_escape_string', $v);
                    $return[$k] = $this->escapeSet($v);
                }else{
                    $return[$k] = mysql_real_escape_string($v);
                }
            }

        }

        return $return;
    }

}