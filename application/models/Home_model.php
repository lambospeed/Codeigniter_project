<?php
/**
 * @author  Dion
 * @since   11.28 2017
 */

class Home_model extends CI_Model
{
    /**
     * Function: get keyword name as name
     */
    function getKeywordsName()
    {
        $this->db->select('name as name');
        $query = $this->db->get(TBL_KEYWORDS);
        $result = $query->result_array();
        return $result;
    }
}