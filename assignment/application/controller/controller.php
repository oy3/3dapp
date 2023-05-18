<?php

class Controller {

    public $load;
    public $model;

    function __construct($pageURI = null){

        $this->load = new Load();
        $this->model = new Model();
        // $this->$pageURI();
    
    // Remove slashes from the $pageURI and check if method exists
    $methodName = str_replace('/', '', $pageURI);
    if (method_exists($this, $methodName)) {
        $this->$methodName();
    } else {
        // Handle situation when method does not exist
        // Maybe you want to load a default view or throw an error
        $this->home(); // for example
    }
        
    }

    function home(){
        $this->load->view('viewMain');
    }

    function apiCreateTable() {
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }
    function apiInsertData() {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }
    function apiMain()  {
		$this->load->view('viewMain');	
	}
    function apiGetCokeData()   {
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}  
}
?>