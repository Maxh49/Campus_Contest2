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
                                                  <form action="#" method="post">
                                                       <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                       <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                                                       <input type="submit" class="form-control" name="submit" value="Se connecter">
                                                       <a href="https://www.facebook.com/templatemo">Mot de passe oublié ?</a>
                                                  </form>
                                             </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="sign_up">
                                                  <form action="#" method="post">
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
                                                       <input type="submit" class="form-control" name="submit" value="S'inscrire">
                                                  </form>
                                                  <?php
		                                            if(isset($_POST['submit'])){
                                                        $stmt = $pdo->prepare("INSERT INTO informations (address, more_address, postal_code, city, 
                                                        country, phone_number) VALUES (:address, :more_address, :postal_code, :city, :country, :phone_number)");
                                                        $stmt->bindParam(':address', $_POST['address']);
                                                        $stmt->bindParam(':more_address', $_POST['moreaddress']);
                                                        $stmt->bindParam(':postal_code', $_POST['cp']);
                                                        $stmt->bindParam(':city', $_POST['city']);
                                                        $stmt->bindParam(':country', $_POST['country']);
                                                        $stmt->bindParam(':phone_number', $_POST['telephone']);
                                                        if ($stmt->execute()) { 
                                                            echo "1Work";
                                                         } else {
                                                            echo " 1dont Work";
                                                         }
                                                        
                                                        $id = $pdo->lastInsertId();
                                                        $stmt2 = $pdo->prepare("INSERT INTO clients (first_name, last_name, address_mail, password, 
                                                        sex, birth_date, salaried, admin, informations_id) VALUES (:first_name, :last_name, :address_mail, :password, :sex, :birth_date, :salaried, :admin, :informations_id)");
                                                        $stmt2->bindParam(':first_name', $_POST['firstname']);
                                                        $stmt2->bindParam(':last_name', $_POST['lastname']);
                                                        $stmt2->bindParam(':address_mail', $_POST['email']);
                                                        $stmt2->bindParam(':password', $_POST['password']);
                                                        $stmt2->bindParam(':sex', $_POST['sex']);
                                                        $stmt2->bindParam(':birth_date', $_POST['birthdate']);
                                                        $stmt2->bindParam(':salaried', "0");
                                                        $stmt2->bindParam(':admin', "0");
                                                        $stmt2->bindParam(':informations_id', $id);
                                                        if ($stmt2->execute()) { 
                                                            echo "2Work";
                                                         } else {
                                                            echo " 2dont Work";
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
