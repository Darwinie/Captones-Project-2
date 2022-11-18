<?php

include_once("connections/connections.php");
$con = connection();

function login(){
        extract($_POST);
        $sql = "SELECT * FROM user_accounts where username = '{$username}' and `password` = '".md5($password)."' ";

        @$qry = $this->conn->query($sql)->fetch_array();
        if(!$qry){
            $resp['status'] = "failed";
            $resp['msg'] = "Invalid username or password.";
        }else{
            $resp['status'] = "success";
            $resp['msg'] = "Login successfully.";
            foreach($qry as $k => $v){
                if(!is_numeric($k))
                $_SESSION[$k] = $v;
            }
            // $log['user_id'] = $qry['id'];
            // $log['action_made'] = "Logged in the system.";
            // // audit log
            // $this->save_log($log);
        }
        return json_encode($resp);
    }
    function logout(){
        $log['user_id'] = $_SESSION['id'];
        $log['action_made'] = "Logged out.";
        session_destroy();
        // // audit log
        // $this->save_log($log);
        // header("location:./");
    }


?>