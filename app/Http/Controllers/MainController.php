<?php

namespace App\Http\Controllers;

use App\Http\Requests\MergeWordRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\PalindromeRequest;

class MainController extends Controller
{
    public function palindromeFunc(PalindromeRequest $request)
    {
        $result = true;
        $inp = preg_replace('/[^\p{L}\p{N}\s]/u', '', $request->query('input'));
        $inp = str_replace(' ', '', $inp);
        for ($a=0 ; $a<strlen($inp)/2 ; $a++) {
            $firstIdx = $a;
            $lastIdx = strlen($inp) - $a - 1;
            if ($inp[$firstIdx] !== $inp[$lastIdx]) {
                $result = false;
            }
        }
        $var = array(
            'is_palindrome' => $result
        );
        return response($var, Response::HTTP_OK);
    }

    public function mergeWordFunc(MergeWordRequest $request)
    {
        $result = [];
        $inp = str_replace(' ', '', $request->input('input'));
        $div = $request->input('div');
        $idx = 0;
        while ($idx < strlen($inp)) {
            $chunk = substr($inp, $idx, $div);
            array_push($result, $this->mergeFunc($chunk));
            $idx += $div;
        }
        $var = array(
            'result' => $result
        );
        return response($var, Response::HTTP_OK);
    }

    private function mergeFunc($chunk) {
        $spl_chunk = str_split($chunk);
        return implode('', array_unique($spl_chunk));
    }
}
