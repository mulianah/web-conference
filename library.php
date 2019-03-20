<?php

/*
 * Tutorial: PHP Login Registration system
 *
 * Page: Application library
 * */

class DemoLib
{

    /*
     * Register New User
     *
     * @param $name, $email, $username, $password
     * @return ID
     * */
    public function Register($username, $matric, $password)
    {
        try {
            $db = DB();
            $query = $db->prepare("INSERT INTO student(username, matric, password) VALUES (:name,:matric,:password)");
            $query->bindParam("name", $username, PDO::PARAM_STR);
            $query->bindParam("matric", $matric, PDO::PARAM_STR);
            $enc_password = hash('sha256', $password);
            $query->bindParam("password", $enc_password, PDO::PARAM_STR);
           // $query->bindParam("userpic", $userpic, PDO::PARAM_STR);
            $query->execute();
            return $db->lastInsertId();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    /*
     * Check Username
     *
     * @param $username
     * @return boolean
     * */
    public function isUsername($username)
    {
        try {
            $db = DB();
            $query = $db->prepare("SELECT student_id FROM student WHERE username=:username");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    /*
     * Check Email
     *
     * @param $email
     * @return boolean
     * */
    public function isEmail($email)
    {
        try {
            $db = DB();
            $query = $db->prepare("SELECT student_id FROM student WHERE email=:email");
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    /*
     * Check Matric
     *
     * @param $matric
     * @return boolean
     * */
    public function isMatric($matric)
    {
        try {
            $db = DB();
            $query = $db->prepare("SELECT student_id FROM student WHERE matric=:matric");
            $query->bindParam("matric", $matric, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
	
    /*
     * Check Matric
     *
     * @param $matric
     * @return boolean
     * */
    public function isSC($matric, $ntoken)
    {
        try {
            $db = DB();
            $query = $db->prepare("SELECT student_id, calendar_id FROM studentcalendar WHERE student_id=:matric AND calendar_id=:calendar_id");
            $query->bindParam("matric", $matric, PDO::PARAM_STR);
            $query->bindParam("calendar_id", $ntoken, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
	
	/*
     * Check Token
     *
     * @param $calid
     * @return boolean
     * */
    public function isToken($calid)
    {
        try {
            $db = DB();
            $query = $db->prepare("SELECT sc_id FROM studentcalendar WHERE calendar_id=:calid");
            $query->bindParam("calid", $calid, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    /*
     * Check Password
     *
     * @param $password
     * @return boolean
     * */
    public function isPassword($password)
    {
        try {
            $db = DB();
            $query = $db->prepare("SELECT student_id FROM student WHERE password=:password");
            $query->bindParam("password", $password, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    /*
     * Login
     *
     * @param $username, $password
     * @return $mixed
     * */
    public function Login($username, $password)
    {
        try {
            $db = DB();
            $query = $db->prepare("SELECT student_id FROM student WHERE (username=:username OR email=:username) AND password=:password");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $enc_password = hash('sha256', $password);
            $query->bindParam("password", $enc_password, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                $result = $query->fetch(PDO::FETCH_OBJ);
                return $result->student_id;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    /*
     * get User Details
     *
     * @param $student_id
     * @return $mixed
     * */
    public function UserDetails($student_id)
    {
        try {
            $db = DB();
            $query = $db->prepare("SELECT student_id, student_name, matric, username, email, usertype, userpic, password FROM student WHERE student_id=:student_id");
            $query->bindParam("student_id", $student_id, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                return $query->fetch(PDO::FETCH_OBJ);
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}
