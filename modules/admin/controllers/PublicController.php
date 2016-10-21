<?php

namespace app\modules\admin\controllers;

use app\models\Admin;
use Zb;
use zbsoft\base\Controller;
use zbsoft\helpers\Json;

/**
 * Default controller for the `admin` module
 */
class PublicController extends Controller
{
    public function init()
    {
        if (Admin::isLogin()) {
            $this->redirect("/admin/default");
        }
        parent::init(); // TODO: Change the autogenerated stub
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionLogin()
    {
        if (Zb::$app->request->isPost) {
            $result = ["flag" => false, "msg" => ""];
            $postData = Zb::$app->request->post();
            /* @var Admin $adminMod */
            $adminMod = Admin::find()->where("username=:username", [":username" => $postData["username"]])->one();
            if (!empty($adminMod)) {
                if (Zb::$app->security->validatePassword($postData["password"], $adminMod->password) && $adminMod->loginSuccess()) {
                    $result["flag"] = true;
                } else {
                    $result["msg"] = "用户名或密码有误";
                }
            } else {
                $result["msg"] = "用户名或密码有误";
            }
            return Json::encode($result);
        } else {
            return $this->render('login');
        }
    }
}
