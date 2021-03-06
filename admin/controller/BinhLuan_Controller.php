<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class BinhLuan_Controller extends Base_Controller
{
    /**
    * action index: show all BinhLuans
    * method: GET
    */
    public function index()
    {        
        $this->model->load('BinhLuan');
        $list_binhluan = $this->model->BinhLuan->all();
        $data = array(
            'title' => 'index',
            'list_binhluan' => $list_binhluan
        );

        // Load view
        $this->view->load('binhluans/index', $data);
    }

    /**
    * action show: show a BinhLuan
    * method: GET
    */
    public function show()
    {        
        $this->model->load('BinhLuan');
        $binhluan = $this->model->BinhLuan->findById($_GET['id']);
        $data = array(
            'title' => 'show',
            'binhluan' => $binhluan
        );

        // Load view
        $this->view->load('binhluans/show', $data);
    }

    /**
    * action create: create a binhluan
    * method: GET
    */
    public function create()
    {        
        $this->view->load('binhluans/create');
    }

     /**
    * action store: save a binhluan to database
    * method: POST
    */
    public function store()
    {        
        $this->model->load('BinhLuan');
        $this->model->BinhLuan->baihat_id = $_POST['baihat_id'];
        $this->model->BinhLuan->user_id = $_POST['user_id'];
        $this->model->BinhLuan->noi_dung = $_POST['noi_dung'];
        $this->model->BinhLuan->save();

        go_back();
    }

    /**
    * action edit: show form edit a BinhLuan
    * method: GET
    */
    public function edit()
    {        
        $this->model->load('BinhLuan');
        $binhluan = $this->model->BinhLuan->findById($_GET['id']);
        $data = array(
            'title' => 'edit',
            'binhluan' => $binhluan
        );

        // Load view
        $this->view->load('binhluans/edit', $data);
    }

    /**
    * action edit: update BinhLuan database
    * method: POST
    */
    public function update()
    {        
        $this->model->load('BinhLuan');
        $binhluan = $this->model->BinhLuan->findById($_POST['id']);
        $binhluan->baihat_id = $_POST['baihat_id'];
        $binhluan->user_id = $_POST['user_id'];
        $binhluan->noi_dung = $_POST['noi_dung'];        
        $binhluan->update();

        go_back();
    }

    /**
    * action delete: show form edit a BinhLuan
    * method: GET
    */
    public function delete()
    {        
        $this->model->load('BinhLuan');
        $binhluan = $this->model->BinhLuan->findById($_GET['id']);
        $binhluan->delete();

        go_back();
    }
}
