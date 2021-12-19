<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GameListController extends Controller
{
    public function index()
    {
        return view('gamelist');
    }


    public function bracketControlForm()
    {
        return view('bracketControl');
    }


    public function brackets(Request $request)
    {
        $bracketsString = $request->brackets;

        $output = $this->bracketsControl($bracketsString);

        return $output;
    }

    function bracketsControl($bracketsString)
    {
        $bracketsString = str_split($bracketsString);

        $controlBrackets = [
            '}' => '{',
            ']' => '[',
            ')' => '('
        ];

        $openBrackets = [];
        $closeBrackets = [];
        $brackets = [];

        $output = "Başarılı";

        $closedBrackets = ['}', ']', ')'];

        foreach ($bracketsString as $param) {
            if ($param == '{' || $param == '[' || $param == '(') {
                if (count($brackets) >= 10) {
                    $output = "Çok Fazla Kapanmamış Parantez Var";

                    return $output;
                } else {
                    $openBrackets[] = $param;
                    $brackets[] = $param;
                }
            } elseif ($param == '}' || $param == ']' || $param == ')') {
                if (!count($brackets) || array_pop($brackets) != $controlBrackets[$param]) {
                    $output = 'Başarısız';

                    return $output;
                } else {
                    $closeBrackets[] = $param;
                }
            } else {
                $output = "Hatalı Parametre";

                return $output;
            }
        }

        // Kapanan bir parantez yok ise direk Başarısız mesajı verilecek.
        if (!array_intersect($closedBrackets, $bracketsString)) {
            $output = "Başarısız";

            return $output;
        }

        // Açılan parantez sayısı kapanan parantez sayısına eşit değil ise Başarısız mesajı verilecek.
        if (count($openBrackets) != count($closeBrackets)) {
            $output = "Başarısız";
        }

        return $output;
    }
}
