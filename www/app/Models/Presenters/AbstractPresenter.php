<?php

namespace App\Presenters;

use Carbon\Carbon;

abstract class AbstractPresenter {

    /**
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        if(method_exists($this, $key)){
            return $this->$key();
        }

        return $this->$key;    
    }

    /**
     * @param  string $value TimeStamp
     * @return string Valor formatado conforme demanda da empresa, HH:MM:SS DD/MM/AAAA
     */
    protected function formatTimeStamp($value): ?string
    {
        $date = null;

        if($value)
            $date = Carbon::parse($value)->format('H:i:s d/m/Y');

        return $date;
    }

    /**
     * @param  string $value Date
     * @return string Valor formatado conforme demanda da empresa, HH:MM:SS DD/MM/AAAA
     */
    protected function formatDate($value): ?string
    {
        $date = null;

        if($value)
            $date = Carbon::parse($value)->format('d/m/Y');

        return $date;
    }

    /**
     * Metodo para auxilio na montagem de URL
     *
     * @param String $baseUrl
     * @param null|string $fileName
     * @return null|string
     */
    protected function makeUrl(String $baseUrl, $fileName): ?string
    {
        $url = null;

        if($fileName)
            $url = asset($baseUrl . '/' . $fileName);

        return $url;
    }

    /**
     * Método para auxilio na montagem do Path do arquivo
     *
     * @param String $basePath
     * @param null|string $fileName
     * @return null|string
     */
    protected function makePath(String $basePath, $fileName): ?string
    {
        $path = null;

        if($fileName)
            $path = public_path($basePath . '/' . $fileName);

        return $path;
    }

}