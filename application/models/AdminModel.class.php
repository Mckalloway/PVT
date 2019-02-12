<?php


class AdminModel {


    public function listMessage()
	{

        $data = new Database();

        $userInfo = $data->query('SELECT *
					
                    FROM posts'
        );
        
        //var_dump($userInfo);
        return $userInfo;
        
    }






}