        <section class="meet-staff-box section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="center-content">
                        <h2 class="section-title">Le staff</h2>
                        <span class="underline center"></span>
                    </div>
                    <div class="staff-list">
                        <?php
                            $pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
                            $data = $pdo->query("SELECT * FROM clients WHERE salaried = true")->fetchAll();
                            foreach ($data as $row) {
                                if($row["admin"] == "1"){
                                    $admin = "Directeur";
                                }else{
                                    $admin = "Salarié";
                                }
                                echo "
                                <div class='staff-member'>
                                    <figure>
                                        <img src='images/".$row["first_name"].".jpg' alt='team' />
                                    </figure>
                                    <div class='content-block'>
                                        <div class='staff-info'>
                                            <h4>".$row["first_name"]." ".$row["last_name"]."</h4>
                                            <span class='designation'>".$admin."</span>
                                            <p>".$row["address_mail"]."</p>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
