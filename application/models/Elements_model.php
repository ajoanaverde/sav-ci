<?php

class Elements_model extends CI_Model
{
    /////////////////////////////
    ///      CONSTRUCTOR      ///
    ////////////////////////////

    public function __construct()
    {
        $this->load->database();
    }
    /////////////////////////////
    ///        GETTERS        ///
    ////////////////////////////

    ///////
    //get clients
    ///////

    public function get_clients($slug = false)
    {
        if ($slug === false) {
            $query = $this->db->get('client');
            return $query->result_array();
        }
        $query = $this->db->get_where('client', array('slug' => $slug));
        return $query->row_array();
    }

    ///////
    //get commandes
    ///////

    public function get_commandes($slug = false)
    {
        if ($slug === false) {
            $query = $this->db->get('commande');
            return $query->result_array();
        }
        $query = $this->db->get_where('commande', array('slug' => $slug));
        return $query->row_array();
    }

    ///////
    //get produits
    ///////

    public function get_produits($slug = false)
    {
        if ($slug === false) {
            $query = $this->db->get('produit');
            return $query->result_array();
        }
        $query = $this->db->get_where('produit', array('slug' => $slug));
        return $query->row_array();
    }


    /////////////////////////////
    ///      GET BY ID        ///
    ////////////////////////////

    ///////
    //get clients
    ///////


    ///////
    //get commandes
    ///////


    ///////
    //get produits
    ///////


    /////////////////////////////
    ///    SETTER + UPDATE    ///
    ////////////////////////////

    ///////
    //get clients
    ///////

    ///////
    //get commandes
    ///////

    ///////
    //get produits
    ///////

    /////////////////////////////
    ///      DELETE           ///
    ////////////////////////////



}
