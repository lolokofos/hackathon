<?php

namespace App\Http\Controllers;
use App\Models\PaymentInfo;
use Illuminate\Http\Request;

class EmailProcessingController extends Controller
{
    public function processEmail()
    {
        $id_user = "1";
        $sender = "email@gmail.com";
        $subject = "Platba za blabla";
        $emailContent = "Dobrý deň, 
        Žiadame Vás o uhradenie platby vo výške 7,99 eur za vedenie účtu Netflix na čísle účtu SK6807200002811987426353 s variabilným symbolom 567877. Dátum splatnosti je:24.11.2023.

        Ďakujeme za pochopenie
        Netflix Slovensko";

        // Extrahování částky
        preg_match('/([\d,]+)\s?(eur|€|kč|Kč|\$|£)/', $emailContent, $amountMatches);
        $amount = $amountMatches[1] ?? null;
        $currency = $amountMatches[2] ?? null;

        // Extrahování IBAN
        preg_match('/(SK[0-9]{22})/', $emailContent, $ibanMatches);
        $iban = $ibanMatches[1] ?? null;

        // Extrahování variabilního symbolu
        preg_match('/variabilným symbolom (\d+)/', $emailContent, $vsMatches);
        $variableSymbol = $vsMatches[1] ?? null;

        preg_match('/Dátum splatnosti je:\s*\b(\d{2}\.\d{2}\.\d{4})\b/', $emailContent, $matches);
        $dueDate = $matches[1] ?? null;

        // Ukladanie do databázy
        PaymentInfo::create([
            'id_user' => $id_user,
            'email_sender' => $sender,
            'subject' => $subject,
            'mail_str' => $emailContent,
            'amount' => $amount,
            'currency' => $currency,
            'iban' => $iban,
            'variable_symbol' => $variableSymbol,
            'dueDate' => $dueDate
        ]);
    }
}
