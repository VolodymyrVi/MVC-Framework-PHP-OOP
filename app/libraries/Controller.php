<?php

class Controller
{
    /**
     *  function model()
     *
     * @param string $model
     * @return void
     */
    public function model($model)
    {
        require_once'../app/models' . $model . '.php';

        return new $model();
    }
    /**
     * function view()
     *
     * @param string $view
     * @param array $data
     * @return void
     */
    public function view($view, $data = [])
    {
        if(file_exists('../app/views/' . $view . '.php')){
            require_once'../app/views/' . $view . '.php';
        }else{
            die("View does not exists");
        }
    }
}