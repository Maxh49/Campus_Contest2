<?php
session_start();
    $pdo = new PDO('mysql:host=109.234.164.30:3306;dbname=goco9020_campuscontest2;charset=UTF8', "goco9020", "KPMgKaHKeYCU");
        if(isset($_POST['submit'])){
            $stmt = $pdo->prepare("SELECT isbn FROM books WHERE isbn=:isbn");
            $stmt->execute(['isbn' => $_POST['isbn']]); 
            $user = $stmt->fetch();
            if($user["isbn"] != $_POST['isbn']){
                $request = 'https://www.googleapis.com/books/v1/volumes?q=isbn:'.$_POST['isbn'];
                $response = file_get_contents($request);
                $results = json_decode($response);

                if($results->totalItems > 0){
                    $book = $results->items[0];
                    $stmt2 = $pdo->prepare("INSERT INTO books (isbn, title, author, year, 
                    url_picture, resume, type, nb_copy, price) VALUES (:isbn, :title, :author, :year, 
                    :url_picture, :resume, :type, :nb_copy, :price)");
                    $stmt2->bindParam(':isbn', $_POST['isbn']);
                    $stmt2->bindParam(':title', $book->volumeInfo->title);
                    $stmt2->bindParam(':author', $book->volumeInfo->authors[0]);
                    $year = substr($book->volumeInfo->publishedDate, 0, 4);
                    $stmt2->bindParam(':year', $year);
                    $url_pics = str_replace('&edge=curl', '', str_replace("zoom=1", "zoom=4",$book->volumeInfo->imageLinks->thumbnail));
                    $stmt2->bindParam(':url_picture', $url_pics);
                    $stmt2->bindParam(':resume', $book->volumeInfo->description);
                    $stmt2->bindParam(':type', $_POST['type']);
                    $stmt2->bindParam(':nb_copy', $_POST['account']);
                    $stmt2->bindParam(':price', $_POST['price']);
                    if($stmt2->execute()){
                        echo "Livre ajouté !";
                        header('Location: stocks.php');
                    }else{
                        echo "Erreur !";
                    }
                }else{
                    echo "Livre introuvable !";
                }
            }else{
                echo "Livre déjà ajouté !";
            }
        }
    // }
// }else{
    // header("Location: index.php");
// }
?>