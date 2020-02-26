<?php
class Clients extends CI_Controller
{
    //////////////////////////////
    ///      CONSTRUCTOR      ///
    ////////////////////////////

    public function __construct()
    {
        parent::__construct();
        $this->load->model('client_model');
        $this->load->helper('urlhelper');
        // preciso do url helper aqui?
        // pour l'utiliser dans de
        // pra que serve o url helper?
    }

    ///////////////////////////////
    ////        GETTER         ///
    ///          ALL          ///
    ////////////////////////////

    public function index()
    {

        /// Traitement des données
        $data['news'] = $this->elements_model->get_elements();
        $data['title'] = "News archy";

        ///chargement des vues
        $this->load->view('templates/header', $data);
        $this->load->view('sav/viewall', $data);
        $this->load->view('templates/footer');
    }

    //////////////////////////////
    ////        GETTER        ///
    ///        SINGLE        ///
    ///////////////////////////
    /// isto é um getter ?
    // sim, mas passa tambem pelo Model

    public function view($slug = null)
    {
        $data['client'] = $this->client_model->get_element($slug);

        if (empty($data['client'])) {
            show_404();
        }

        $data['title'] = $data['client']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('sav/viewsingle', $data);
        $this->load->view('templates/footer');
    }


    //////////////////////////////
    ///      CREATE           ///
    ////////////////////////////
    // isto é um setter ?

    
    //////////////////////////////
    ///      DELETE           ///
    ////////////////////////////


    //////////////////////////////
    ///        EDIT           ///
    ////////////////////////////


}
