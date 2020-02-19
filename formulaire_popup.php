      <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content modal-popup">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         </button>
                    </div>

                    <div class="modal-body">
                         <div class="container-fluid">
                              <div class="row">

                                   <div class="col-md-12 col-sm-12">
                                        <div class="modal-title">
                                             <img src="images/logo.png" alt="Manga ++" />
                                        </div>

                                        <!-- NAV TABS -->
                                        <ul class="nav nav-tabs" role="tablist">
                                             <li class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Connexion</a></li>
                                             <li><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Créer un compte</a></li>
                                        </ul>

                                        <!-- TAB PANES -->
                                        <div class="tab-content">
                                             <div role="tabpanel" class="tab-pane fade in active" id="login">
                                                  <form action="index.php" method="post">
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                                                       <input type="submit" class="form-control" name="submit_logon" value="Se connecter">
                                                       <!-- <a href="#">Mot de passe oublié ?</a> -->
                                                  </form>
                                                    <?php
                                                    $pdo2 = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
                                                        if(isset($_POST['submit_logon'])){
                                                            $query2 = $pdo2->prepare("SELECT password FROM clients WHERE address_mail = :email");
                                                            $query2->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
                                                            $query2->execute();
                                                            if(sha1($_POST['password']) == $query2->fetch()["password"]){
                                                                $_SESSION["email"] = $_POST['email'];
                                                                echo '<script language="Javascript"> <!-- document.location.replace("$www"); // --> </script>';
                                                            }else{
                                                                
                                                            }
                                                        }
                                                    ?>
                                             </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="sign_up">
                                                  <form action="index.php" method="post">
                                                       <input type="text" class="form-control" name="lastname" placeholder="Nom" required>
                                                       <input type="text" class="form-control" name="firstname" placeholder="Prénom" required>
                                                       <input type="telephone" class="form-control" name="telephone" placeholder="Téléphone" required>
                                                       <input type="text" class="form-control" name="address" placeholder="Adresse" required>
                                                       <input type="text" class="form-control" name="moreaddress" placeholder="Complèment d'adresse">
                                                       <input type="text" class="form-control" name="cp" placeholder="Code postal" required>
                                                       <input type="text" class="form-control" name="city" placeholder="Ville" required>
                                                       <input type="text" class="form-control" name="country" placeholder="Pays" required>
                                                       <select id="sex" class="form-control"  name="sex" placeholder="Sexe" required>
                                                        <option value="0">Homme</option>
                                                        <option value="1">Femme</option>
                                                       </select>
                                                       <input type="date" class="form-control" name="birthdate" placeholder="Date de naissance" required>
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                                                       Accepter RGDP : <input type="checkbox" id="rgpd" name="rgpd" checked required>
                                                       <input type="submit" class="form-control" name="submit_signup" value="S'inscrire">
                                                  </form>
                                                  <?php
		                                            if(isset($_POST['submit_signup'])){
                                                        $query2 = $pdo2->prepare("SELECT address_mail FROM clients WHERE address_mail = :email");
                                                        $query2->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
                                                        $query2->execute();
                                                        if ($query2->rowCount() == 0) {
                                                            $i = 0;
                                                            $stmt2 = $pdo2->prepare("INSERT INTO clients (first_name, last_name, address_mail, password, sex, birth_date, salaried, admin, address, more_address, postal_code, city, country, phone_number) VALUES (:first_name, :last_name, :address_mail, :password, :sex, :birth_date, :salaried, :admin, :address, :more_address, :postal_code, :city, :country, :phone_number)");
                                                            $stmt2->bindParam(':first_name', $_POST['firstname']);
                                                            $stmt2->bindParam(':last_name', $_POST['lastname']);
                                                            $stmt2->bindParam(':address_mail', $_POST['email']);
                                                            $stmt2->bindParam(':password', sha1($_POST['password']));
                                                            $stmt2->bindParam(':sex', $_POST['sex']);
                                                            $stmt2->bindValue(':birth_date', $_POST['birthdate']);
                                                            $stmt2->bindParam(':salaried', $i);
                                                            $stmt2->bindParam(':admin', $i);
                                                            $stmt2->bindParam(':address', $_POST['address']);
                                                            $stmt2->bindParam(':more_address', $_POST['moreaddress']);
                                                            $stmt2->bindParam(':postal_code', $_POST['cp']);
                                                            $stmt2->bindParam(':city', $_POST['city']);
                                                            $stmt2->bindParam(':country', $_POST['country']);
                                                            $stmt2->bindParam(':phone_number', $_POST['telephone']);
                                                            if($stmt2->execute()){
                                                                $_SESSION["email"] = $_POST['email'];
                                                                echo '<script language="Javascript"> <!-- document.location.replace("$www"); // --> </script>';
                                                            }
                                                        }else{
                                                            echo "test";
                                                        }
                                                    }
                                                  ?>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
