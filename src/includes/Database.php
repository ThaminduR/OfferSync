<?php
//TODO : implement database library (PDO)
//NOTE : If a function is needed comment it here
require_once $_SERVER['DOCUMENT_ROOT'] . '/..' . '/src/includes/database_config.php';

class Database
{
    private $server;
    private $user;
    private $password;
    private $dbname;
    private $connection;
    private static $dbconnection = null;



    //TODO: make this a object pool 
    private function __construct()
    {
        $this->server = server;
        $this->user = user;
        $this->password = password;
        $this->dbname = db;
        $this->Connect();
    }

    public static function getDbConnection()
    {
        if (self::$dbconnection == null) {
            self::$dbconnection = new Database();
        }
        return self::$dbconnection;
    }

    //establishing a connection to database
    private function Connect()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->password, $this->dbname);
        if (mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
            exit;
        }
    }

    //------------------------------------------------User Related -----------------------------------------------------------------------
    //Insert user registration details.
    public function InsertUserDetail($username, $firstname, $lastname, $gender, $email, $city, $number)
    {
        $username = mysqli_real_escape_string($this->connection, $username);
        $firstname = mysqli_real_escape_string($this->connection, $firstname);
        $lastname = mysqli_real_escape_string($this->connection, $lastname);
        $gender = mysqli_real_escape_string($this->connection, $gender);
        $email = mysqli_real_escape_string($this->connection, $email);
        $city = mysqli_real_escape_string($this->connection, $city);
        $number = mysqli_real_escape_string($this->connection, $number);
        $sql = "INSERT INTO users SET username='$username', firstname='$firstname', lastname='$lastname', city='$city', gender='$gender', email='$email', MobileNumber='$number'";
        $result = mysqli_query($this->connection, $sql) or die("Data cannot inserted");
        return $result;
    }
    //Edit user registration details.
    public function EditUserDetail($username,$email, $city, $number)
    {

        $email = mysqli_real_escape_string($this->connection, $email);
        $city = mysqli_real_escape_string($this->connection, $city);
        $number = mysqli_real_escape_string($this->connection, $number);
        $sql ="UPDATE users SET city='$city', email='$email', MobileNumber='$number'
        WHERE username='$username'";
         //"INSERT INTO users SET city='$city', gender='$gender', email='$email', MobileNumber='$number'";
        $result = mysqli_query($this->connection, $sql) or die("Data cannot inserted");
        return $result;
    }


    //Insert user login details
    public function InsertLoginData($username, $password, $salt)
    {
        $username = mysqli_real_escape_string($this->connection, $username);
        $sql = "INSERT INTO userlogin SET username='$username', password='$password', salt='$salt'";
        $result = mysqli_query($this->connection, $sql) or die("Data cannot inserted");
        return $result;
    }
    //Edit user login details
    public function EditLoginData($username, $password, $salt)
    {
        $username = mysqli_real_escape_string($this->connection, $username);
        $sql = "UPDATE userlogin SET password='$password', salt='$salt'
        WHERE username='$username'";
        //"INSERT INTO userlogin SET username='$username', password='$password', salt='$salt'";
        $result = mysqli_query($this->connection, $sql) or die("Data cannot Updated");
        return $result;
    }

    public function EditEmail($username, $email)
    {
        $email = mysqli_real_escape_string($this->connection, $email);
        $sql = "UPDATE users SET email='$email'
        WHERE username='$username'";
        //"INSERT INTO userlogin SET username='$username', password='$password', salt='$salt'";
        $result = mysqli_query($this->connection, $sql) or die("Data cannot Updated");
        return $result;
    }

    public function EditCity($username, $city)
    {
        $city = mysqli_real_escape_string($this->connection, $city);
        $sql = "UPDATE users SET city='$city'
        WHERE username='$username'";
        //"INSERT INTO userlogin SET username='$username', password='$password', salt='$salt'";
        $result = mysqli_query($this->connection, $sql) or die("Data cannot Updated");
        return $result;
    }

    public function EditPhone($username,$number)
    {
        $number = mysqli_real_escape_string($this->connection, $number);
        $sql = "UPDATE users SET MobileNumber='$number'
        WHERE username='$username'";
        //"INSERT INTO userlogin SET username='$username', password='$password', salt='$salt'";
        $result = mysqli_query($this->connection, $sql) or die("Data cannot Updated");
        return $result;
    }

    //to find a certain user from username 
    public function FindUserDetail($username)
    {
        $username = mysqli_real_escape_string($this->connection, $username);
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($this->connection, $sql);
        $user_data = mysqli_fetch_array($result);
        echo 'Testt';
        return $user_data;
        
    }

    //find a user from username or email
    public function FindUserName($username)
    {
        $username = mysqli_real_escape_string($this->connection, $username);
        $sql = "SELECT username FROM userlogin WHERE username='$username'";
        $result = mysqli_query($this->connection, $sql);
        $user_data = mysqli_fetch_array($result);
        if (empty($user_data)) {
            return false;
        } else {
            return true;
        }
    }

    public function FindEmail($email)
    {
        $email = mysqli_real_escape_string($this->connection, $email);
        $sql = "SELECT email FROM users WHERE email='$email'";
        $result = mysqli_query($this->connection, $sql);
        $user_data = mysqli_fetch_array($result);
        if (empty($user_data)) {
            return false;
        } else {
            return true;
        }
    }

    //------------------------------------------------Offers Related-----------------------------------------------------------------------
    //save the post to database
    public function PostOffer($username, $restaurant, $offer, $price, $restaurantbranch, $date, $city, $gender)
    {
        $restaurant = mysqli_real_escape_string($this->connection, $restaurant);
        $offer = mysqli_real_escape_string($this->connection, $offer);
        $price = mysqli_real_escape_string($this->connection, $price);
        $date = mysqli_real_escape_string($this->connection, $date);
        $restaurantbranch = mysqli_real_escape_string($this->connection, $restaurantbranch);
        $city = mysqli_real_escape_string($this->connection, $city);
        $gender = mysqli_real_escape_string($this->connection, $gender);
        $sql = "INSERT INTO offers SET Username='$username',Restaurant='$restaurant',Offer='$offer', Price='$price', City='$city', RestaurantBranch='$restaurantbranch', Date='$date', Gender='$gender'";
        $finalOffer = mysqli_query($this->connection, $sql) or die("Data cannot inserted");
        return $finalOffer;
    }

    //------------------------------------------Fetch Search Results from the databse---------------------------------------------
    public function FetchOffer($search,$username)
    {
        $search = mysqli_real_escape_string($this->connection, $search);
        $query = "SELECT * FROM offers WHERE (Restaurant LIKE '%" . $search . "%' OR City LIKE '%" . $search . "%' )AND Username!='$username' ";
        $result = mysqli_query($this->connection, $query);
        // $offers = array();
        // while ($offer = mysqli_fetch_array($result)) {
        //     $offers[] = $offer;
        // }
        return $result;
    }

    //------------------------------------------Fetch Posts from the databse---------------------------------------------
    public function GetOffers($search)
    {
        $search = mysqli_real_escape_string($this->connection, $search);
        $query = "SELECT * FROM offers WHERE Username ='$search'";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function DeleteOffers($sender,$id)
    {
        $id = mysqli_real_escape_string($this->connection, $id);
        $query = "DELETE FROM offers WHERE Username ='$sender' AND OfferID='$id'";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }


    //------------------------------------------Fetch User Details from the databse---------------------------------------------
    public function FetchUser($username)
    {
        $username = mysqli_real_escape_string($this->connection, $username);
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($this->connection, $sql);
        $user = mysqli_fetch_array($result);
        return $user;
    }

    //------------------------------------------------Sessions Related -----------------------------------------------------------------------
    //Search session in the databse
    public function SearchSession($id)
    {
        $sql = "SELECT data FROM sessions WHERE id ='$id'";
        $result = mysqli_query($this->connection, $sql);
        return mysqli_fetch_array($result);
        echo "test";
    }

    //Inserting the session to database
    public function InsertSession($id, $data, $access)
    {
        $sql = "REPLACE into sessions(id,access,data) VALUES ('$id','$access', '$data')";
        $result = mysqli_query($this->connection, $sql) or die("Session cannot be inserted");
        return $result;
    }

    //Deleting the session using the id
    public function DestroySession($id)
    {
        $sql = "DELETE FROM sessions WHERE id ='$id'  ";
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }

    //garbage collector will automatically delete the unnecessary sessions
    public function GarbageSession($old)
    {
        $sql = "DELETE * FROM sessions WHERE access < '$old'";
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }

    //------------------------------------------------Requests Related -----------------------------------------------------------------------

    public function InsertRequest($sender, $receiver)
    {
        $sql = "INSERT INTO requests SET Sender='$sender', Receiver='$receiver' , Date=CURDATE() , IsConfirmed='false' ";
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }

    public function SearchRequests($username)
    {
        $username = mysqli_real_escape_string($this->connection, $username);
        $sql = "SELECT * FROM requests WHERE Receiver ='$username' AND IsConfirmed=false";
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }

    public function MyAcceptedRequests($username)
    {
        $username = mysqli_real_escape_string($this->connection, $username);
        $sql = "SELECT * FROM requests WHERE Sender ='$username' AND IsConfirmed=true";
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }

    public function RequestsIAccpeted($username)
    {
        $username = mysqli_real_escape_string($this->connection, $username);
        $sql = "SELECT * FROM requests WHERE Receiver ='$username' AND IsConfirmed=true";
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }

    public function SentRequests($username)
    {
        $username = mysqli_real_escape_string($this->connection, $username);
        $sql = "SELECT * FROM requests WHERE Sender ='$username' AND IsConfirmed=false";
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }
}
