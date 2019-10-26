<?php
    $title = 'Спасибо за заявку';
    include($_SERVER['DOCUMENT_ROOT'].'/src/php/parts/header.php');
?>
    <main>
        <div class="banner form-page">
            <div class="wrapper banner-inner">
                <div class="banner-inner-header">
                    <h1>Спасибо за вашу заявку!</h1>
                    <?php
                        if ( isset ($_POST["phone"]) ){
                            echo "<p>{$_POST['fio']}, в ближайшее время менеджер с вами свяжется.</p>";

                            $query = "INSERT INTO `clients`(`id`, `fio`, `email`, `phone`, `message`) 
                            VALUES (NULL, '{$_POST["fio"]}', '{$_POST["email"]}', '{$_POST["phone"]}', '{$_POST["message"]}')";
                            $result = mysqli_query($db, $query);
                        } elseif ( isset ($_POST['fio']) ) {
                            echo "<p>{$_POST['fio']}, в ближайшее время менеджер с вами свяжется.</p>";

                            $query = "INSERT INTO `clients`(`id`, `fio`, `email`, `phone`, `message`) 
                            VALUES (NULL, '{$_POST["fio"]}', '{$_POST["email"]}', 'Номер не указан', '{$_POST["message"]}')";
                            $result = mysqli_query($db, $query);
             
                        }else {
                            echo "<p>Уважаемый пользователь, вы не заполнили форму.</p>";
                        };

                        
                        
                    ?>
                </div>
            </div>
        </div> 
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/src/php/parts/footer.php'); ?>