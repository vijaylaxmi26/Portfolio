<?php 

require('top.php');

$email='';
if(isset($_GET['id']) && $_GET['id']!=''){
    $id=get_safe_value($conn,$_GET['id']);
    $sql="select * from `contactme` where `id`='$id'";
    $res=mysqli_query($conn,$sql);
    $check=mysqli_num_rows($res);
    if($check){
        $row=mysqli_fetch_assoc($res);
        $email = $row['email'];
    }else{
        header('location: Contact_us.php');
    }

}
$msg='';
$com='';

if(isset($_POST['submit'])){
     $id=get_safe_value($conn,$_GET['id']);
     $mail=$_POST['mail'];
     $sub=$_POST['subject'];
     $message=$_POST['message'];
     $headers="From: codervk2000@gmail.com\r\n";
     $headers .= "MIME-Version: 1.0" . "\r\n";
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

     if($email==$mail){
           if(mail($mail,$sub,$message,$headers)){
                $sql="update `contactme` set status='1' where `id`= '$id'";
                $res=mysqli_query($conn,$sql);
                header('location: contact_us.php');
           }else{
                $com='Somthing wrong here.';
           }
     }else{
         $msg="Incorrect email response";
     }
}

?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Respond</strong><small> Form</small></div>
                        <div class="card-body card-block">
                        <form method="post">
                           <div class="form-group">
                               <label for="contact_us" class=" form-control-label">Email</label>
                               <input type="email"  name="mail" class="form-control" value="<?php echo $email ?>"></div>
                           <div class="form-group">
                               <label   class=" form-control-label">Subject</label>
                               <input type="text" name="subject" class="form-control" value="Response from vijaylaxmi"></div>
                           <div class="form-group">
                               <label for="street" class=" form-control-label">Message</label>
                               <textarea type="text" name="message" placeholder="Enter message" class="form-control"></textarea>
                            </div>
                           <button type="submit" name="submit" class="btn btn-lg btn-info btn-block">
                           <span>Submit</span>
                           </button>
                        </form> 
                           <div class="field_error"><?php echo $msg ?></div>
                           <div class="result"><?php echo $com ?></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php require('bottom.php')?>
