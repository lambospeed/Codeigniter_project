<?php
/**
 * @author  Dion
 * @since   11.26 2017
 */

class post_model extends CI_Model {
    /**
     * Function: insert job
     * @param array job_data
     */
    public function setJob($data) {
        $add_tasks = implode(' ', $data['mytext']);
        $job_title_data = array(
            'company_id'    => $data['category_id'],
            'client_id'     => $data['tickets_by_user_id'],
            'job_name'      => $data['pro_title'],
            'job_desciption'   => $data['editorX'],
            'job_in'        => $add_tasks,
            'job_date'      => date('Y-m-d'),
            'job_payment'   => $data['payment_type'],            
        );
        $this->baseM->insertData('job_title', $job_title_data);
    }

    /**
     * Function: get match data by keyword
     * @param string keyword
     */
    public function getMacthdataBykeyword($keyword) {
        $this->db->select('*');
        $this->db->from(TBL_KEYWORDS." as keyword");
        $this->db->join(TBL_CATEGORY." as category", "keyword.maincat_id = category.id");
        $this->db->like('keyword.name', $keyword);
        $this->db->where('category.is_deleted', 0);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
}
