<?php

namespace App\Http\Controllers;

abstract class Controller
{

    private $name="abc";

    public function setName(string $name)
    {
        $this->name = $name;
        return $this->name;
    }

    public function response(mixed $data, string $message="Succesfully", string $status="Succes", int $code=200)
    {
        return response()->json([
            "Status" => $status,
            "Message" => $message,
            "Data" => $data,
        ],$code);
    }
}
