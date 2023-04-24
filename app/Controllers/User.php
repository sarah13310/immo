<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function dashboard()
    {
        return view('/User/dashboard.php');
    }

    private function getInfos($id)
    {
        $user = $this->user_model->getInfos($id);
        if ($user == null) {
            $user = $this->user_model->find($id);
        }
        $address = "pièce non fournie";
        $data = [
            "title" => "Informations personnelles",
            "user" => $user,
            "address" => $address,
        ];
        return $data;
    }

    public function infos()
    {
        $id = session()->id_user;
        $id=1;
        $data = $this->getInfos($id);

        return view('/User/personal-infos.php', $data);
    }

    public function modif($action)
    {
        $id = session()->id_user;
        $id=1;// test
        $user = $this->user_model->find($id);
        if ($user) {

            switch ($action) {
                case "name":
                    $name = $this->request->getVar('name');
                    $firstname = $this->request->getVar('firtname');
                    $update = ["name" => $name, "firstname" => $firstname];
                    break;
                case "mail":
                    $mail = $this->request->getVar('mail');
                    $update = ["mail" => $mail,];
                    break;
                case "phone":
                    $phone = $this->request->getVar('phone');
                    $update = ["phone" => $phone,];
                    break;
                case "address":
                    $address = $this->request->getVar('address');
                    $cp = $this->request->getVar('cp');
                    $city = $this->request->getVar('city');
                    $update = ["address" => $address, "cp" => $cp, "city" => $city];
                    break;
            }
            if ($update)
                $this->user_model->update($id, $update);
        }
        $data = $this->getInfos($id);
        return view('/User/personal-infos.php', $data);
    }
}
