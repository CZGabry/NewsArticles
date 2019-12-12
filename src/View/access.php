 <?php $this->layout('layout', ['title' => 'Errore 404']) ?>

 <p>aaaccesss</p>

 <?php

 echo "string";

class Test
{
    public function test()
    {
       echo "string";
       exit(); 

       }
}
                

class access
{
    public function accessAction()
    {

        if(strlen($_POST['password']) > 8) 

            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){




              $email = $_POST['email'];
              $pass = $_POST['password'];
              
              var_dump($email);
                
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT id, email, password FROM Users";
              $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                     if($email == $row["email"] && $pass == $row["password"]){
                      $_SESSION['email'] = $email;
                      $_SESSION['id'] = $row["id"];
                      header('location: home.php');
                      exit();
                     }

                     else {
                        header('location: login.php');

                     }
                  }

                $conn->close();


                }
                }
          
          else {

                header('location: login.php');

          }

           }
  }