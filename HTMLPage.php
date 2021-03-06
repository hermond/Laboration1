<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hello World
 * Date: 2013-09-06
 * Time: 15:50
 * To change this template use File | Settings | File Templates.
 */

namespace view;
require_once("HTMLForm.php");

class HTMLPage {


    public function getIndexPage($title)
    {
        $form = new HTMLForm();
        $loginForm = $form->getLoginForm();
        $date = $this->getDate();
        return "
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>$title</title>
        </head>
        <body>
        <h2>Ej inloggad</h2>
        <p>$title</p>
        $loginForm
        <p>$date</p>
        </body>
        </html>
        ";

    }

    public function getAdminPage ($title)
    {
        $form = new HTMLForm();
        $logoutForm = $form->getLogoutForm();
        return
           "<!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>$title</title>
        </head>
        <body>
        <h2>Inloggad</h2>
        <p>$title</p>
        $logoutForm

        </body>
        </html>";
    }

    private static function getDate()
    {
        $year = date("Y");


        switch(date("N"))
        {
            case "1":
                $day = "Måndag";
                break;
            case "2":
                $day = "Tisdag";
                break;
            case "3":
                $day = "Onsdag";
                break;
            case "4":
                $day = "Torsdag";
                break;
            case "5":
                $day = "Fredag";
                break;
            case "6":
                $day = "Lördag";
                break;
            case "7":
                $day = "Söndag";
                break;
        }

        switch (date("n"))
        {
            case "1":
                $month = "Januari";
                break;
            case "2":
                $month = "Februari";
                break;
            case "3":
                $month = "Mars";
                break;
            case "4":
                $month = "April";
                break;
            case "5":
                $month = "Maj";
                break;
            case "6":
                $month = "Juni";
                break;
            case "7":
                $month = "Juli";
                break;
            case "8":
                $month = "Augusti";
                break;
            case "9":
                $month = "September";
                break;
            case "10":
                $month = "Oktober";
                break;
            case "11":
                $month = "November";
                break;
            case "12":
                $month = "December";
                break;
         }

        return $day . ", den " . date("d") . " " . $month . " år " .  date("Y") .". Klockan är [" . date("H") . ":" . date("i") . ":" . date("s") . "]";

    }
}

