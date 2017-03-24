<?php
/**
 * Created by PhpStorm.
 * User: buzz
 * Date: 3/23/17
 * Time: 9:22 AM
 */

class PlaylistsController extends AppController
{
//frontend---------------------------------------------------------


//admin-----------------------------------------------
    public function admin_list()
    {
        $this->layout = 'admin';
        $params = array(
            'fields'=>array('name', 'level', 'description'),
            'order' => array('_id'=> -1),
        );
        $results = $this->Playlist->find('all', $params);
        $this->set(compact('results'));
        //exit;
    }

    public function admin_add()
    {
        $this->layout = 'admin';
        if (!empty($this->data)) {
            $savedata = array(
                "add1"=>"content1",
                "add2"=>"content2",
                "content"=>$this->data
            );
            pr($savedata);

//            $this->Playlist->create();
//            if ($this->Playlist->save($this->data)) {
//                //$this->flash(__('Post saved.', true), array('action' => 'list',));
//                //$this->redirect(array("action"=>"admin_list"));
//            } else {
//            }
        }
    }
}