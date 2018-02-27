<?php 
/*
*@author        Dion
*@copyritht     Dion
* @since        11.23 2017 
*/

class Base_Controller extends CI_Controller
{

    public $controllerUrl = "";
    public $backUrl = "";

    function __construct()
    {
        parent::__construct();

        $this->load->model('Base_model', 'baseM');

        $this->load->helper('cookie');
    }

    /**
     * Function: show view pages.
     * name of viewfile is classname.
     * @param $data is data to show in view file
     */
    protected function _showPage($data, $viewname='')
    {
        if (empty($viewname))
            $viewname = $this->router->fetch_class();
        $this->load->view('page_layout/header', $data);
        $this->load->view($viewname, $data);
        $this->load->view('page_layout/footer', $data);
    }

    public function validate($data)
    {
        $this->load->library('form_validation');
        $count = sizeof($data);

        for ($i = 0; $i < $count; $i++) {
            $this->form_validation->set_rules($data[$i][0], $data[$i][1], $data[$i][2]);
        }

        return $this->form_validation->run();
    }

    /**
    * json method
    * @param array|object $data
    * @param string $status
    * @param string $message
    * @return json
    * */
    protected function json($data, $status = "success", $message = "")
    {
        return json_encode([
            'response' => $data,
            'status' => $status,
            'message' => $message
        ]);
    }
}