<?php

namespace App\Http\Controllers;

use App\Anket;
use Illuminate\Http\Request;

require_once 'PHPWord.php'; //включение библиотеки PHPWord


require "vendor/autoload.php";

class DocsController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'inn' => 'required|numeric|between:00000000,999999999999',
                'pc' => 'required|numeric|digits:20',
                'kc' => 'required|numeric|digits:20',
                'bank' => 'required',
                'bic' => 'required|numeric|digits:9'
        ]);

        $anket = new Anket();
        $anket->inn = $request->inn;
        $anket->pc = $request->pc;
        $anket->kc = $request->kc;
        $anket->bank = $request->bank;
        $anket->bic = $request->bic;
        $anket->save();

        $api_date = $this->api($request->inn);
        if ($api_date == null) {
            return null;
        }

    }

    //API simulated
    public function api($inn)
    {
        $faker = Faker\Factory::create();
        $rez = array();
        $rez["FullName"] = $this->generateRandomString(20);
        $rez["ShortName"] = $this->generateRandomString(10);
        $rez["NameLang"] = $this->generateRandomString(20);
        $rez["short_en_name"] = $this->generateRandomString(20);
        $rez["ShortName"] = $this->generateRandomString(20);
        $rez  ["ОГРН"] = $this->generateRandomString(10);
        $rez["RegistrationDate"] = date("d M Y", mt_rand(1, time()));
        $rez["Tax.Number"] = $this->generateRandomNumber(10);
        $rez["Tax.Name"] = $this->generateRandomString(10);
        $rez["KPP"] = $this->generateRandomNumber(10);
        $rez["OKPO"] = $this->generateRandomNumber(10);
        $rez["OKATO"] = $this->generateRandomNumber(20);
        $rez["fio"] = $this->generateRandomString(20);
        $rez["phone"] = $this->generateRandomNumber(10);
        $rez["email"] = $this->generateRandomString(6) . "@" . $this->generateRandomString(5) . ".com";
        $rez["PropertyType"] = "coбиственность";
        $rez["Property.Address"] = $faker->address;
        $rez["owner"] = $faker->name;
        $rez["Property.Square"] = $this->generateRandomNumber(2);
        $rez["Property.Rent"] = $this->generateRandomNumber(5);
        $rez["Market.TypeMarket"] = $this->generateRandomString(20);
        $rez["MainOKVED.Description"] = $this->generateRandomString(10);
        $rez["MainOKVED.Share"] = $this->generateRandomString(20);
        $rez["Region"] = $this->generateRandomString(15);
        $rez["Employees.Count%"] = $this->generateRandomNumber(3);
        $rez["Capital"] = $this->generateRandomNumber(7);
        $rez["License.Type"] = $this->generateRandomString(10);
        $rez["License.Activity"] = $this->generateRandomString(10);
        $rez["License.Number"] = $this->generateRandomNumber(20);
        $rez["License.Publisher"] = $this->generateRandomString(20);


        return $rez;
    }

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateRandomNumber($length)
    {
        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $result .= mt_rand(0, 9);
        }

        return $result;
    }

    public function replase($seach, $filename)
    {
        $PHPWord = new \PhpOffice\PhpWord\PhpWord();
        $filename = 'doc/template.docx';//файл шаблона
        $tempfilename = 'doc/new_temp.docx'; //создаваемого из шаблона документа

        // $PHPWord = new PHPWord(); //создаем объект
        // $seach = "";
        $document = $PHPWord->loadTemplate($filename); //загружаем шаблон
        $document->setValue('%' . $seach . '$', 'replace');//Магия: ищем в шаблоне текст ${search}, меняем на 'replace'
        $document->save($tempfilename); //сохраняем файл
    }
}
