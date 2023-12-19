<?php
class signup extends connection{
    protected function checkUser($nom,$prenom,$email){
        $stmt = $this->connect()->prepare('SELECT FROM utilisateur WHERE nom = ? OR prenom = ? OR email = ?');
        if(!$stmt->execute(array($nom,$prenom,$email))){
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $resulteCheck= null;

        if($stmt->rowCount() > 0){
            $resulteCheck = false;
        }else{
            $resulteCheck = true;
        }





    }

}