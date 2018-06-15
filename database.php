<?php
/*
 *********************************************************************************************************
 *
 *   *    *       ****     ******                        *       *
 *   * *  *       *          *        *****    ****      * *   * *
 *   *   **       ****       *       *        *    *     *   *   *
 *   *    *       *          *       *        *    *     *       *
 *                ****       *        *****     **       *       *
 *********************************************************************************************************
 * starking123eng@gmail.com
 *
 *********************************************************************************************************
 */

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author Muhammed
 */



error_reporting(0);
class database  {
    var $host ;
    var $user ;
    var $pass;
    var $db ;
    var $myconn;

    function connect($dbname,$admin,$password,$host) {
		$this->db=$dbname;
		$this->user=$admin;
		$this->pass=$password;
		$this->host=$host;
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
        //echo 'Connection established!';
		}
        return $this->myconn;
    }

    function close() {
        mysqli_close($myconn);
        echo 'Connection closed!';
    }

}