<?php
/**
 * @author  Dion
 * @since   11.23 2017
 */

class Base_model extends CI_Model
{
    /**
     * Function: Insert Data
     * @param string $tblName       table name
     * @param array  $insertArray   insert data
     */
    function insertData($tblName, $insertArray)
    {
        $this->db->insert($tblName, $insertArray);
        return $this->db->insert_id();
    }
    
    /**
     * Function: insert Batch Array to table
     * @param string $tblName
     * @param array  $insertBatchArray
     */
    
    function insertBatchData($tblName, $insertBatchArray)
    {
        $this->db->insert_batch($tblName, $insertBatchArray);
    }
    
    /**
     * Function: update data of table
     * @param string $tblName
     * @param array  $updateArray
     * @param array or string $where
     */
    function updateData($tblName, $updateArray, $where=array())
    {
        $this->db->update($tblName, $updateArray, $where);
    }
    
    /**
     * Function: delete data from table
     * @param string $tblName table name
     * @param array or string $where
     */
    function deleteData($tblName, $where="")
    {
        $this->db->delete($tblName, $where);
    }
    
    /**
     * Function: truncate table.
     * @param string $tblName
     */
    function truncateTable($tblName)
    {
        $this->db->truncate($tblName);
    }

    /**
     * Function: return sum of field data.
     * @param string $tblName
     * @param string or array $where
     * @param number $kind
     */
    function getFieldSum($tblName, $where, $kind)
    {
        $this->db->select('*');
        $this->db->group_by('departID');
        $this->db->select_sum('count');
        $this->db->where(array('kind' => $kind));
        $result=$this->db->get_where($tblName, $where);

        return $result->result_array();
    }
    
    /**
     * Function: return list.
     * @param string $tblName
     * @param string $where * or array()
     * @param number $offset
     * @param number $limit
     * @param string $fields
     * @param array  $orderArray *order Array
     * @return array
     */
    function getAllListData($tblName, $where=array(), $fields="*", $orderArray=array())
    {
       if($fields == "*")
            $this->db->select("*");
        else
            $this->db->select($fields);
    
        foreach ($orderArray as $item)
        {
            $this->db->order_by($item['orderField'], $item['orderBy']);
        }
        
        $result = "";
        
        if(is_array($where))
            $result = $this->db->get_where($tblName, $where);
        else 
        {
            $this->db->where($where);
            $result = $this->db->get($tblName);
        }
    
        return $result->result_array();
    }
    
    /**
     * Function: return one row of data
     * @param string $tblName
     * @param array  $whereArray
     * @param string $fields
     */
    function getOneRowData($tblName, $where=array(), $fields="*")
    {
        if($fields == "*")
            $this->db->select("*");
        else
            $this->db->select($fields);
        
        $result = "";
        
        if(is_array($where))
            $result = $this->db->get_where($tblName, $where);
        else 
        {
            $this->db->where($where);
            $result = $this->db->get($tblName);
        }
        
        return $result->row_array();
    }
    
    /**
     * Function: return one field data.
     * @param string $tblName
     * @param array  $whereArray
     * @param string $field
     */
    function getOneFieldData($tblName, $whereArray=array(), $field)
    {
        $this->db->select($field);
        $result = $this->db->get_where($tblName, $whereArray);
        
        $row = $result->row_array();
        $fieldData = "";
        
        if($row)
            $fieldData = array_shift($row);
        
        return $fieldData;
    }
    
    /**
     * Function: return array of data using sql
     * @param string $sql
     */
    function getListDataFromSql($sql)
    {
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    
    /**
     * Function: return one row of data using sql
     * @param string $sql
     */
    function getOneDataFromSql($sql)
    {
        $result = $this->db->query($sql);
        return $result->row_array();
    }
    
    /**
     * Function: return field data using sql
     * @param string $sql
     */
    function getOneFieldFromSql($sql)
    {
        $result = $this->db->query($sql);
        
        $row = $result->row_array();
        $fieldData = "";
        
        if($row)
            $fieldData = array_shift($row);
        
        return $fieldData;
    }
    
    /**
     * Function: return row count
     * @param string $tblName
     * @param string $whereArray
     * @return number
     */
    function getRowCount($tblName, $where=array())
    {
        $result = "";
        
        if(is_array($where))
            $result = $this->db->get_where($tblName, $where);
        else
        {
            $this->db->where($where);
            $result = $this->db->get($tblName);
        }
        
        $count  = $result->result_id->num_rows;
        return $count;
    }
    
    /**
     * Function: return last query.
     */
    function getLastQuery()
    {
        return $this->db->last_query();
    }

	function runSql($sql)
	{
		$result = $this->db->query($sql);
	}
    
    function echo_array($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}