<?php

class Client_model extends CI_Model
{
    //////////////////////////////
    ///      CONSTRUCTOR      ///
    ////////////////////////////

    public function __construct()
    {
        $this->load->database();
    }
    
    //////////////////////////////
    ///        GETTERS        ///
    ////////////////////////////

    /////////////////
    //  get clients
    //       +
    //   get by id
    /////////////////

    public function get_clients($id = 0)
    {
        if ($id <= 0) 
        {
            $query = $this->db->get('client');
            return $query->result_array();
        }
        $query = $this->db->get_where('client', array('id' => $id));
        return $query->row_array();
    }

    //////////////////////////////
    ///      GET BY ID        ///
    ////////////////////////////

    //////////
    //get clients
    /////////



    //////////////////////////////
    ///    SETTER + UPDATE    ///
    ////////////////////////////

    ///////
    //set clients
    ///////


    //////////////////////////////
    ///      DELETE           ///
    ////////////////////////////

}
